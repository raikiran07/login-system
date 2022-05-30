<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <style>
         body{
              width:100%;
              min-height:100vh;
              position:relative;
         }
         #header-home{
               position:absolute;
               left:50%;
               bottom:50%;
               transform:translate(-50%,-50%);
         }
    </style>

</head>

<body>

     <h1 id="header-home">Hello, <?php echo $_SESSION['name']; ?>!</h1>

     <a href="logout.php">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>