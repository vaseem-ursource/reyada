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

        // if($invoice_details['BusinessId'] == 906856952){
        //     $merchant_code = $this->config->item('hesabe_merchant_code2');
        // }
        // else{
        //     $merchant_code = $this->config->item('hesabe_merchant_code1');
        // }

        // for staging
        $merchant_code = $this->config->item('hesabe_merchant_code');

        if(!empty($invoice_details)){
            $invoiceamt = $invoice_details['TotalAmount'];
            $success_url = base_url('payment/success_checkout');
            $error_url = base_url('payment/error_checkout');
            $url = $this->config->item('hesabe_request_url');
            $data = array(
                        'MerchantCode' => $merchant_code, 
                        'Amount' => number_format($invoiceamt, 3), 
                        'SuccessUrl' => $success_url, 
                        'FailureUrl' => $error_url,
                        'Variable1' => $invoiceid
            );
            $options = array(
                'http' => array(
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data),
                ),
            );

            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $json = json_decode($result);
            if ($json->status === 'success') {
                $token = $json->data->token;
                $paymenturl = $json->data->paymenturl;
                $url = $paymenturl . $token;
                $j_data['url'] = $url;
                $j_data['status'] = 200;
                $j_data['message'] = "Redirecting to payment gateway...";
            }
        }

        print_r(json_encode($j_data));
    }

    public function success_checkout(){
        $status = $this->input->get('Status');
        if ($status == '1') {
            $invoiceid = urldecode($this->input->get('Variable1'));

            $url = "https://spaces.nexudus.com/api/billing/coworkerinvoices/".$invoiceid;
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
                        'CoworkerInvoiceId' => $invoiceid,
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
            }else{
                $this->session->set_flashdata('error', "Error: Payment Unsuccessful");
            }
            
        }else{
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