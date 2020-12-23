<?php require("../require/connection.php"); ?>
<table width="80%" border="1" align="center">
   <?php include("header.php"); ?>
  <tr>
  <?php	
		$pageId = $_GET['pId'];
		$sql="SELECT * FROM tblproducts where productid='$pageId'";
		$result=mysqli_query($conn,$sql);
		
		$count=mysqli_num_rows($result);
			
		if ($count > 0) 
		{
			$row = mysqli_fetch_array($result);
		} 
	 
	?>
	
    <td height="463" align="center" valign="middle">
	<form name="myform" action="edit-process.php" method="post"  enctype="multipart/form-data">
	<input type="hidden" name="hdpicture" value="<?php  echo $row["picture"]?>" />
	<input type="hidden" name="hdpageId" value="<?php echo $row["productid"]?>" />
	<table width="80%" border="0">
 
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Edit Page Record</strong></td>
  </tr>

  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productname" value="<?php echo $row["productname"]?>" /></td>
  </tr>
   <tr>
    <td>Product Price</td>
    <td><input type="text" name="productprice" value="<?php echo $row["productprice"]?>" /></td>
  </tr>
    <td>Product Code</td>
    <td><input type="text" name="productcode" value="<?php echo $row["productcode"]?>" /></td>
  </tr>
    <td>Product Discount</td>
    <td><input type="text" name="productdiscount" value="<?php echo $row["productdiscount"]?>" /></td>
  </tr>
    <td>Product Size</td>
    <td><input type="text" name="productsize" value="<?php echo $row["productsize"]?>" /></td>
  </tr>
   <tr>
    <td valign="top">Product Detail</td>
    <td valign="top"><textarea cols="80" rows="15" name="productdetail"><?php echo $row["productdetail"]?></textarea></td>
  </tr>
   <tr>
    <td>Product Status</td>
    <td><select name="productstatus" >
		<option value="Y" <?php if($row["productinstock"]=='Y') echo 'selected'; else ''; ?> >Published</option>
		<option value="N" <?php if($row["productinstock"]=='N') echo 'selected'; else ''; ?> >Not Published</option>
		</select></td>
  </tr>
  
   <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file" value="" name="picture"  /></td>
   </tr>
   
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Edit Page" /></td>
  </tr>
  <tr>
  <td valign="top">&nbsp;Existing Image:</td>
  <td align="left" valign="top"> <img src="../images/uploads/<?php echo $row["picture"]?>"   /></td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
  <tr>
    <td align="center" >Web Solutions</td>
  </tr>
</table>
