<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->lang->load('auth');
        $this->load->model("Main_model");
        $this->load->model("Partners_model");
        $this->load->model("Articles_model");
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'index';
        $data['header_name'] = 'header';
        $this->session->set_userdata('last_page', current_url());
        $data['RecentArticle'] = $this->Main_model->get_recent_articles();
        $data['blog'] = $this->Articles_model->get_section_status(1);
        $data['partner_stat'] = $this->Partners_model->get_section_status(2);
        $data['partners'] = $this->Partners_model->get_all_partners();
        $this->load->view('index', $data);

    }

    public function get_location(){
        $username = $this->config->item('username');
        $password = $this->config->item('password');
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password"),
        ); 
        $url ='https://spaces.nexudus.com/api/sys/businesses?orderby=Name';
        $output = $this->post_with_curl($url, null , $headers);
        if(!empty($output['Records'])){
            return $output['Records'];
        }
    }

    public function services()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Services';
        $data['header_name'] = 'header_blog';
        $data['RecentArticle'] = $this->Main_model->get_recent_articles();
        $data['blog'] = $this->Articles_model->get_section_status(1);
        $url = 'https://spaces.nexudus.com/api/billing/tariffs?Tariff_Visible=true&orderby=Price&dir=Ascending';
        $this->session->set_userdata('last_page', current_url());
        $username = $this->config->item('username');
        $password = $this->config->item('password');
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password"),
        );
        $output = $this->post_with_curl($url, null , $headers);
        if(!empty($output['Records'])){
            $data['packages'] = $output['Records'];
            foreach($data['packages'] as $package){
                if($package->Visible == true){
                    if($package->GroupName == "Coworking Memberships\t" || $package->GroupName == "Coworking Memberships"){
                        $data['coworkings'][] = $package;
                    }
                    else{
                        $data['meetingrooms'][] = $package;
                    }
                }
                
            }
        }
        $data['locations'] = $this->get_location();
        $this->load->view('index', $data);

    }

    public function signup()
    {

        $p_data = $this->input->post();
        $j_data['FullName'] = $p_data['FullName'];
        $j_data['GuessedFirstNameForInvoice'] = "";
        $j_data['GuessedLastNameForInvoice'] = "";
        $j_data['GuessedFirstName'] = null;
        $j_data['GuessedLastName'] = null;
        $j_data['Salutation'] = null;
        $j_data['Address'] = "";
        $j_data['PostCode'] = 753951;
        $j_data['CityName'] = "";
        $j_data['State'] = "";
        $j_data['Email'] = $p_data['Email'];
        $j_data['Active'] = true;
        $j_data['DiscountCode'] = null;
        $j_data['RefererGuid'] = "";
        $j_data['ReferenceNumber'] = null;
        $j_data['IsNew'] = true;
        $j_data['CheckedIn'] = false;
        $j_data['SignUpToNewsletter'] = false;
        $j_data['DeleteAvatar'] = false;
        $j_data['DeleteBanner'] = false;
        $j_data['AvatarUrl'] = "/en/coworker/getavatar/0";
        $j_data['ProfileUrl'] = "/en/directory/profile/0/";
        $j_data['CountryId'] = 1113;
        $j_data['SimpleTimeZoneId'] = 2029;
        $j_data['IsMember'] = false;
        $j_data['CancellationDate'] = null;
        $j_data['UtcCancellationDate'] = null;
        $j_data['AbsoluteCancellationDate'] = null;
        $j_data['DoNotProcessInvoicesAutomatically'] = false;
        $j_data['MobilePhone'] = $p_data['MobilePhone'];
        $j_data['LandLine'] = $p_data['MobilePhone'];
        $j_data['NickName'] = null;
        $j_data['BusinessArea'] = null;
        $j_data['Position'] = null;
        $j_data['CompanyName'] = null;
        $j_data['ProfileTags'] = null;
        $j_data['ProfileTagsSpaces'] = null;
        $j_data['ProfileTagsList'] = [];
        $j_data['ProfileSummary'] = null;
        $j_data['ProfileSummaryHtml'] = "";
        $j_data['ProfileWebsite'] = "";
        $j_data['Url'] = "http://.spaces.nexudus.com/Public/Directory/Profile/0//";
        $j_data['Gender'] = "NotSet";
        $j_data['ProfileIsPublic'] = false;
        $j_data['RegistrationDate'] = null;
        $j_data['UtcRegistrationDate'] = null;
        $j_data['DateOfBirth'] = null;
        $j_data['UtcDateOfBirth'] = null;
        $j_data['Twitter'] = null;
        $j_data['Skype'] = null;
        $j_data['Facebook'] = null;
        $j_data['Linkedin'] = null;
        $j_data['Google'] = null;
        $j_data['Telegram'] = null;
        $j_data['Github'] = null;
        $j_data['Pinterest'] = null;
        $j_data['Flickr'] = null;
        $j_data['Instagram'] = null;
        $j_data['Vimeo'] = null;
        $j_data['Tumblr'] = null;
        $j_data['Blogger'] = null;
        $j_data['HasContactDetails'] = false;
        $j_data['BillingName'] = $p_data['FullName'];
        $j_data['BillingEmail'] = null;
        $j_data['BillingAddress'] = null;
        $j_data['BillingPostCode'] = null;
        $j_data['BillingCityName'] = null;
        $j_data['BillingState'] = null;
        $j_data['TaxIDNumber'] = "VAT";
        $j_data['CardNumber'] = null;
        $j_data['AccessPincode'] = null;
        $j_data['Custom1'] = null;
        $j_data['Custom2'] = null;
        $j_data['Custom3'] = null;
        $j_data['Custom4'] = null;
        $j_data['Custom5'] = null;
        $j_data['Custom6'] = null;
        $j_data['Custom7'] = null;
        $j_data['Custom8'] = null;
        $j_data['Custom9'] = null;
        $j_data['Custom10'] = null;
        $j_data['Custom11'] = null;
        $j_data['Custom12'] = null;
        $j_data['Custom13'] = null;
        $j_data['Custom14'] = null;
        $j_data['Custom15'] = null;
        $j_data['Custom16'] = null;
        $j_data['Custom17'] = null;
        $j_data['Custom18'] = null;
        $j_data['Custom19'] = null;
        $j_data['Custom20'] = null;
        $j_data['Custom21'] = null;
        $j_data['Custom22'] = null;
        $j_data['Custom23'] = null;
        $j_data['Custom24'] = null;
        $j_data['Custom25'] = null;
        $j_data['Custom26'] = null;
        $j_data['Custom27'] = null;
        $j_data['Custom28'] = null;
        $j_data['Custom29'] = null;
        $j_data['Custom30'] = null;
        $j_data['EmailForInvoice'] = null;
        $j_data['AddressForInvoice'] = "Not Available";
        $j_data['PostCodeForInvoice'] = "Not Available";
        $j_data['CityForInvoice'] = "Not Available";
        $j_data['StateForInvoice'] = "Not Available";
        $j_data['FullNameForInvoice'] = "";
        $j_data['GeneralTermsAccepted'] = false;
        $j_data['AgeInDays'] = 0.0000048828032407407404;
        $j_data['HasBanner'] = false;
        $j_data['Id'] = 0;
        $j_data['IdString'] = "0";
        $j_data['UpdatedOn'] = null;
        $j_data['CreatedOn'] = "2019-05-21T11:20:56";
        $j_data['UniqueId'] = "cd694a808a625e2ea3sj";
        $j_data['IsNull'] = false;
        $j_data['Password'] = $p_data['Password'];
        $j_data['PasswordConfirm'] = $p_data['PasswordConfirm'];
        $j_data['GeneralTermsAcceptedOnline'] = false;
        $j_data['Country'] = array('Id' => 1113);
        $j_data['Avatar'] = null;
        $j_data['TourDate'] = null;
        $j_data['hasBillingDetails'] = false;
        $j_data['isPayingMember'] = false;
        $j_data['ProfileTagsArray'] = [];
        $location = $p_data['location_id'];
        
        $s_data = json_encode(array('base64avatar' => null, 'Coworker' => $j_data, 'Team' => new stdClass()));
        if($location == 95265170){
            $url = 'https://reyada.spaces.nexudus.com/en/signup?_resource=,&_depth=1';
            $loc_url = 'reyada';
        }
        else{
            $url = 'https://reyadamabane.spaces.nexudus.com/en/signup?_resource=,&_depth=1';
            $loc_url = 'reyadamabane'; 
        }

        $this->session->set_userdata('location',$loc_url); 
        $headers = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($s_data),
        );
        
        $output = $this->post_with_curl($url, $s_data, $headers);

        if (!empty($output)) {
            if ($this->signin($p_data['Email'], $p_data['Password'],$loc_url) && $output['RedirectTo'] == "/en/Profile/Tariff") {
                $this->session->set_userdata('username', $p_data['Email']);
                $this->session->set_userdata('password', $p_data['Password']);
                $json['message'] = 'registered successfully';
                $json['status'] = 200;
            } else {
                $json['message'] = 'There is a user already with the similar email';
                $json['status'] = 500;
            }
        } else {
            $json['message'] = 'some error occured while processing your request';
            $json['status'] = 500;
        }
        print_r(json_encode($json));
    }

    public function purchase_tickets_new(){
        $p_data = $this->input->post();
        $json['result'] = 'FAIL';
        
        if(!empty($p_data)){
            $name = $p_data['name'];
            $email = $p_data['email'];
            $mobile = $p_data['mobile'];
            $qty = $p_data['qty'];
            $attendee_names = $p_data['attendee_names'];
            $attendee_emails = $p_data['attendee_emails'];
            $event_id = $p_data['event_id'];
            $ticket_url = $p_data['ticket_url'];
            $location = $this->session->userdata('location'); 
            if( $location == null){
                $location =  'reyada';
            }
            $username = $this->config->item('username');
            $password = $this->config->item('password');
            $url = "https://$location.spaces.nexudus.com$ticket_url?_depth=25";
            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode("$username:$password"),
            );
            $output = $this->post_with_curl($url,null, $headers);
            if(!empty($output)){
                $events = $output['Event'];
                $product_id = $output['EventProductId'];
                if($product_id == null){
                    $product_id = $events->MostExpensiveProduct->Id;
                }
                $ticket_data = array(
                    'event_name' => $events->Name,
                    'event_price' => $events->MostExpensivePrice,
                    'event_desc' => $events->LongDescription,
                    'event_location' => $events->Location,
                    'event_id' => $product_id,
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'no_of_attendees' => $qty,
                    'created_date' => date('Y-m-d H:i:s')
                );
                $ticket_id = $this->Main_model->create_event_tickets($ticket_data);
                if($ticket_id){
                    if(count($attendee_emails) > 0){
                        for ($i=0; $i < count($attendee_emails); $i++) { 
                            $atte_data = array(
                                'event_ticket_id' => $ticket_id,
                                'name' => $attendee_names[$i],
                                'email' => $attendee_emails[$i],
                                'created_date' => date('Y-m-d H:i:s')
                            );
                            $this->Main_model->create_event_tickets_attendee($atte_data);
                        }
                    }
                    $ticket_data['ticket_id'] = $ticket_id;
                    if($events->MostExpensivePrice > 0){
                        $pay_url = $this->pay_hesabe($ticket_data);
                        if(!empty($pay_url)){
                            $json['result'] = 'OKPD';
                            $json['pay_url'] = $pay_url;
                        }
                    }else{
                        $this->email_ticket_purchase($ticket_id);
                        $json['result'] = 'OKFR';
                    }
                }
            }
        }

        print_r(json_encode($json));
        
    }

    public function payment_result_ticket(){
        $status = $this->input->get('Status');
        $pay_data = $this->input->get();
        if ($status == '1') {
            $ticket_id = urldecode($this->input->get('Variable1'));
            $u_data = array(
                'payment_status' => true,
                'payment_trans' => $pay_data['PaymentId']
            );
            $result = $this->Main_model->update_event_tickets($ticket_id, $u_data);
            if($this->email_ticket_purchase($ticket_id)){
                $this->session->set_flashdata('success', 'Payment completed, Please check email for more details.');
            }else{
                $this->session->set_flashdata('success', 'Payment completed.');
                $this->session->set_flashdata('error', "Error: Email sending failed");
            }
            
        }else{
            $this->session->set_flashdata('error', "Error: Payment Unsuccessful");
        }
        redirect('main/communityEvents');
    }

    public function email_ticket_purchase($ticket_id){
        $event['ticket'] = $this->Main_model->get_event_tickets($ticket_id);
        $event['attendee'] = $this->Main_model->get_event_attendee($ticket_id);
        
        if(!empty($event['ticket'])){

            //for user
            $from = $this->config->item('admin_email');
            $subject = "Reyada.co - Event Booking Confirmation for " . $event['ticket']->event_name;
            $message = $this->load->view('emailutils/event_ticket_user', $event, true);
            $to = $event['ticket']->email;
            if($this->send_email($from,$subject,$message, $to)){

                //for admin
                $from = $event['ticket']->email;
                $subject = "Reyada.co - You have a new booking for " . $event['ticket']->event_name;
                $message = $this->load->view('emailutils/event_ticket_admin', $event, true);
                $to = $this->config->item('admin_email');
                if($this->send_email($from,$subject,$message, $to)){

                    //for attendees
                    if(count($event['attendee']) > 0){
                        foreach($event['attendee'] as $attendee){
                            $from = $this->config->item('admin_email');
                            $subject = "Reyada.co - Event Booking Confirmation for " . $event['ticket']->event_name;
                            $attendee_data['attendee'] = $attendee;
                            $attendee_data['ticket'] = $event['ticket'];
                            $message = $this->load->view('emailutils/event_ticket_attendee', $attendee_data, true);
                            $to = $attendee->email;
                            $this->send_email($from,$subject,$message, $to);
                        }
                    }

                }
            }

            
        }
    }

    public function pay_hesabe($ticket_data){
        $merchant_code = $this->config->item('hesabe_merchant_code');
        $invoiceamt = $ticket_data['event_price'] * $ticket_data['no_of_attendees'];
        $success_url = base_url('main/payment_result_ticket');
        $error_url = base_url('main/payment_result_ticket');
        $url = $this->config->item('hesabe_request_url');
        $pay_url = null;
        $data = array(
            'MerchantCode' => $merchant_code, 
            'Amount' => $invoiceamt, 
            'SuccessUrl' => $success_url, 
            'FailureUrl' => $error_url,
            'Variable1' => $ticket_data['ticket_id']
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
            $pay_url = $paymenturl . $token;
        }

        return $pay_url;
    }

    public function purchase_tickets()
    {
        $post_data = $this->input->post();
        $logged_in = $this->session->userdata('is_logged_in');

        for($attendee = 0; $attendee < count($post_data['attendee_name']); $attendee++){
            $attendees[$attendee] = new StdClass;
            $attendees[$attendee]->productId = intval($post_data['Id']);
            $attendees[$attendee]->productName = $post_data['event_Name'];
            $attendees[$attendee]->fullName = $post_data['attendee_name'][$attendee];
            $attendees[$attendee]->email = $post_data['attendee_email'][$attendee];
        }

        $j_data['attendees'] = $attendees;
        $product['Currency'] = new StdClass;
        $product['Currency']->Name = "Kuwaiti Dinar (KWD)";
        $product['Currency']->Code = "KWD";
        $product['Currency']->Format = "د.ك.‏0.00";
        $product['Currency']->Id = 3549554;
        $product['Currency']->IdString = "3549554";
        $product['Currency']->UpdatedOn = "/Date(1369493356000)/";
        $product['Currency']->CreatedOn ="/Date(1369493356000)/";
        $product['Currency']->UniqueId = "4f9da52f-3f8e-4a51-a0c2-fe46234477f0";
        $product['Currency']->IsNull = false;
        $product['Currency']->Context = null;
        $product['Name'] = $post_data['event_Name'];
        $product['Description'] = $post_data['desc'];
        $product['Price'] = intval($post_data['Price']);
        $product['StartDateFormatted'] = "";
        $product['EndDateFormatted'] = "";
        $product['StartDate'] = "";
        $product['EndDate'] = "";
        $product['PriceFormatted'] = "";
        $product['Expired'] = false;
        $product['MaxTicketsPerAttendee'] = intval($post_data['MaxTicketsPerAttendee']);
        $product['TicketsLeft'] = "";
        $product['LastFew'] = false;
        $product['SoldOut'] = false;
        $product['Future'] = false;
        $product['IsAvailableNow'] = true;
        $product['Quantity'] = intval($post_data['qty']);
        $product['Id'] = 1234270063;
        $product['IdString'] = $post_data['Id'];
        $product['UpdatedOn'] = "/Date(1369493356000)/";
        $product['CreatedOn'] = "/Date(1369493356000)/";
        $product['UniqueId'] = "be79107a-5010-49b0-98e8-2fa04dcae731";
        $product['IsNull'] = false;
        $product['Context'] =null;

        if(!empty($post_data['qty']) && $post_data['qty'] > 0){
            $qty_array = array();
            for($i=1; $i <= $post_data['qty'];$i++){
                $qty_array[] = $i;
            }
        }

        $product['qtys'] = $qty_array;
        $data[] = $product;
        $cur_url = $this->session->userdata('last_page');
        $loc_url = $post_data['loc_url'];
        $this->session->set_userdata('location', $loc_url);
        $s_data = json_encode(array('discountCode' => "", 'redirectUrl' => "/en/events/payment",'products' => $data,'attendees' => $j_data['attendees']));
        $url = "https://$loc_url.spaces.nexudus.com/en/events/purchase?_depth=25";

        if(!$this->session->userdata('is_logged_in')){
            $user_data['fullName'] = $post_data['p_name'];
            $user_data['email'] = $post_data['p_email'];
            $user_data['MobilePhone'] = $post_data['e_mobile'];
            $user_data['createUser'] = true;
            $user_data['Businesses'] =  [906856952,95265170];
            $user_data['SimpleTimeZoneId'] = 2029;
            $user_data['CountryId'] = 1113;
            $user_data['Password'] = $this->randomPassword();
            $user_data['PasswordConfirm'] = $user_data['Password'];
            $user_data['errors'] = [];
            
            if($this->create_cowerker($user_data)){
                $this->signin($user_data['email'],$user_data['PasswordConfirm'] ,$loc_url);
            }
        }
        
        if ($this->session->userdata('is_logged_in')) {
            $user = $this->session->userdata('user_info');
            $username = $user['Email'];
            $password = $user['Password'];
            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode("$username:$password"),
            );
        }
        else{
            $headers = array(
                'Content-Type: application/json',
            );
        }
        $output = $this->post_with_curl($url, $s_data, $headers);
        if(!empty($output)){
            if($output['WasSuccessful'] == true){
                redirect('main/invoice'); 
            }
            else{
                $this->session->set_flashdata('error', 'Some error occured please try again');
                redirect('main');
            }
        }
        else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('main');
        }
            

     }

    public function create_cowerker($cowerker){
        $username = $this->config->item('username');
        $password = $this->config->item('password');
        $s_data = json_encode($cowerker);

        $url = "https://spaces.nexudus.com/api/spaces/coworkers?_depth=25";
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password"),
        );
        $output = $this->post_with_curl($url, $s_data, $headers);
        if($output['Status'] == 200){
            return true;
        }
        else{
            return false; 
        }

    }

    public function get_booking_price(){
        $p_data = $this->input->post();
        $Booking['Resource']['Id'] = $p_data['resource_id'];
        $Booking['FromTime'] = $p_data['FromTime'];
        $Booking['ToTime'] = $p_data['toTime'];
        $Booking['Tentative'] = false;
        $Booking['Id'] = 0;
        $Booking['DiscountCode'] = null;
        $s_data = json_encode(array('Booking' => $Booking, 'Coworker' => new stdClass(),'Products' => []));
        if(!empty($p_data['loc_url'])){
            $loc_url =  $p_data['loc_url'];
            $url = "https://$loc_url.spaces.nexudus.com/en/bookings/getbookingprice";
        }
        $headers = array(
            'Content-Type: application/json'
        );
        $output = $this->post_with_curl($url, $s_data , $headers);
        $json['IsAvailable'] = $output['IsAvailable'];
        $json['append'] = 'this booking will cost you ' . $output['Price'];
        $json['Message'] = $output['Message'];
        $json['has_credit'] =  $this->session->userdata('has_credit');
        if($json['has_credit'] == true){
            $json['append'] = 'Charges will be deducted from your credits.';
        }
        print_r(json_encode($json));
    }

    public function guest_booking(){
        $p_data = $this->input->post();
        $Booking['Resource']['Id'] = $p_data['ResourceId'];
        $Booking['FromTime'] = $p_data['FromTime'];
        $Booking['ToTime'] = $p_data['ToTime'];
        $Booking['Id'] = 0;
        if ($this->session->userdata('is_logged_in')) {
            $user = $this->session->userdata('user_info');
            $username = $user['Email'];
            $password = $user['Password'];
        }
        else{
            $cowerker = new StdClass;
            $cowerker->FullName = $p_data['FullName'];
            $cowerker->Businesses = [906856952,95265170];
            $cowerker->Email = $p_data['Email'];
            $cowerker->MobilePhone = $p_data['MobilePhone'];
            $cowerker->CountryId = 1113;
            $cowerker->SimpleTimeZoneId = 2029;
            $cowerker->CreateUser = true;
            $cowerker->Password = $this->randomPassword();
            $cowerker->PasswordConfirm = $cowerker->Password;
            if($this->create_cowerker($cowerker)){
                $username = $cowerker->Email;
                $password = $cowerker->Password;
            }
        }
        // $s_data = json_encode(array('Booking' => $Booking,'Coworker' => $cowerker,'Products' => []));
        $s_data = json_encode(array('Booking' => $Booking,'Products' => []));
       
        if(!empty($p_data['loc_url'])){
            $loc_url =  $p_data['loc_url'];
            $this->session->set_userdata('location',$loc_url);
            $url = "https://$loc_url.spaces.nexudus.com/en/bookings/newbookingjson";
        }
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password"),
        );
        $output = $this->post_with_curl($url, $s_data , $headers);
        if($output['Status'] == 200){
            if(!$this->session->userdata('is_logged_in')){
                $this->signin($cowerker->Email,$cowerker->PasswordConfirm,$loc_url);
            }
        }
        print_r(json_encode($output));
    }

    public function get_cowerker_details($loc_url,$accesstoken){
        $url = "https://$loc_url.spaces.nexudus.com/en/profile?_resource=Coworker";
        $user_url = "https://$loc_url.spaces.nexudus.com/en/profile?_resource=User";
        $headers = array(
            'Content-Type: application/json',
            'Authorization:' . $accesstoken,
        );
        $output = $this->post_with_curl($url, null, $headers);
        $user_output = $this->post_with_curl($user_url, null, $headers);

        if (!empty($output)) {
            $json['message'] = 'Logged in successfully';
            $json['status'] = 200;

            $this->session->set_userdata('user_info', $output);
            $this->session->set_userdata('user_info_extra', $user_output);
            $this->session->set_userdata('is_logged_in', true);
            return true;

        } else {
            return false;
        }
    }

   

    public function signin($username = null, $password = null, $loc_url = "reyada")
    {
        $url = "https://$loc_url.spaces.nexudus.com/en/profile?_resource=Coworker";
        $user_url = "https://$loc_url.spaces.nexudus.com/en/profile?_resource=User";
        
    
        $json['message'] = 'some error occured while processing your request';
        $json['status'] = 500;

        if (empty($username) && empty($password)) {
            $p_data = $this->input->post();
            $username = $p_data['email'];
            $password = $p_data['password'];
            if(!empty($p_data['loc_url'])){
                $loc_url =  $p_data['loc_url'];
                $url = "https://$loc_url.spaces.nexudus.com/en/profile?_resource=Coworker";
                $user_url = "https://$loc_url.spaces.nexudus.com/en/profile?_resource=User";
                $allowanceurl = "https://$loc_url.spaces.nexudus.com/en/allowances?_depth=3";
            }
            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode("$username:$password"),
            );
            $output = $this->post_with_curl($url, null, $headers);
            $allowances = $this->post_with_curl($allowanceurl, null, $headers);
            $user_output = $this->post_with_curl($user_url, null, $headers);
            if (!empty($output)) {
                $this->session->set_userdata('location',$loc_url);
                $output['Password'] = $password;
                $json['message'] = 'Logged in successfully';
                $json['status'] = 200;
                $json['html'] = json_encode($output);

                $this->session->set_userdata('user_info', $output);
                $this->session->set_userdata('user_info_extra', $user_output);
                $this->session->set_userdata('is_logged_in', true);
                if(!empty($allowances['OtherExtraServices'])){
                    $this->session->set_userdata('has_credit',true);
                }
                else{
                    $this->session->unset_userdata('has_credit'); 
                }
            }
            print_r(json_encode($json));
        } else {
            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode("$username:$password"),
            );
            $output = $this->post_with_curl($url, null, $headers);
            $user_output = $this->post_with_curl($user_url, null, $headers);

            if (!empty($user_output)) {
                $output['Password'] = $password;
                $json['message'] = 'Logged in successfully';
                $json['status'] = 200;

                $this->session->set_userdata('user_info', $output);
                $this->session->set_userdata('user_info_extra', $user_output);
                $this->session->set_userdata('is_logged_in', true);
                return true;

            } else {
                return false;
            }
        }

    }



    public function get_access_token($username, $password)
    {
        $p_data['email'] = $username;
        $p_data['password'] = $password;
        $p_data['validityInMinutes'] = 30;
        $s_data = json_encode($p_data);
        $url = 'https://spaces.nexudus.com/api/sys/users/token';
        $headers = array(
            'Content-Type: application/json',
        );
        $output = $this->post_with_curl($url, $s_data, $headers);
        if ($output['Status'] == 200) {
            return $output['Value'];
        } else {
            return false;
        }

    }

    public function randomPassword($len = 9) {

        //enforce min length 8
        if($len < 9)
            $len = 9;
    
        //define character libraries - remove ambiguous characters like iIl|1 0oO
        $sets = array();
        $sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
        $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        $sets[] = '23456789';
    
        $password = '';
        
        //append a character from each set - gets first 4 characters
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
        }
    
        //use all characters to fill up to $len
        while(strlen($password) < $len) {
            //get a random set
            $randomSet = $sets[array_rand($sets)];
            
            //add a random char from the random set
            $password .= $randomSet[array_rand(str_split($randomSet))]; 
        }
        
        //shuffle the password string before returning!
        return str_shuffle($password);
    }

    public function subscription_plan()
    {
        $p_data = $this->input->post();
        $location = $p_data['location_id'];
        if ($this->session->userdata('is_logged_in')) {
            $user = $this->session->userdata('user_info');
            $username = $user['Email'];
            $password = $user['Password'];
        }
        else{
            $username = $this->session->userdata('username');
            $password = $this->session->userdata('password');
        }
        if($location == 95265170){
            $url = 'https://reyada.spaces.nexudus.com/en/profile/newcontract?tariffguid=' . $p_data['tariff_guid'] . '&startdate=' . $p_data['selected_date'];
            $loc_url = 'reyada';
            $this->session->set_userdata('location',$loc_url);
        }
        else{
            $url = 'https://reyadamabane.spaces.nexudus.com/en/profile/newcontract?tariffguid=' . $p_data['tariff_guid'] . '&startdate=' . $p_data['selected_date'];
            $loc_url = 'reyadamabane'; 
            $this->session->set_userdata('location',$loc_url);
        }
        $headers = array(
            'content-type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password"),
        );
        $output = $this->post_with_curl($url, null, $headers);
        if (!empty($output)) {
            $json['message'] = 'registered successfully';
            $json['status'] = 200;
        } else {
            $json['message'] = 'some error occured while processing your request';
            $json['status'] = 500;
        }
        print_r(json_encode($json));
    }

    public function get_invoice_pdf()
    {
        $json['msg'] = 500;
        $url = $this->input->post('post_url');
        if($url){
            $user = $this->session->userdata('user_info');
            $username = $user['Email'];
            $password = $user['Password'];

            $access_token = $this->get_access_token($username, $password);
            if(!empty($access_token)){
                $api_url = "https://spaces.nexudus.com/login/login?t=".$access_token."&redirectUrl=".urlencode($url)."&downloadFileName=Invoice%20INV%200381%20%20%20Rob%20Dabb.pdf&expirationTimeInMinutes=1";
                $json['msg'] = $api_url;
            }
        }
        
        print_r(json_encode($json));
    }

    public function post_with_curl($url, $p_data = null, $headers)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        if (!empty($p_data) || $headers[0] == "post" ) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $p_data);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);

        $output = (array) json_decode($result);
        return $output;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->unset_userdata('has_credit');
        redirect('main');
    }

    public function blog()
    {
        $this->load->library("pagination");
        $data['search'] = "";
        if ($this->input->post('term')) {
            $data['search'] = $this->input->post('term');
        }
        $data_api = "https://api.instagram.com/v1/users/self/media/recent/?access_token=2172803998.1677ed0.6c698b7964d948d8bd7045e0e0953222";
        $data_response = $this->fetchSimpleData($data_api);
        $data['insta_data'] = json_decode($data_response);
        $user_api = "https://api.instagram.com/v1/users/self/?access_token=2172803998.1677ed0.6c698b7964d948d8bd7045e0e0953222";
        $user_response = $this->fetchSimpleData($user_api);
        $data['insta_user'] = json_decode($user_response);

        $config['base_url'] = base_url('main/blog');
        $config['per_page'] = 6;
        $config['total_rows'] = $this->Main_model->get_rows();
        $config['full_tag_open'] = "<ul class='pagination pagination-sm'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next Page';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['Article'] = $this->Main_model->get_all_article($config['per_page'],$this->uri->segment(3));
        $data["links"] = $this->pagination->create_links();
        $data['insta_user'] = json_decode($user_response);
        $data['blog'] = $this->Articles_model->get_section_status(1);
        $this->session->set_userdata('last_page', current_url());
        // $data['Article'] = $this->Main_model->get_all_article();
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Blog';
        $data['header_name'] = 'header_blog';
        $data['Categories'] = $this->Main_model->get_all_categories();
        $data['PopularArticle'] = $this->Main_model->get_popular_article();
        $this->load->view('index', $data);
    }

    public function fetchSimpleData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch); 
        return $result;
    }

    public function blog_category()
    {
        $this->session->set_userdata('last_page', current_url());
        $cat_id = $this->input->get('id');
        $data_api = "https://api.instagram.com/v1/users/self/media/recent/?access_token=2172803998.1677ed0.6c698b7964d948d8bd7045e0e0953222";
        $data_response = $this->fetchSimpleData($data_api);
        $data['insta_data'] = json_decode($data_response);
        $user_api = "https://api.instagram.com/v1/users/self/?access_token=2172803998.1677ed0.6c698b7964d948d8bd7045e0e0953222";
        $user_response = $this->fetchSimpleData($user_api);
        $data['insta_user'] = json_decode($user_response);
        $data['search'] = "";
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Blog';
        $data['header_name'] = 'header_blog';
        $data['blog'] = $this->Articles_model->get_section_status(1);
        $data['Article'] = $this->Main_model->get_article_by_category($cat_id);
        $data['PopularArticle'] = $this->Main_model->get_popular_article();
        $data['Categories'] = $this->Main_model->get_all_categories();
        $data['links'] = null;
        $this->load->view('index', $data);

    }

    public function article()
    {
        $this->session->set_userdata('last_page', current_url());
        $article_id = $this->input->get('id');
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Article';
        $data['header_name'] = 'header';
        $data['Article'] = $this->Main_model->get_article_on_id($article_id);
        // $data['Comments'] = $this->Main_model->get_comments($article_id);
        $data['Categories'] = $this->Main_model->get_all_categories();
        $data['PopularArticle'] = $this->Main_model->get_popular_article();
        $data['blog'] = $this->Articles_model->get_section_status(1);
        $data_api = "https://api.instagram.com/v1/users/self/media/recent/?access_token=2172803998.1677ed0.6c698b7964d948d8bd7045e0e0953222";
        $data_response = $this->fetchSimpleData($data_api);
        $data['insta_data'] = json_decode($data_response);
        $user_api = "https://api.instagram.com/v1/users/self/?access_token=2172803998.1677ed0.6c698b7964d948d8bd7045e0e0953222";
        $user_response = $this->fetchSimpleData($user_api);
        $data['insta_user'] = json_decode($user_response);
        $this->load->view('index', $data);

    }

    public function loadRecord($rowno = 0)
    {
        $search_text = $this->input->get('search_text');
        // Row per page
        $rowperpage = 6;

        // Row position
        if ($rowno != 0) {
            $rowno = ($rowno - 1) * $rowperpage;
        }

        // All records count
        $allcount = $this->Main_model->getrecordCount($search_text);

        // Get records
        $users_record = $this->Main_model->getData($rowno, $rowperpage, $search_text);

        // Pagination Configuration
        $config['base_url'] = base_url() . 'Main/loadRecord';
        $config['use_page_numbers'] = true;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        // Initialize
        $this->pagination->initialize($config);

        // Initialize $data Array
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;

        echo json_encode($data);
    }

    public function contactus()
    {
        $enquiry = "";
        if ($this->input->post('membership')) {
            $enquiry = $enquiry . 'Membership Inquiry';
        }
        if ($this->input->post('workspace')) {
            if ($enquiry != '') {
                $enquiry = $enquiry . ', Packages Inquiry';
            } else {
                $enquiry = $enquiry . 'Packages Inquiry';
            }
        }
        if ($this->input->post('somethingelse')) {
            if ($enquiry != '') {
                $enquiry = $enquiry . ', Others';
            } else {
                $enquiry = $enquiry . 'Others';
            }
        }
        $data = array(
            'name' => $this->input->post('full_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'company_name' => $this->input->post('company'),
            'subject' => $enquiry,
            'message' => $this->input->post('notes'),
            'posted_date' => date('Y-m-d H:i:s'),
        );

        if ($this->Main_model->insert_contactus_db($data)) {
            $from = $this->input->post('email');
            $data['userdata'] = $this->input->post();
            $data['enquiry'] = $enquiry;
            $subject = 'Contact Us request';
            $message =  $this->load->view('emailutils/contact_us_email', $data, true);


            if ($this->send_email($from,$subject,$message)) {
                $json['status'] = 'OK';
            } else {
                $json['status'] = 'Error';
            }
        } else {
            $json['status'] = 'Error';
        }
        print_r(json_encode($json));
    }

    private function display_status($status, $success, $fail, $redirect)
    {
        if ($status) {
            $this->session->set_flashdata('success', $success);
        } else {
            $this->session->set_flashdata('warning', $fail);
        }
        if ($redirect == 1) {
            return redirect('./');
        } else {
            return redirect('./');
        }
    }

    public function book_a_tour()
    {

        $p_data = $this->input->post();
        $j_data['FullName'] = $p_data['FullName'];
        $j_data['GuessedFirstNameForInvoice'] = "";
        $j_data['GuessedLastNameForInvoice'] = "";
        $j_data['GuessedFirstName'] = null;
        $j_data['GuessedLastName'] = null;
        $j_data['Salutation'] = null;
        $j_data['Address'] = null;
        $j_data['PostCode'] = null;
        $j_data['CityName'] = null;
        $j_data['State'] = null;
        $j_data['Email'] = $p_data['Email'];
        $j_data['Active'] = false;
        $j_data['DiscountCode'] = null;
        $j_data['RefererGuid'] = "";
        $j_data['ReferenceNumber'] = null;
        $j_data['IsNew'] = true;
        $j_data['CheckedIn'] = false;
        $j_data['SignUpToNewsletter'] = false;
        $j_data['DeleteAvatar'] = false;
        $j_data['DeleteBanner'] = false;
        $j_data['AvatarUrl'] = "/en/coworker/getavatar/0";
        $j_data['ProfileUrl'] = "/en/directory/profile/0/";
        $j_data['CountryId'] = 1113;
        $j_data['SimpleTimeZoneId'] = 2029;
        $j_data['IsMember'] = false;
        $j_data['CancellationDate'] = null;
        $j_data['UtcCancellationDate'] = null;
        $j_data['AbsoluteCancellationDate'] = null;
        $j_data['DoNotProcessInvoicesAutomatically'] = false;
        $j_data['MobilePhone'] = $p_data['MobilePhone'];
        $j_data['LandLine'] = null;
        $j_data['NickName'] = null;
        $j_data['BusinessArea'] = null;
        $j_data['Position'] = null;
        $j_data['CompanyName'] = null;
        $j_data['ProfileTags'] = null;
        $j_data['ProfileTagsSpaces'] = null;
        $j_data['ProfileTagsList'] = [];
        $j_data['ProfileSummary'] = null;
        $j_data['ProfileSummaryHtml'] = "";
        $j_data['ProfileWebsite'] = null;
        $j_data['Url'] = "http://.spaces.nexudus.com/Public/Directory/Profile/0//";
        $j_data['Gender'] = "0";
        $j_data['ProfileIsPublic'] = false;
        $j_data['RegistrationDate'] = null;
        $j_data['UtcRegistrationDate'] = null;
        $j_data['DateOfBirth'] = null;
        $j_data['UtcDateOfBirth'] = null;
        $j_data['Twitter'] = null;
        $j_data['Skype'] = null;
        $j_data['Facebook'] = null;
        $j_data['Linkedin'] = null;
        $j_data['Google'] = null;
        $j_data['Telegram'] = null;
        $j_data['Github'] = null;
        $j_data['Pinterest'] = null;
        $j_data['Flickr'] = null;
        $j_data['Instagram'] = null;
        $j_data['Vimeo'] = null;
        $j_data['Tumblr'] = null;
        $j_data['Blogger'] = null;
        $j_data['HasContactDetails'] = false;
        $j_data['BillingName'] = null;
        $j_data['BillingEmail'] = null;
        $j_data['BillingAddress'] = null;
        $j_data['BillingPostCode'] = null;
        $j_data['BillingCityName'] = null;
        $j_data['BillingState'] = null;
        $j_data['TaxIDNumber'] = null;
        $j_data['CardNumber'] = null;
        $j_data['AccessPincode'] = null;
        $j_data['Custom1'] = null;
        $j_data['Custom2'] = null;
        $j_data['Custom3'] = null;
        $j_data['Custom4'] = null;
        $j_data['Custom5'] = null;
        $j_data['Custom6'] = null;
        $j_data['Custom7'] = null;
        $j_data['Custom8'] = null;
        $j_data['Custom9'] = null;
        $j_data['Custom10'] = null;
        $j_data['Custom11'] = null;
        $j_data['Custom12'] = null;
        $j_data['Custom13'] = null;
        $j_data['Custom14'] = null;
        $j_data['Custom15'] = null;
        $j_data['Custom16'] = null;
        $j_data['Custom17'] = null;
        $j_data['Custom18'] = null;
        $j_data['Custom19'] = null;
        $j_data['Custom20'] = null;
        $j_data['Custom21'] = null;
        $j_data['Custom22'] = null;
        $j_data['Custom23'] = null;
        $j_data['Custom24'] = null;
        $j_data['Custom25'] = null;
        $j_data['Custom26'] = null;
        $j_data['Custom27'] = null;
        $j_data['Custom28'] = null;
        $j_data['Custom29'] = null;
        $j_data['Custom30'] = null;
        $j_data['EmailForInvoice'] = null;
        $j_data['AddressForInvoice'] = "Not Available";
        $j_data['PostCodeForInvoice'] = "Not Available";
        $j_data['CityForInvoice'] = "Not Available";
        $j_data['StateForInvoice'] = "Not Available";
        $j_data['FullNameForInvoice'] = "";
        $j_data['GeneralTermsAccepted'] = false;
        $j_data['AgeInDays'] = 0.0000012655752314814815;
        $j_data['HasBanner'] = false;
        $j_data['Id'] = 0;
        $j_data['IdString'] = "0";
        $j_data['UpdatedOn'] = null;
        $j_data['CreatedOn'] = "2019-05-21T11:20:56";
        $j_data['UniqueId'] = "cd694a808a625e2ea3sj";
        $j_data['IsNull'] = false;
        $j_data['GeneralTermsAcceptedOnline'] = false;
        $j_data['Country'] = array('Id' => 1113);
        $j_data['Avatar'] = null;
        $j_data['TourDate'] = $p_data['FromTime'];
        $j_data['hasBillingDetails'] = false;
        $j_data['isPayingMember'] = false;
        $j_data['ProfileTagsArray'] = [];
        $webaddress = $p_data['location'];
        $s_data = json_encode(array('base64avatar' => null, 'Coworker' => $j_data, 'Team' => new stdClass()));
        $url = "https://$webaddress.spaces.nexudus.com/en/signup?createuser=true&_resource=,&_depth=1";
        $headers = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($s_data),
        );
        $output = $this->post_with_curl($url, $s_data, $headers);
        if(!empty($output)){
            if (isset($output['RedirectTo']) && $output['RedirectTo'] == '/en/Profile/Tariff' && !empty($output['RedirectTo'])) {
                $json['message'] = 'Booked successfully';
                $json['status'] = 200;
            } else {
                $json['body'] = $s_data;
                $json['message'] = 'There is a user with this email address already.';
                $json['status'] = 500;
            }
        }
        else{
            $json['body'] = $s_data;
            $json['message'] = 'We could not update your profile, please try again later.'; 
        }
        

        print_r(json_encode($json));
    }

    // Join Our Community

    public function joinCommunity()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'joinCommunity';
        $data['header_name'] = 'header';
        $data['RecentArticle'] = $this->Main_model->get_recent_articles();
        $this->load->view('index', $data);

    }
    public function plan()
    {
        if ($this->session->userdata('is_logged_in')) {
            $webaddress = $this->session->userdata('location');
            $url = "https://$webaddress.spaces.nexudus.com/en/allowances?_depth=3";
            
            $user = $this->session->userdata('user_info');
            $username = $user['Email'];
            $password = $user['Password'];

            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode("$username:$password"),
            );
            $allowances = $this->post_with_curl($url, null, $headers);
            if(!empty($allowances)){
                $data['coworker_plans'] = $allowances['NonCancelledContracts'];
                $data['future_plan'] = $allowances['ActiveContracts'];
                $data['other_time_passes'] = $allowances['OtherTimePasses'];
                $data['other_extra_services'] = $allowances['OtherExtraServices'];
            }
            $data['folder_name'] = 'main';
            $data['file_name'] = 'Account';
            $data['header_name'] = 'header_account';
            $data['locations'] = $this->get_location();
            // $data['MyAccount'] = $this->Main_model->get_recent_articles();
            $this->load->view('index', $data);
        } else {
            $this->session->set_flashdata('warning', 'Please Login First');
            redirect();
        }
    }

    // My Member
    public function member()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Member';
        $data['header_name'] = 'header_account';

        // $data['MyAccount'] = $this->Main_model->get_recent_articles();
        $this->load->view('index', $data);
    }

    // My Account
    public function profile()
    {
        $this->session->set_userdata('last_page', current_url());
        if ($this->session->userdata('is_logged_in')) {

            $data['coworker'] = $this->session->userdata('user_info');
            $data['user'] = $this->session->userdata('user_info_extra');

            if($data['user']['OnHelpDeskMsg'] && $data['user']['OnNewWallPost'] && $data['user']['OnNewBlogComment'] && $data['user']['OnNewEventComment'] && $data['user']['ReceiveCommunityDigest'] && $data['user']['ReceiveEveryMessage']){
                $data['coworker']['SignUpToNewsletter'] = true;
            }
        } else {
            $this->session->set_flashdata('warning', 'Please Login First');
            redirect();
        }

        $data['folder_name'] = 'main';
        $data['file_name'] = 'Profile';
        $data['header_name'] = 'header_account';

        // $data['MyAccount'] = $this->Main_model->get_recent_articles();
        $this->load->view('index', $data);
    }

    public function update_profile()
    {
        if ($this->session->userdata('is_logged_in')) {
            $user = $this->session->userdata('user_info');
            $p_data = $this->input->post();

            $j_data['AbsoluteCancellationDate'] = null;
            $j_data['AccessPincode'] = 23249;
            $j_data['Active'] = false;
            $j_data['Address'] = $p_data['u_address'];
            $j_data['AddressForInvoice'] = "Not Available";
            $j_data['AgeInDays'] = 0.9597595044456018;
            $j_data['Avatar'] = null;
            $j_data['AvatarUrl'] = "/en/coworker/getavatar/1102767731";
            $j_data['Banner'] = null;
            $j_data['BillingAddress'] = $p_data['u_billing_address'];
            $j_data['BillingCityName'] = $p_data['u_billing_town'];
            $j_data['BillingEmail'] = $p_data['u_send_my_invoice'];
            $j_data['BillingName'] = $p_data['u_billingname'];
            $j_data['BillingPostCode'] = $p_data['u_billing_zip'];
            $j_data['BillingState'] = $p_data['u_billing_province'];
            $j_data['Blogger'] = null;
            $j_data['BusinessArea'] = $p_data['u_industry'];
            $j_data['CancellationDate'] = null;
            $j_data['CardNumber'] = null;
            $j_data['CheckedIn'] = false;
            $j_data['CityForInvoice'] = "Not Available";
            $j_data['CityName'] = $p_data['u_town'];
            $j_data['CompanyName'] = $p_data['u_company'];
            $j_data['Country'] = array(
                "Id" => 1113,
            );
            $j_data['CountryId'] = 1113;
            $j_data['CreatedOn'] = $user['CreatedOn'];
            $j_data['Custom1'] = null;
            $j_data['Custom2'] = null;
            $j_data['Custom3'] = null;
            $j_data['Custom4'] = null;
            $j_data['Custom5'] = null;
            $j_data['Custom6'] = null;
            $j_data['Custom7'] = null;
            $j_data['Custom8'] = null;
            $j_data['Custom9'] = null;
            $j_data['Custom10'] = null;
            $j_data['Custom11'] = null;
            $j_data['Custom12'] = null;
            $j_data['Custom13'] = null;
            $j_data['Custom14'] = null;
            $j_data['Custom15'] = null;
            $j_data['Custom16'] = null;
            $j_data['Custom17'] = null;
            $j_data['Custom18'] = null;
            $j_data['Custom19'] = null;
            $j_data['Custom20'] = null;
            $j_data['Custom21'] = null;
            $j_data['Custom22'] = null;
            $j_data['Custom23'] = null;
            $j_data['Custom24'] = null;
            $j_data['Custom25'] = null;
            $j_data['Custom26'] = null;
            $j_data['Custom27'] = null;
            $j_data['Custom28'] = null;
            $j_data['Custom29'] = null;
            $j_data['Custom30'] = null;
            $j_data['DateOfBirth'] =  $p_data['u_dob'];
            $j_data['DeleteAvatar'] = false;
            $j_data['DeleteBanner'] = false;
            $j_data['DiscountCode'] = null;
            $j_data['DoNotProcessInvoicesAutomatically'] = false;
            $j_data['Email'] = $user['Email'];
            $j_data['EmailForInvoice'] = $user['Email'];
            $j_data['Facebook'] = $p_data['facebook'];
            $j_data['Flickr'] = null;
            $j_data['FullName'] = $p_data['u_fullname'];
            $j_data['FullNameForInvoice'] = $p_data['u_fullname'];
            $j_data['Gender'] = $p_data['u_gender'];
            $j_data['GeneralTermsAccepted'] = false;
            $j_data['Github'] = null;
            $j_data['Google'] = null;
            $j_data['GuessedFirstName'] = explode(' ', trim($p_data['u_fullname']))[0];
            $j_data['GuessedFirstNameForInvoice'] = explode(' ', trim($p_data['u_fullname']))[0];
            $j_data['GuessedLastName'] = (isset(explode(' ', trim($p_data['u_fullname']))[1])) ? explode(' ', trim($p_data['u_fullname']))[1] : "";
            $j_data['GuessedLastNameForInvoice'] = (isset(explode(' ', trim($p_data['u_fullname']))[1])) ? explode(' ', trim($p_data['u_fullname']))[1] : "";
            $j_data['HasBanner'] = false;
            $j_data['HasContactDetails'] = false;
            $j_data['hasBillingDetails'] = null;
            $j_data['Id'] = $user['Id'];
            $j_data['IdString'] = $user['Id'];
            $j_data['Instagram'] = $p_data['instagram'];
            $j_data['IsMember'] = false;
            $j_data['IsNew'] = true;
            $j_data['IsNull'] = false;
            $j_data['LandLine'] = $p_data['u_phone'];
            $j_data['Linkedin'] = $p_data['linkedin'];
            $j_data['MobilePhone'] = $p_data['u_mobile'];
            $j_data['NickName'] = null;
            $j_data['Pinterest'] = null;
            $j_data['Position'] = $p_data['u_rolepos'];
            $j_data['PostCode'] = $p_data['u_zip'];
            $j_data['PostCodeForInvoice'] = "Not Available";
            $j_data['ProfileIsPublic'] = (isset($p_data['membership'])) ? true : false;
            $j_data['ProfileSummary'] = $p_data['yourbio'];
            $j_data['ProfileSummaryHtml'] = $p_data['yourbio'];
            $j_data['ProfileTags'] = $p_data['ProfileTagsArray'];
            $j_data['ProfileTagsArray'] = [""];
            $j_data['ProfileTagsList'] = [];
            $j_data['ProfileTagsSpaces'] = "";
            $j_data['ProfileUrl'] = "";
            $j_data['ProfileWebsite'] = $p_data['u_website'];
            $j_data['ReferenceNumber'] = null;
            $j_data['RefererGuid'] = "";
            $j_data['RegistrationDate'] = $user['CreatedOn'];
            $j_data['Salutation'] = $p_data['u_callyou'];
            $j_data['SignUpToNewsletter'] = ($p_data['SignUpToNewsletter'] == "Yes") ? true : false;
            $j_data['SimpleTimeZoneId'] = 2029;
            $j_data['Skype'] = null;
            $j_data['State'] = $p_data['u_state'];
            $j_data['StateForInvoice'] = "Not Available";
            $j_data['TaxIDNumber'] = $p_data['u_vat'];
            $j_data['Telegram'] = null;
            $j_data['Tumblr'] = null;
            $j_data['Twitter'] = $p_data['twitter'];
            $j_data['UniqueId'] = "cd694a808a625e2ea3sj";
            $j_data['UpdateBillingDetails'] = true;
            $j_data['UpdatedOn'] = $user['CreatedOn'];
            $j_data['Url'] = "";
            $j_data['UtcCancellationDate'] = null;
            $j_data['UtcDateOfBirth'] = null;
            $j_data['UtcRegistrationDate'] = $user['CreatedOn'];
            $j_data['Vimeo'] = null;

            //user data
            $u_data['CreatedOn'] = "2019-05-21T11:20:56";
            $u_data['Email'] = $user['Email'];
            $u_data['FullName'] = $p_data['u_fullname'];
            $u_data['Id'] = $user['Id'];
            $u_data['IdString'] = "0";
            $u_data['IsAuthenticated'] = true;
            $u_data['IsNull'] = false;
            $u_data['NewPassword'] = (isset($p_data['new_password']) && !empty($p_data['new_password'])) ? $p_data['new_password'] : null;
            $u_data['OldPassword'] = (isset($p_data['old_password']) && !empty($p_data['old_password'])) ? $p_data['old_password'] : null;
            $u_data['RepeatNewPassword'] = (isset($p_data['r_new_password']) && !empty($p_data['r_new_password'])) ? $p_data['r_new_password'] : null;
            $u_data['OnHelpDeskMsg'] = ($p_data['SignUpToNewsletter'] == "Yes") ? true : false;;
            $u_data['OnNewBlogComment'] = ($p_data['SignUpToNewsletter'] == "Yes") ? true : false;
            $u_data['OnNewEventComment'] = ($p_data['SignUpToNewsletter'] == "Yes") ? true : false;
            $u_data['OnNewWallPost'] = ($p_data['SignUpToNewsletter'] == "Yes") ? true : false;
            $u_data['ReceiveCommunityDigest'] = ($p_data['SignUpToNewsletter'] == "Yes") ? true : false;
            $u_data['ReceiveEveryMessage'] = ($p_data['SignUpToNewsletter'] == "Yes") ? true : false;
            $u_data['UniqueId'] = "cd694a808a625e2ea3sj";
            $u_data['UpdatedOn'] = "2019-05-21T11:20:56";
            $loc_url = $this->session->userdata('location');
            $s_data = json_encode(array('base64avatar' => null, 'base64banner' => null, 'Coworker' => $j_data, 'User' => $u_data));
            $url = "https://$loc_url.spaces.nexudus.com/en/profile?_resource=";

            $username = $user['Email'];
            if(!empty($user['Password'])){
                $password = $user['Password'];
            }
            
            if(empty($password)){
               $accesstoken =  $this->session->userdata('access_token');
                $headers = array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($s_data),
                    'Authorization:' . $accesstoken,
                );  
            }
            else{
                $headers = array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($s_data),
                    'Authorization: Basic ' . base64_encode("$username:$password"),
                );
            }

            $output = $this->post_with_curl($url, $s_data, $headers);

            if (isset($output['SuccessMessage']) && $output['SuccessMessage'] == "Saved!") {

                if (isset($p_data['new_password']) && !empty($p_data['new_password']) && $p_data['new_password'] == $p_data['r_new_password'] || !empty($accesstoken)) {
                    $password = $p_data['new_password'];
                    $message = "Your password changed";
                } else {
                    $message = 'Your profile has been updated.';
                }

                if ($this->signin($username,$password,$loc_url)) {
                    $json['status'] = 200;
                    $json['message'] = $message;
                } else {
                    $json['status'] = 500;
                    $json['message'] = 'Some error occured while updating your profile';
                }
            } else {
                if (isset($p_data['new_password'])) {
                    $json['status'] = 500;
                    $json['message'] = 'Password details are incorrect';
                } else {
                    $json['status'] = 500;
                    $json['message'] = 'Complete information not provided';
                }
            }

        } 
        else {
            $json['status'] = 500;
            $json['message'] = 'Please login first';
        }

        print_r(json_encode($json));
    }

    public function dummy_paggination($rowno = 0)
    {
        $search_text = $this->input->get('search_text');
        $rowperpage = 6;
        if ($rowno != 0) {
            $rowno = ($rowno - 1) * $rowperpage;
        }
        $allcount = $this->Main_model->getrecordCount($search_text);
        $users_record = $this->Main_model->getData($rowno, $rowperpage, $search_text);
        $config['base_url'] = base_url() . 'Main/loadRecord';
        $config['use_page_numbers'] = true;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;

        echo json_encode($data);
    }

    public function invoice($loc_url = null)
    {
        $this->session->set_userdata('last_page', current_url());
        if ($this->session->userdata('is_logged_in')) {
            if(empty($loc_url)){
                $loc_url = $this->session->userdata('location');
            }
            $pay_url = "https://$loc_url.spaces.nexudus.com/en/bookings/pay";
            $url = "https://$loc_url.spaces.nexudus.com/en/invoices";

            $user = $this->session->userdata('user_info');
            $username = $user['Email'];
            if(!empty($user['Password'])){
                $password = $user['Password'];
            }
            if(empty($password)){
               $accesstoken =  $this->session->userdata('access_token');
               $accestoken = $this->refresh_token($user['Id']);
                $headers = array(
                    'Content-Type: application/json',
                    'Authorization:' . $accesstoken,
                );  
            }
            else{
                $headers = array(
                    'Content-Type: application/json',
                    'Authorization: Basic ' . base64_encode("$username:$password"),
                );
            }
            $output1 = $this->post_with_curl($pay_url, null, $headers);
            $output = $this->post_with_curl($url, null, $headers);
            if(isset($output['Invoices']) && !empty($output['Invoices'])){
                $invoices = $output['Invoices'];
            }else{
                $invoices = null;
            }
        }
        else {
            $this->session->set_flashdata('warning', 'Please Login First');
            redirect();
        }
        if($loc_url != 'reyada'){
            $data['location_name'] = '<b>Reyada Mabane Building</b>';
        }
        else{
            $data['location_name'] = '<b>Reyada Crystal Tower</b>';
        }

        $data['invoices'] = $invoices;
        $data['folder_name'] = 'main';
        $data['file_name'] = 'InvoiceAndPayment';
        $data['header_name'] = 'header_account';
        $this->load->view('index', $data);
        
    }

    public function booking($loc_url = null)
    {

        if ($this->session->userdata('is_logged_in')) {
            if(empty($loc_url)){
                $loc_url = $this->session->userdata('location');
            }
            $url = "https://$loc_url.spaces.nexudus.com/en/bookings/my";
            // $url = $this->config->item('api_base_url')."en/bookings/my";
            $user = $this->session->userdata('user_info');
            $username = $user['Email'];
            $password = $user['Password'];

            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode("$username:$password"),
            );
            $output = $this->post_with_curl($url, null, $headers);
            if (!empty($output['MyBookings'])) {
                $data['resources'] = $output['MyBookings'];
            }
        } else {
            $this->session->set_flashdata('warning', 'Please Login First');
            redirect();
        }
        $data['location_name'] = '<b>Reyada Crystal Tower</b>';
        if($loc_url != 'reyada'){
            $data['location_name'] = '<b>Reyada Mabane Building</b>';
        }
        $data['folder_name'] = 'main';
        $data['file_name'] = 'MyBooking';
        $data['header_name'] = 'header_account';
        $data['locations'] = $this->get_location();
        $this->load->view('index', $data);
     }

     // Community events
     function communityEvents($type = null, $location = null)
     {
        $this->session->set_userdata('last_page', current_url());
        if(!empty($this->input->get('location'))){
            $url = $this->input->get('location');
            $this->session->set_userdata('location',$url);
        }
        $location = $this->session->userdata('location');
        if($location != null){
            $loc_url = $location;
        }
        else{
            $loc_url = 'reyada'; 
        }
        $type = $this->input->get('type');
        $start = $type == "upcoming" ? date("Y-m-d") : date("Y-m-d", strtotime('-1 year'));
        $end = $type == "past" ? date("Y-m-d") : date("Y-m-d", strtotime('+1 year'));
        if($type == 'past'){
            $url = "https://$loc_url.spaces.nexudus.com/en/events?pastevents=true&page=1";
        }
        elseif($type == 'all'){
            $url = "https://$loc_url.spaces.nexudus.com/en/events?_depth=25";
        }
        else{
            $url = "https://$loc_url.spaces.nexudus.com/en/events?pastevents=false&page=1";
        }
        $headers = array(
            'Content-Type: application/json'
        );
        $output = $this->post_with_curl($url,null, $headers);
        if(!empty($output)){
            $data['events'] = $output['CalendarEvents'];
            $data['locations'] = $this->get_location();
            $data['folder_name'] = 'main';
            $data['file_name'] = 'CommunityEvents';
            $data['header_name'] = 'header_account';
            $data['img_loc'] = $loc_url;
            $this->load->view('index', $data);
        }
        else{
            $data['locations'] = $this->get_location();
            $data['folder_name'] = 'main';
            $data['file_name'] = 'CommunityEvents';
            $data['header_name'] = 'header_account';
            $data['img_loc'] = $loc_url;
            $this->load->view('index', $data);
        }
       
     }

     function check_email_exist(){

        $post_data = $this->input->post();
        $email = $post_data['Email'];
        $location = $post_data['location'];
        $url = "https://$location.spaces.nexudus.com/en/user/exists?email=$email";
        $headers = array(
            'Content-Type: application/json',
        );
        $output = $this->post_with_curl($url,null, $headers);
        if ($output[0] == false) {
            $json['status'] = 200;
        } else {
            $json['status'] = 500;
            $json['message'] = 'You are already registered please login';
        }
        print_r(json_encode($json));
     }

     // Community Booking
     function communityBooking()
     {         
         $data['folder_name'] = 'main';
         $data['file_name'] = 'CommunityBooking';
         $data['header_name'] = 'header_account';
         $data['locations'] = $this->get_location();
         // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
         $this->load->view('index', $data);
     }

     function book_events(){

        $ticketUrl = $this->input->get('ticketUrl');
        $location = $this->session->userdata('location'); 
        if( $location == null){
            $location =  'reyada';
        }
        $username = $this->config->item('username');
        $password = $this->config->item('password');
        $data['folder_name'] = 'main';
        $data['file_name'] = 'BookEvents';
        $data['header_name'] = 'header_account';
        $url = "https://$location.spaces.nexudus.com$ticketUrl?_depth=25";
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode("$username:$password"),
        );
        $output = $this->post_with_curl($url,null, $headers);
        if(!empty($output)){
            $this->session->set_userdata('last_page', current_url());
            $data['location'] = $location;
            $data['events'] = $output['Event'];
            $data['product_id'] = $output['EventProductId'];
            if($data['product_id'] == null){
                $data['product_id'] = $output['Event']->MostExpensiveProduct->Id;
            }
            $this->load->view('index', $data);
        }
        else{
            redirect('main/community_events');
        }
     }

     function get_available_rooms(){
        $this->session->set_userdata('last_page', current_url());
        $p_data = $this->input->post();
        if(empty($p_data)){
            $p_data = $this->input->get(); 
        }
        $fromtime = $p_data['start_time'];
        $totime = $p_data['end_time'];
        $location = $p_data['loc'];
        $url = "https://$location.spaces.nexudus.com/en/bookings/search?start=$fromtime&end=$totime";
        $headers = array(
            'Content-Type: application/json'
        );
        $output = $this->post_with_curl($url,null, $headers);
        if(!empty($output['Resources'])){
            $json['status'] = 'OK';
            $json['resources'] = $output['Resources'];
        }
        else{
            $json['status'] = 'Error';
        }
        
        print_r(json_encode($json));
    }

    public function forgot_password()
    {
        $this->session->set_userdata('last_page', current_url());
        if(!empty($this->input->post('email'))){
            $email = $this->input->post('email');

            if(!empty(($email))){
                $url = 'https://spaces.nexudus.com/api/spaces/coworkers?Coworker_Email='.$email;
                $username = $this->config->item('username');
                $password = $this->config->item('password');

                $headers = array(
                    'Content-Type: application/json',
                    'Authorization: Basic ' . base64_encode("$username:$password"),
                );
                $output = $this->post_with_curl($url, null, $headers);

                if(!empty($output['Records'])){
                    $from = $email;
                    $data['userdata'] = $output['Records'];
                    $data['email'] = $email;
                    $subject = 'Change Password request';
                    $message =  $this->load->view('emailutils/reset_pass_email', $data, true);
                    if ($this->send_email($from,$subject,$message)) {
                        $json['status'] = 'OK';
                    } else {
                        $json['status'] = 'Error';
                    }
                }else{
                    $json['status'] = 'Error';
                }
            }else{
                $json['status'] = 'Error';
            }
            print_r(json_encode($json));
        }
        else{
            $data['folder_name'] = 'main';
            $data['file_name'] = 'forgot_password';
            $data['header_name'] = 'header_account';
            $this->load->view('index', $data);
        }
        
    }

    public function partnership_request(){
        $post_data = $this->input->post();
        $from = $post_data['p_email'];
        $subject = 'Partnership Request';
        $data['userdata'] = $this->input->post();
        $message =  $this->load->view('emailutils/partner_request_mail', $data, true);

        if ($this->send_email($from,$subject,$message)) {
            $json['status'] = 'OK';
        } else {
            $json['status'] = 'Error';
        }
        print_r(json_encode($json));
    }

    public function send_email($from,$subject,$message, $to = null){
        $this->email->from($from);
        if(empty($to)){
            $this->email->to($this->config->item('admin_email'));
        }else{
            $this->email->to($to);
        }
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
           return true;
        } else {
            return false;
        }
    }

}
