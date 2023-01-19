<?php
include('new_db.php');
$query = $_GET['query']; 

if(!empty($_GET["query"])){
    $min_length = 3;
	$empty = '';
	
    if(strlen($query) >= $min_length && strlen($query) != $empty){
         
		}else{
			 header('Location:404.php');
		  }

}else{
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
<script src="js/simpleCart.min.js"> </script>


<script src="pagination/jquery.simplePagination.js"></script>
</head>

<body>
<!-- Header -->
<?php include_once("header.php");?>
<!-- /Header -->

<!-- content -->

    
<div class="container">
<div class="women_main">

   
   
	<!-- start content -->
	<div class="col-md-12 w_content">
<!-------------------------------------START PRODUCTS--------------------------------------->

<div class="clearfix"></div>


        <div class="women">
        <h4>Search result of <span><?php echo $query; ?></span> </h4>
		     <div class="clearfix"></div>	
		</div>
        
<div class="row">
          <?php
		  
if(!empty($_GET["query"])){
    $min_length = 3;
	
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
        $query = mysqli_real_escape_string($conn, "$query");
		$squery ="SELECT * FROM product WHERE (`name` LIKE '%".$query."%') OR (`brand_name` LIKE '%".$query."%')";
		$result = mysqli_query($conn, $squery);
		}else{
			 header('Location:404.php');
		  }
}else{
		header('Location:404.php');
}
          	   if (mysqli_num_rows($result) > 0) {
    			while($row = mysqli_fetch_assoc($result)) {
            ?>

<div class="item col-lg-3 col-md-4 col-sm-6 col-xs-12"> 
  <div class="thumbnail imgBox"> 
  	<a href="details.php?pid=<?php echo $row["pid"] ?>">
  <img src="<?php echo $row['image'] ?>" class="img-responsive group list-group-image" alt=""/>
  	</a>
    <div class="caption">
    	<span style="font-size:0.8em; color:#98CB00; line-height: 1em; text-transform:uppercase;">
		<?php echo $row["brand_name"] ?></span>
        
      <p><a href="details.php?pid=<?php echo $row["pid"] ?>"><?php echo substr($row['name'], 0, 38); ?></a></p>
          <div class="row"> 
            <div class="grid_1 simpleCart_shelfItem">
            <div class="item_add">
            	<span class="item_price2"><h6>Rs. <?php echo $row["price"] ?>
                &nbsp; <b class="price-old2"><?php echo "Rs." .$row["old_price"]; ?></b></h6></span>
            </div>
            </div>
          </div> 
    </div> 
  </div>
</div>
<?php 

   }}
	else{
	echo "<br/><center><h4>No Products Found !</h4></center>";
	}
				
?>



</div>

<!-------------------------------------END PRODUCTS--------------------------------------->
<!-------------------------------------START PAGINATION--------------------------------------->

<!-------------------------------------END PAGINATION--------------------------------------->
  
	</div>
	<div class="clearfix"></div>
	
	<!-- end content -->
</div>
</div>


<?php include_once("footer.php"); ?>
</body>
</html>