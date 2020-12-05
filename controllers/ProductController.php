<?php
require_once 'models/db_connect.ph';
if(isset($_POST['add_product'])){
	$hasError=false;

	if(!hasError){
		$fileType=strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$file="storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["temp_name"],$file);
	addProduct($_POST["name"],$_POST["price"],$_POST["qty"],$_POST["desc"],$file,1);
	header("Location: allproducts.php");
	}
}
function addProduct($name,$price,$qty,$desc,$image,$c_id){
	$query= "INSERT INTO product VALUES(NULL,'$name',$price,$qty,'desc','$image',$c_id)";
	execute($query);
}
  function getAllProducts(){
	  $query = "SELECT * FROM product WHERE id=$id";
        $result = get($query);
        if(count($result)>0) $result = $result[0];
        return $result;
  }
?>