<?php 

    @require('../require/connection.php');


    $un=$_POST['uname'];
    $up=$_POST['upass'];

    $query="INSERT INTO users SET username='$un', userpassword='$up'";

    $result=mysqli_query($conn,$query);

    if($result!=0)
    {
        header('Location:index.php?message=Succesfully created acccount');
    }








?>