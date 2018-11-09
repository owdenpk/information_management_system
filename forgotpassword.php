
<?php
require('connect.php');
//require('server.php');
require('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$sql = "SELECT * FROM `users` WHERE email = '$email'";
	$res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password = $r['password'];
		$to = $r['email'];
		$subject = "Your Recovered Password";
 
		$message = "Please use this password to login " . $password;
		//$headers =  'MIME-Version: 1.0' . "\r\n"; 
        //$headers .= 'From: Your name <vivek@codingcyber.com>' . "\r\n";
        //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		$headers = "From : vivek@codingcyber.com". "\r\n";
		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email id";
		}else{
			echo "Failed to Recover your password, try again";
		}
 
	}else{
		echo "User email does not exist in database";
	}
}
 
 
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


  <title>Recovering account</title>
  </head>
<body>
  <div class="container">

  <form class="form-horizontal" role="form" method="post" action="forgotpassword.php">
  	 <br>
    <br>
  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

<!-- <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
  <div class="panel panel-body" style="background-color: #f2f2ed">
     <?php
   //  $remarks  =  isset($_GET['remark_signup'])  ?  $_GET['remark_signup']  :  '';
    // if  ($remarks==null  and  $remarks=="")
     {
     // echo  '<div class="panel panel-default panel-heading text-center" style="background-color: #85c1e9"><b><h1>Forgot password</h1></b></div>';
    }
   // if  ($remarks =='failed')
    {
     // echo  '<div class="panel panel-danger panel-heading text-center" style="background-color: red"><b><h1>email already exist<h1></b></div>';
    }
   // else
     ?>
 </div>
</div>
</div>
 <br> -->

  	<div class="row">
      <div class="col-md-3 field-label-responsive">
                <label for="name"><b>Email</b></label>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="email" class="form-control" id="name"
                               placeholder="someone someone" required autofocus>
                    </div>
                </div>
            </div>

            <style>
 .pp {padding-left: 325;}
</style>

  	<div class="row">
  	  <div class="pp"></div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success" name="reg_user"><i class="fa fa-user-plus"></i><b>Submit</b></button>

  	</div>

  </div>
</div>
</form>
</div>
</body>
</html>