 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <title></title>
</head>
<body>
     <?php 
 session_start();
  if($_SESSION['username']=="")
  {
      session_destroy();
      header('Location:index.php');
  }
 
 ?>


    <h1 style="text-align:center"> Welcome <?php
 echo $_SESSION['username']; ?>👋</h1>
<div class="topnav">
  <a href="welcome.php">Home</a>
  <a href="add-page.php">Add Pages</a>
  <a href="view-pages.php">View Pages</a>
  <a href="logout.php">LOGOUT</a>
  
</div>
</body>
</html>
 
