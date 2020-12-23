<?php
@require("../require/connection.php"); 

$productid		= $_POST['hdpageId']; 
$oldPicture	= $_POST['hdpicture']; 


$productname		= $_POST['productname']; 
$productprice		= $_POST['productprice']; 
$productcode	= $_POST['productcode']; 
$productstatus		= $_POST['productstatus']; 
$productdetail     =$_POST['productdetail'];
$productdiscount   =$_POST['productdiscount'];
$productsize=$_POST['productsize'];

$picture		= $_FILES['picture']["name"]; 
	
	if($picture!="")
	{
		move_uploaded_file($_FILES['picture']['tmp_name'], '../images/uploads/'.$picture); 
	}
	else
	{
	$picture=$oldPicture;
	}

$sql = "UPDATE  tblproducts  SET productname='$productname', 
									 productprice='$productprice', 
									 productcode='$productcode',
									 productinstock='$productstatus',
									 productdiscount='$productdiscount',
									 productsize='$productsize',
									 productdetail='$productdetail',
									 picture='$picture'
									 WHERE productid='$productid' ";

//mysql_select_db('test_db');

$result = mysqli_query( $conn,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
	header("Location: view-pages.php?status=updated");
 

mysqli_close($connection);
?>