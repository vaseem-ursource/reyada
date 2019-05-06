<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'NOT_ALLOWED';
        exit;
    }

    public function get_data()
    {

        $this->load->model('cities_model');
        $this->load->model('address_type_model');

        $json['address_types'] = $this->address_type_model->get_all();

        $capitals = $this->cities_model->get_all_capital();
        foreach ($capitals as $capital) {
            $capital->cities = $this->cities_model->get_capital_cities($capital->id);
            $areas[] = $capital;
        }
        $json['areas'] = $areas;

        print_r(json_encode($json));

    }

    public function get_data_ar()
    {

        $this->load->model('cities_model');
        $this->load->model('address_type_model');

        $json['address_types'] = $this->address_type_model->get_all_ar();

        $capitals = $this->cities_model->get_all_capital_ar();
        foreach ($capitals as $capital) {
            $capital->cities = $this->cities_model->get_capital_cities_ar($capital->id);
            $areas[] = $capital;
        }
        $json['areas'] = $areas;

        print_r(json_encode($json));

    }

    public function get_home_data()
    {

        $this->load->model('cities_model');
        $this->load->model('cuisine_type_model');
        $this->load->model('main_banners_model');
        $this->load->model('restaurant_model');

        $json['restaurant_types'] = $this->cuisine_type_model->get_all();
        $capitals = $this->cities_model->get_all_capital();
        
        foreach ($capitals as $capital)
        {
            $capital->cities = $this->cities_model->get_capital_cities($capital->id);
            $areas[] = $capital;
        }

        $json['areas'] = $areas;
        $json['banners'] = $this->main_banners_model->get_all_banners();
        $json['vouchers'] = $this->restaurant_model->get_promotions();        

        print_r(json_encode($json));

    }

    public function get_home_data_ar()
    {

        $this->load->model('cities_model');
        $this->load->model('cuisine_type_model');
        $this->load->model('main_banners_model');

        $json['restaurant_types'] = $this->cuisine_type_model->get_all_ar();
        $capitals = $this->cities_model->get_all_capital_ar();
        foreach ($capitals as $capital) {
            $capital->cities = $this->cities_model->get_capital_cities_ar($capital->id);
            $areas[] = $capital;
        }
        $json['areas'] = $areas;
        $json['banners'] = $this->main_banners_model->get_all_banners();
        print_r(json_encode($json));

    }

    public function register_user()
    {
        $this->load->model('ion_auth_model');
        $this->load->model('user_setting_model');
        $this->load->model('user_addresses_model');
        if (count($_POST) === 19) {
            $post_data = $this->input->post();
            $data['user_type_id'] = '2';
            $email = strtolower($post_data['email']);
            $username = $post_data['email'];
            $password = $post_data['password'];
            if ($this->ion_auth->email_check(strtolower($email))) {
                $json['status'] = 'EMAIL_ALREADY_EXISTS';
                print_r(json_encode($json));
            } else {


                $data['first_name'] = $post_data['first_name'];
                $data['last_name'] = $post_data['last_name'];
                $data['dob'] = isset($post_data['dob']) && !empty($post_data['dob'])? $post_data['dob']:null;
                $data['phone'] = $post_data['mobile_number'];
                $data['country'] = '116';
                $data['gender'] = isset($post_data['gender']) && !empty($post_data['gender'])? $post_data['gender']:null;
                $data['is_block'] = '0';
                $data['date_created'] = date('y-m-d h:i:s');
                $register_id = $this->ion_auth->register($username, $password, $email, $data, array('2'));

                $settings['user_id'] = $register_id;
                $settings['promo_setting'] = $post_data['promo_setting'];
                $settings['update_by_sms_setting'] = $post_data['sms_setting'];

                $this->user_setting_model->create($settings);

                $address['user_id'] = $register_id;
                $address['type_id'] = $post_data['address_type_id'];
                $address['area'] = $post_data['city_id'];
                $address['address_title'] = $post_data['address_name'];
                $address['block'] = $post_data['block'];
                $address['judda'] = $post_data['judda'];
                $address['street'] = $post_data['street'];
                $address['houseno_name'] = $post_data['office_name'];
                $address['floor'] = $post_data['floor'];
                $address['office_apt'] = $post_data['appartment'];
                $address['extra_direction'] = $post_data['extra_direction'];

                $this->user_addresses_model->create($address);

                $errors_array = $this->ion_auth->errors_array();
                $messages_array = $this->ion_auth->messages_array();
                if (!empty($errors_array[0])) {
                    //$this->session->set_flashdata('error', $errors_array[0]);
                    $json['status'] = "ERROR_WHILE_REGISTERING";
                    print_r(json_encode($json));
                } elseif (!empty($messages_array[0])) {
                    //$this->session->set_flashdata('message', "Signed Up successfully please verify your account through link sent to your email address");


                    $json['status'] = "REGISTERED";
                    print_r(json_encode($json));
                }

            }
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function update_user_profile()
    {

        if (sizeof($_POST) == 6) {
            $post_data = $this->input->post();

            if ($this->ion_auth_model->check_user($post_data['user_id'])) {
                $this->load->model('ion_auth_model');
                $this->load->model('user_setting_model');


                $data['first_name'] = $post_data['first_name'];
                $data['last_name'] = $post_data['last_name'];
                $data['dob'] = isset($post_data['dob']) && !empty($post_data['dob'])? $post_data['dob']:null;
                $data['phone'] = $post_data['mobile_number'];
                $data['gender'] = isset($post_data['gender']) && !empty($post_data['gender'])? $post_data['gender']:null;

                if ($this->ion_auth->update($post_data['user_id'], $data)) {
                    $json['status'] = "OK";
                } else {
                    $json['status'] = 'ERROR';
                }


            } else {
                $json['status'] = 'USER_NOT_FOUND';
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function change_password()
    {

        if (isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['email'])) {

            $old = $_POST['old_password'];
            $new = $_POST['new_password'];
            $email = $_POST['email'];
            $identity = $email;

            $change = $this->ion_auth->change_password($identity, $old, $new);
            if ($change) {
                //if the password was successfully changed
                $json['status'] = "OK";
            } else {
                $json['status'] = "ERROR";
            }

            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';

        }

    }

    public function change_email()
    {

        if (isset($_POST['new_email']) && isset($_POST['user_id'])) {

            if ($this->ion_auth->email_check(strtolower($_POST['new_email']))) {
                $json['status'] = "EMAIL_ALREADY_EXISTS";
                print_r(json_encode($json));
            } else {
                $data['email'] = $_POST['new_email'];

                if ($this->ion_auth->update($_POST['user_id'], $data)) {
                    $json['status'] = "OK";
                } else {
                    $json['status'] = 'ERROR';
                }

                print_r(json_encode($json));
            }
        } else {
            echo 'NOT_ALLOWED';

        }

    }

    public function get_user_info()
    {

        if (isset($_POST['user_id'])) {
            $user_id = $this->input->post('user_id');
            $this->load->model('ion_auth_model');
            $this->load->model('user_addresses_model');

            $json['user'] = $this->ion_auth_model->get_user_profile_info($user_id);
            if (isset($json['user'])) {
                $json['user']->addresses = $this->user_addresses_model->get_all_by_user_id($user_id);
            }
            print_r(json_encode($json));

        } else {
            echo 'NOT_ALLOWED';

        }

    }

    public function add_user_address()
    {

        if (count($_POST) === 11) {
            $this->load->model('user_addresses_model');
            $this->load->model('ion_auth_model');

            $post_data = $_POST;

            if ($this->ion_auth_model->check_user($post_data['user_id'])) {

                $address['user_id'] = $post_data['user_id'];
                $address['type_id'] = $post_data['address_type_id'];
                $address['area'] = $post_data['city_id'];
                $address['address_title'] = $post_data['address_name'];
                $address['block'] = $post_data['block'];
                $address['judda'] = $post_data['judda'];
                $address['street'] = $post_data['street'];
                $address['houseno_name'] = $post_data['office_name'];
                $address['floor'] = $post_data['floor'];
                $address['office_apt'] = $post_data['appartment'];
                $address['extra_direction'] = $post_data['extra_direction'];

                $this->user_addresses_model->create($address);

                $json['status'] = 'OK';

            } else {
                $json['status'] = 'USER_NOT_FOUND';
            }

            print_r(json_encode($json));

        } else {

            echo 'NOT_ALLOWED';

        }
    }

    public function update_user_address()
    {

        if (sizeof($_POST) == 12) {
            $this->load->model('user_addresses_model');
            $this->load->model('ion_auth_model');

            $post_data = $_POST;

            if ($this->ion_auth_model->check_user($post_data['user_id'])) {

                $address['user_id'] = $post_data['user_id'];
                $address['type_id'] = $post_data['address_type_id'];
                $address['area'] = $post_data['city_id'];
                $address['address_title'] = $post_data['address_name'];
                $address['block'] = $post_data['block'];
                $address['judda'] = $post_data['judda'];
                $address['street'] = $post_data['street'];
                $address['houseno_name'] = $post_data['office_name'];
                $address['floor'] = $post_data['floor'];
                $address['office_apt'] = $post_data['appartment'];
                $address['extra_direction'] = $post_data['extra_direction'];

                if ($this->user_addresses_model->update($post_data['address_id'], $address)) {
                    $json['status'] = 'OK';
                } else {
                    $json['status'] = 'DATABASE_ERROR';
                    $this->input->post('');
                }

            } else {
                $json['status'] = 'USER_NOT_FOUND';
            }

            print_r(json_encode($json));

        } else {

            echo 'NOT_ALLOWED';

        }
    }

    public function delete_user_address()
    {

        if (isset($_POST['user_id']) && isset($_POST['address_id'])) {

            $this->load->model('user_addresses_model');
            $this->load->model('ion_auth_model');

            $post_data = $_POST;

            if ($this->ion_auth_model->check_user($post_data['user_id'])) {

                if ($this->user_addresses_model->delete($post_data['address_id'], $post_data['user_id'])) {
                    $json['status'] = 'OK';
                } else {
                    $json['status'] = 'DATABASE_ERROR';
                }

            } else {
                $json['status'] = 'USER_NOT_FOUND';
            }

            print_r(json_encode($json));

        } else {

            echo 'NOT_ALLOWED';

        }
    }

    public function get_rest_area_coverage()
    {
        $this->load->model('restaurant_coverage_model');

        $restaurant_id = ($this->input->post('restaurant_id')) ? $this->input->post('restaurant_id') : $this->input->get('restaurant_id');
        $area_id = ($this->input->post('area_id')) ? $this->input->post('area_id') : $this->input->get('area_id');
        $rest_ids_arr = explode(",",$restaurant_id);

        if(isset($area_id) && isset($restaurant_id))
        {
            foreach($rest_ids_arr as $rest_id)
            {                
                $rest_area_coverage = $this->restaurant_coverage_model->get_rest_area_coverage($rest_id, $area_id);    
                if(isset($rest_area_coverage))
                {
                    $area_min_order = $rest_area_coverage->area_min_order;
                    $area_delivery_time = $rest_area_coverage->area_delivery_time;
                    $area_delivery_fee = $rest_area_coverage->area_delivery_fee;
                    $restaurant_id = $rest_area_coverage->restaurant_id;
                }
                else
                {
                    $area_min_order = null;
                    $area_delivery_fee = null;
                    $area_delivery_time = null;
                    $restaurant_id = null;
                }
//Test 
                $json['restaurant_area_min_order'] = $area_min_order;
                $json['restaurant_area_delivery_time'] = $area_delivery_time;
                $json['restaurant_area_delivery_fee'] = $area_delivery_fee;
                $json['restaurant_id'] = $restaurant_id;
                $json_arr[] = $json;
            }
            
        }
        
        $json_response['rest_coverage_area_Info'] =  $json_arr;

        print_r(json_encode($json_response)); 
    }


    public function get_restaurant_by_id()
    {

        $area = $this->input->post('area');

        if($area == false)
        {
            $area = $this->input->get('area');          
        }

        $restaurant_id = $this->input->post('restaurant_id');

        if($restaurant_id == false)
        {
            $restaurant_id = $this->input->get('restaurant_id');          
        }

        $user_id = $this->input->post('user_id');

        if($user_id == false)
        {
            $user_id = $this->input->get('user_id');          
        }

        $day = $this->input->post('day');

        if($day == false)
        {
            $day = $this->input->get('day');          
        }

        if (isset($user_id) && isset($restaurant_id)) 
        {
            $this->load->model('restaurant_model');
            $this->load->model('restaurant_menu_categories_model');
            $this->load->model('restaurant_menu_model');
            $this->load->model('payment_method_model');
            $this->load->model('restaurant_comments_model');   
            $this->load->model('restaurant_coverage_model'); 
            $this->load->model('restaurant_timing_model');         

            $restaurant = $this->restaurant_model->get_restaurant_detail_by_id($restaurant_id, $day, empty($user_id) ? 0 : $user_id);
            
            if (isset($restaurant->payment_methods) && !empty($restaurant->payment_methods)) 
            {
                $restaurant->payment_methods = $this->payment_method_model->get_by_ids(explode(',', $restaurant->payment_methods));
            } 
            else
            {
                $restaurant->payment_methods = null;
            }

            if(!empty($area))
            {
                $restaurant_id = $restaurant->id;
                $restaurant_coverage_area_details = $this->restaurant_coverage_model->get_restaurant_coverage_area_by_id($restaurant_id, $area);

                if(!empty($restaurant_coverage_area_details) && isset($restaurant_coverage_area_details))
                {         
                    $restaurant->delivery_time = $restaurant_coverage_area_details->delivery_time;
                    $restaurant->delivery_charges = $restaurant_coverage_area_details->delivery_fee;
                    $restaurant->min_order = $restaurant_coverage_area_details->min_order;
                }
                else
                {
                    $delivery_time = null;
                    $delivery_charges = null;
                    $min_order = null;
                }
            }

            $rest_banners = $this->restaurant_model->get_restaurant_banners($restaurant_id);
            $restaurant->banners = $rest_banners;

            $rest_vouchers = $this->restaurant_model->get_promotions($restaurant_id);
            $restaurant->vouchers = $rest_vouchers;

            $rest_comments = $this->restaurant_comments_model->get_by_restaurant_id($restaurant_id);
            $restaurant->comments = $rest_comments;

            $rest_timings = $this->restaurant_comments_model->get_restaurant_timing_by_id($restaurant_id);
            $restaurant->timings = $rest_timings;

            $restaurant_timings = $this->restaurant_timing_model->get_by_id_and_day($restaurant_id);
            $restaurant->rest_timings = $restaurant_timings;

            $categories = $this->restaurant_menu_categories_model->get_by_restaurant_id($restaurant_id);            

            if (isset($categories)) 
            {
                foreach ($categories as $cat) 
                {
                    $items = $this->restaurant_menu_model->get_categories_items($cat->category_id, $user_id);

                    $cat_data['category_id'] = $cat->category_id;
                    $cat_data['category_name'] = $cat->category_name;

                    if (isset($items)) 
                    {
                        $cat_data['category_items'] = $items;
                    } 
                    else 
                    {
                        $cat_data['category_items'] = null;
                    }
                    $cat_ar[] = $cat_data;
                }
            } 
            else 
            {
                $cat_ar = null;
            }

            $restaurant->categories = $cat_ar;

            $json['restaurant_detail'] = $restaurant;

            print_r(json_encode($json));

        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_restaurant_info()
    {
        $area_id = $this->input->post('area_id');
        $rest_id = $this->input->post('restaurant_id');

        if (isset($rest_id)) 
        {
            $lang = "en";
            $this->load->model('restaurant_model');           
            $this->load->model('restaurant_coverage_model'); 
          
            $restaurant = $this->restaurant_model->get_restaurant_info($lang, $rest_id);

            if(!empty($area_id))
            {
                $restaurant_id = $restaurant->id;
                $restaurant_coverage_area_details = $this->restaurant_coverage_model->get_restaurant_coverage_area_by_id($rest_id, $area_id);

                if(!empty($restaurant_coverage_area_details))
                {         
                    $restaurant->delivery_time = $restaurant_coverage_area_details->delivery_time;
                    $restaurant->delivery_charges = $restaurant_coverage_area_details->delivery_fee;
                    $restaurant->min_order = $restaurant_coverage_area_details->min_order;
                }
            }            
            $json['restaurant_info'] = $restaurant;
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }
    }


    public function get_restaurant_info_ar()
    {
        $area_id = $this->input->post('area_id');
        $rest_id = $this->input->post('restaurant_id');

        if (isset($rest_id)) 
        {
            $lang = "ar";
            $this->load->model('restaurant_model');           
            $this->load->model('restaurant_coverage_model'); 
          
            $restaurant = $this->restaurant_model->get_restaurant_info($lang, $rest_id);

            if(!empty($area_id))
            {
                $restaurant_id = $restaurant->id;
                $restaurant_coverage_area_details = $this->restaurant_coverage_model->get_restaurant_coverage_area_by_id($rest_id, $area_id);

                if(!empty($restaurant_coverage_area_details))
                {         
                    $restaurant->delivery_time = $restaurant_coverage_area_details->delivery_time;
                    $restaurant->delivery_charges = $restaurant_coverage_area_details->delivery_fee;
                    $restaurant->min_order = $restaurant_coverage_area_details->min_order;
                }
            }            
            $json['restaurant_info'] = $restaurant;
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_restaurant_by_id_ar()
    {

        if (isset($_POST['user_id']) && isset($_POST['restaurant_id'])) {
            $restaurant_id = $this->input->post('restaurant_id');
            $user_id = $this->input->post('user_id');
            $day = $this->input->post('day');


            $this->load->model('restaurant_model');
            $this->load->model('restaurant_menu_categories_model');
            $this->load->model('restaurant_menu_model');
            $this->load->model('payment_method_model');

            $restaurant = $this->restaurant_model->get_restaurant_detail_by_id_ar($restaurant_id, $day, empty($user_id) ? 0 : $user_id);
            if (isset($restaurant->payment_methods) && !empty($restaurant->payment_methods)) {
                $restaurant->payment_methods = $this->payment_method_model->get_by_ids_ar(explode(',', $restaurant->payment_methods));
            } else {
                $restaurant->payment_methods = null;
            }
            $rest_banners = $this->restaurant_model->get_restaurant_banners($restaurant_id);
            $restaurant->banners = $rest_banners;

            $categories = $this->restaurant_menu_categories_model->get_by_restaurant_id_ar($restaurant_id);

            if (isset($categories)) {
                foreach ($categories as $cat) {

                    $items = $this->restaurant_menu_model->get_categories_items_ar($cat->category_id, $user_id);

                    $cat_data['category_id'] = $cat->category_id;
                    $cat_data['category_name'] = $cat->category_name;

                    if (isset($items)) {
                        $cat_data['category_items'] = $items;
                    } else {
                        $cat_data['category_items'] = null;
                    }
                    $cat_ar[] = $cat_data;
                }
            } else {
                $cat_ar = null;
            }

            $restaurant->categories = $cat_ar;
            $json['restaurant_detail'] = $restaurant;

            print_r(json_encode($json));

        } else {
            echo 'NOT_ALLOWED';
        }
    }


    public function search_coverage_area()
    {             
        $this->load->model('restaurant_coverage_model');
        $area = $this->input->get('area');

        if($area == false)
        {
            $area = $this->input->post('area');          
        }
        log_message('error','Area ID is = '+$area);

        $restaurants = $this->restaurant_coverage_model->restaurant_coverage_search($area);  
        if(!empty($restaurants) && isset($restaurants))
        {
            foreach($restaurants as $restaurant)
            {
                $restaurants_ar[] = $restaurant;
            }
        }
        else
        {
            $restaurants_ar[] = 'null';
        }  

        $json['restaurants'] = $restaurants_ar;
        print_r(json_encode($json)); 
    }

    public function search_restaurants()
    {
        $user_id = $this->input->post('user_id');

        if($user_id == false)
        {
            $user_id = $this->input->post('user_id');          
        }

        if (isset($user_id)) 
        {
            $this->load->model('restaurant_model');
            $this->load->model('payment_method_model');
            $this->load->model('restaurant_coverage_model');
            
            $catering = $this->input->post('catering');
            $cuisine = $this->input->post('cuisine');
            
            $area = $this->input->get('area');
            if($area == false)
            {
                $area = $this->input->post('area');          
            }

            $restaurant_id = $this->input->get('restaurant_id');
            if($restaurant_id == false)
            {
                $restaurant_id = $this->input->post('restaurant_id');          
            }

            $page = $this->input->post('page_number');
            $sort_by = $this->input->post('sort_by');
            
            $free_delivery = $this->input->get('free_delivery');
            if($free_delivery == false)
            {
                $free_delivery = $this->input->post('free_delivery');          
            }
            
            $discount_avail = $this->input->get('discount_avail');
            if($discount_avail == false)
            {
                $discount_avail = $this->input->post('discount_avail');          
            }

            $has_promotions = $this->input->get('has_promotions');
            if($has_promotions == false)
            {
                $has_promotions = $this->input->post('has_promotions');          
            }

            $cod_avail = $this->input->get('cod_avail');
            if($cod_avail == false)
            {
                $cod_avail = $this->input->post('cod_avail');          
            }

            $split_avail = $this->input->get('split_avail');
            if($split_avail == false)
            {
                $split_avail = $this->input->post('split_avail');          
            }

            $open_rest = $this->input->get('open_rest');
            if($open_rest == false)
            {
                $open_rest = $this->input->post('open_rest');          
            }

            
            $rating = $this->input->get('rating');
            if($rating == false)
            {
                $rating = $this->input->post('rating');      
            }

            $min_price = $this->input->get('min_price');
            if($min_price == false)
            {
                 $min_price = $this->input->post('min_price');
            }

            $max_price = $this->input->get('max_price');
            if($max_price == false)
            {
                $max_price = $this->input->post('max_price');
            }

            $search_term = $this->input->get('search_term');
            if($search_term == false)
            {
                $search_term = $this->input->post('search_term');
            }

            $filter['catering'] = isset($catering) && !empty($catering) ? $catering : null;
            $filter['cuisine'] = isset($cuisine) && !empty($cuisine) ? $cuisine : null;
            $filter['area'] = isset($area) && !empty($area) ? $area : null;
            $filter['restaurant_id'] = isset($restaurant_id) && !empty($restaurant_id) ? $restaurant_id : null;
            $filter['sort_by'] = isset($sort_by) && !empty($sort_by) ? $sort_by : null;
            $filter['free_delivery'] = isset($free_delivery) && !empty($free_delivery) ? $free_delivery : null;
            $filter['discount_avail'] = isset($discount_avail) && !empty($discount_avail) ? $discount_avail : null;
            $filter['has_promotions'] = isset($has_promotions) && !empty($has_promotions) ? $has_promotions : null;
            $filter['cod_avail'] = isset($cod_avail) && !empty($cod_avail) ? $cod_avail : null;
            $filter['split_avail'] = isset($split_avail) && !empty($split_avail) ? $split_avail : null;
            $filter['openrest'] = isset($open_rest) && !empty($open_rest) ? $open_rest : null;
            $filter['rating'] = isset($rating) && !empty($rating) ? $rating : null;
            $filter['min_price'] = isset($min_price) && !empty($min_price) ? $min_price : null;
            $filter['max_price'] = isset($max_price) && !empty($max_price) ? $max_price : null;
            $filter['search_term'] = isset($search_term) && !empty($search_term) ? $search_term : null;
            $page = isset($page) && !empty($page) ? $page : 0;
            $user_id = isset($user_id) && !empty($user_id) ? $user_id : 0;
            $result_per_page = 10;

            $restaurants = $this->restaurant_model->restaurant_search($filter, $result_per_page, $result_per_page * $page, $user_id);
            
            if (isset($restaurants['results'])) 
            {
                foreach ($restaurants['results'] as $restaurant) 
                {
                    if (isset($restaurant->payment_methods) && !empty($restaurant->payment_methods)) 
                    {
                        $restaurant->payment_methods = $this->payment_method_model->get_by_ids(explode(',', $restaurant->payment_methods));
                    } 
                    else 
                    {
                        $restaurant->payment_methods = null;
                    }

                    if(!empty($area))
                    {
                        $restaurant_id = $restaurant->id;
                        $restaurant_coverage_area_details = $this->restaurant_coverage_model->get_restaurant_coverage_area_by_id($restaurant_id, $area);

                        if(!empty($restaurant_coverage_area_details) && isset($restaurant_coverage_area_details))
                        {
                            
                            $restaurant->delivery_time = $restaurant_coverage_area_details->delivery_time;
                            $restaurant->delivery_charges = $restaurant_coverage_area_details->delivery_fee;
                            $restaurant->min_order = $restaurant_coverage_area_details->min_order;
                        
                        }
                        else
                        {
                            $delivery_time = null;
                            $delivery_charges = null;
                            $min_order = null;
                        }
                    }
                    $restaurants_ar[] = $restaurant;
                }
                $json['restaurant'] = $restaurants_ar;
            } 
            else 
            {
                $json['restaurant'] = null;
            }

            $json['total_results'] = $restaurants['totalres'];
            $json['has_more'] = $restaurants['has_more'];
            $json['user_input_area'] = $this->input->post('area');
            $json['user_input_cuisine'] = $this->input->post('cuisine');
                  
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }

    }

    public function search_restaurants_ar()
    {
        $user_id = $this->input->post('user_id');

        if (isset($user_id)) {
            $this->load->model('restaurant_model');
            $this->load->model('payment_method_model');

            $catering = $this->input->post('catering');
            $cuisine = $this->input->post('cuisine');
            $area = $this->input->post('area');
            $page = $this->input->post('page_number');
            $sort_by = $this->input->post('sort_by');
            $free_delivery = $this->input->post('free_delivery');
            $discount_avail = $this->input->post('discount_avail');
            $rating = $this->input->post('rating');
            $min_price = $this->input->post('min_price');
            $max_price = $this->input->post('max_price');
            $search_term = $this->input->post('search_term');


            $filter['catering'] = isset($catering) && !empty($catering) ? $catering : null;
            $filter['cuisine'] = isset($cuisine) && !empty($cuisine) ? $cuisine : null;
            $filter['area'] = isset($area) && !empty($area) ? $area : null;
            $filter['sort_by'] = isset($sort_by) && !empty($sort_by) ? $sort_by : null;
            $filter['free_delivery'] = isset($free_delivery) && !empty($free_delivery) ? $free_delivery : null;
            $filter['discount_avail'] = isset($discount_avail) && !empty($discount_avail) ? $discount_avail : null;
            $filter['rating'] = isset($rating) && !empty($rating) ? $rating : null;
            $filter['min_price'] = isset($min_price) && !empty($min_price) ? $min_price : null;
            $filter['max_price'] = isset($max_price) && !empty($max_price) ? $max_price : null;
            $filter['search_term'] = isset($search_term) && !empty($search_term) ? $search_term : null;
            $page = isset($page) && !empty($page) ? $page : 0;
            $user_id = isset($user_id) && !empty($user_id) ? $user_id : 0;
            $result_per_page = 10;

            $restaurants = $this->restaurant_model->restaurant_search_ar($filter, $result_per_page, $result_per_page * $page, $user_id);

            if (isset($restaurants['results'])) {
                foreach ($restaurants['results'] as $restaurant) {
                    if (isset($restaurant->payment_methods) && !empty($restaurant->payment_methods)) {
                        $restaurant->payment_methods = $this->payment_method_model->get_by_ids_ar(explode(',', $restaurant->payment_methods));
                    } else {
                        $restaurant->payment_methods = null;
                    }
                    $restaurants_ar[] = $restaurant;
                }
                $json['restaurant'] = $restaurants_ar;
            } else {
                $json['restaurant'] = null;
            }
            $json['total_results'] = $restaurants['totalres'];
            $json['has_more'] = $restaurants['has_more'];

            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }

    }

    public function bookmark_restaurant()
    {


        if (isset($_POST['restaurant_id']) && isset($_POST['user_id'])) {

            if ($this->ion_auth_model->check_user($_POST['user_id'])) {
                $this->load->model('user_fav_restaurant_model');
                $checked = $this->user_fav_restaurant_model->check_res_bookmark($_POST['user_id'], $_POST['restaurant_id']);
                if (isset($checked)) {
                    $this->user_fav_restaurant_model->delete($checked->id);
                    $json['status'] = "DELETED";
                } else {
                    $this->user_fav_restaurant_model->create($_POST['user_id'], $_POST['restaurant_id']);
                    $json['status'] = "ADDED";
                }
            } else {

                $json['status'] = "USER_NOT_FOUND";
            }

            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }

    }

    public function bookmark_menu_item()
    {


        if (isset($_POST['item_id']) && isset($_POST['user_id'])) {

            if ($this->ion_auth_model->check_user($_POST['user_id'])) {

                $this->load->model('user_fav_items_model');

                $checked = $this->user_fav_items_model->check_item_bookmark($_POST['user_id'], $_POST['item_id']);
                if (isset($checked)) {
                    $this->user_fav_items_model->delete($checked->id);
                    $json['status'] = "DELETED";
                } else {
                    $this->user_fav_items_model->create($_POST['user_id'], $_POST['item_id']);
                    $json['status'] = "ADDED";
                }
            } else {

                $json['status'] = "USER_NOT_FOUND";
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }

    }

    public function get_user_bookmarks()
    {
        $user_id = $this->input->post('user_id');

        if (isset($user_id)) {
            if ($this->ion_auth_model->check_user($user_id)) {
                $this->load->model('restaurant_model');
                $this->load->model('user_fav_items_model');
                $this->load->model('payment_method_model');
                $this->load->model('user_fav_restaurant_model');

                $restaurant_ids = $this->user_fav_restaurant_model->get_all_by_user_id($user_id);

                if (isset($restaurant_ids)) {
                    foreach ($restaurant_ids as $res) {

                        $restau = $this->restaurant_model->get_restaurant_detail_by_id($res->restaurant_id, 'null', empty($user_id) ? 0 : $user_id);
                        if (isset($restau->payment_methods) && !empty($restau->payment_methods)) {
                            $restau->payment_methods = $this->payment_method_model->get_by_ids(explode(',', $restau->payment_methods));
                        } else {
                            $restau->payment_methods = null;
                        }

                        $resturants[] = $restau;
                    }
                    $json['restaurants'] = $resturants;
                } else {
                    $json['restaurants'] = null;
                }
                $items = $this->user_fav_items_model->get_user_fav_items($user_id);
                $json['items'] = $items;
            } else {
                $json['status'] = "USER_NOT_FOUND";
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_user_bookmarks_ar()
    {
        $user_id = $this->input->post('user_id');

        if (isset($user_id)) {
            if ($this->ion_auth_model->check_user($user_id)) {
                $this->load->model('restaurant_model');
                $this->load->model('user_fav_items_model');
                $this->load->model('user_fav_restaurant_model');
                $this->load->model('payment_method_model');

                $restaurant_ids = $this->user_fav_restaurant_model->get_all_by_user_id($user_id);

                if (isset($restaurant_ids)) {
                    foreach ($restaurant_ids as $res) 
                    {
                        $restau = $this->restaurant_model->get_restaurant_detail_by_id_ar($res->restaurant_id, 'null', empty($user_id) ? 0 : $user_id);
                        if (isset($restau->payment_methods) && !empty($restau->payment_methods)) 
                        {
                            $restau->payment_methods = $this->payment_method_model->get_by_ids_ar(explode(',', $restau->payment_methods));
                        } 
                        else 
                        {
                            $restau->payment_methods = null;
                        }

                        $resturants[] = $restau;
                    }
                    $json['restaurants'] = $resturants;
                } else {
                    $json['restaurants'] = null;
                }
                $items = $this->user_fav_items_model->get_user_fav_items_ar($user_id);
                $json['items'] = $items;
            } else {
                $json['status'] = "USER_NOT_FOUND";
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }
    }


    public function add_restaurant_review_guest()
    {
        if (isset($_POST['restaurant_id']) && isset($_POST['comment']) && isset($_POST['title']) && isset($_POST['rating'])) 
        {
            $this->load->model('restaurant_comments_model');
            $data['restaurant_id'] = $this->input->post('restaurant_id');
            $data['comment'] = $this->input->post('comment');
            $data['title'] = $this->input->post('title');
            $data['rating'] = $this->input->post('rating');
            $this->restaurant_comments_model->create_guest($data);            
            $json['status'] = "OK";
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }

    }

    public function add_restaurant_review()
    {
        if (isset($_POST['restaurant_id']) && isset($_POST['comment']) && isset($_POST['title']) && isset($_POST['rating'])) 
        {
            $this->load->model('restaurant_comments_model');

            if(!empty($_POST['user_id']))
            {
                if ($this->ion_auth_model->check_user($_POST['user_id'])) 
                {
                    $data['user_id'] = $this->input->post('user_id');
                    $data['restaurant_id'] = $this->input->post('restaurant_id');
                    $data['comment'] = $this->input->post('comment');
                    $data['title'] = $this->input->post('title');
                    $data['rating'] = $this->input->post('rating');

                    $checked = $this->restaurant_comments_model->check_comment_exist($data['user_id'], $data['restaurant_id']);
                    if (!empty($checked))
                    {
                        $this->restaurant_comments_model->update($checked->id, $data);
                    } 
                    else 
                    {
                        $this->restaurant_comments_model->create($data);
                    }
                    $json['status'] = "OK";
                } 
                else 
                {
                    $json['status'] = "USER_NOT_FOUND";
                }
            }
            else
            {
                $data['user_id'] = null;
                $data['restaurant_id'] = $this->input->post('restaurant_id');
                $data['comment'] = $this->input->post('comment');
                $data['title'] = $this->input->post('title');
                $data['rating'] = $this->input->post('rating');
                $this->restaurant_comments_model->create($data);
                $json['status'] = "OK";
            }
        } 
        else 
        {
            $json['status'] = "INCOMPLETE_INFO";
        }
        print_r(json_encode($json));
    }

    public function contact_us()
    {
        $this->load->model('feedback_model');
        if (!empty($_POST['subject']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['detail']))
         {
            if(!empty($_POST['user_id']))
            {
                if ($this->ion_auth_model->check_user($_POST['user_id'])) 
                {
                    $data['user_id'] = $this->input->post('user_id');
                    $data['subject'] = $this->input->post('subject');
                    $data['phone'] = $this->input->post('phone');
                    $data['email'] = $this->input->post('email');   
                    $data['name'] = $this->input->post('name'); 
                    $data['detail'] = $this->input->post('detail');
                    $this->feedback_model->create($data);
                    $json['status'] = "OK";
                } 
                else 
                {
                    $json['status'] = "USER_NOT_FOUND";
                }
            }
            else
            {
                $data['user_id'] = null;
                $data['subject'] = $this->input->post('subject');
                $data['phone'] = $this->input->post('phone');
                $data['email'] = $this->input->post('email');   
                $data['name'] = $this->input->post('name'); 
                $data['detail'] = $this->input->post('detail');
                $this->feedback_model->create($data);
                $json['status'] = "OK";
            }

        } 
        else 
        {
            $json['status'] = "INCOMPLETE_DETAILS";
        }
        print_r(json_encode($json));
    }

    public function contact_us_guest()
    {
        $this->load->model('feedback_model');
        if (isset($_POST['subject']))
        {

            $data['name'] = $this->input->post('name');
            $data['subject'] = $this->input->post('subject');
            $data['phone'] = $this->input->post('phone');           
            $data['email'] = $this->input->post('email');   
            $data['detail'] = $this->input->post('detail');
            
            $this->feedback_model->createGuest($data);
            $json['status'] = "OK";
            
            print_r(json_encode($json));

        } else {
            echo 'NOT_ALLOWED';
        }

    }

    public function about_us()
    {
        $this->load->model('about_us_model');
        $json['about_us'] = $this->about_us_model->get_all();
        print_r(json_encode($json));
    }

    public function about_us_ar()
    {
        $this->load->model('about_us_model');
        $json['about_us'] = $this->about_us_model->get_all_ar();
        print_r(json_encode($json));
    }

    public function get_faqs()
    {
        $this->load->model('faqs_model');
        $json['faqs'] = $this->faqs_model->get_all();
        print_r(json_encode($json));
    }

    public function get_faqs_ar()
    {
        $this->load->model('faqs_model');
        $json['faqs'] = $this->faqs_model->get_all_ar();
        print_r(json_encode($json));
    }

    public function get_privacy_policy()
    {
        $this->load->model('privacy_policy_model');
        $json['privacy_policy'] = $this->privacy_policy_model->get_all();
        print_r(json_encode($json));
    }

    public function get_privacy_policy_ar()
    {
        $this->load->model('privacy_policy_model');
        $json['privacy_policy'] = $this->privacy_policy_model->get_all_ar();
        print_r(json_encode($json));
    }

    public function get_checkout_data()
    {
        $restaurant_id = $this->input->post('restaurant_id');
        $user_id = $this->input->post('user_id');

        if (isset($restaurant_id)) 
        {
            $this->load->model('payment_method_model');
            $this->load->model('restaurant_branches_model');
            $this->load->model('user_addresses_model');
            $this->load->model('user_points_model');

            $json['payment_types'] = $this->payment_method_model->get_all();
            $json['restaurant_branches'] = $this->restaurant_branches_model->get_by_restaurant_id($restaurant_id);
            if (isset($user_id) && !empty($user_id))
            {
                $json['user_addresses'] = $this->user_addresses_model->get_all_by_user_id($user_id);
                $points = $this->user_points_model->get_user_points($user_id);
                $json['user_points'] = $points->points;
            }
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_checkout_data_test()
    {
        $restaurant_id = $this->input->post('restaurant_id');
        $user_id = $this->input->post('user_id');

        if (isset($restaurant_id)) 
        {
            $this->load->model('payment_method_model');
            $this->load->model('restaurant_branches_model');
            $this->load->model('restaurant_coverage_model');
            $this->load->model('user_addresses_model');
            $this->load->model('user_points_model');

            $json['payment_types'] = $this->payment_method_model->get_all();
            $json['restaurant_branches'] = $this->restaurant_branches_model->get_by_restaurant_id($restaurant_id);
            if (isset($user_id) && !empty($user_id))
            {
                $json['user_addresses'] = $this->user_addresses_model->get_all_by_user_id($user_id);
                $user_areas = $this->user_addresses_model->get_areas_by_user_id($user_id);
                $area_ids = array();
                foreach ($user_areas as $user_area)
                {
                    $area_ids[] = $user_area['area_id'];
                }
                
                $json['areas_coverage'] = $this->restaurant_coverage_model->get_areas_coverage($area_ids);
                $points = $this->user_points_model->get_user_points($user_id);
                $json['user_points'] = $points->points;
            }
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_checkout_data_ar()
    {
        $restaurant_id = $this->input->post('restaurant_id');
        $user_id = $this->input->post('user_id');

        if (isset($restaurant_id)) 
        {
            $this->load->model('payment_method_model');
            $this->load->model('restaurant_branches_model');
            $this->load->model('user_addresses_model');
            $this->load->model('user_points_model');

            $json['payment_types'] = $this->payment_method_model->get_all_ar();
            $json['restaurant_branches'] = $this->restaurant_branches_model->get_by_restaurant_id_ar($restaurant_id);
            if (isset($_POST['user_id'])) 
            {
                $json['user_addresses'] = $this->user_addresses_model->get_all_by_user_id($user_id);
                $points = $this->user_points_model->get_user_points($user_id);
                $json['user_points'] = $points->points;
            }
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_user_points()
    {

        if (isset($_POST['user_id'])) {
            if ($this->ion_auth_model->check_user($_POST['user_id'])) {

                $this->load->model('user_points_model');

                $points = $this->user_points_model->get_user_points($_POST['user_id']);
                $json['user_points'] = $points->points;

            } else {
                $json['status'] = "USER_NOT_FOUND";
            }

            print_r(json_encode($json));

        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function user_order_history_new()
    {

        $user_id = $this->input->post('user_id');

        if($user_id == false)
        {
            $user_id = $this->input->get('user_id');          
        }

        $day = $this->input->post('day');

        if($day == false)
        {
            $day = $this->input->get('day');          
        }

        if (isset($user_id) && isset($day)) {

            if ($this->ion_auth_model->check_user($user_id)) 
            {
                $this->load->model('transaction_model');
                $this->load->model('transaction_detail_model');
                $this->load->model('transaction_item_details_model');
                $order_history = $this->transaction_model->get_user_order_history($user_id);
                if (isset($order_history)) 
                {
                    $orders = $this->transaction_model->get_by_order_id($order_history[0]['order_id'], $day);
                    foreach ($orders as $order) 
                    {
                        $items = $this->transaction_detail_model->get_items_by_trans_id($order->trans_id);
                        if (isset($items))
                         {
                            foreach ($items as $item)
                             {
                                $item['attribute_list'] = $this->transaction_item_details_model->get_item_attributes($item['id']);
                                $item_ar[] = $item;

                            }
                        }
                        $order->items = isset($item_ar) ? $item_ar : NULL;
                        $order_ar[] = $order;
                        unset($item_ar);
                    }
                    $json['latest_order'] = $order_ar;
                    $json['order_history'] = $order_history;
                } else {
                    $json['latest_order'] = null;
                    $json['order_history'] = null;
                }
            } else {
                $json['status'] = 'USER_NOT_FOUND';
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }

    }

    public function user_order_history_ar()
    {
        $user_id = $this->input->post('user_id');
        
        $day = $this->input->post('day');

        if (isset($user_id) && isset($day)) {

            if ($this->ion_auth_model->check_user($user_id)) {

                $this->load->model('transaction_model');
                $this->load->model('transaction_detail_model');
                $this->load->model('transaction_item_details_model');
                $order_history = $this->transaction_model->get_user_order_history_ar($user_id);
                if (isset($order_history)) {
                    $orders = $this->transaction_model->get_by_order_id_ar($order_history[0]['order_id'], $day);
                    foreach ($orders as $order) {
                        $items = $this->transaction_detail_model->get_items_by_trans_id_ar($order->trans_id);
                        if (isset($items)) {
                            foreach ($items as $item) {
                                $item['attribute_list'] = $this->transaction_item_details_model->get_item_attributes_ar($item['id']);
                                $item_ar[] = $item;
                            }
                        }
                        $order->items = isset($item_ar) ? $item_ar : NULL;
                        $order_ar[] = $order;
                        unset($item_ar);
                    }
                    $json['latest_order'] = $order_ar;
                    $json['order_history'] = $order_history;
                } else {
                    $json['latest_order'] = null;
                    $json['order_history'] = null;
                }
            } else {
                $json['status'] = 'USER_NOT_FOUND';
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }

    }

    public function get_order_by_id_new()
    {
        $order_id = $this->input->post('order_id');

        if($order_id == false)
        {
            $order_id = $this->input->get('order_id');          
        }

        $day = $this->input->post('day');

        if($day == false)
        {
            $day = $this->input->get('day');          
        }

        if (isset($order_id) && isset($day)) {
            $this->load->model('transaction_model');
            $this->load->model('transaction_detail_model');
            $this->load->model('transaction_item_details_model');
            $order_detail = $this->transaction_model->get_by_order_id($order_id, $day);
            if (isset($order_detail)) {
                foreach ($order_detail as $order) {
                    $items = $this->transaction_detail_model->get_items_by_trans_id($order->trans_id);
                    if (isset($items)) {
                        foreach ($items as $item) {
                            $item['attribute_list'] = $this->transaction_item_details_model->get_item_attributes($item['id']);
                            $item_ar[] = $item;
                        }
                    }
                    $order->items = isset($item_ar) ? $item_ar : NULL;
                    $order_ar[] = $order;
                    unset($item_ar);
                }
                $json['order_details'] = $order_ar;
                unset($order_ar);
            } else {
                $json['order_details'] = null;
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_order_by_id_ar()
    {
        $order_id = $this->input->post('order_id');
        $day = $this->input->post('day');

        if (isset($order_id) && isset($day)) {
            $this->load->model('transaction_model');
            $this->load->model('transaction_detail_model');
            $this->load->model('transaction_item_details_model');
            $order_detail = $this->transaction_model->get_by_order_id_ar($order_id, $day);
            if (isset($order_detail)) {
                foreach ($order_detail as $order) {
                    $items = $this->transaction_detail_model->get_items_by_trans_id_ar($order->trans_id);
                    if (isset($items)) {
                        foreach ($items as $item) {
                            $item['attribute_list'] = $this->transaction_item_details_model->get_item_attributes_ar($item['id']);
                            $item_ar[] = $item;
                        }
                    }
                    $order->items = isset($item_ar) ? $item_ar : NULL;
                    $order_ar[] = $order;
                    unset($item_ar);
                }
                $json['order_details'] = $order_ar;
                unset($order_ar);
            } else {
                $json['order_details'] = null;
            }
            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function get_user_orders()
    {
        $user_id = $this->input->post('user_id');

        if($user_id == false)
        {
            $user_id = $this->input->get('user_id');          
        }
        if (empty($user_id)) {
            die("NOT ALLOWED");
        }
        $this->load->model('transaction_model');
        $json['user_orders'] = $this->transaction_model->get_user_track_order_history($user_id);

        print_r(json_encode($json));
    }

    public function get_user_orders_today()
    {
        $user_id = $this->input->post('user_id');

        if($user_id == false)
        {
            $user_id = $this->input->get('user_id');          
        }
        if (empty($user_id)) {
            die("NOT ALLOWED");
        }
        $this->load->model('transaction_model');
        $json['user_orders'] = $this->transaction_model->get_user_track_order_history_today($user_id);

        print_r(json_encode($json));
    }

    public function get_user_orders_ar()
    {
        $user_id = $this->input->post('user_id');
        if (empty($user_id)) {
            die("NOT ALLOWED");
        }
        $this->load->model('transaction_model');
        $json['user_orders'] = $this->transaction_model->get_user_track_order_history_ar($user_id);

        print_r(json_encode($json));
    }


    public function get_user_order_status()
    {
        $order_id = $this->input->post('order_id');
        if (empty($order_id)) 
        {
            die("NOT ALLOWED");
        }
        $this->load->model('transaction_model');
        $json = $this->transaction_model->get_user_order_status($order_id);
        print_r(json_encode($json));
    }

    public function get_item_attributes()
    {
        $item_id = $this->input->post('item_id');

        if($item_id == false)
        {
            $item_id = $this->input->get('item_id');          
        }
        log_message('error','item_id = '+$item_id);
        
        if (!empty($item_id) && isset($item_id)) {
            $this->load->model('restaurant_menu_items_model');

            $item_groups = $this->restaurant_menu_items_model->get_item_groups($item_id);
            if (isset($item_groups)) {
                foreach ($item_groups as $group) {
                    $group->attributes = $this->restaurant_menu_items_model->get_item_group_attributes($group->id);

                    $groups_ar[] = $group;
                }
                $json['item_options'] = $groups_ar;
            } else {
                $json['item_options'] = null;
            }
            print_r(json_encode($json));
        } else {
            die('NOT ALLOWED');
        }
    }

    public function get_item_attributes_ar()
    {
        $item_id = $this->input->post('item_id');
        if (!empty($item_id) && isset($item_id)) {
            $this->load->model('restaurant_menu_items_model');

            $item_groups = $this->restaurant_menu_items_model->get_item_groups_ar($item_id);
            if (isset($item_groups)) {
                foreach ($item_groups as $group) {
                    $group->attributes = $this->restaurant_menu_items_model->get_item_group_attributes_ar($group->id);

                    $groups_ar[] = $group;
                }
                $json['item_options'] = $groups_ar;
            } else {
                $json['item_options'] = null;
            }
            print_r(json_encode($json));
        } else {
            die('NOT ALLOWED');
        }
    }

    function generateNewOrderId()
    {
        $this->load->model('transaction_model');
        $order_id = $this->transaction_model->get_last_order_id();
        
        if(isset($order_id))
        {
            $order_id = intval($order_id);
            $order_id++;
        }
        else
        {
            $order_id = 1; 
        }

        $order_id = str_pad($order_id, 8, '0', STR_PAD_LEFT);
        return $order_id;
    }

    function generateNewTempOrderId()
    {
        $this->load->model('temp_transaction_model');
        $order_id = $this->temp_transaction_model->get_last_order_id();
        
        if(isset($order_id))
        {
            $order_id = intval($order_id);
            $order_id++;
        }
        else
        {
            $order_id = 1; 
        }

        $order_id = str_pad($order_id, 8, '0', STR_PAD_LEFT);
        return $order_id;
    }

    public function cod_checkout()
    {

        $data = $this->input->post('cart');
        $fdata = json_decode($data);
        if ($fdata) 
        {
            log_message('error','Inside If ') ;
            $this->load->model('user_addresses_model');
            $user_info = $this->user_addresses_model->get_user_info_for_order_id($fdata->user_id, $fdata->restaurants[0]->selected_user_address_id);
            if (isset($user_info) && !empty($user_info)) 
            {
                $user_info->points_used = $fdata->points_used;
                $order_info = $this->placeTempOrder($fdata->restaurants, $user_info, false, false);

                $json['status'] = 'OK';
                $json['points'] = $order_info['points'];
                $json['order_id'] = $order_info['order_id'];
                log_message('error','Inside If 2 - ' . json_encode($json)) ;
                print_r(json_encode($json));
            } 
            else
            {
                log_message('error','Inside Else - innner') ;
                print_r(json_encode(array('status' => 'NO_USER_ADDRESS_FOUND')));
            }
        } 
        else
        {
            log_message('error','Inside Else - outer') ;
            echo 'NOT_ALLOWED';
        }
    }

    private function placeTempOrder($cart_contents, $user_order_data, $guest_user = false, $temp_order = true)
    {
        $total_bill = 0;
        $str = "A";

        if(!$temp_order)
        {
            $order_id = $this->generateNewOrderId();
        }
        else
        {
            $order_id = $this->generateNewTempOrderId();
        }
        log_message('error','temp_order => '.$temp_order);
        log_message('error','order_id => '.$order_id);

        foreach ($cart_contents as $cart_content) 
        {
            if(count($cart_contents) > 1)
            {
                $order_id = $order_id.$str;
            }
            
            $this->load->model('transaction_model');
            $this->load->model('payment_method_model');
            $this->load->model('restaurant_model');
            $this->load->model('restaurant_menu_items_model');
            $this->load->model('branch_city_model');   
            $this->load->model('temp_transaction_model');         
            
            $t_data['order_id'] = $order_id;
            $t_data['user_id'] = $user_order_data->user_id;
            $t_data['user_name'] = $user_order_data->user_name;
            $t_data['user_address_id'] = $user_order_data->user_address_id;
            $t_data['user_address'] = $user_order_data->user_address;
            $t_data['user_contactno'] = $user_order_data->user_contactno;
            $t_data['user_email'] = $user_order_data->user_email;
            $t_data['order_other_info'] = isset($user_order_data->order_other_info) ? $user_order_data->order_other_info : null;
            $t_data['points_used'] = isset($user_order_data->points_used) ? $user_order_data->points_used : 0;
            $t_data['restaurant_id'] = $cart_content->rest_id;
            $t_data['expected_order_time'] = isset($cart_content->expected_order_time) ? $cart_content->expected_order_time : null;
            $t_data['comment'] = isset($cart_content->comment) ? $cart_content->comment : null;
            $t_data['discount_type'] = $cart_content->discount_type;

            $pay_name = $this->payment_method_model->get_payment_name($cart_content->payment_method_id);
            $t_data['payment_method'] = $pay_name->name;

            if (isset($cart_content->rest_id) && isset($cart_content->area_id))
            {
                $serving_branch = $this->branch_city_model->get_serving_branch($cart_content->rest_id, $cart_content->area_id); 
            }

            $t_data['branch_id'] = (isset($serving_branch)) ? $serving_branch->branch_id : null;

            if($t_data['discount_type'] == "voucher_used")
            {
                $t_data['promotion_code'] = $cart_content->promotion_code;
            }

            $t_data['delivery_pickup'] = $cart_content->delivery_pickup;
            $t_data['payment_method_id'] = $cart_content->payment_method_id;
            $t_data['pickup_address_id'] = !empty($cart_content->pickup_address_id) ? $cart_content->pickup_address_id : null;
            $t_data['delivery_pickup_time'] = !empty($cart_content->delivery_pickup_time) ? $cart_content->delivery_pickup_time : null;
            
            $p = round($cart_content->rest_discount, 3) / round($cart_content->rest_subtotal, 3);
            
            $dic_amt = $p * 100;
            $t_data['discount'] = round($dic_amt, 2);
            $t_data['discount_type'] = isset($cart_content->discount_type) ? $cart_content->discount_type : '';
            $t_data['delivery_charges'] = round($cart_content->rest_deliver_charges, 3);
            $t_data['total_amount'] = round($cart_content->rest_total, 3);

            $t_data['subtotal'] = round($cart_content->rest_subtotal, 3);
            $t_data['payment_transaction_id'] = null;
            $t_data['datetime'] = null;
            $t_data['restaurant_id'] = $cart_content->rest_id;
            $rest_name = $this->restaurant_model->get_restaurant_name_commission($cart_content->rest_id);
            $t_data['restaurant_name'] = $rest_name->name;

            if (isset($rest_name->lug_commision) && !empty($rest_name->lug_commision)) 
            {
                if ($rest_name->commision_type == 2) 
                {
                    $t_data['lugmah_commission'] = round($t_data['total_amount'] * ($rest_name->lug_commision / 100), 3);
                } 
                else 
                {
                    $t_data['lugmah_commission'] = $rest_name->lug_commision;
                }
            } 
            else 
            {
                $t_data['lugmah_commission'] = 0;
            }
            $t_data['created_on'] = time();
            $total_bill = $total_bill + $t_data['total_amount'];

            if ($temp_order) 
            {
                $trans_id = $this->temp_transaction_model->create_temp_trans_rec($t_data);
            } 
            else 
            {
                $trans_id = $this->temp_transaction_model->create_trans_rec($t_data);
            }

            foreach ($cart_content->rest_item_list as $item) 
            {
                $td_data['trans_id'] = $trans_id;
                $td_data['item_id'] = $item->id;
                $i_details = $this->restaurant_menu_items_model->get_item_detail_by_id($item->id);
                $td_data['item_name'] = $i_details->name;
                $td_data['item_price'] = $i_details->price;
                $td_data['item_quantity'] = $item->quantity;

                if ($temp_order) 
                {
                    $trans_detail_id = $this->transaction_model->create_temp_trans_detail_rec($td_data);
                } 
                else 
                {
                    $trans_detail_id = $this->transaction_model->create_trans_detail_rec($td_data);
                }
                if (isset($item->itemAttributes) && !empty($item->itemAttributes)) 
                {
                    foreach ($item->itemAttributes as $value) 
                    {
                        $tda_data['trans_detail_id'] = $trans_detail_id;
                        $tda_data['item_attribute_id'] = $value->id;
                        $tda_data['item_attribute_name'] = $value->attr_name;
                        $tda_data['item_attribute_price'] = $value->attr_price;
                        if ($temp_order) 
                        {
                            $this->transaction_model->create_temp_trans_item_detail_rec($tda_data);
                        } 
                        else 
                        {
                            $this->transaction_model->create_trans_item_detail_rec($tda_data);
                        }
                    }
                }
            }
            $new_order_ids[] = $order_id;  

            $order_id = mb_substr($order_id, 0, 8);
            ++$str;
        }

        if (!$guest_user && !$temp_order) 
        {
            if (isset($user_order_data->points_used) && !empty($user_order_data->points_used) && $user_order_data->points_used != 0) {
                $up_data['transaction_order_id'] = $order_id;
                $up_data['user_id'] = $user_order_data->user_id;
                $up_data['point'] = -$user_order_data->points_used;
                $this->transaction_model->user_order_points($up_data);
            } 
            else 
            {
                $up_data['transaction_order_id'] = $order_id;
                $up_data['user_id'] = $user_order_data->user_id;
                $up_data['point'] = round($total_bill * 0.1, 3);
                $this->transaction_model->user_order_points($up_data);
            }
            $r_data['points'] = $up_data['point'];
        }
 
        if (!$temp_order) 
        {
            $this->sendOrderMail($order_id,$user_order_data->user_email); 
        }

        $r_data['order_id'] = $new_order_ids;

        return $r_data;
    }

    function generateRandomString($length = 22)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    public function payment_checkout()
    {
        $cart_id = $this->input->post('cart_id');
        
        if($cart_id == false)
        {
            $cart_id = $this->input->get('cart_id');          
        }

        $payment_id = $this->input->post('payment_id');
        if($payment_id == false)
        {
            $payment_id = $this->input->get('payment_id');          
        }

        $timestamp = $this->input->post('timestamp');
        if($timestamp == false)
        {
            $timestamp = $this->input->get('timestamp');          
        }
        log_message('error','cart_id==>'.$cart_id);
        log_message('error','timestamp==>'.$timestamp);
        log_message('error','payment_id==>'.$payment_id);
        if (!empty($cart_id) && !empty($payment_id) && !empty($timestamp)) 
        {
            $res = $this->placeUserOrder($cart_id, $payment_id, $timestamp);

            if (!isset($res)) 
            {
                $json['status'] = 'NO CART FOUND';
                print_r(json_encode($json));
            } 
            else 
            {
                $json['status'] = 'OK';
                $json['points'] = $res['points'];
                print_r(json_encode($json));
            }
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    private function placeUserOrder($cart_order_id = null, $payment_transaction_id = null, $payment_datetime = null, $guest_user = false)
    {
        if (isset($cart_order_id) && !empty($cart_order_id)) 
        {
            $this->load->model('transaction_model');
            log_message('error','cart_order_id ==>'.$cart_order_id);   
            $split_id = intval(preg_replace('/[^0-9]+/', '', $payment_transaction_id), 10);
            $str = str_replace(array( '["', '"]' ), '', $cart_order_id);
            
            log_message('error','str==>'.$str);
            $temp_orders = $this->transaction_model->get_similar_user_temp_transaction($str);

            if (isset($temp_orders)) 
            {
                log_message('error','Inside if ==>');
                $order_id = $this->generateNewOrderId();
                log_message('error','order_id ==>'.$order_id);
                $total_bill = 0;
                $user_email = null;
                $str = "A";
               
                foreach ($temp_orders as $temp_order) 
                {
                    if (count($temp_orders) > 1) 
                    {
                        $order_id = $order_id.$str;
                    }

                    $t_data['order_id'] = $order_id;
                    $t_data['user_id'] = $temp_order->user_id;
                    $t_data['user_name'] = $temp_order->user_name;
                    $t_data['user_address_id'] = $temp_order->user_address_id;
                    $t_data['user_address'] = $temp_order->user_address;
                    $t_data['user_contactno'] = $temp_order->user_contactno;
                    $t_data['user_email'] = $temp_order->user_email;
                    $user_email = $temp_order->user_email;
                    $t_data['order_other_info'] = $temp_order->order_other_info;
                    $t_data['points_used'] = $temp_order->points_used;
                    $t_data['payment_method_id'] = $temp_order->payment_method_id;
                    $t_data['payment_method'] = $temp_order->payment_method;
                    $t_data['delivery_pickup'] = $temp_order->delivery_pickup;
                    $t_data['delivery_pickup_time'] = $temp_order->delivery_pickup_time;
                    $t_data['expected_order_time'] = $temp_order->expected_order_time;
                    $t_data['pickup_address_id'] = $temp_order->pickup_address_id;
                    $t_data['pickup_address'] = $temp_order->pickup_address;
                    $t_data['discount'] = $temp_order->discount;
                    $t_data['discount_type'] = $temp_order->discount_type;
                    $t_data['delivery_charges'] = $temp_order->delivery_charges;
                    $t_data['total_amount'] = $temp_order->total_amount;
                    $t_data['subtotal'] = $temp_order->subtotal;
                    $t_data['payment_transaction_id'] = (isset($payment_transaction_id) && !empty($payment_transaction_id)) ? $payment_transaction_id : null;
                    $t_data['datetime'] = (isset($payment_datetime) && !empty($payment_datetime)) ? $payment_datetime : null;
                    $t_data['restaurant_id'] = $temp_order->restaurant_id;
                    $t_data['restaurant_name'] = $temp_order->restaurant_name;
                    $t_data['lugmah_commission'] = $temp_order->lugmah_commission;
                    $t_data['created_on'] = time();
                    $t_data['expected_order_time'] = $temp_order->expected_order_time;
                    $t_data['comment'] = $temp_order->comment;
                    $t_data['promotion_code'] = $temp_order->promotion_code;
                    $t_data['branch_id'] = $temp_order->branch_id;

                    $total_bill = $total_bill + $t_data['total_amount'];
                    $trans_id = $this->transaction_model->create_trans_rec($t_data);
                    $temp_order_details = $this->transaction_model->get_user_temp_transaction_detail($temp_order->id);
                    if (isset($temp_order_details)) 
                    {
                        foreach ($temp_order_details as $temp_order_detail) 
                        {
                            $td_data['trans_id'] = $trans_id;
                            $td_data['item_id'] = $temp_order_detail->item_id;
                            $td_data['item_name'] = $temp_order_detail->item_name;
                            $td_data['item_price'] = $temp_order_detail->item_price;
                            $td_data['item_quantity'] = $temp_order_detail->item_quantity;
                            $trans_detail_id = $this->transaction_model->create_trans_detail_rec($td_data);
                            $temp_order_item_details = $this->transaction_model->get_user_temp_transaction_item_details($temp_order_detail->id);
                            if (isset($temp_order_item_details)) 
                            {
                                foreach ($temp_order_item_details as $temp_order_item_detail) 
                                {
                                    $tda_data['trans_detail_id'] = $trans_detail_id;
                                    $tda_data['item_attribute_id'] = $temp_order_item_detail->item_attribute_id;
                                    $tda_data['item_attribute_name'] = $temp_order_item_detail->item_attribute_name;
                                    $tda_data['item_attribute_price'] = $temp_order_item_detail->item_attribute_price;
                                    $this->transaction_model->create_trans_item_detail_rec($tda_data);
                                }
                            }
                        }
                    }
                    $order_id = mb_substr($order_id, 0, 8);
                    
                    ++$str;
                }
                if (!$guest_user && isset($t_data['user_id'])) 
                {
                    if (isset($t_data['points_used']) && !empty($t_data['points_used']) && $t_data['points_used'] > 0) {
                        $up_data['transaction_order_id'] = $order_id;
                        $up_data['user_id'] = $t_data['user_id'];
                        $up_data['point'] = -$t_data['points_used'];
                        $this->transaction_model->user_order_points($up_data);
                    } else {
                        $up_data['transaction_order_id'] = $order_id;
                        $up_data['user_id'] = $t_data['user_id'];
                        $up_data['point'] = $total_bill * 0.1;
                        $this->transaction_model->user_order_points($up_data);
                    }
                    $r_data['points'] = $up_data['point'];
                }
                $this->transaction_model->delete_similar_temp_cart($cart_order_id);
                $payment_method_id = $temp_order->payment_method_id;
                $this->sendOrderMail($order_id, $user_email, $payment_method_id, $split_id);
                $r_data['order_id'] = $order_id;
                return $r_data;
            } 
            else 
            {
                return null;
            }
        } 
        else 
        {
            return null;
        }
    }

    public function guest_payment_checkout()
    {

        $cart_id = $this->input->post('cart_id');
        $payment_id = $this->input->post('payment_id');
        $timestamp = $this->input->post('timestamp');

        if (!empty($cart_id) && !empty($payment_id) && !empty($timestamp)) {
            $res = $this->placeUserOrder($cart_id, $payment_id, $timestamp, true);
            if (!isset($res)) {
                $json['status'] = 'NO CART FOUND';
                print_r(json_encode($json));
            } else {
                $json['status'] = 'OK';
                print_r(json_encode($json));
            }
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function guest_cod_checkout()
    {
        $data = $this->input->post('cart');
        $fdata = json_decode($data);
 
        if ($fdata) 
        {
            $user_info = new stdClass();
            $user_info->user_id = null;
            $user_info->user_name = $fdata->name;
            $user_info->user_address_id = null;
            $user_info->user_address = $fdata->address;
            $user_info->user_contactno = $fdata->contact_no;
            $user_info->user_email = $fdata->email;
            $user_info->order_other_info = $fdata->other_info;
            $order_info = $this->placeTempOrder($fdata->restaurants, $user_info, true, false);

            $json['status'] = 'OK';
            $json['order_id'] = $order_info['order_id'];
            print_r(json_encode($json));
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }
    }

    public function save_cart()
    {
        $data = $this->input->post('cart');
        $fdata = json_decode($data);
        if ($fdata) 
        {
            $this->load->model('user_addresses_model');
            $user_info = $this->user_addresses_model->get_user_info_for_order_id($fdata->user_id, $fdata->restaurants[0]->selected_user_address_id);

            if (isset($user_info) && !empty($user_info)) 
            {
                $user_info->points_used = $fdata->points_used;
                $order_info = $this->placeTempOrder($fdata->restaurants, $user_info, false);
                $json['cart_id'] = $order_info['order_id'];
                $json['status'] = 'OK';
                print_r(json_encode($json));
            } 
            else 
            {
                print_r(json_encode(array('status' => 'NO_USER_ADDRESS_FOUND')));
            }
        } 
        else 
        {
            echo 'NOT_ALLOWED';
        }
    }

    public function save_guest_cart()
    {
        $data = $this->input->post('cart');
        $fdata = json_decode($data);
        if ($fdata) {
            $user_info = new stdClass();
            $user_info->user_id = null;
            $user_info->user_name = $fdata->name;
            $user_info->user_address_id = null;
            $user_info->user_address = $fdata->address;
            $user_info->user_contactno = $fdata->contact_no;
            $user_info->user_email = $fdata->email;
            $user_info->order_other_info = $fdata->other_info;

            $order_info = $this->placeTempOrder($fdata->restaurants, $user_info, true);

            $json['cart_id'] = $order_info['order_id'];
            $json['status'] = 'OK';

            print_r(json_encode($json));
        } else {
            echo 'NOT_ALLOWED';
        }
    }

    public function sms_test()
    {
        $this->load->library('twilio');
        $from = '+1 224-334-3232';
        $to = '+923224033796';
        $s_trans_url = 'this is just a test message';
        $message = $s_trans_url;
        $response = $this->twilio->sms($from, $to, $message);
        if ($response->IsError) {
            $split_detail['sms_status'] = '2';
        } else {
            $split_detail['sms_status'] = '1';
        }

        print_r($split_detail);

    }

    public function save_split_cart()
    {
        $data = $this->input->post('cart');
        
        if($data == false)
        {
            $data = $this->input->get('cart');          
        }
        
        $type = $this->input->post('type');
        
        if($type == false)
        {
            $type = $this->input->get('type');          
        }

        $split_data = $this->input->post('split_payee');
        
        if($split_data == false)
        {
            $split_data = $this->input->get('split_payee');          
        }
        
        $fdata = json_decode($data);
        $sp_data = json_decode($split_data);

        $total = 0;

        if (isset($sp_data) && !empty($sp_data)) 
        {
            foreach ($sp_data as $item) 
            {
                $total += $item->user_amount;
            }
        } 
        else 
        {
            die('NOT ALLOWED');
        }

        if ($fdata && $sp_data && !empty($type)) 
        {

            $this->load->model('split_transaction_model');
            $this->load->model('split_transaction_detail_model');
            $this->load->library('twilio');

            if ($type == 'guest') 
            {
                $user_info = new stdClass();
                $user_info->user_id = null;
                $user_info->user_name = $fdata->name;
                $user_info->user_address_id = null;
                $user_info->user_address = $fdata->address;
                $user_info->user_contactno = $fdata->contact_no;
                $user_info->user_email = $fdata->email;
                $user_info->order_other_info = $fdata->other_info;
                $order_info = $this->placeTempOrder($fdata->restaurants, $user_info, true);
            } 
            else 
            {
                $this->load->model('user_addresses_model');
                $user_info = $this->user_addresses_model->get_user_info_for_order_id($fdata->user_id, $fdata->restaurants[0]->selected_user_address_id);
                
                if (isset($user_info) && !empty($user_info)) 
                {
                    $user_info->points_used = $fdata->points_used;
                    $order_info = $this->placeTempOrder($fdata->restaurants, $user_info, false);
                } 
                else 
                {
                    print_r(json_encode(array('status' => 'NO_USER_ADDRESS_FOUND')));
                }
            }

            $split_transaction['cart_id'] = implode($order_info['order_id']);
            $split_transaction['total_amount'] = round($total, 3);
            $split_id = $this->split_transaction_model->create($split_transaction);

            foreach ($sp_data as $item) 
            {
                $split_trans_id = $this->generateRandomString();
                $from = '+1 224-334-3232';
                $to = '+965'.$item->user_number;
                $s_trans_url = 'www.wajbatek.com/main/split_transaction_payment?split_transaction_id=' . urlencode($split_trans_id);
                $message = $s_trans_url;
                $response = $this->twilio->sms($from, $to, $message);
                // if ($response->IsError) 
                // {
                //     $split_detail['sms_status'] = '2';
                // } else {
                //     $split_detail['sms_status'] = '1';
                // }
                $split_detail['sms_status'] = '2';

                $split_detail['split_id'] = $split_id;
                $split_detail['username_no'] = '+965'.$item->user_number;
                
                $split_detail['amount'] = round($item->user_amount, 3);
                $split_detail['split_trans_id'] = $split_trans_id;

                $this->split_transaction_detail_model->create($split_detail);
            }

            $split_admin = $this->split_transaction_detail_model->get_split_admin($split_id);

            $json['split_id'] = $split_admin->split_trans_id;
            $json['amount'] = $split_admin->amount;
            $json['status'] = 'OK';
            print_r(json_encode($json));
        } else {

            echo 'NOT_ALLOWED';
        }
    }

    public function update_split_user_status()
    {
        $split_id = $this->input->post('split_id');
        $payment_id = $this->input->post('payment_id');
        $timestamp = $this->input->post('timestamp');

        if ($split_id && $payment_id && $timestamp) {
            $this->load->model('split_transaction_detail_model');

            $this->split_transaction_detail_model->complete_split_transaction($split_id, $payment_id);
            $data = $this->checkUserSplitStatus($split_id);
            print_r(json_encode($data));

        } else {
            die('NOT ALLOWED');
        }
    }

    public function check_split_status()
    {
        $split_id = $this->input->post('split_id');
        log_message('error','split_id ==>'.$split_id);
        if ($split_id) 
        {
            $data = $this->checkUserSplitStatus($split_id);
            print_r(json_encode($data));

        } else {
            die('NOT ALLOWED');
        }
    }

    public function checkUserSplitStatus($split_id = null)
    {
        $this->load->model('split_transaction_model');
        $this->load->model('split_transaction_detail_model');
        $split_status = $this->split_transaction_detail_model->get_split_transaction_status($split_id);


        $com_status = $this->split_transaction_detail_model->check_if_complete($split_status->id);

        if ($com_status->val == 0 && $split_status->user_status != 'completed') {
            $cart = $this->split_transaction_model->get_cart_id($split_status->id);
            $res = $this->placeUserOrder($cart->cart_id, 'split,' . $split_status->id, $cart->complete_time);
            if (!isset($res)) {
                $json['status'] = 'NO CART FOUND';
            } else {
                $return['status'] = 'completed';
                if (isset($res['points'])) {
                    $return['points'] = $res['points'];
                }
            }
        } else {

            if ($split_status->user_status == 'exp_split') {

                if ($this->split_transaction_detail_model->expire_split_transaction($split_status->id)) {

                    $return['status'] = 'expired';

                } else {
                    echo 'DB ERROR';
                }

            } else if ($split_status->user_status == 'admin_pay') {
                $admin_link_status = $this->split_transaction_detail_model->check_admin_link($split_status->id);
                if ($admin_link_status->val == 0) {
                    $split_trans_id = $this->generateRandomString();
                    $this->load->library('twilio');
                    $this->split_transaction_detail_model->expire_users_split($split_status->id);
                    $split_admin = $this->split_transaction_detail_model->get_split_admin($split_status->id);
                    $from = '+1 224-334-3232';
                    $to = '+965'.$split_admin->number;
                    $s_trans_url = 'www.wajbatek.com/main/split_transaction_payment?split_transaction_id=' . urlencode($split_trans_id);
                    $message = $s_trans_url;
                    $response = $this->twilio->sms($from, $to, $message);
                    if ($response->IsError) {
                        $split_detail['sms_status'] = '2';
                    } else {
                        $split_detail['sms_status'] = '1';
                    }
                    $split_detail['split_id'] = $split_status->id;
                    $split_detail['username_no'] = '+965'.$split_admin->number;
                    $split_detail['amount'] = $com_status->amount;
                    $split_detail['split_trans_id'] = $split_trans_id;

                    $id = $this->split_transaction_detail_model->create_admin_link($split_detail);
                    $admin_link = $this->split_transaction_detail_model->get_by_id($id);
                    $return['status'] = 'pay_admin';
                    $return['split_id'] = $admin_link->split_trans_id;
                    $return['amount'] = $admin_link->amount;
                    $return['time_remaining'] = $admin_link->time_remaining;

                } else {
                    $user_link = $this->split_transaction_detail_model->get_admin_time_by_split_transaction_id($split_id);
                    $return['status'] = 'admin_link';
                    $return['time_remaining'] = $user_link->time_remaining;
                    $return['users_status'] = $this->split_transaction_detail_model->get_split_user_status($split_status->id);
                }

            } else if ($split_status->user_status == 'active') {
                $user_link = $this->split_transaction_detail_model->get_time_by_split_transaction_id($split_id);
                $return['status'] = 'active';
                $return['users_status'] = $this->split_transaction_detail_model->get_split_user_status($split_status->id);
                $return['time_remaining'] = $user_link->time_remaining;

            } else if ($split_status->user_status == 'completed') {
                $return['status'] = 'completed';

            } else {
                $return['status'] = 'expired';
            }
        }

        return $return;

    }

    public function get_user_splits()
    {
        $user_id = $this->input->post('user_id');
        if (!empty($user_id)) {
            $this->load->model('split_transaction_model');

            $json['user_splits'] = $this->split_transaction_model->get_user_splits($user_id);
            print_r(json_encode($json));
        } else {
            die('NOT ALLOWED');
        }

    }

    public function get_user_splits_ar()
    {
        $user_id = $this->input->post('user_id');
        if (!empty($user_id)) {
            $this->load->model('split_transaction_model');

            $json['user_splits'] = $this->split_transaction_model->get_user_splits($user_id);
            print_r(json_encode($json));
        } else {
            die('NOT ALLOWED');
        }

    }

    private function sendOrderMail($order_id = null, $user_email = null, $payment_method_id = null, $split_id = null)
    {
        if (isset($user_email) && !empty($user_email)) 
        {
            $config['email_config'] = array(
                'mailtype' => 'html',
                'protocol' => 'smtp',
                'smtp_host' => 'mail.grape-studio.com',
                'smtp_port' => 26,
                'smtp_user' => 'master@grape-studio.com', // change it to yours
                'smtp_pass' => '123@..master', // change it to yours
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->clear();
            $this->email->from($this->config->item('info_email', 'ion_auth'), $this->config->item('site_title', 'ion_auth'));
            $this->email->to($user_email);
            $this->email->subject('Lugmah - Order Placed!');
            $view_data['order_id'] = $order_id;
            if($payment_method_id == 4)
            {
                $this->load->model('Split_transaction_detail_model');
                $split_details = $this->Split_transaction_detail_model->get_by_split_id($split_id);
                $view_data['split_details'] = $split_details;
                $email_view = $this->load->view('auth/email/split_order_placement', $view_data, TRUE);
            }
            else
            {
                $email_view = $this->load->view('auth/email/order_placement', $view_data, true);
            }
            $this->email->message($email_view);
            $this->email->set_mailtype("html");
            $this->email->send();
        }

    }

}