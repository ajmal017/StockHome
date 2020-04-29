<?php
  error_reporting(0);
  session_start();
  mysql_connect('localhost','root','');
  mysql_select_db('stock_house');
  $username=$_POST['username'];
  $password=$_POST['password'];

  if($username!="" && $password!="")
  { $sel="select * from admin where uname='$username' and upass='$password'";
    $exe=mysql_query($sel);
    $tot=mysql_num_rows($exe);
    if($tot==1)
    { 
      $fetch=mysql_fetch_array($exe);
      $_SESSION['ADMINID']=$fetch['admin_id'];
      echo '<script>window.location="home.php"</script>';
      $rem=$_POST['rem'];
      if($rem==1)
      {
        setcookie("username",$username,time()+60);
        setcookie("password",$password,time()+60);
      }
    }
    else
    { 
      $msg='Invalid username or password';   
    }
  }


?>


<!DOCTYPE php>
<php lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" value="<?php echo $_COOKIE['username']?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php echo $_COOKIE['password']?>">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<font color="#C21807" class="text-warning">
					<?php echo $msg ?></font>
					<br><br>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="rem">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

</body>
</php>