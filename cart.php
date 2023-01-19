<?php
session_start();
require_once("cart/dbcontroller.php");
$db_handle = new DBController();

$saving_total ="";

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM product WHERE pid='" . $_GET["pid"] . "'");
			$itemArray = array($productByCode[0]["pid"]=>array('name'=>$productByCode[0]["name"], 
			'pid'=>$productByCode[0]["pid"], 'quantity'=>$_POST["quantity"],'color'=>$_POST["color"],
			'size'=>$_POST["size"],'shopname'=>$_POST["shopname"],'shopcity'=>$_POST["shopcity"],
			'shopemail'=>$_POST["shopemail"],'shopphone'=>$_POST["shopphone"], 'price'=>$productByCode[0]["price"],
			'old_price'=>$productByCode[0]["old_price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["pid"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["pid"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["pid"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900" />
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<style type="text/css">
select{
	font-size:14px !important;
	padding-right: 2.5em;
}
</style>
</head>
<body>
<!-- Header -->
<?php include_once("header.php");?>
<!-- /Header -->

<!-- content -->
<div class="container">
<div class="women_main">
<br/><br/>
<div class="women">
  <a href="#"><h4>Shopping Cart </h4></a>
  <ul class="w_nav">
  			  <li><input type="button" onclick="printDiv('printableArea')" value="Print Now" /></li>
              <li><a href="cart.php?action=empty">Empty Cart</a></li>
              <div class="clear"></div>	
   </ul>
   <div class="clearfix"></div>	
</div>
<br/><br/>

<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>    
    <!-- START CART -->
<div id="printableArea">
<table class="table table-bordered inovice h4">
        <thead>
          <tr>
            <th>
              <h4>Product Name</h4>
            </th>
            <th>
              <h4>KG</h4>
            </th>
            <th>
              <h4>Per KG Price</h4>
            </th>
            <th>
              <h4>Total Price</h4>
            </th>
            <th>
              <h4>Remove</h4>
            </th>
          </tr>
        </thead>
        
        <tbody>
    <?php		
    foreach ($_SESSION["cart_item"] as $item){
		$p_total = ($item["price"]*$item["quantity"]);
		if(!empty($item["old_price"])){
				$saving = ($item["old_price"]-$item["price"]);
				$saving_total += ($saving*$item["quantity"]);
				
			}
	?>
      <tr>
        <td style="font-size:14px; font-weight:400;"><?php echo $item["name"]; ?><br/></td>
        <td style="font-size:14px; font-weight:400;" class="text-right"><?php echo $item["quantity"]; ?></td>
        <td style="font-size:14px; font-weight:400;" class="text-right">Rs. <?php echo $item["price"]; ?>/-<br/>
        <b class="price-old2" style="font-size:12px;"><?php	if(!empty($item["old_price"])){
			 echo "Rs." .$item["old_price"]; }?></b></td>
        <td style="font-size:14px; font-weight:400;" class="text-right">Rs. <?php echo $p_total; ?>/-</td>
        <td style="font-size:14px; font-weight:400;" class="text-center"><a class="btn btn-danger btn-sm" href="cart.php?action=remove&pid=<?php echo $item["pid"]; ?>">Remove Item</a></td>
      </tr>
	<?php
    $item_total += ($item["price"]*$item["quantity"]);
    }
    ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" style="font-size:14px; font-weight:500;" class="text-right">Items Total :</td>
            <td style="font-size:14px; font-weight:500;" class="text-right">Rs. <?php echo $item_total; ?>/- </td>
            <td style="font-size:14px; font-weight:500;" class="text-right"></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:14px; font-weight:500;" class="text-right">Shipment Fee :</td>
            <td style="font-size:14px; font-weight:500;" class="text-right">Rs. 150/- </td>
            <td style="font-size:14px; font-weight:500;" class="text-right"></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:14px; font-weight:500;" class="text-right">Total :</td>
            <td style="font-size:14px; font-weight:500;" class="text-right">Rs. <?php echo $item_total+150; ?>/-</td>
            <td style="font-size:14px; font-weight:500;" class="text-right"></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:14px; font-weight:400; color:#FF0004; text-align:center;">
                <?php	if(!empty($saving_total)){
			 echo "You are saving Rs."  .$saving_total; }?></td>
			 <td style="font-size:14px; font-weight:500;" class="text-right"></td>
          </tr>
          
      </tfoot>
      </table>
</div>
<br/><br/>
<div class="women">
  <a href="#"><h4>PLEASE FILL OUT THE FORM BELOW TO PLACE AN ORDER.</h4></a>
   <div class="clearfix"></div>	
</div>


<div class="order-form">
    <form method="post" action="order.php" onsubmit="return ValidateOrderForm();">
		<div class="row">
          <div class="col-xs-6">
              <span><label>Your Name *</label></span>
              <span><input name="customerName" type="text" class="textbox" style="text-transform: lowercase !important;" onkeydown="return /[a-z]/i.test(event.key)" required></span>
          </div>
          <div class="col-xs-6">
              <span><label>E-mail *</label></span>
              <span><input name="customerEmail" type="email" class="textbox" style="text-transform: lowercase !important;" required></span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
              <span><label>Mobile *</label></span>
              <span><input name="customerPhone" id="phoneNumber" type="text" class="textbox" onkeypress="return isNumber(event)" maxlength="11" required></span>
          </div>
          <div class="col-xs-6">
              <span><label>City *</label></span>
              <span><input name="customerCity" type="text" class="textbox" style="text-transform: lowercase !important;" required></span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
              <span><label>Address *</label></span>
              <span><textarea name="customerAddress" required></textarea></span>
          </div>
          <div class="col-xs-6">
              <span><label>Any Special Note about your delivery?</label></span>
              <span><textarea name="SpecialNote"> </textarea></span>
          </div>
        </div>
        <div class="row">
             <div class="col-xs-12">
              <span><label>Select Payment method?</label></span>        
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Bank Transfer" checked>Bank Transfer
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="JazzCash">JazzCash
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="EasyPaisa">EasyPaisa
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="COD">COD
    </label>
        </div>
        </div>
<?php foreach ($_SESSION["cart_item"] as $item) { 
		  $p_total = ($item["price"]*$item["quantity"]);
		  	if(!empty($item["old_price"])) {
				$saving = ($item["old_price"]-$item["price"]);
				$saving_total += ($saving*$item["quantity"]);
				}
			?>
<input type="hidden" value="<?php echo $item["shopname"]; ?>" name="shop_name[]" /> 
<input type="hidden" value="<?php echo $item["shopphone"]; ?>" name="shop_phone[]" /> 
<input type="hidden" value="<?php echo $item["shopemail"]; ?>" name="shop_email[]" />
<input type="hidden" value="<?php echo $item["shopcity"]; ?>" name="shop_city[]" />
<input type="hidden" value="<?php echo $item["pid"]; ?>" name="product_id[]" />                 
<input type="hidden" value="<?php echo $item["name"]; ?>" name="name[]" />
<input type="hidden" value="<?php echo $item["color"]; ?>" name="color[]" />
<input type="hidden" value="<?php echo $item["size"]; ?>" name="size[]" />
<input type="hidden" value="<?php echo $item["quantity"]; ?>" name="quantity[]" /> 
<input type="hidden" value="<?php echo $item["price"]; ?>" name="price[]" /> 
<input type="hidden" value="<?php echo $p_total; ?>" name="productTotal_price[]" />
<input type="hidden" value="<?php echo $item_total; ?>" name="grand_total" />                  
<?php 
	} 
	?>   
       <div>
            <span><input type="submit" class="next_step" value="ORDER NOW" ></span>
      </div>
    </form>
</div>

<div class="clearfix"></div>               		

<?php
}
else{
	echo "<br/><center><h4>Your cart is empty!</h4></center>";
}
?>		   

 <div class="clearfix"></div>
	<!-- end content -->
</div>
</div>
<!--- FOOTER --->
<?php include_once("footer.php"); ?>
<script type="text/javascript">

$(document).ready(function () {
  //called when key is pressed in textbox
  $("#phoneNumber").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Please enter a valid phone number").show().fadeOut("slow");
               return false;
    }
   });
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function ValidateOrderForm()
{
    var customerName = document.OrderForm.customerName;
    var customerEmail = document.OrderForm.customerEmail;
    var customerPhone = document.OrderForm.customerPhone;
    var customerCity = document.OrderForm.customerCity;
    var customerAddress = document.OrderForm.customerAddress;

    if (customerName.value == "")
    {
        window.alert("Please enter your name.");
        customerName.focus();
        return false;
    }
    
    if (customerEmail.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        customerEmail.focus();
        return false;
    }
    if (customerEmail.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        customerEmail.focus();
        return false;
    }
    if (customerEmail.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (customerPhone.value == "")
    {
        window.alert("Please enter your telephone number.");
        customerPhone.focus();
        return false;
    }
	
    if (customerCity.value == "")
    {
        window.alert("Please provide a city name.");
        customerCity.focus();
        return false;
    }
	if (customerAddress.value == "")
    {
        window.alert("Please provide a your order delivery address.");
        customerAddress.focus();
        return false;
    }
    return true;
}
</script>

<script type="text/javascript">
function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>