<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->lang->load('auth');
        $this->load->model("Main_model",'Main_model');
        $this->load->library('pagination');
    }
    
    function index()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'index';
        $data['header_name'] = 'header';
        $data['RecentArticle'] = $this->Main_model->get_recent_articles();  
        $this->load->view('index', $data);

    }

    function services()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Services';
        $data['header_name'] = 'header';
        $data['RecentArticle'] = $this->Main_model->get_recent_articles();  
        $this->load->view('index', $data);

    }

    // function blog()
    // {
    //     $data['folder_name'] = 'main';
    //     $data['file_name'] = 'Blog';
    //     $data['header_name'] = 'header_blog';
    //     $this->load->view('index', $data);

    // }

    // function article()
    // {
    //     $data['folder_name'] = 'main';
    //     $data['file_name'] = 'Article';
    //     $data['header_name'] = 'header';
    //     $this->load->view('index', $data);

    // }

    public function signup(){

        $p_data = $this->input->post();
        $j_data['FullName'] = $p_data['FullName'];
        $j_data['GuessedFirstNameForInvoice'] = "";
        $j_data['GuessedLastNameForInvoice'] = "";
        $j_data['GuessedFirstName'] = null;
        $j_data['GuessedLastName'] = null;
        $j_data['Salutation'] = null;
        $j_data['Address'] = $p_data['BillingAddress'];
        $j_data['PostCode'] = 753951;
        $j_data['CityName'] = $p_data['BusinessArea'];
        $j_data['State'] = $p_data['BusinessArea'];
        $j_data['Email'] = $p_data['Email'];
        $j_data['Active'] = true;
        $j_data['DiscountCode'] = null;
        $j_data['RefererGuid'] = "";
        $j_data['ReferenceNumber'] = null;
        $j_data['IsNew'] = true;
        $j_data['CheckedIn'] = false;
        $j_data['SignUpToNewsletter'] = ($p_data['SignUpToNewsletter']) == "on" ? true : false;
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
        $j_data['ProfileWebsite'] = $p_data['ProfileWebsite'];
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

        

        $s_data = json_encode(array('base64avatar' => null, 'Coworker' => $j_data, 'Team' => new stdClass()));
        $url = "https://reyadatestaccount.spaces.nexudus.com/en/signup?_resource=,&_depth=1";
        $headers = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($s_data)
        );
        $output = $this->post_with_curl($url, $s_data, $headers);

        if(isset($output->RedirectTo) && !empty($output->RedirectTo)){
            if($this->signin($p_data['Email'], $p_data['Password'])){
                $this->session->set_userdata('username', $p_data['Email']);
                $this->session->set_userdata('password', $p_data['Password']);
                $json['message'] = 'registered successfully';
                $json['status'] = 200;
            }else{
                $json['message'] = 'There is a user already with the similar email';
                $json['status'] = 500;
            }
        }else{
            $json['message'] = 'some error occured while processing your request';
            $json['status'] = 500;
        }

        print_r(json_encode($json));
    }

    public function signin($username = null, $password = null){
        $url = "https://reyadatestaccount.spaces.nexudus.com/en/profile?_resource=Coworker";
        $json['message'] = 'some error occured while processing your request';
        $json['status'] = 500;

        if(empty($username) && empty($password)){
            $p_data = $this->input->post();

            $username = $p_data['email'];
            $password = $p_data['password'];

            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic '. base64_encode("$username:$password")
            );
            
            $output = $this->post_with_curl($url, null, $headers);

            if(!empty($output)){
                $json['message'] = 'Logged in successfully';
                $json['status'] = 200;
                $json['html'] = json_encode($output);

                $user_info = array(
                    'Id' => $output->Id,
                    'FullName' => $output->FullName,
                    'Address' => $output->Address,
                    'CityName' => $output->CityName,
                    'MobilePhone' => $output->MobilePhone,
                    'Email' => $output->Email,
                    'DateOfBirth' => $output->DateOfBirth,
                    'AccessPincode' => $output->AccessPincode,
                    'Gender' => $output->Gender,
                    'Twitter' => $output->Twitter,
                    'Skype' => $output->Skype,
                    'Facebook' => $output->Facebook,
                    'Linkedin' => $output->Linkedin,
                    'Google' => $output->Google,
                    'Github' => $output->Github,
                    'Pinterest' => $output->Pinterest,
                    'Flickr' => $output->Flickr,
                    'Vimeo' => $output->Vimeo,
                    'Tumblr' => $output->Tumblr,
                    'Blogger' => $output->Blogger

                    
                );

                $this->session->set_userdata('user_info', $user_info);
                $this->session->set_userdata('is_logged_in', true);
            }

            print_r(json_encode($json));
        }else{

            $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic '. base64_encode("$username:$password")
            );
            
            $output = $this->post_with_curl($url, null, $headers);

            if(!empty($output)){
                $json['message'] = 'Logged in successfully';
                $json['status'] = 200;

                $user_info = array(
                    'Id' => $output->Id,
                    'FullName' => $output->FullName,
                    'Address' => $output->Address,
                    'CityName' => $output->CityName,
                    'MobilePhone' => $output->MobilePhone,
                    'Email' => $output->Email,
                    'DateOfBirth' => $output->DateOfBirth,
                    'AccessPincode' => $output->AccessPincode,
                    'Gender' => $output->Gender,
                    'Twitter' => $output->Twitter,
                    'Skype' => $output->Skype,
                    'Facebook' => $output->Facebook,
                    'Linkedin' => $output->Linkedin,
                    'Google' => $output->Google,
                    'Github' => $output->Github,
                    'Pinterest' => $output->Pinterest,
                    'Flickr' => $output->Flickr,
                    'Vimeo' => $output->Vimeo,
                    'Tumblr' => $output->Tumblr,
                    'Blogger' => $output->Blogger
                );

                $this->session->set_userdata('user_info', $user_info);
                $this->session->set_userdata('is_logged_in', true);
                return true;
                
            }else{
                return false;
            }
        }

    }

    public function get_access_token($username,$password){
        $p_data['email'] = $username;
        $p_data['password'] = $password;
        $p_data['validityInMinutes'] = 30; 
        $s_data = json_encode($p_data);
        $url = 'https://spaces.nexudus.com/api/sys/users/token';
        $headers = array(
            'Content-Type: application/json'
        );
        $output = $this->post_with_curl($url, $s_data, $headers);
        if($output->Status == 200){
            return $output->Value;
        }
        else{
            return false;
        }
        
    }

    public function subscription_plan(){
        $p_data = $this->input->post();
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $access_token = $this->get_access_token($username,$password);
        if(!empty($access_token)){
            $url = 'https://reyadatestaccount.spaces.nexudus.com/en/profile/newcontract?tariffguid='.$p_data['tariff_guid'].'&startdate='.$p_data['selected_date'];
            $headers = array(
                'content-type: application/json',
                'Authorization: Bearer '. $access_token
            );
            $output = $this->post_with_curl($url, null, $headers);
            if(isset($output->RedirectTo) && !empty($output->RedirectTo)){
                $json['message'] = 'registered successfully';
                $json['status'] = 200;
            }else{
                $json['message'] = 'some error occured while processing your request';
                $json['status'] = 500;
            }
        }
        else{
            $json['message'] = 'some error occured while processing your request';
            $json['status'] = 500;
        }
        print_r(json_encode($json));
    }

    public function post_with_curl($url, $p_data = null, $headers){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        
        if(!empty($p_data)){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $p_data);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        $output = json_decode($result);
        curl_close($ch);

        return $output;
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('main');
    }

    function blog()
    {
        $data['search']="";
        if($this->input->post('term')){
            $data['search']=$this->input->post('term');
        }
        $data['Article'] = $this->Main_model->get_all_article();
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Blog';
        $data['header_name'] = 'header_blog';
        $data['Categories'] = $this->Main_model->get_all_categories();  
        $data['PopularArticle'] = $this->Main_model->get_popular_article();      
        $this->load->view('index', $data);
    }

    function blog_category()
    {
		$cat_id=$this->input->get('id');
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Blog';
        $data['header_name'] = 'header_blog';
        $data['Article'] = $this->Main_model->get_article_by_category($cat_id);
        $data['PopularArticle'] = $this->Main_model->get_popular_article(); 
		$data['Categories'] = $this->Main_model->get_all_categories();        
        $this->load->view('index', $data);

    }

    function article()
    {
		$article_id=$this->input->get('id');
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Article';
        $data['header_name'] = 'header';
        $data['Article'] = $this->Main_model->get_article_on_id($article_id);
        // $data['Comments'] = $this->Main_model->get_comments($article_id);
        $data['Categories'] = $this->Main_model->get_all_categories();    
        $data['PopularArticle'] = $this->Main_model->get_popular_article();                
        $this->load->view('index', $data);

    }
 
    public function loadRecord($rowno=0){
        $search_text=$this->input->get('search_text');
        // Row per page
        $rowperpage = 6;
    
        // Row position
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }
     
        // All records count
        $allcount = $this->Main_model->getrecordCount($search_text);
    
        // Get records
        $users_record = $this->Main_model->getData($rowno,$rowperpage,$search_text);
     
        // Pagination Configuration
        $config['base_url'] = base_url().'Main/loadRecord';
        $config['use_page_numbers'] = TRUE;
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

    function contactus()
    {
        $subject="";
        if($this->input->post('membership')){
            $subject = $subject.'About membership';
        }
        if($this->input->post('workspace')){
            if($subject != ''){
                $subject = $subject.', Finding workspace';
            }else{
                $subject = $subject.'Finding workspace';
            }
        }
        if($this->input->post('somethingelse')){
            if($subject != ''){
                $subject = $subject.', Something else';
            }else{
                $subject = $subject.'Something else';
            }
        }        
        $data = array(
        'name' => $this->input->post('full_name'),
        'email' => $this->input->post('email'),
        'phone' =>$this->input->post('phone'),
        'company_name' => $this->input->post('company'),
        'subject' => $subject,   
        'message' => $this->input->post('notes'),
        'posted_date' => date('Y-m-d H:i:s')
        );
        $this->Main_model->insert_contactus_db($data);
        $this->session->set_flashdata('contact','true');
        redirect('./');
    }

    private function display_status($status,$success,$fail,$redirect)
    {
            if($status)
            {
                    $this->session->set_flashdata('success', $success);
            }
            else{
                    $this->session->set_flashdata('warning', $fail);
            }
            if($redirect==1)
            {
                return redirect('./');
            }
            else
            {
              return redirect('./');
            }
    }

    public function book_a_tour(){

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
        $j_data['LandLine'] =null;        
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
        // $j_data['location'] = $p_data['location'];
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
        $url = "https://$webaddress.spaces.nexudus.com/en/signup?_resource=,&_depth=1";
        $headers = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($s_data)
        );
        $output = $this->post_with_curl($url, $s_data, $headers);
        if($output->RedirectTo == '/en/Profile/Tariff' && !empty($output->RedirectTo)){
                    $json['message'] = 'Booked successfully';
                $json['status'] = 200;
        }else{
            $json['message'] = 'There is a user with this email address already.';
            $json['status'] = 500;
        }

        print_r(json_encode($json));
    }

    // Join Our Community

    function joinCommunity()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'joinCommunity';
        $data['header_name'] = 'header';
        $data['RecentArticle'] = $this->Main_model->get_recent_articles();  
        $this->load->view('index', $data);

    }

    // My Account
    // function account()
    // {
    //     $data['folder_name'] = 'main';
    //     $data['file_name'] = 'MyAccount';
    //     $data['header_name'] = 'header_account';
    //     // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
    //     $this->load->view('index', $data);
    // }

     // Plan and Benifits
    function plan()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Account';
        $data['header_name'] = 'header_account';
        // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
        $this->load->view('index', $data);
    }

     // My Member
    function member()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'Member';
        $data['header_name'] = 'header_account';
        
        // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
        $this->load->view('index', $data);
    }

      // My Account
      function profile()
      {
          $data['folder_name'] = 'main';
          $data['file_name'] = 'Profile';
          $data['header_name'] = 'header_account';
          
          // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
          $this->load->view('index', $data);
      }

    public function dummy_paggination($rowno=0){
        $search_text=$this->input->get('search_text');
        // Row per page
        $rowperpage = 6;
    
        // Row position
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }
     
        // All records count
        $allcount = $this->Main_model->getrecordCount($search_text);
    
        // Get records
        $users_record = $this->Main_model->getData($rowno,$rowperpage,$search_text);
     
        // Pagination Configuration
        $config['base_url'] = base_url().'Main/loadRecord';
        $config['use_page_numbers'] = TRUE;
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


    // My Invoive and Payment
    function invoice()
    {
        $data['folder_name'] = 'main';
        $data['file_name'] = 'InvoiceAndPayment';
        $data['header_name'] = 'header_account';
        // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
        $this->load->view('index', $data);
    }

     // My Booking
     function booking()
     {
         $data['folder_name'] = 'main';
         $data['file_name'] = 'MyBooking';
         $data['header_name'] = 'header_account';
         // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
         $this->load->view('index', $data);
     }

     // Community events
     function communityEvents()
     {
         $data['folder_name'] = 'main';
         $data['file_name'] = 'CommunityEvents';
         $data['header_name'] = 'header_account';
         // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
         $this->load->view('index', $data);
     }

     // Community Booking
     function communityBooking()
     {
         $data['folder_name'] = 'main';
         $data['file_name'] = 'CommunityBooking';
         $data['header_name'] = 'header_account';
         // $data['MyAccount'] = $this->Main_model->get_recent_articles();  
         $this->load->view('index', $data);
     }
    
}