


<div class="top_bg" style="background-color: #5e9201; color:#FFF">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="#">Contact</a></li>|
					<li><a href="http://mydemos.cf/tracking.php">Order Tracking</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : <b>+92 3xx xxxxx</b></h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<marquee width="100%" direction="left" height="auto" style="background-color: #5e9201; color:#FFF">
<?php
include('new_db.php');
$ticker = "SELECT * FROM ticker where T_ID = 1 ";
$resultss = mysqli_query($conn, $ticker);
if (mysqli_num_rows($resultss) > 0) {
  // output data of each row
  while($rowss = mysqli_fetch_assoc($resultss)) {
    $T_DESC=$rowss["T_DESC"];
  }
}
?>
        <p><?php echo $T_DESC; ?></p>
</marquee>
<div class="top_bo"></div>
<!-- header -->
<div class="header_bg">

	<div class="header">
	    <div class="container">
	<div class="head-t">
		<div class="logo">
			<a href="http://mydemos.cf/"><img src="images/logo.png" class="img-responsive" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
		
                <div class="reg">
                
				</div>
                
                
                
			<div class="cart box_1">

				<div class="clearfix"> </div>
			</div>
			<!--<div class="create_btn">
				<a href="#">
					
				</a>
			</div>-->
			<div class="clearfix"> </div>
		</div>
        
        <div class="row">
            <div class="col-xs-6 col-md-2">
                <a class="btn btn-success" href="http://cp.mydemos.cf/" style="text-transform:capitalize !important;" target="_blank">SELL</a>
            </div>
            <div class="col-xs-12 col-md-10">
                <div class="search">
		    <form method="GET" action="search.php">
		    	<input type="text" value="" pattern=".{3,}" title="Search input must be at least 3 characters" name="query" placeholder="search for products and brands.">
				<input type="submit" value="">
			</form>
	        	</div>
            </div>
            
        </div>
		
		
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>



<!---------------------------------START HEADER MENU--------------------------------->
<ul class="megamenu skyblue">
    
		
        <li class="grid">
            <a class="color_yellow" href="http://mydemos.cf/" style="text-transform:capitalize !important;">HOME</a>
        </li>
        
        
<!-----------------------------------------NATURE------------------------------------>        
		  <?php
              include('new_db.php');
              
$sql = "SELECT * FROM nature";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

              $nid=$row["nid"];
              $n_name=$row["n_name"];		
          ?>
              
            <li class="grid"><a class="color_yellow" href="#"><?php echo $n_name ?></a>
				<div class="megapanel">
					<div class="row">
<!-----------------------------------------NATURE------------------------------------>                   	
<!-----------------------------------------CATAGORY------------------------------------>                  
                   <?php
				   
				   $sqls = "SELECT * FROM catagory where nid = '".$nid."' ";
$results = mysqli_query($conn, $sqls);
if (mysqli_num_rows($results) > 0) {
  // output data of each row
  while($rows = mysqli_fetch_assoc($results)) {

                      $cid=$rows["cid"];
                      $c_name=$rows["c_name"];		
                    ?>
                    <div class="col1">
							<div class="h_nav">
                    			<h4><?php echo $c_name ?></h4>
<!-----------------------------------------CATAGORY------------------------------------>  
<!-----------------------------------------SUB CATAGORY------------------------------------>          
                    <ul>
                     <?php
					 $sqlx = "SELECT * FROM subcatagory where cid = '".$cid."' ";
$resultx = mysqli_query($conn, $sqlx);
if (mysqli_num_rows($resultx) > 0) {
  // output data of each row
  while($rowx = mysqli_fetch_assoc($resultx)) {
	  

                      $scid=$rowx["scid"];
                      $sc_name=$rowx["sc_name"];		
                    ?>
						<li><a href="products.php?cid=<?php echo $cid ?>&scid=<?php echo $scid ?>" style="text-transform:capitalize !important;">
						<?php echo $sc_name ?></a></li>
					<?php
					  } }
					?>
					</ul>
<!-----------------------------------------SUB CATAGORY LOOP------------------------------------>
<!-----------------------------------------END CATAGORY LOOP------------------------------------>    
							</div>							
						</div> 
                   <?php
					  } }
					?>
<!-----------------------------------------END CATAGORY LOOP------------------------------------>
<!-----------------------------------------END NATURE LOOP------------------------------------> 
    				</div>
                </div>
			</li>
         <?php
          } }
          ?>
<!-----------------------------------------END NATURE LOOP------------------------------------>         
          
         			
		 </ul>
<!---------------------------------END HEADER MENU---------------------------------> 
	</div>
</div>
</div>