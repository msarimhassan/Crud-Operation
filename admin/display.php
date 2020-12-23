<?php 
@require('../require/connection.php');

$pid =$_GET['pid'];
$query ="SELECT * from tblproducts WHERE productid='$pid' ";

$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
    while($row=mysqli_fetch_array($result))
    {?>
    <div class="box">
    <img src="../images/uploads/<?php echo $row["picture"]?>" width="700" height="500"/>
      <ul>
      <li><?php echo $row['productname']?></li>
      <li><?php echo $row['productprice']?></li>
      <li><?php echo $row['productsize']?></li>
      <li><?php echo $row['productinstock']?></li>
      <li><?php echo $row['productdiscount']?></li>
      <li><?php  echo $row['productdetail']?></li>
      </ul>  
    </div>

   <?php }
}
?>