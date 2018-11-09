
<?php include('server.php');

     // require('connect.php');
 ?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


  <title>LOGIN PAGE</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>

<div class="container">
 

  <form class="form-horizontal" role="form" method="post" action="login.php">
    
    <?php include('error.php'); ?>

 <br>
  <br>
<div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
  <div class="panel panel-body" style="background-color: #f2f2ed">
     <?php
     $remarks  =  isset($_GET['remark_login'])  ?  $_GET['remark_login']  :  '';
     if  ($remarks==null  and  $remarks=="")
     {
      echo  '<div class="panel panel-default panel-heading text-center" style="background-color: #85c1e9"><b><h1>Login  Here</h1></b></div>';
    }
    if  ($remarks=='failed')
    {
      echo  '<div class="panel panel-danger panel-heading text-center" style="background-color: red"><b>wrong username or password!<h1></b></div>';
    }
    else
     ?>
 </div>
</div>
</div>
 <br>

    <!-- <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-info"><b>Login Here</b></h1>
                <hr>
            </div>
        </div> -->
    <div class="row">
      <div class="col-md-3 field-label-responsive">
                <label for="name"><b>Username</b></label>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="username" class="form-control" id="name" value="<?php echo $username; ?>"
                               placeholder="someone someone" required autofocus>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="" ss="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                      </div>
                    </div>
                  </div>

      

    <div class="row">
       <div class="col-md-3 field-label-responsive">
                <label for="password"><b>Password</b></label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
      
<style>
 .pp {padding-left: 325;}
</style>

    <div class="row">
      <div class="pp"></div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success" name="login_user"><i class="fa fa-user-plus"></i><b>Login</b></button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>





