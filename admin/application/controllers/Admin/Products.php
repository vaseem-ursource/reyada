<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {
	public function index()
	{
		$data['title'] = 'Products';
		if($this->input->get('cat_id')){
			$cat_id = $this->input->get('cat_id');
			$data['Products'] = $this->Products_model->get_filtered_products($cat_id);
		}else{
			$data['Products'] = $this->Products_model->get_all_products();
		}
		
		$data['ParentCategories'] = $this->Products_model->get_all_categories();
		$this->load->view('Admin/view_products',$data);
    }

		public function Add() 
		{ 
			   $this->check_rights($_SERVER['PHP_SELF']);
				 $data['title'] = 'Products'; 
				 $data['Brands'] = $this->Products_model->get_all_brands(); 
				 $data['ParentCategories'] = $this->Products_model->get_all_parent_categories(0); 
				 $data['SizeCategories'] = $this->Products_model->get_all_size_categories(); 
				 $data['Colors'] = $this->Products_model->get_all_colors(); 

				 $stmt='<select class="select2_group form-control" id="category" name="category" required><option value="">-- Choose --</option>'; 
				 foreach($data['ParentCategories']->result() as $row){ 
				 $stmt.=     '<op tion style="font-weight:bolder" value="'.$row->cat_id.'">'.$row->name_en.'</option>'; 
				 $data['SubCategories'] = $this->Products_model->get_sub_categories($row->cat_id); 
				 $space='&nbsp&nbsp&nbsp&nbsp'; 
				 if($data['SubCategories']->num_rows()){ 
							foreach($data['SubCategories']->result() as $sub){ 
									 if($data['SubCategories']=$this->Products_model->get_all_parent_categories($sub->cat_id)){ 
												$stmt.='<option style="font-weight:bold;" value="'.$sub->cat_id.'">'.$space.$sub->name_en.'</option>'; 
												$stmt=$this->loop($data,$stmt,$space); 
									 } 
							else{ 
									 $stmt.='<option value="'.$sub->cat_id.'">'.$sub->name_en.'</option>'; 
							} 
				 }} 
				 } 
				 $stmt.='</select>'; 
				 $data['CategoryGroup']=$stmt; 
				 $this->load->view("Admin/add_products.php",$data); 
} 
		public function loop($data,$stmt,$space){ 
				 $space.='&nbsp&nbsp&nbsp&nbsp'; 
									 foreach($data['SubCategories']->result() as $sub){ 
												 
									 $stmt.='<option value="'.$sub->cat_id.'">'.$space.$sub->name_en.'</option>'; 
									 $data['SubCategories']=$this->Products_model->get_all_parent_categories($sub->cat_id); 
									 if($data['SubCategories']->num_rows()) 
									 { 
												$stmt=$this->loop($data,$stmt,$space); 
									 }else{ 
												 
												return $stmt; 
									 } 
				 }  
				 return $stmt; 
		} 
		public function Insert()
		{	
				
			// $config['upload_path'] = './uploads/admin/brands';  
			// $config['allowed_types'] = 'jpg|jpeg|png';  
			// $this->load->library('upload', $config);  

			$this->insert_product_details();
			$product_id = $this->db->insert_id();
			$this->insert_product_image($product_id);
			$this->insert_product_colors($product_id);

			return $this->display_status(1,'Product Inserted Successfully','Failed to Insert Product',2,$productid);
		}
		
		private function insert_product_details()
		{
			if(isset($_FILES["image"]["name"]))  
			{  
			$image =  $this->resize_image('image');
			$product_image = $image['image_thumb'];
			$image = $image['image_path'];
			} 
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
				'name_en' => $this->input->post('nameEn'),     
				'name_ar' => $this->input->post('nameAr'),
				'desc_en' => $this->input->post('descEn'),     
				'desc_ar' => $this->input->post('descAr'), 
				'details_en' => $this->input->post('detEn'),     
				'details_ar' => $this->input->post('detAr'), 
				'price' => $this->input->post('price'),     
				'has_offer' => $this->input->post('offer'), 
				'offer_price' => $this->input->post('offerPrice'),     
				'brand_id' => (int)$this->input->post('brands'), 
				'cat_id' => (int)$this->input->post('category'),     
				'size_cat_id' => $this->input->post('sizeCat'), 
				'has_colors' => $this->input->post('color'),    
				'image_url' => $product_image,     
				'qty_in_stock' => (int)$this->input->post('quantity'), 
				'created_date' => date('Y-m-d H:i:s'),
				'modified_date' => '',   
				'modified_by' => '', 
				'is_deleted' => 'No',  
				'is_active' => 'Yes',  
				);
				return $this->Products_model->insert_products_db($data);
		}
		private function insert_product_image($product_id)
		{
			$dataInfo = array();
			$files = $_FILES;
			$cpt = count($_FILES['proImage']['name']);
			for($i=0; $i<$cpt; $i++)
			{  
				
				$_FILES['proImage']['name']= $files['proImage']['name'][$i];
				$_FILES['proImage']['type']= $files['proImage']['type'][$i];
				$_FILES['proImage']['tmp_name']= $files['proImage']['tmp_name'][$i];
				$_FILES['proImage']['error']= $files['proImage']['error'][$i];
				$_FILES['proImage']['size']= $files['proImage']['size'][$i];    
		
				// $this->upload->initialize($this->set_upload_options());
				$image =  $this->resize_product_image('proImage');
				$product_image[] = $image['image_thumb'];
				// $image = $image['image_path'];

				// $this->upload->do_upload('proImage');
				// $dataInfo[] = $this->upload->data();
				
			}
			for($i=0;$i<$cpt;$i++){
				if(@$product_image[$i]){
					$p_image =  $product_image[$i];

					// $product_image = base_url('uploads/products/' . $dataInfo[$i]['file_name']);
				}
				else{
					$p_image = '';
				}
				date_default_timezone_set('Asia/Kuwait');
				$data = array(
					'product_id' => $product_id,     
					'image_url' => $p_image,
					'created_date' => date('Y-m-d H:i:s'),     
					'created_by' => $this->session->userdata('user_name'),
					'modified_date' => '',     
					'modified_by' => '',
					);
				$this->Products_model->insert_products_images($data);
			}
			return;
		}
		private function insert_product_colors($product_id)
		{
			if(isset($_POST['colors'])){
				foreach($_POST['colors'] as $colors){
					// $color[]= $colors;
					$data = array(
						'product_id' => $product_id,     
						'color_id' => $colors,
						);
						$this->Products_model->insert_product_color($data);
				}
			}
			return;
		}
		public function View(){ 
			$product_id=$this->input->get('id');
			$data['Products'] = $this->Products_model->get_product_details($product_id);
			$data['ProductColors'] = $this->Products_model->get_product_colors($product_id);
			$data['Colors']=$this->Products_model->get_remaining_product_colors($product_id);
			$data['ProductImages'] = $this->Products_model->get_product_images($product_id);		
			$data['ProductId'] = $product_id;
			$this->load->view("Admin/view_product_details",$data);
	}

		public function ViewImages(){ 
			$product_id=$this->input->get('id');
			$data['ProductImages'] = $this->Products_model->get_product_images($product_id);
			$data['ProductId'] = $product_id;
			$this->load->view("Admin/view_product_images",$data);
		}

		public function ViewColors(){ 
			$product_id=$this->input->get('id');
			$data['ProductColors'] = $this->Products_model->get_product_colors($product_id);
			$data['Colors']=$this->Products_model->get_remaining_product_colors($product_id);
			$data['ProductId'] = $product_id;
			$this->load->view("Admin/view_product_colors",$data);
		}

		public function DeleteProductImage(){ 
			$product_image_id=$this->input->get('image_id');
			$product_id=$this->input->get('id');
			$this->Products_model->delete_product_image($product_image_id);
			// $data['ProductImages'] = $this->Products_model->get_product_images($product_id);
			redirect(base_url()."Admin/Products/ViewImages?id=".$product_id);
		}

		public function DeleteProductColor(){ 
			$product_color_id=$this->input->get('color_id');
			$product_id=$this->input->get('id');
			$this->Products_model->delete_product_color($product_color_id);
			redirect(base_url()."Admin/Products/ViewColors?id=".$product_id);
		}
		public function AddProductImage(){ 
			$config=[
				'upload_path' => './uploads/products',
				'allowed_types' => 'png|jpg|jpeg'
			];
			$this->load->library('upload',$config);
			$product_id=$this->input->get('id');
			$this->insert_product_image($product_id);
			redirect(base_url()."Admin/Products/ViewImages?id=".$product_id);
		}
		public function AddProductColors(){ 
			$product_id=$this->input->get('id');
			$data['Colors']=$this->Products_model->get_remaining_product_colors($product_id);
			$data['ProductId'] = $product_id;
			$this->load->view("Admin/add_product_colors",$data);
		}

		public function InsertProductColors(){ 
			$product_id=$this->input->post('productId');
			$this->insert_product_colors($product_id);
			redirect(base_url()."Admin/Products/ViewColors?id=".$product_id);
		}

	  public function Edit(){  
			$this->check_rights($_SERVER['PHP_SELF']);
			$product_id=$this->input->get('id'); 
			$data['Products'] = $this->Products_model->get_products_on_id($product_id); 
			$data['Brands'] = $this->Products_model->get_all_brands(); 
			$data['Categories'] = $this->Products_model->get_all_categories(); 
			$data['SizeCategories'] = $this->Products_model->get_all_size_categories(); 
			$data['ParentCategories'] = $this->Products_model->get_all_parent_categories(0); 
			if(isset($data['Products']->cat_id)){ 
					 $parent_name = $data['Products']->cat_name; 
					 $parent_id=$data['Products']->cat_id; 
			}else{ 
					 $parent_name = "No Parent Category"; 
					 $parent_id=0; 
			} 
			$stmt='<select class="select2_group form-control" id="category" name="category" required><option value="'.$parent_id.'" required>'.$parent_name.'</option>'; 
			foreach($data['ParentCategories']->result() as $row){ 
			$stmt.=     '<option style="font-weight:bolder" value="'.$row->cat_id.'">'.$row->name_en.'</option>'; 
			$data['SubCategories'] = $this->Products_model->get_sub_categories($row->cat_id); 
			$space='&nbsp&nbsp&nbsp&nbsp'; 
			if($data['SubCategories']->num_rows()){ 
					 foreach($data['SubCategories']->result() as $sub){ 
								if($data['SubCategories']=$this->Products_model->get_all_parent_categories($sub->cat_id)){ 
										 $stmt.='<option style="font-weight:bold;" value="'.$sub->cat_id.'">'.$space.$sub->name_en.'</option>'; 
										 $stmt=$this->loop($data,$stmt,$space); 
								} 
					 else{ 
								$stmt.='<option value="'.$sub->cat_id.'">'.$sub->name_en.'</option>'; 
					 } 
			}} 
			} 
			$stmt.='</select>'; 
			$data['CategoryGroup']=$stmt; 
			$this->load->view("Admin/edit_products.php",$data); 
 } 



		public function Update(){ 
			$product_id=$this->input->post('productId');
			if(isset($_FILES["image"]["name"]))  
			{  
			$image =  $this->resize_image('image');
			$product_image = $image['image_thumb'];
			$image = $image['image_path'];
			} 
			if($image==""){
				$image = $this->Products_model->get_products_image_path($product_id)->image_url;
			}
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
				'name_en' => $this->input->post('nameEn'),     
				'name_ar' => $this->input->post('nameAr'),
				'desc_en' => $this->input->post('descEn'),     
				'desc_ar' => $this->input->post('descAr'), 
				'details_en' => $this->input->post('detEn'),     
				'details_ar' => $this->input->post('detAr'), 
				'price' => $this->input->post('price'),     
				'has_offer' => $this->input->post('offer'), 
				'offer_price' => $this->input->post('offerPrice'),     
				'brand_id' => (int)$this->input->post('brands'), 
				'cat_id' => (int)$this->input->post('category'),     
				'size_cat_id' => $this->input->post('sizeCat'), 
				'has_colors' => $this->input->post('color'),    
				'image_url' => $product_image,     
				'qty_in_stock' => (int)$this->input->post('quantity'), 
				'modified_date' => date('Y-m-d H:i:s'),   
				'modified_by' => $this->session->userdata('user_name')
			  
				);
			return $this->display_status(
				$this->Products_model->update_products_db($product_id,$data),
				'Product Updated Successfully','Failed to Update Product',1,0
		);
		}

	private function resize_image($image){
		$config['upload_path'] = './uploads/products/';
				 $config['allowed_types'] = 'png|jpg|jpeg';
				 $this->load->library('upload',$config);
				if(!$this->upload->do_upload($image))
				{		     
					 $image_path = "";
				}
				else
				{
					$data = $this->upload->data();
				 $config['image_library'] = 'gd2';
				 $config['source_image'] = './uploads/products/'.$data['file_name'];
				 $config['create_thumb'] = 'TRUE';
				 $config['maintain_ratio'] = 'TRUE';	
				 $config['quality'] = '80%';					 
				 $config['width'] = '300';					 
				 $config['height'] = '300';		
				 $config['new_image'] = './uploads/products/'.$data['file_name'];				 			 
		
					 $this->load->library('image_lib', $config); 
					 $this->image_lib->clear();
					$this->image_lib->initialize($config);
						$this->image_lib->rotate();
					 $this->image_lib->resize();  
					 $image_path = 'uploads/products/'.$data["file_name"];
					 $newPath = $data['new_image'];           
					$image_thumb = 'uploads/products/'.substr($data['file_name'], 0, -4)."_thumb".$data['file_ext'];  
					 
			}
			$image_data = array('image_path'=>$image_path,'image_thumb'=>$image_thumb);
			// var_dump($image_data);exit;
		 
			return  $image_data;
	
}

