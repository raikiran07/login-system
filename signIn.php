
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignIn</title>
    <style>
        .container-fluid{
            border:none;
            width:40%;
            margin-top:2rem;
            padding:30px;
            box-shadow:2px 4px 15px grey;
            border-radius:4px;

        }
        .btn{
            margin-right:1rem;
        }
        #header{
            /* margin-top:1rem; */
            margin-bottom:1.5rem;
            text-align:center;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <form action="sendData.php" method="post" class="mt-4">
            <h2 id="header">SignIn</h2>
        <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
           <h6><label for="username">Enter Name</label></h6>
           <input type="text" id="username" name="username" class="form-control mb-4" required>
         
           <br>

           <h6><label for="useremail">Enter Email</label></h6>
           <input type="email" id="useremail" name="useremail" class="form-control mb-4" required>
           
           <br>

           <h6><label for="password">Enter Password</label></h6>
           <input type="password" id="password" name="password" class="form-control mb-4" required>
          
           <br>
           <button type="submit" class="btn btn-primary">SignIn</button>
           <span><a href="index.php">LogIn</a></span>
        </form>
    </div>
    </div>
   
    
</body>
</html>

