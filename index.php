

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .container{
            width:50%;
            margin:2rem auto;
            border:none;
            padding:20px;
            box-shadow:3px 5px 15px grey;
            border-radius:5px;
        }

        .error{
            color:red;
        }

        #login-id{
          text-align:center;
          margin:1rem 0 3rem 0;
        }
        .form-label{
          display:block;
          text-align:left;
        }
        .form-check-input{
          text-align:left;
        }
        .btn{
          margin-top:3rem;
          width:120px;
          display:block;
        }
    </style>
</head>
<body>
    <!-- Pills navs -->

<!-- Pills navs -->
<div class="container">
    <form action="login.php" method="post">
    <div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form>
      <div class="text-center mb-3">

      <h2 id="login-id">Login Page</h2>
     
       
   

      <!-- Email input -->
      <div class="form-outline mb-4">
      <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
        <label class="form-label" for="loginName">Email or username</label>
        <input type="text" id="loginName" class="form-control" name="useremail" required/>
        
        
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="loginPassword" class="userinput">Password</label>
        <input type="password" id="loginPassword" class="form-control" name="userpassword" required/>
       
        
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-3 d-flex ">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-3 d-flex">
          <!-- Simple link -->
          <a href="signIn.php">signIn</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">LogIn</button>

     

    </form>

     
     
    </form>
  </div>
</div>
</div>
<!-- Pills content -->

<!-- Pills content -->
</body>
</html>