private function resize_product_image($image){
	$config['upload_path'] = './uploads/products/';
			 $config['allowed_types'] = 'png|jpg|jpeg';
			 $this->load->library('upload',$config);
			if(!$this->upload->do_upload($image))
			{		     
				 $image_path = "";
			}
			else
			{
				$data = $this->upload->data();
			 $config['image_library'] = 'gd2';
			 $config['source_image'] = './uploads/products/'.$data['file_name'];
			 $config['create_thumb'] = 'TRUE';
			 $config['maintain_ratio'] = 'TRUE';	
			 $config['quality'] = '80%';					 
			 $config['width'] = '800';					 
			 $config['height'] = '800';		
			 $config['new_image'] = './uploads/products/'.$data['file_name'];				 			 
	
				 $this->load->library('image_lib', $config); 
				 $this->image_lib->clear();
				$this->image_lib->initialize($config);
					$this->image_lib->rotate();
				 $this->image_lib->resize();  
				 $image_path = 'uploads/products/'.$data["file_name"];
				 $newPath = $data['new_image'];           
				$image_thumb = 'uploads/products/'.substr($data['file_name'], 0, -4)."_thumb".$data['file_ext'];  
				 
		}
		$image_data = array('image_path'=>$image_path,'image_thumb'=>$image_thumb);
		// var_dump($image_data);exit;
	 
		return  $image_data;

}

		// public function Delete(){
		// 	$product_id=$this->input->get('id');
		// 	return $this->display_status(
		// 		$this->Products_model->delete_products_db($product_id),
		// 		'Products Deleted Successfully','Failed to Delete Products'
		// 	);
		// }


		public function Status(){
			$product_id=$this->input->get('id');
			$status=$this->Products_model->get_product_status($product_id)->is_active;
			if($status=='Yes'){
				$status = 'No';
			}else{
				$status='Yes';
			}
			$data = array(
				'is_active' => $status
			);
			return $this->display_status(
		  $this->Products_model->update_products_db($product_id,$data),
			'Product Status Changed','Failed to Change Product Status',1,0
		);
			
		}
		public function RelatedProducts(){ 
			$product_id=$this->input->get('id');
			$data['title'] = 'Related Products';
			$data['ProductId'] = $product_id;
			$this->load->view("Admin/add_related_products",$data);
		} 
		public function GetRelatedProducts(){ 
			$product_id=$this->input->get('id');
			$data['RelatedPro']=$this->Products_model->get_all_related_product($product_id);
			$relatedProId[]=$product_id;
			foreach($data['RelatedPro']->result() as $row){
				$relatedProId[]=$row->related_product_id;
			}
			$data['data']=$this->Products_model->get_all_product_except($product_id,$relatedProId)->result();
			header('Content-Type: application/json');
			echo json_encode($data);
		} 

		public function AddedRelatedProducts(){ 
			$product_id=$this->input->get('id');
			$data['data']=$this->Products_model->get_added_related_product($product_id)->result();
			echo json_encode($data);
		} 
		

		public function AddRelatedProducts(){ 
			$productId=$_POST['productId'];
			$relatedProductId=$_POST['relatedProductId'];
			$relatedId[]=explode(",",$relatedProductId);
			for($i=0;$i<count($relatedId[0]);$i++){
				$data[] = array('parent_product_id' => $productId,'related_product_id'=>$relatedId[0][$i]);			
			}
			$status=$this->Products_model->insert_related_product($data);
			if($status)
				{
						$this->session->set_userdata('success', "Related Products Added Successfully");
				}
				else{
						$this->session->set_userdata('warning', "Failed to Add Related Product");
				}
				redirect('Admin/Products/RelatedProducts?id='.$productId);
				// echo true;
		} 

		public function DeleteRelatedProducts(){ 
			$productId=$_POST['productId'];
			$relatedProductId=$_POST['relatedProductId'];
			$relatedId[]=explode(",",$relatedProductId);
			for($i=0;$i<count($relatedId[0]);$i++){
				// $data[] = array('parent_product_id' => $productId,'related_product_id'=>$relatedId[0][$i]);
				$this->Products_model->delete_related_product($productId,$relatedId[0][$i]);
			}
				$this->session->set_userdata('success', "Related Products Added Successfully");
				redirect('Admin/Products/RelatedProducts?id='.$productId);
				// echo true;
		} 

		public function ProductCountries(){ 
			$product_id=$this->input->get('id');
			$data['title'] = 'Related Products';
			$data['ProductId'] = $product_id;
			$this->load->view('Admin/add_product_countries',$data);
		}
		
		public function GetProductCountries(){ 
			$product_id=$this->input->get('id');
			$data['ProductCountries']=$this->Products_model->get_all_product_countries($product_id);
			$product_country_codes[]="";
			foreach($data['ProductCountries']->result() as $row){
				$product_country_codes[]=$row->country_code;
			}
			$data['data']=$this->Products_model->get_all_product_countries_except($product_id,$product_country_codes)->result();
			header('Content-Type: application/json');
			echo json_encode($data);
		} 

		public function AddProductCountries(){ 
			$productId=$_POST['productId'];
			$ProductCountriesId=$_POST['ProductCountriesId'];
			$countryId[]=explode(",",$ProductCountriesId);
			for($i=0;$i<count($countryId[0]);$i++){
				$data[] = array('product_id' => $productId,'country_code'=>$countryId[0][$i]);			
			}
			$status=$this->Products_model->insert_product_countries($data);
			if($status)
				{
						$this->session->set_userdata('success', "Related Products Added Successfully");
				}
				else{
						$this->session->set_userdata('warning', "Failed to Add Related Product");
				}
				redirect('Admin/Products/RelatedProducts?id='.$productId);
				// echo true;
		} 
		public function AddedProductCountries(){ 
			$product_id=$this->input->get('id');
			$data['data']=$this->Products_model->get_added_product_countries($product_id)->result();
			echo json_encode($data); 
		} 
		public function DeleteProductCountries(){ 
			$productId=$_POST['productId'];
			$countryProductId=$_POST['countryId'];
			$countryId[]=explode(",",$countryProductId);
			for($i=0;$i<count($countryId[0]);$i++){
				// $data[] = array('parent_product_id' => $productId,'related_product_id'=>$relatedId[0][$i]);
				$this->Products_model->delete_product_countries($productId,$countryId[0][$i]);
			}
				$this->session->set_userdata('success', "Product Countries Added Successfully");
				redirect('Admin/Products/ProductCountries?id='.$productId);
				// echo true;
		} 
		
		public function AddBrand()
		{	
			if(isset($_POST['insert']))
			{
				$redirect=1;
			}
			elseif(isset($_POST['save']))
			{
				$redirect=0;
			}
			$config=[
				'upload_path' => './uploads/admin/brands',
				'allowed_types' => 'png|jpg|jpeg'
			];
			$this->load->library('upload',$config);
			//Category Image
			$image=$_FILES['icon'];

			if($this->upload->do_upload('icon')){
				$data = $this->upload->data();
				$icon = base_url('uploads/admin/brands/' . $data['file_name']);   
			}
			else{
				$icon = "";
			}
			date_default_timezone_set('Asia/Kuwait');
			$data = array(
			'name_en' => $_POST['nameEn'],     
			'name_ar' => $_POST['nameAr'],    
			'desc_en' => $_POST['descEn'],
			'desc_ar' => $_POST['descAr'],
			'icon_url' => $icon,
			'created_by' => $this->session->userdata('user_name'),  
			'created_date' => date('Y-m-d H:i:s'),
			'modified_date' => '',
			'modified_by' => '',
			'is_deleted' => "No"
			);
			
				$this->Brands_model->insert_brand_db($data);
		  $data['Brands']	=$this->Brands_model->get_all_brands(); 
			$smt = '<label for="brands">Brands</label>
			<select id="brands" name="brands" class="form-control" required="required">
					<option value="">Choose..</option>';
					 foreach($data['Brands']->result() as $row){
					$smt .=	'<option value="'.$row->brand_id.'">'.$row->name_en.' -  '.$row->name_ar.'</option>';
					 }
				$smt .=	'<option value="add_new">Add New Brand</option>
			</select>';
echo json_encode($smt);
   	}

		private function display_status($status,$success,$fail,$redirect,$productid)
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
					return redirect('Admin/Products');
				}
				elseif($redirect==2)
				{
					return redirect('Admin/ProductStock/Add?id='.$productid);
				}
				else
				{
				  return redirect('Admin/Products');
				}

		}
    
    
    public function __construct()
    {
		parent::__construct();
				$this->load->model("Admin/Products_model",'Products_model');
        $this->load->model("Admin/Brands_model",'Brands_model');
				$this->login_check();
    }
}
?>
