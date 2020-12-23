<?php require("../require/connection.php"); ?>
<table width="80%" border="1" align="center">
   <?php include("header.php"); ?>
  <tr>
    <td height="463" align="center" valign="middle">
	<form name="myform" action="add-process.php" method="post" enctype="multipart/form-data" >
	<table width="80%" border="0">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" ><?php
									if($_GET)
									{
									if($_GET['status']=='yes') echo "<span style='color:green'>Record Entered Successfully!</span>"; 
									else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
									}?></td>
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Add Page Record</strong></td>
  </tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productname" value="" /></td>
  </tr>
   <tr>
    <td>Product Price</td>
    <td><input type="text" name="productprice" value="" /></td>
  </tr>
    <tr>
    <td>Product Code</td>
    <td><input type="text" name="productcode" value="" /></td>
  </tr>
     <tr>
    <td>Product discount</td>
    <td><input type="text" name="productdiscount" value="" /></td>
  </tr>
     <td>Product Size</td>
    <td><input type="text" name="productsize" value="" /></td>
  </tr>
   <tr>
    <td valign="top">Product Details</td>
    <td valign="top"><textarea cols="80" rows="15" name="productdetail"></textarea></td>
  </tr>
  
    <td>Product Status</td>
    <td><select name="productstatus" >
		<option value="Y" >Published</option>
		<option value="N" >Not Published</option>
		</select></td>
  </tr> 
  <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file" value="" name="picture"  /></td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add Page" /></td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
  <tr>
    <td align="center" >Web Solutions</td>
  </tr>
</table>
