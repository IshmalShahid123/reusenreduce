<?php
if(!empty($_GET['CustomerName'])) {
    $message = $_GET['CustomerName'];
    $orderNo = $_GET['id'];
}
else{
	header('Location:404.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reuse and Reduce</title>
<link href="images/icon.ico" rel="shortcut icon"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
</head>
<body>
<!-- Header -->
<?php include_once("header.php");?>
<!-- /Header -->

<!-- content -->
<div class="container">
<div class="women_main">
<br/><br/>
<h4 style="text-align:center;">ORDER PLACED SUCCESSFULLY</h4>
  <div class="next_line">
  	<p style="text-align:center;">Thank you Dear Mr/Miss <?php echo $message; ?> for placing an order, your order tracking number is <?php echo $orderNo; ?>, We will call you for order confirmation.<br/>
    Please feel free to contact us if you have any queries. </p>
  </div>
<div class="clearfix"></div>
	<!-- end content -->
</div>
</div>
<!--- FOOTER --->
<?php include_once("footer.php"); ?>
</body>
</html>