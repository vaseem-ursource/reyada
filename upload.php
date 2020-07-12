<?php
// for local
$base_url = "http://localhost/Reyadah-Az/";

// for Satging
// $base_url = "http://reyada.grablugmah.com/";

// for live
// $base_url = "https://reyada.co/";

if(isset($_FILES['upload']['name']))
{
 $file = $_FILES['upload']['tmp_name'];
 $file_name = $_FILES['upload']['name'];
 $file_name_array = explode(".", $file_name);
 $extension = end($file_name_array);
 $new_image_name = rand() . '.' . $extension;

 $allowed_extension = array("jpg", "gif", "png","jpeg");
 if(in_array(strtolower($extension), $allowed_extension))
 {
  move_uploaded_file($file, './Admin/uploads/articles/' . $new_image_name);
  // move_uploaded_file($file, './admin/uploads/articles/' . $new_image_name);

  $function_number = $_GET['CKEditorFuncNum'];
  $url = $base_url . 'Admin/uploads/articles/' . $new_image_name;
  // $url = $base_url . 'admin/uploads/articles/' . $new_image_name;

  $message = '';
 
  echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
 }
}

?>