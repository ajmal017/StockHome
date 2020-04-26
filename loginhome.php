<!DOCTYPE php>
<php>
<head>
	<title>home</title>
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
	
    <div class="container-fluid row1">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8">

				</div>
				<div class="col-md-1 col-lg-1 log">
					<a href="">Premium</a> 
				</div>
				<div class="col-md-2 col-lg-2 log">
					<a href="change_u_pass.php">Change Password</a>
				</div>
				<div class="col-md-1 col-lg-1 log">
					<a href="index.php">Logout</a> 
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container example2">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="http://disputebills.com"><img src="images/stocklogo.png" alt="Dispute Bills">
						</a>
					</div>
					<div id="navbar2" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right" style="font-size: 16px;">
							<li><a href="index.php">Home</a></li>
							<li><a href="stock.php">Stock</a></li>
							<li><a href="analysis.php">Analysis</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li class="dropdown-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</div>
				<!--/.container-fluid -->
			</nav>
		</div>
	</div>
	<div class="container-fluid homerow3">
		<div class="container ">
			<div class="row">
				<!-- Left side begins -->
				<div class="col-md-6 col-xs-12" style="border-right: white solid 4px;padding-right: 50px;">
					<div class="col-lg-12 col-md-12 banks">
						<div class="bankrow1">ICICI</div>
						<div class="bankrow2">12,272.50</div>
						<div class="bankrow3">
							<table class="table table-strapped">
								<tbody>
									<tr>
										<td style="color: red">Low</td>
										<td style="color: green">High</td>
										<td style="color: grey">Volume</td>
									</tr>
									<tr>
										<td>12,153.50</td>
										<td>12,290.00</td>
										<td>0</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 banks">
						<div class="bankrow1">ICICI</div>
						<div class="bankrow2">12,272.50</div>
						<div class="bankrow3">
							<table class="table table-strapped">
								<tbody>
									<tr>
										<td style="color: red">Low</td>
										<td style="color: green">High</td>
										<td style="color: grey">Volume</td>
									</tr>
									<tr>
										<td>12,153.50</td>
										<td>12,290.00</td>
										<td>0</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
					<div class="col-lg-12 col-md-12 banks">
						<div class="bankrow1">ICICI</div>
						<div class="bankrow2">12,272.50</div>
						<div class="bankrow3">
							<table class="table table-strapped">
								<tbody>
									<tr>
										<td style="color: red">Low</td>
										<td style="color: green">High</td>
										<td style="color: grey">Volume</td>
									</tr>
									<tr>
										<td>12,153.50</td>
										<td>12,290.00</td>
										<td>0</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Left side ends -->
				<!-- Rights side begins -->
				<div class="col-md-2"></div>
				<div class=" col-md-4 col-xs-12 brfrm">
					<div class="row formrow">Lowest Brokerage l Best Brokers l Free Tips</div>
					<form class="brokerform" style="text-align: left;">
						Name<br> <input type="text" name="" placeholder="John Doe" class="textfield"><br><br>
						Your Email<br> <input type="text" name="" placeholder="example@gmail.com" class="textfield"><br><br>
						Mobile No.<br> <input type="text" name="" placeholder="9876543211" class="textfield"><br><br>
						<button class="submitbtn">Submit Now</button>	
					</form>
				</div>
				<!-- Right side ends -->
			</div>
		</div>
	</div>

	<?php include("footer.php"); ?>
		
	</body>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	</php>