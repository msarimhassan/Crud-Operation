<?php
@require("../require/connection.php"); 


$productname		= $_POST['productname']; 
$productprice		= $_POST['productprice']; 
$productcode	= $_POST['productcode']; 
$productstatus		= $_POST['productstatus']; 
$productdetail     =$_POST['productdetail'];
$productdiscount   =$_POST['productdiscount'];
$productsize=$_POST['productsize'];

$picture		= $_FILES['picture']["name"]; 
//$picture		= $_FILES['picture']["type"]; 
//$picture		= $_FILES['picture']["size"]; 

	$newName=$pageName."-".$picture;
	
	if($picture!="")
	{
	move_uploaded_file($_FILES['picture']['tmp_name'], '../images/uploads/'.$newName); 
	}

 $sql = "INSERT INTO tblproducts  SET productname='$productname', 
									 productprice='$productprice', 
									 productcode='$productcode',
									 productinstock='$productstatus',
									 productdiscount='$productdiscount',
									 productsize='$productsize',
									 productdetail='$productdetail',
									 picture='$newName' ";

//mysql_select_db('test_db');

 
$result = mysqli_query($conn, $sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
	header('Location:add-page.php?status=yes');
 

mysqli_close($connection);
?>