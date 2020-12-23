<?php 


@require('../require/connection.php');
 $username=$_POST['name'];
 $password=$_POST['password'];
   
 // query variable stores my query
  $query="SELECT * from users WHERE username='$username' and userpassword='$password'";
    

  // query result store in result variable

  $result = mysqli_query($conn,$query);

  // count result row we use built in function
  $count =mysqli_num_rows($result);
  

  if($count == 1)
  {
      session_start();
      $_SESSION['username']=$username;
      $_SESSION['password']=$password;

      header('Location:welcome.php');
      exit();
  }
  else {
            header ("Location: index.php?error=Incorrect User name or password");
            exit();
        }

?>