<?php
include('new_db.php');
if(isset($sortby) and $sortby=="desc"){
	$sortby="asc";
}else{
	$sortby="desc";
}

if(!empty($_GET["cid"])&&!empty($_GET["scid"])&&!empty($_GET["sortby"])) {
}
elseif(!empty($_GET["cid"])&&!empty($_GET["scid"])&&!empty($_GET["tid"])){
}
elseif(!empty($_GET["cid"])&&!empty($_GET["scid"])){
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
	<section id="advertisement">
		<div class="container">
 <?php
	include('new_db.php');
	$query ="SELECT * FROM p_banner WHERE cid ='" .$_GET["cid"]. "' LIMIT 1";
	$hoffer = mysqli_query($conn, $query);
	

          	   if (mysqli_num_rows($hoffer) > 0) {
    			// output data of each row
    			while($row = mysqli_fetch_assoc($hoffer)) {
?>
	    <img src="<?php echo $row['image'] ?>" width="1170" class="img-responsive" alt=""/>
   <?php 
   }}
	else{
	}				
?>
        </div>
	</section>
    
<div class="container">
<div class="women_main">
	
<!-------------------------------- START SIDE BAR ------------------------------------>

<!----------------------------------------- END SIDE BAR ----------------------------------------->
   
   
	<!-- start content -->
	<div class="col-md-12 w_content">



<!-------------------------------------START PRODUCTS--------------------------------------->

<div class="clearfix"></div>


        <div class="women">
        <?php include('new_db.php');
		$sql = "SELECT 
			  		catagory.c_name, subcatagory.sc_name
				FROM catagory
	   			INNER JOIN 
					subcatagory ON catagory.cid = subcatagory.cid
	   			WHERE scid ='" .$_GET["scid"]. "' ";

		$subcat = mysqli_query($conn, $sql);

		if (mysqli_num_rows($subcat) > 0) {
    	// output data of each row
    	while($row = mysqli_fetch_assoc($subcat)) {
        ?>
        <a href="#"><h4><?php echo $row['c_name'] ?> <span><?php echo $row['sc_name'] ?></span> </h4></a>
		<?php
            }
        } else {
            echo "Products";
        }
        ?>
			
			<ul class="w_nav">
						<li>Sort : </li>
 <?php include('new_db.php');
$t_cid =($_GET["cid"]);
$t_scid =($_GET["scid"]);
		$sql = "SELECT *
				FROM p_type
	   			INNER JOIN 
					product ON p_type.tid = product.tid
	   			WHERE cid ='" .$_GET["cid"]. "' GROUP BY t_name";

		$p_type = mysqli_query($conn, $sql);

		if (mysqli_num_rows($p_type) > 0) {
    	// output data of each row
    	while($row = mysqli_fetch_assoc($p_type)) {
        ?> 
		     			<li><a href="products.php?cid=<?php echo $t_cid ?>&scid=<?php echo $t_scid ?>&tid=<?php echo $row['tid'] ?>"><?php echo $row['t_name'] ?></a></li> |
        <?php
            }
        } else {
        }
        ?>
		     			<li><a href="products.php?cid=<?php echo $t_cid ?>&scid=<?php echo $t_scid ?>&sortby=<?php echo $sortby ?>">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
        
<div class="row">
          <?php
		 if(!empty($_GET["cid"])&&!empty($_GET["scid"])&&!empty($_GET["sortby"])) {
$limit = 16;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;
	$query ="SELECT * FROM product WHERE cid ='" .$_GET["cid"]. "' and scid='". $_GET["scid"]." 
	and pid NOT IN (SELECT DISTINCT pid FROM orderchild)' 
	ORDER BY price $sortby LIMIT $start_from, $limit ";
		
	$result = mysqli_query($conn, $query);
}
elseif(!empty($_GET["cid"])&&!empty($_GET["scid"])&&!empty($_GET["tid"]))
{
$limit = 16;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;

	$query ="SELECT * FROM product WHERE cid ='" .$_GET["cid"]. "' and scid='". $_GET["scid"]."' and 
	tid='". $_GET["tid"]."
	and pid NOT IN (SELECT DISTINCT pid FROM orderchild)'
	ORDER BY pid DESC LIMIT $start_from, $limit ";
		
	$result = mysqli_query($conn, $query);

}
elseif(!empty($_GET["cid"])&&!empty($_GET["scid"]))
{
$limit = 16;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;

	$query ="SELECT * FROM product WHERE cid ='" .$_GET["cid"]. "' and scid='". $_GET["scid"]."' 
	and pid NOT IN (SELECT DISTINCT pid FROM orderchild)
	ORDER BY pid DESC LIMIT $start_from, $limit ";
		
	$result = mysqli_query($conn, $query);
	
	
}
else
{
	header('Location:404.php');
}
          	   if (mysqli_num_rows($result) > 0) {
    			// output data of each row
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
            	<span class="item_price2"><h6>Rs. <?php echo $row["price"] ?>/-
                &nbsp; <b class="price-old2"><?php	if(!empty($row["old_price"])){
			 echo "Rs." .$row["old_price"];  }?></b>
			 <?php if(!empty($row["discount"])) { ?>
                <span class="discount">
				<?php echo "-" .$row["discount"]; ?>
                </span>
				<?php } ?></h6></span>
            </div>
            </div>
          </div> 
    </div> 
  </div>
</div>
<?php 
}
}else{
	echo "<br/><center><h4>No Products Found !</h4></center>";
	}
   
				
?>



</div>

<!-------------------------------------END PRODUCTS--------------------------------------->
<!-------------------------------------START PAGINATION--------------------------------------->
<?php  
$sql = "SELECT COUNT(pid) FROM product WHERE cid ='" .$_GET["cid"]. "' and scid='". $_GET["scid"]."'";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result); 
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination pagination-sm'>"; 

for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='products.php?cid=".$_GET["cid"]."&scid=".$_GET["scid"]."&page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>"; 
?>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'products.php?cid=<?php echo $_GET['cid'] ?>&scid=<?php echo $_GET['scid'] ?>&page='
    });
	});
</script>
<!-------------------------------------END PAGINATION--------------------------------------->
  
	</div>
	<div class="clearfix"></div>
	
	<!-- end content -->
</div>
</div>


<?php include_once("footer.php"); ?>
</body>
</html>