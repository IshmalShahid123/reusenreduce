<?php
include('new_db.php');
if(!empty($_GET["pid"]))
{
	$query ="SELECT * FROM product WHERE pid ='" .$_GET["pid"]. "'";
	$row = mysqli_fetch_assoc(mysqli_query($conn, $query));
	
	$pid=$row['pid'];
	$image=$row['image'];
	$imageone=$row['imageone'];
	$name=$row['name'];
	$b_name=$row['brand_name'];
	$price=$row['price'];
	$old_price=$row['old_price'];
	$note=$row['note'];
	$description=$row['description'];
	$return_policy=$row['return_policy'];
	$sid=$row['sid'];
	$discount=$row['discount'];
	$weight = $row['weight'];
	
	$shoquery ="SELECT * FROM shop WHERE sid ='" .$sid. "'";
	$rows = mysqli_fetch_assoc(mysqli_query($conn, $shoquery));	
	
	$shopname=$rows['shop_name'];
	$shopphone=$rows['shop_phone'];
	$shopemail=$rows['shop_email'];
	$shopcity=$rows['shop_city'];
	$shopwhatsapp = $rows['whatsapp_number'];
}
else
{
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900" />

<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>

<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
  jQuery(document).ready(function($){

	  $('#etalage').etalage({
		  thumb_image_width: 300,
		  thumb_image_height: 400,
		  source_image_width: 900,
		  source_image_height: 1200,
		  show_hint: true,
		  click_callback: function(image_anchor, instance_id){
			  alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
		  }
	  });

  });
</script>
<style type="text/css">
select{
	font-size:14px !important;
	padding-right: 2.5em;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.float2{
	position:fixed;
	width:60px;
	height:60px;
	bottom:110px;
	right:40px;
	background-color:#3c5ba6;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
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
	<!-- start content -->
                    
			<?php
              if(!empty($pid)) {
				  ?>
			<div class="row single">
				<div class="col-md-9 det">

            <div class="single_left">
			<div class="grid images_3_of_2">
            	<ul id="etalage">
                <li>
	 <img class="etalage_thumb_image" src="<?php echo $image; ?>" class="img-responsive" alt=""/>
     <img class="etalage_source_image" src="<?php echo $image; ?>" class="img-responsive" title="<?php echo $name; ?>" />
                </li>
      <?php if(!empty($imageone)){ echo "<li>
     <img class='etalage_thumb_image' src='$imageone' class='img-responsive'/>
     <img class='etalage_source_image' src='$imageone' class='img-responsive' title='$name'/>";
	          }?>
                </li>
                </ul>
				<div class="clearfix"></div> 		
			</div>
				  <div class="desc1 span_3_of_2">
					<h3><?php echo $name; ?></h3>
					<span class="brand">Brand: <?php echo $b_name; ?></span>
					<br>
					<span class="code">Note: <?php echo $note; ?></span>
					
						<div class="price">
						    
							<span class="text">Per KG Price:</span>
							<span class="price-new">Rs.<?php echo $price; ?></span>
                            <span class="price-old"><?php if(!empty($old_price)){ 
                            echo "Rs.".$old_price; }?></span>
                            
                            
				<?php if(!empty($discount)) { ?>
                <span class="discount">
				<?php echo "-" .$discount; ?>
                </span>
				<?php } ?>
				
				
				<br/>
				<span class="text">Weight:</span><span class="price-new"> <?php echo $weight; ?> KG</span>
                            
							<br/>
                            <p>Shipment Fee: Rs.150/-</p>
						</div>
                        <br/>
					<div class="det_nav1">
<form class="form-inline" method="post" action="cart.php?action=add&pid=<?php echo $pid ?>">

<input type="hidden" value="<?php echo $shopname; ?>" name="shopname" />
<input type="hidden" value="<?php echo $shopcity; ?>" name="shopcity" />
<input type="hidden" value="<?php echo $shopemail; ?>" name="shopemail" />
<input type="hidden" value="<?php echo $shopphone; ?>" name="shopphone" />
<input type="hidden" value="<?php echo $weight; ?>" name="quantity" />

  <br/><br/>
 <!-- <div class="form-group">
  <label>Quantity</label>
 <select name="quantity" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
  </div> -->

<div class="btn_form">
	<input type="submit" value="Add to cart" class="cart_btnAdd" />
</div>
</form>
</div>					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
               
               
               
               
          	    <div class="single-bottom1">
					<h6>Product Details</h6>
					<p class="prod-desc"><?php echo $description; ?><br/><br/>
                    </p>
				</div>

	       </div>	
	<div class="col-md-3">
	  <div class="w_sidebar">
		
        <div class="w_nav1">
			<ul>
				<li><p style="font-size:13px;">Delivery 2 - 3 business days</p></li>
				<li><p style="font-size:13px;">Cash On delivery</p></li>
				<li><p style="font-size:13px;">Return: <?php echo $return_policy; ?></p></li>
			</ul>	
		</div>
	
	</div>
   </div>

		   <div class="clearfix"></div>		
	  </div>
       <?php
		}
		else{
			echo "<br/><center><h4>No Product Found !</h4></center>";
		}
		?>
	<!-- end content -->
</div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+92<?php echo $shopwhatsapp;?>&text=Hello%21%20I%20want%20to%20order." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<div class="clearfix"></div>

<a href="http://mydemos.cf/cart.php" class="float2"><i class="fa fa-shopping-cart my-float"></i></a>

<!--- FOOTER --->
<?php include_once("footer.php"); ?>
</body>
</html>