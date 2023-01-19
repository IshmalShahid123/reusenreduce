<!DOCTYPE HTML>
<html>
<head>
<title>Resue and Reduce</title>
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
<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'> -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900" />




<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>

<style type="text/css">
body{
	    font-family: 'Jost', sans-serif;
}
.product-grid2 {
    font-family: 'Open Sans', sans-serif;
    position: relative
}

.product-grid2 .product-image2 {
    overflow: hidden;
    position: relative
}

.product-grid2 .product-image2 a {
    display: block
}

.product-grid2 .product-image2 img {
    width: 100%;
    height: auto
}

.product-image2 .pic-1 {
    opacity: 1;
    transition: all .5s
}

.product-grid2:hover .product-image2 .pic-1 {
    opacity: 0
}

.product-image2 .pic-2 {
    width: 100%;
    height: 100%;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: all .5s
}

.product-grid2:hover .product-image2 .pic-2 {
    opacity: 1
}

.product-grid2 .social {
    padding: 0;
    margin: 0;
    position: absolute;
    bottom: 50px;
    right: 25px;
    z-index: 1
}

.product-grid2 .social li {
    margin: 0 0 10px;
    display: block;
    transform: translateX(100px);
    transition: all .5s
}

.product-grid2:hover .social li {
    transform: translateX(0)
}

.product-grid2:hover .social li:nth-child(2) {
    transition-delay: .15s
}

.product-grid2:hover .social li:nth-child(3) {
    transition-delay: .25s
}

.product-grid2 .social li a {
    color: #505050;
    background-color: #fff;
    font-size: 17px;
    line-height: 45px;
    text-align: center;
    height: 45px;
    width: 45px;
    border-radius: 50%;
    display: block;
    transition: all .3s ease 0s
}

.product-grid2 .social li a:hover {
    color: #fff;
    background-color: #3498db;
    box-shadow: 0 0 10px rgba(0, 0, 0, .5)
}

.product-grid2 .social li a:after,
.product-grid2 .social li a:before {
    content: attr(data-tip);
    color: #fff;
    background-color: #000;
    font-size: 12px;
    line-height: 22px;
    border-radius: 3px;
    padding: 0 5px;
    white-space: nowrap;
    opacity: 0;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: -30px
}

.product-grid2 .social li a:after {
    content: '';
    height: 15px;
    width: 15px;
    border-radius: 0;
    transform: translateX(-50%) rotate(45deg);
    top: -22px;
    z-index: -1
}

.product-grid2 .social li a:hover:after,
.product-grid2 .social li a:hover:before {
    opacity: 1
}

.product-grid2 .add-to-cart {
    color: #fff;
    background-color: #404040;
    font-size: 15px;
    text-align: center;
    width: 100%;
    padding: 10px 0;
    display: block;
    position: absolute;
    left: 0;
    bottom: -100%;
    transition: all .3s
}

.product-grid2 .add-to-cart:hover {
    background-color: #3498db;
    text-decoration: none
}

.product-grid2:hover .add-to-cart {
    bottom: 0
}

.product-grid2 .product-new-label {
    background-color: #3498db;
    color: #fff;
    font-size: 17px;
    padding: 5px 10px;
    position: absolute;
    right: 0;
    top: 0;
    transition: all .3s
}

.product-grid2:hover .product-new-label {
    opacity: 0
}

.product-grid2 .product-content {
    padding: 20px 10px;
    text-align: center
}

.product-grid2 .title {
    font-size: 17px;
    margin: 0 0 7px
}

.product-grid2 .title a {
    color: #303030
}

.product-grid2 .title a:hover {
    color: #3498db
}

.product-grid2 .price {
    color: #303030;
    font-size: 15px
}

@media screen and (max-width:990px) {
    .product-grid2 {
        margin-bottom: 30px
    }
}

.text-block-main {
  position: relative;
}

