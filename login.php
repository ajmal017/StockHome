<?php
error_reporting(0);
session_start();
mysql_connect('localhost','root','');
mysql_select_db('stock_house');
$username=$_POST['username'];
$pass=$_POST['password'];
if($username!="" && $pass!="")
{
	$sel="select * from register where reg_email='$username' and reg_pass='$pass'";
	$exe=mysql_query($sel);
	$num=mysql_num_rows($exe);
	if($num==1)
	{
		$rem=$_POST['rem'];
		if($rem==1)
		{
			setcookie("username",$username,time()+20);
			setcookie("upass",$pass,time()+20);
		}
		$fetch=mysql_fetch_array($exe);
		$_SESSION['USERID']=$fetch['reg_id'];
		echo '<script>window.location="loginhome.php"</script>';
	}
	else
	{
		$msg='Invalid username or password';
	}
}
?>
<!DOCTYPE php>
<php>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css"href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
	<?php include("header.php"); ?>

	<div class="container-fluid row3">
		<div class="container ">
			<div class="row">	
				<div class="col-md-12 col-xs-12 text-center abr3p1">
					Login
				</div>
			</div>
			<div class="row">
				<div class="wrapper">
					<form class="form-signin" method="post">       
						<font size="5" class="form-signin-heading">Please login</font><br>
						<?php echo $msg ?>
						<input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" style="margin-top: 30px;"/>
						<input type="password" class="form-control" name="password" placeholder="Password" required="" style="margin-top: 15px;" />      
						<label class="checkbox" style="margin-top: 25px; margin-left: 20px;">
							<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe" >Remember me
						</label>
						<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 15px;">Login</button>   
					</form>
				</div>
				<!-- <div class="col-md-12 col-xs-12 abr3p2">
					<form class="form1" method="post">
						<div class="row formcont1">
							<div class="leftinp1 col-md-6 col-xs-4">Username:</div>
							<div class="col-md-6 col-xs-8">
								<input type="text" placeholder="Username" class="input1" name="username" /></div>
							<div class="clear"></div>
						</div>
						<div class="row formcont1">
							<div class="leftinp1 col-md-6 col-xs-4">Password:</div>
							<div class="col-md-6 col-xs-8">
								<input type="text" placeholder="Password" class="input1" name="pass"/></div>
							<div class="clear"></div>
						</div>
						<div class="row loginrow">
							<div class="col-md-12 col-xs-12">
								<input type="submit" value="Login" class="sendbtn1">
							</div>
						</div>
					</form>
				</div> -->
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.js"></script>

</php>