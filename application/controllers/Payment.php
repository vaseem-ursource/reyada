<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class payment extends CI_Controller
{

    public function pay_hesabe()
    {
        $invoiceid = $this->input->post('invoiceid');
        $url = "https://spaces.nexudus.com/api/billing/coworkerinvoices/".$invoiceid;
        $username = $this->config->item('username');
        $password = $this->config->item('password');

        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password"),
        );
        $invoice_details = $this->post_with_curl($url, null, $headers);

        $j_data['status'] = 400;
        $j_data['message'] = "Some error occurred while processing your request";

        // for live site un-comment the below line
        if($invoice_details['BusinessId'] == 906856952){
            $merchant_code = $this->config->item('hesabe_merchant_code2');
            $access_code = $this->config->item('access_code_2');
            $merchant_key = $this->config->item('merchant_key_2');
            $merchant_iv = $this->config->item('merchant_iv_2');
        }
        else{
            $merchant_code = $this->config->item('hesabe_merchant_code1');
            $access_code = $this->config->item('access_code_1');
            $merchant_key = $this->config->item('merchant_key_1');
            $merchant_iv = $this->config->item('merchant_iv_1');
        }

        // for staging
        // $merchant_code = $this->config->item('hesabe_merchant_code');
        // $access_code = $this->config->item('access_code');
        // $merchant_key = $this->config->item('merchant_key');
        // $merchant_iv = $this->config->item('merchant_iv');

        $this->session->set_userdata('merchant_key', $merchant_key);
        $this->session->set_userdata('merchant_iv', $merchant_iv);

        if(!empty($invoice_details)){
            $invoiceamt = $invoice_details['TotalAmount'];
            $payment_url = null;
            $success_url = base_url('payment/success_checkout');
            $error_url = base_url('payment/error_checkout');
            $url = $this->config->item('hesabe_request_url');
            $data = array(
                "merchantCode" => $merchant_code,
                'amount' => (string)number_format($invoiceamt, 3),
                "paymentType" => 0,
                "orderReferenceNumber" => $invoiceid,
                "responseUrl" => $success_url,
                "failureUrl" => $success_url,
                "version" => 2.0,
                "variable1" => $invoiceid,
                'variable2' => "Coworker Name__".(string)$invoice_details['CoworkerFullName'],
                'variable3' => "Invoice Number__".(string)$invoice_details['InvoiceNumber'],
                'variable4' => "Location__".(string)$invoice_details['BusinessName'],
            );

            $json_encode = json_encode($data);
            $encrypted = encrypt($json_encode, $merchant_key, $merchant_iv);
            $params = array(
                'data' => $encrypted
            );
            $checkout_url = $this->config->item("hesabe_base_url")."checkout";
            $header = array("accessCode: ".$access_code);
            $checkout_response = $this->request($checkout_url, $params, $header);
            $decrypted = decrypt($checkout_response, $merchant_key, $merchant_iv);
            $json_decode = json_decode($decrypted);
            if($json_decode && isset($json_decode->response->data)){
                $payment_url = $this->config->item("hesabe_base_url")."payment?data=".$json_decode->response->data;
                $j_data['url'] = $payment_url;
                $j_data['status'] = 200;
                $j_data['message'] = "Redirecting to payment gateway...";
            }
        }

        print_r(json_encode($j_data));
    }

    private function request($url, $params, $header){
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl_handle, CURLOPT_URL, $url);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

		if($params){
			curl_setopt($curl_handle, CURLOPT_POST, 1);
			curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $params);
		}
		if($header){
			curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $header);
		}

		$result = curl_exec($curl_handle);
		curl_close($curl_handle);
		return $result;

	}

    public function success_checkout(){
        $response = $this->input->get('data');
        if($response){
			$decrypted = decrypt($response, $this->session->userdata('merchant_key'), $this->session->userdata('merchant_iv'));
			$json_decode = json_decode($decrypted);
            $response_result = $json_decode->response;
            $result_code = $response_result->resultCode;
			if($result_code == "CAPTURED"){
                $url = "https://spaces.nexudus.com/api/billing/coworkerinvoices/".$response_result->variable1;
                $username = $this->config->item('username');
                $password = $this->config->item('password');

                $headers = array(
                    'Content-Type: application/json',
                    'Authorization: Basic ' . base64_encode("$username:$password"),
                );
                $invoice_details = $this->post_with_curl($url, null, $headers);

                $url = "https://spaces.nexudus.com/api/billing/coworkerledgerentries";
                $s_data = json_encode(array(
                            'BusinessId' => $invoice_details['BusinessId'],
                            'CoworkerId' => $invoice_details['CoworkerId'],
                            'CoworkerInvoiceId' => $response_result->variable1,
                            'Description' => $invoice_details['Description'],
                            'Code' => "123456",
                            'Debit' => 0,
                            'Credit' => $invoice_details['TotalAmount']
                ));
                $headers = array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($s_data),
                    'Authorization: Basic ' . base64_encode("$username:$password"),
                );
                $output = $this->post_with_curl($url, $s_data, $headers);
                if($output['Status'] == 200 && $output['WasSuccessful']){
                    $this->session->set_flashdata('success', 'Payment completed');
                    $this->session->unset_userdata('merchant_key');
                    $this->session->unset_userdata('merchant_iv');
                }else{
                    $this->session->set_flashdata('error', "Error: Payment Unsuccessful");
                }

            }else{
                $this->session->set_flashdata('error', "Error: Payment Unsuccessful");
            }
		}
        else{
            $this->session->set_flashdata('error', "Error: Payment Unsuccessful");
        }
        redirect('main/invoice');
    }

    public function error_checkout(){
        $this->session->set_flashdata('error', "Error: Payment Unsuccessful");
        redirect('main/invoice');
    }

    public function post_with_curl($url, $p_data = null, $headers)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        if (!empty($p_data)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $p_data);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        $output = (array) json_decode($result);
        curl_close($ch);

        return $output;
    }

}