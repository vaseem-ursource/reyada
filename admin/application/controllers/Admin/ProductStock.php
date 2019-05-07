<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductStock extends MY_Controller {
	public function index()
	{
		$productid = $this->input->get('id');
		$data['title'] = 'ProductStock';
		$data['ProductId'] = $productid;
		$data['ProductStock'] = $this->ProductStock_model->get_productstock($productid);
		$this->load->view('Admin/view_productstock',$data);
    }

    public function Add()
		{
			$this->check_rights($_SERVER['PHP_SELF']);
			$productid = $this->input->get('id');
				$data['title'] = 'Product Stock';
		$data['ProductId'] = $productid;
				
        $data['Products'] = $this->ProductStock_model->get_all_product();
        // $data['Sizes'] = $this->ProductStock_model->get_all_size();
        // $data['ProductColors'] = $this->ProductStock_model->get_all_productcolor();
		$this->load->view('Admin/add_productstock',$data);
        }
        
    public function get_size_colors(){
         $productid = $_POST['productData'];
         echo json_encode(array('sizes'=>$this->ProductStock_model->get_sizes_on_product($productid),'colors'=>$this->ProductStock_model->get_colors_on_product($productid)));
    }

		public function Insert()
		{	
			$product = $this->input->post('productid');
			$sizes = $this->input->post('sizeid');
			$color = $this->input->post('productcolorid');
			$qty = $this->input->post('quantity');
			$tval = $this->input->post('thresholdval');
		
			$number = count($this->input->post('sizeid'));  

			for($i=0; $i<$number; $i++)  
      {  
				if($sizes[$i]==""){
					$sizes[$i]=null;
				}
				if($color[$i]==""){
					$color[$i]=null;
				}
           if($check = $this->ProductStock_model->check_product_stock($product,$sizes[$i],$color[$i]))
           { 
					$quantity = $check->qty_in_stock+$qty[$i];
						$data1 = array(
						'product_id' => $product,
						'size_id' => $sizes[$i],
						'product_color_id' =>$color[$i],
						'qty_in_stock' => $quantity,
						'threshold_alert_val' => $tval[$i]
					);					
					$this->ProductStock_model->update_productstock_db($data1,$product,$sizes[$i],$color[$i]);
					 }
					 else{
						$data2[] = array(
							'product_id' => $product,
							'size_id' => $sizes[$i],
							'product_color_id' =>$color[$i],
							'qty_in_stock' => $qty[$i],
							'threshold_alert_val' => $tval[$i]);
					 }
			}	
			if($data2){
				$this->ProductStock_model->insert_productstock_db($data2);
			}
			return $this->display_status(true,
				'Product Stock Added Successfully','Failed to Add Product Stock',$product);
	
		}

		public function Manage(){ 
			$this->check_rights($_SERVER['PHP_SELF']);
			$product_stock_id=$this->input->get('id');
			$data['ProductStock'] = $this->ProductStock_model->get_productstock_on_id($product_stock_id);
			$data['ProductId'] = $data['ProductStock']->product_id;
			$this->load->view("Admin/manage_productstock",$data);
		}

		public function Update(){ 
			$product_stock_id = $this->input->post('productstockid');
		
			$qty = $this->input->post('quantity');
			$tval = $this->input->post('thresholdval');

           $check = $this->ProductStock_model->check_product_stocks($product_stock_id);
    $productid = $check->product_id;
					$quantity = $check->qty_in_stock+$qty;
						$data = array(
						'qty_in_stock' => $quantity,
						'threshold_alert_val' => $tval
					);	
				
				$this->ProductStock_model->update_productstocks_db($data,$product_stock_id);
			return $this->display_status(true,
				'Product Stock Updated Successfully','Failed to Update Product Stock',$productid);
	
		
	}
		public function Delete(){
			$product_stock_id=$this->input->get('id');
			$product_id=$this->input->get('p');
			return $this->display_status(
				$this->ProductStock_model->delete_productstock_db($product_stock_id),
				'Product Stock Deleted Successfully','Failed to Delete Product Stock',$product_id                                  
			);
		}
		
		private function display_status($status,$success,$fail,$productid)
		{
				if($status)
				{
						$this->session->set_flashdata('success', $success);
				}
				else
				{
						$this->session->set_flashdata('warning', $fail);
				}
				  return redirect('Admin/ProductStock?id='.$productid);
			}
	
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/ProductStock_model",'ProductStock_model');
				$this->login_check();
    }
}?>