.text-block {
  font-size: 16px;
  position: absolute;
  bottom: 20% ;
  background:rgba(255,255,255, 0.9);
  text-align: center;
  width: 100%;
  line-height: 1.2em;
  color: black !important;
  text-transform: uppercase;
  padding-top:5px;
  padding-bottom:5px;
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


 
<!---START MAIN SLIDER--->
<div class="container">
<section class="single-item slider">
    <?php
	include('new_db.php');
	$s_query ="SELECT * FROM Slider ORDER BY S_ID DESC";
	$soslider = mysqli_query($conn, $s_query);
	
          	   if (mysqli_num_rows($soslider) > 0) {
    			// output data of each row
    			while($rowsl = mysqli_fetch_assoc($soslider)) {
?>
    <div>
      <a href="<?php echo $rowsl["URL"]; ?>"><img src="<?php echo $rowsl["SLIDER_IMG"]; ?>"></a>
    </div>
<?php
    }
}
?>
  </section>
</div>
<!-- End MAIN of Slider -->


<div class="clearfix"></div>

<a href="http://mydemos.cf/cart.php" class="float2"><i class="fa fa-shopping-cart my-float"></i></a>




 
<div class="container">
    <div class="row">
       
                <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> 
               
                <img src="images/hazardous.jpg"> 
                </div>

            </div>
        </div>
        
        
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> 
               
                <img src="images/non-hazardous.jpg"> 
                </div>

            </div>
        </div>
        
        
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> 
               
                <img src="images/reuse.jpg"> 
                </div>

            </div>
        </div>
        
        
    </div>
</div>
<hr>

<!-- 3 col -->
<div class="container">
<div class="row">

	<div class="ad_space_wide">
    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <?php
	include('new_db.php');
	$a_query ="SELECT * FROM advertise ORDER BY adid DESC LIMIT 1";
	$ads = mysqli_query($conn, $a_query);
	
          	   if (mysqli_num_rows($ads) > 0) {
    			// output data of each row
    			while($rowad = mysqli_fetch_assoc($ads)) {
?>
        <a href="<?php echo $rowad["url"]; ?>">
    <img src="<?php echo $rowad["image"]; ?>" class="img-responsive" alt=""/>
        </a>
<?php
}
     }
?>
    </div>
    </div>
 </div>    
</div>
<!-- End 3 col -->


<!-- START HOT OFFERS -->
<div class="special">
	<div class="container">
		<h3>Hazardous Waste</h3>
    </div>
 </div>
 
<div class="container">
<div class="row"> 
<?php
	include('new_db.php');
	
	$query ="SELECT product.pid AS pid, `sid`, `nid`, `cid`, `scid`, `tid`, `name`, `brand_name`, `price`, `old_price`, `description`, `image`, `imageone`, `note`, `return_policy`, `weight`, `discount`, `purchasing_price`, `added_on`, `added_by`, `status` 
	FROM `product` WHERE pid NOT IN (SELECT DISTINCT pid FROM orderchild) AND nid='1' ORDER BY pid DESC LIMIT 8";
	$hoffer = mysqli_query($conn, $query);
	

          	   if (mysqli_num_rows($hoffer) > 0) {
    			// output data of each row
    			while($row = mysqli_fetch_assoc($hoffer)) {
?>	
<div class="item col-lg-3 col-md-4 col-sm-6 col-xs-12"> 
  <div class="thumbnail imgBox text-block-main"> 
  	<a href="details.php?pid=<?php echo $row["pid"] ?>">
     <img src="<?php echo $row['image'] ?>" class="img-responsive group list-group-image" alt=""/>

    <div class="text-block">
       <p><a href="details.php?pid=<?php echo $row["pid"] ?>"> 
      <?php echo substr($row['name'], 0, 45); ?></a></p>
    </div> 
  	</a>
    
  </div>
</div>		

<?php 
   }}
	else{
	echo "<br/><center><h4>No Products Found !</h4></center>";
	}				
?>

</div>
    </div>
<!-- END HOT OFFERS -->
 <br/>
 
 <div id="products"></div>  
<!-- START PRODUCTS -->
<div class="special">
	<div class="container">
		<h3>Non-Hazardous Waste</h3>
    </div>
 </div>
 
<div class="container">
<div class="row"> 
<?php
	include('new_db.php');
	$query ="SELECT product.pid AS pid, `sid`, `nid`, `cid`, `scid`, `tid`, `name`, `brand_name`, `price`, `old_price`, `description`, `image`, `imageone`, `note`, `return_policy`, `weight`, `discount`, `purchasing_price`, `added_on`, `added_by`, `status` 
	FROM `product` WHERE pid NOT IN (SELECT DISTINCT pid FROM orderchild) AND nid='2' ORDER BY pid DESC LIMIT 8";
	$new_product = mysqli_query($conn, $query);
	

          	   if (mysqli_num_rows($new_product) > 0) {
    			// output data of each row
    			while($row = mysqli_fetch_assoc($new_product)) {
?>

<div class="item col-lg-3 col-md-4 col-sm-6 col-xs-12"> 
  <div class="thumbnail imgBox text-block-main"> 
  	<a href="details.php?pid=<?php echo $row["pid"] ?>">
  <img src="<?php echo $row['image'] ?>" class="img-responsive group list-group-image" alt=""/>
  	<div class="text-block">
       <p><a href="details.php?pid=<?php echo $row["pid"] ?>"> 
      <?php echo substr($row['name'], 0, 45); ?></a></p>
    </div>
  	</a>
  </div>
</div>	

<?php 
   }}
	else{
	echo "<br/><center><h4>No Products Found !</h4></center>";
	}				
?>
</div>
</div>
<!-- END NEW PRODUCTS -->      
<div class="clearfix"></div>




<div class="clearfix"></div>
<!-- START BRAND SLIDER -->

<link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
      <style type="text/css">

    .slick-logo {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #FCCE09;
    }
  </style>
 
<!-- <div class="special">
	<div class="container">
		<h3>TOP BRANDS</h3>
    </div>
 </div>
<div class="container">
<section class="center slider">
    <div class="slick-logo">
      <img src="slick/logos/1.jpg" class="img-responsive">
    </div>
    <div class="slick-logo">
      <img src="slick/logos/2.jpg" class="img-responsive">
    </div>
    <div class="slick-logo">
      <img src="slick/logos/3.jpg" class="img-responsive">
    </div>
    <div class="slick-logo">
      <img src="slick/logos/4.jpg" class="img-responsive">
    </div>
    <div class="slick-logo">
      <img src="slick/logos/5.jpg" class="img-responsive">
    </div>
    <div class="slick-logo">
      <img src="slick/logos/6.jpg" class="img-responsive">
    </div>
    <div>
      <img src="slick/logos/7.jpg" class="img-responsive">
    </div>
    <div class="slick-logo">
      <img src="slick/logos/8.jpg" class="img-responsive">
    </div>

  </section>
</div>-->



  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 6,
		autoplay: true
      });
	  
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 6,
        slidesToScroll: 6,
		autoplay: true
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
	  $('.single-item').slick({
		dots: true,
        infinite: true,
		autoplay: true,
		focusOnSelect: true
	  
	});
    });
  </script>
<!-- END BRAND SLIDER -->




<br/><div class="clearfix"></div>
<!--- FOOTER --->
<?php include_once("footer.php"); ?>
</body>
</html>