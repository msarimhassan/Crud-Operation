<?php
@require("../require/connection.php"); 

$pageId			= $_GET['pId']; 

$viewsql ="SELECT picture FROM tblproducts WHERE productid='$pageId'";
$viewresult=mysqli_query($conn,$viewsql);
$viewrow = mysqli_fetch_array($viewresult);

$picture = $viewrow["picture"];

		
$sql = "DELETE from tblproducts WHERE productid='$pageId' ";
 
$result = mysqli_query( $conn,$sql);
 
if($result)
{
  	unlink('../images/uploads/'.$picture);
	echo "yes";
	header("Location: view-pages.php?status=deleted");
}
else
{
die('Could not enter data: ' . mysqli_error());
}
 
	
 

mysqli_close($connection);
?>