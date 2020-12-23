<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../css/index.css">
</head>
<body>
 <div class="box">

      <h1 style="color:white">LOGIN </h1>
      <br>
      <div>
             <?php 
       if(isset($_GET['error']))
       { 
    ?>
    <p class="error"><?php   echo $_GET['error'];  ?>

       <?php }?>
      </div>

      <div>
                <?php 
       if(isset($_GET['message']))
       { 
    ?>
    <p class="success"><?php   echo $_GET['message'];  ?></p></span>

       <?php }?>
      </div>
    <form action="login.php" method="POST">
       

     <label for="User Name">Name</label>
     <br>
     <input type="text" name="name" id="name" placeholder="Enter Your Name" class="inputs" required>
     <br>
     <br>
     <label for="password">Password</label>
     <br>
     <input type="password" name="password" id="password" placeholder="Enter Your Password" class="inputs" required>
     <br>
     <br>
     <input type="Submit" value="LOG IN"  class="btn btn-primary" name="save"><br><br>
     <a href="signupform.php">Don't have an Account..? Signup here</a>
    
     </form>
 </div>
     

  
  
    
</body>
</html>