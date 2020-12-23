

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/index.css">
     <title>Signup page</title>
</head>
<body>
     <div class="box">
          <h1 style="color:white">SIGN UP HERE</h1>
     <form action="creation.php" method="POST">
          <label for="name">Name</label><br>

     <input type="text" name="uname" placeholder="Enter Your Name" class="inputs"/><br><br>
     <label for="pass">Password</label><br>
     <input type="password" name="upass" placeholder="Enter Your Password" class="inputs"/><br><br>

     <input type="submit" name="submit" value="Signup" class="btn btn-primary">
     </form>
</div>
</body>
</html>




