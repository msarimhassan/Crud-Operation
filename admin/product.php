<?php 

@require('../require/connection.php');

$query="SELECT productid,picture from tblproducts ORDER BY productid";

$result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);

 if($count>0)
 {

    while($row = mysqli_fetch_array($result))
    {?>
    <div>
        <a href="display.php?pid=<?php echo $row['productid'] ;?>"><img src="../images/uploads/<?php echo $row["picture"]?>" height="200" width="400"/></a>
        </div>
        <?php
    }
 }?>
