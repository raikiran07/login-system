
<?php
session_start();
include 'connect.php';


$name=$useremail=$password="";
// $nameErr=$useremailErr=$passwordErr="";

if($_SERVER['REQUEST_METHOD']=='POST'){
   $name = test_input($_POST['username']);
   $useremail = test_input($_POST['useremail']);
   $password = test_input($_POST['password']);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$password = password_hash($password,PASSWORD_DEFAULT);

$sql = "insert into `students` (`name`,`email`,`password`) values ('$name','$useremail','$password')";
if(mysqli_query($conn,$sql)){

    header("location:login.php");
    
}
else{
    header("Location: signIn.php?error=User name or password is missing!");
           

    exit();
}

mysqli_close($conn);


 ?>