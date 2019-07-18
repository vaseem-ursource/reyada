<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class payment extends CI_Controller
{

    public function pay_hesabe()
    {
        $invoiceid = $this->input->post('invoiceid');
        $invoiceamt = $this->input->post('invoiceamt');
        $invoicenum = $this->input->post('invoicenum');
        $invoicedesc = $this->input->post('invoicedesc');
        $invoicecode = $this->input->post('invoicecode');
        $invoicebsnsid = $this->input->post('invoicebsnsid');

        $success_url = base_url('payment/success_checkout');
        $error_url = base_url('payment/error_checkout');
        $url = $this->config->item('hesabe_request_url');
        $data = array(
                    'MerchantCode' => $this->config->item('hesabe_merchant_code'), 
                    'Amount' => number_format($invoiceamt, 3), 
                    'SuccessUrl' => $success_url, 
                    'FailureUrl' => $error_url, 
                    'Variable1' => $invoicebsnsid,
                    'Variable2' => $invoiceid,
                    'Variable3' => $invoicedesc,
                    'Variable4' => $invoicecode,
                    'Variable5' => $invoiceamt
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

        $data['status'] = 400;
        $data['message'] = "Some error occurred while processing your request";
        if ($json->status === 'success') {
            $token = $json->data->token;
            $paymenturl = $json->data->paymenturl;
            $url = $paymenturl . $token;
            $data['url'] = $url;
            $data['status'] = 200;
            $data['message'] = "Redirecting to payment gateway...";
        }

        print_r(json_encode($data));
    }

    public function success_checkout(){
        $status = $this->input->get('Status');
        if ($status == '1') {
            $invoicebsnsid = urldecode($this->input->get('Variable1'));
            $invoiceid = $this->input->get('Variable2');
            $invoicedesc = urldecode($this->input->get('Variable3'));
            $invoicecode = urldecode($this->input->get('Variable4'));
            $invoiceamt = urldecode($this->input->get('Variable5'));

            $url = "https://spaces.nexudus.com/api/billing/coworkerledgerentries";
            $s_data = json_encode(array(
                                    'BusinessId' => $invoicebsnsid, 
                                    'CoworkerId' => $invoiceid, 
                                    'CoworkerInvoiceId' => $invoiceid,
                                    'Description' => $invoicedesc, 
                                    'Code' => $invoicecode,
                                    'Debit' => $invoiceamt,
                                    'Credit' => 0, 
                                    'Balance' => 0
                                ));
            $headers = array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($s_data),
                'Authorization: Basic ' . base64_encode("$username:$password"),
            );
            $output = $this->post_with_curl($url, $s_data, $headers);

            $this->session->set_flashdata('success', 'Payment completed');
            redirect('main/invoice');
        }
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