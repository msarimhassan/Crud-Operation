<?php
  @require("../require/connection.php"); ?>
<table width="80%" border="1" align="center">
 <?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
	<title>View Pages</title>
</head>
<body>
<h1 style="background-color:lightblue;padding:20px">PRODUCT MANAGEMENT🚀</h1>
	    
			<table> 
			<tr> 
			<td height="33" colspan="2" style="font-weight:bold"  ><?php 
											if($_GET)
											{
												if($_GET['status']=='updated') echo "<span style='color:green'>Record Successfully Updated!</span>";
												elseif($_GET['status']=='deleted') echo "<span style='color:green'>Record Successfully Deleted!</span>"; 
												else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
											}?></td>
			</tr>
			</table>



				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Img</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Details</th>
	   <th scope="col">Product Status</th>
	    <th scope="col">Operations</th>

    </tr>
  </thead>
			  

	<?php	
	
		$sql="SELECT * FROM tblproducts order by productid";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			?>
			<tbody>
			<tr>
			<td ><?php echo $row['productid']?></td>
			<td ><img src="../images/uploads/<?php echo $row["picture"]?>" height="50" width="50"  /></td>
			<td><?php echo $row["productname"]?></td>
			<td><?php echo $row["productdetail"]?></td>
			<!--<td style="border-bottom:1px solid"><?php echo $row["pagecontent"]?></td>-->
			<td><?php echo $row["productinstock"]?></td>
			<td>
			<a href="edit-page.php?pId=<?php echo $row["productid"] ?>"><i class="fas fa-pen fa-1x" style="color:yellow"></i></a> | 
			<a href="delete-page.php?pId=<?php echo $row["productid"] ?>"><i class="fas fa-trash-alt fa-1x" style="color:red"></i></a></td>
		  </tr>
		  </tbody>
			<?php
			}
		} 
	?>
			
			</table>

</body>
</html>

			
		




