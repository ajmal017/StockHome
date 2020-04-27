<?php
  error_reporting(0);
  mysql_connect('localhost','root','');
  mysql_select_db('stock_house');
  session_start();
  if($_SESSION['USERID']=="")
  {
    echo '<script>window.location="index.php"</script>';
  }
  $old=$_POST['old'];
  $new=$_POST['new'];

  if($old!="" && $new!="")
  {
    $ins="insert into userpass set old_pass='$old',new_pass='$new' ";
    mysql_query($ins);
  }
?>

<!DOCTYPE php>
<php>
<head>
  <title>Change password</title>
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

  <div class="container-fluid row3">
    <div class="container ">
      <div class="row"> 
        <div class="col-md-12 col-xs-12 text-center abr3p1">
          Change Password
        </div>
      </div>
      <div class="row">
        <div class="wrapper">
          <form class="form-signin" method="post">       
            
            <?php echo $msg ?>
            <input type="password" class="form-control" name="old" placeholder="Old Password" required="" style="margin-top: 30px;"/>
            <input type="password" class="form-control" name="new" placeholder="New Password" required="" style="margin-top: 15px;" /> 
            <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" required="" style="margin-top: 15px;" />      
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 15px;">Save Password</button>   
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