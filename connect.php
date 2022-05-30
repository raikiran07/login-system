<?php 

$hostname = 'localhost';
$uname = "root";
$password = "";
$db_name = "std";

$conn = mysqli_connect($hostname,$uname,$password,$db_name);

if(!$conn){
    echo "connection failed due to".mysqli_connect_error();
}
else{
    echo "successfully connected!";
}

?>