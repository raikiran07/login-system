<?php
session_start();
include 'connect.php';
$error = "";

if(isset($_POST['useremail'])&&isset($_POST['userpassword'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['useremail']);
    $password = validate($_POST['userpassword']);

    if(empty($uname)){
        header ("error location index.php: username is required!");
        exit();
    }
    elseif(empty($password)){
        header ("error occured location index.php: password is required");
        exit();
    }
    
    $sql = "SELECT * FROM `students` WHERE `email` = '$uname' ";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        
        $verify = password_verify($password,$row['password']);
        
         if ($verify) {

            $_SESSION['user_name'] = $row['email'];

            $_SESSION['name'] = $row['name'];

            $_SESSION['id'] = $row['id'];

            header("Location: home.php");

            exit();           
            


        }else{
           
            header("Location: index.php?error=Incorect User name or password");
           

            exit();

        }

    }else{

        header("Location: index.php?error=Incorect User name or password");

        exit();

    }

}

else{

header("Location: index.php");

exit();


}



 ?>