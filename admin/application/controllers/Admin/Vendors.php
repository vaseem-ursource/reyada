<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Vendors';
		$data['Vendors'] = $this->Vendors_model->get_all_vendors();
		$this->load->view('Admin/view_vendors',$data);
    }

    public function Add()
    {
	$this->check_rights($_SERVER['PHP_SELF']);
    $data['title'] = 'Vendors';
    $this->load->view('Admin/add_vendors');
    }

    public function Insert()
    {	
	if(isset($_POST['insert']))
	{
          	$redirect=1;
	}
		elseif(isset($_POST['save']))
	{
		$redirect=0;
	}
			
	$data = array(
		'name' => $this->input->post('name'),     
		'address' => $this->input->post('address'),    
		'rating' => $this->input->post('rating')
		);
	return $this->display_status(
		$this->Vendors_model->insert_vendors_db($data),
		'Vendor Inserted Successfully','Failed to Insert Vendor',$redirect);
     }

     public function Edit(){ 
		$this->check_rights($_SERVER['PHP_SELF']);
        $vendor_id=$this->input->get('id');
        $data['Vendors'] = $this->Vendors_model->get_vendors_on_id($vendor_id);
        $this->load->view("Admin/edit_vendors",$data);
    }

    public function Update(){ 
        $vendor_id=$this->input->post('vendorid');
        $data = array(
            'name' => $this->input->post('name'),     
            'address' => $this->input->post('address'),    
            'rating' => $this->input->post('rating')
                );
                
        return $this->display_status(
                $this->Vendors_model->update_vendors_db($vendor_id,$data),
                'Vendor Updated Successfully','Failed to Update Vendor',1
);
}

        public function VendorsCountries(){ 
            $vendor_id=$this->input->get('id');
            $data['title'] = 'Product Countries';
            $data['VendorId'] = $vendor_id;
            $this->load->view('Admin/add_vendor_countries',$data);
}

public function GetVendorCountries(){ 
    $vendor_id=$this->input->get('id');
    $data['VendorCountries']=$this->Vendors_model->get_all_vendor_countries($vendor_id);
    $vendor_country_codes[]="";
    foreach($data['VendorCountries']->result() as $row){
        $vendor_country_codes[]=$row->country_code;
    }
    $data['data']=$this->Vendors_model->get_all_vendor_countries_except($vendor_id,$vendor_country_codes)->result();
    header('Content-Type: application/json');
    echo json_encode($data);
} 

    public function AddVendorCountries(){ 
        $vendorid=$_POST['vendorid'];
        $VendorCountriesId=$_POST['VendorCountriesId'];
        $countryId[]=explode(",",$VendorCountriesId);
        for($i=0;$i<count($countryId[0]);$i++){
            $data[] = array('vendor_id' => $vendorid,'country_code'=>$countryId[0][$i]);			
        }
        $status=$this->Vendors_model->insert_vendor_countries($data);
        if($status)
            {
                    $this->session->set_userdata('success', "Vendor Added Successfully");
            }
            else{
                    $this->session->set_userdata('warning', "Failed to Add Vendor");
            }
            redirect('Admin/Vendors/VendorsCountries?id='.$vendorid);
            // echo true;
    } 
    public function AddedVendorCountries(){ 
        $vendor_id=$this->input->get('id');
        $data['data']=$this->Vendors_model->get_added_vendor_countries($vendor_id)->result();
        echo json_encode($data);
    } 
    public function DeleteVendorCountries(){ 
        $vendorid=$_POST['vendorid'];
        $countryProductId=$_POST['countryId'];
        $countryId[]=explode(",",$countryProductId);
        for($i=0;$i<count($countryId[0]);$i++){
            // $data[] = array('parent_product_id' => $productId,'related_product_id'=>$relatedId[0][$i]);
            $this->Vendors_model->delete_vendor_countries($vendorid,$countryId[0][$i]);
        }
            $this->session->set_userdata('success', "Vendor Countries Added Successfully");
            redirect('Admin/Vendors/VendorsCountries?id='.$vendorid);
            // echo true;
     } 

    public function ProductVendors(){ 
        $vendor_id=$this->input->get('id');
        $data['title'] = 'Product Vendors';
        $data['VendorId'] = $vendor_id;
        $this->load->view("Admin/add_product_vendors",$data);
    } 

    public function GetProductVendors(){ 
        $vendor_id=$this->input->get('id');
        $data['ProductVendors']=$this->Vendors_model->get_all_product_vendors($vendor_id);
        $ProductVendorsId[]=$vendor_id;
        foreach($data['ProductVendors']->result() as $row){
            $ProductVendorsId[]=$row->product_id;
        }
        $data['data']=$this->Vendors_model->get_all_product_except($vendor_id,$ProductVendorsId)->result();
        header('Content-Type: application/json');
        echo json_encode($data);
    } 

    public function AddedProductVendors(){ 
        $vendor_id=$this->input->get('id');
        $data['data']=$this->Vendors_model->get_added_product_vendors($vendor_id)->result();
        echo json_encode($data);
    } 
    
    public function AddProductVendors(){ 
        $vendorid=$_POST['vendorid'];
        $ProductVendorId=$_POST['ProductVendorsId'];
        $productId[]=explode(",",$ProductVendorId);
        for($i=0;$i<count($productId[0]);$i++){
            $data[] = array('vendor_id' => $vendorid,'product_id'=>$productId[0][$i]);			
        }
        $status=$this->Vendors_model->insert_product_vendor($data);
        if($status)
            {
                    $this->session->set_userdata('success', "Product Vendor Added Successfully");
            }
            else{
                    $this->session->set_userdata('warning', "Failed to Add Product Vendor");
            }
            redirect('Admin/Vendors/ProductVendors?id='.$vendorid);
            // echo true;
    } 

    public function DeleteProductVendors(){ 
        $vendorid=$_POST['vendorid'];
        $ProductVendorId=$_POST['ProductVendorId'];
        $productId[]=explode(",",$ProductVendorId);
        for($i=0;$i<count($productId[0]);$i++){
            // $data[] = array('parent_product_id' => $productId,'related_product_id'=>$relatedId[0][$i]);
            $this->Vendors_model->delete_product_vendor($vendorid,$productId[0][$i]);
        }
            $this->session->set_userdata('success', "Product Vendor Added Successfully");
            redirect('Admin/Vendors/ProductVendors?id='.$vendorid);
            // echo true;
    } 
          
        public function Delete(){
        $vendor_id=$this->input->get('id');
        return $this->display_status(
                $this->Vendors_model->delete_vendors_db($vendor_id),
                'Vendor Deleted Successfully','Failed to Delete Vendor',1
        );
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
					return redirect('Admin/Vendors');
				}
				else
				{
				  return redirect('Admin/Vendors/Add');
				}

    }
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin/Vendors_model",'Vendors_model');
        $this->login_check();
    }
}?>