<?php
session_start();
unset($_SESSION['ADMINID']);
header("location:index.php");
?>
<!DOCTYPE php>
<php>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<?php include("header.php"); ?>
		
        <?php include("footer.php"); ?>
	</div>

</body>
</php>