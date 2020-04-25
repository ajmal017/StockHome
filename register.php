<?php
error_reporting(0);
mysql_connect('localhost','root','') or die('con error');
mysql_select_db('stock_house') or die('con error');
$rname=$_POST['rname'];
$remail=$_POST['remail'];
$rpass=$_POST['rpass'];
$rmno=$_POST['rmno'];
$radd=$_POST['radd'];
if($rname!="" && $remail!="" && $rpass!="" && $rmno!="" && $radd!="")
{
	$sel="select * from register where reg_email='$remail'";
	$exe=mysql_query($sel);
	$num=mysql_num_rows($exe);
	echo $num;
	if($num==0)
	{
		$ins="insert into register set reg_name='$rname', reg_email='$remail', reg_pass='$rpass', reg_mno='$rmno', reg_add='$register_add'";
		mysql_query($ins);
	}
	else
	{
		echo "already added";
	}
}
?>
<!DOCTYPE php>
<php>
<head>
	<title>Register</title>
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
					<b>Registration Form</b>
				</div>
			</div>
			<div class="row">
				<div class="regr3p2">
					<form class="form1" method="post">
						<div class="row formcont1">
							<div class="col-md-6 col-xs-6 leftinp">Name</div>
							<div class="col-md-6 col-xs-6"><input type="text" placeholder="name" class="input1" name="rname" /></div>
						</div>
						<div class="row formcont1">
							<div class="col-md-6 col-xs-6 leftinp">Email</div>
							<div class="col-md-6 col-xs-6"><input type="text" placeholder="email" class="input1" name="remail" /></div>
						</div>
						<div class="row formcont1">
							<div class="col-md-6 col-xs-6 leftinp">Password</div>
							<div class="col-md-6 col-xs-6"><input type="password" placeholder="password" class="input1" name="rpass"/></div>
						</div>
						<div class="row formcont1">
							<div class="col-md-6 col-xs-6 leftinp">Mobile No.</div>
							<div class="col-md-6 col-xs-6"><input type="text" placeholder="mobile no." class="input1" name="rmno" /></div>
						</div>
						<div class="row formcont1">
							<div class="col-md-6 col-xs-6 leftinp">Address</div>
							<div class="col-md-6 col-xs-6"><input type="text" placeholder="address" class="input1" name="radd" /></div>
						</div>
						<div class="row formcont1">
							<div class="col-md-12 col-xs-12" style="text-align: center;">
								<button class="sendbtn1">REGISTER</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
		</body>
		</php>