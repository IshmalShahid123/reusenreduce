<?php
include('new_db.php');
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

<div class="clearfix"></div>
<style>

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>


<form class="example" action="" method="POST">
  <input type="text" placeholder="Enter your order tracking id.." name="order_id">
  <button type="submit" value="submit"><i class="fa fa-search"></i></button>
</form>

<br/>
<br/>
<?php

if(!empty($_POST["order_id"])){
    
    $ordernumber = $_POST['order_id'];

	$query ="SELECT * FROM orderparent WHERE opid ='" .$ordernumber. "'";
	$result = mysqli_query($conn, $query);
	
	if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
                $opid=$row['opid'];
	            $c_name=$row['c_name'];
	            $email=$row['email'];
	            $address=$row['address'];
	            $phone=$row['phone'];
	            $city=$row['city'];
	            $grand_total=$row['grand_total'];
	            $note=$row['note'];
	            $status=$row['status'];
	            $order_time=$row['order_time'];
	            $payment_method=$row['payment_method'];
       ?>
       
       
       
<div class="row">

  <div class="col-md-12">

    <div class="panel panel-default">

        <div class="panel-heading">

        Order Tracking 

        </div>

      

<div class="panel-body">

  <div class="table-responsive">

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr class="success">
                        <td>OrderNo#</td>
                        <td>Customer Name</td>
                        <td>Email</td>
                        <td>Phone#</td>
                        <td>Address</td>
                        <td>Total Order Amount</td>
                        <td>Note</td>
                        <td>Order Status</td>
                        <td>Payment Method</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $opid; ?></td>
                        <td><?php echo $c_name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $grand_total; ?></td>
                        <td><?php echo $note; ?></td>
                        <td><?php echo $status; ?></td>
                        <td><?php echo $payment_method; ?></td>
                    </tr>
                </tbody>
            </table>

              <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr class="success">
                        <td>Product ID</td>
                        <td>Product</td>
                        <td>Price per KG</td>
                        <td>Weight</td>
                        <td>Discount</td>
                        <td>Total Price</td>
                        <td>Shop Name</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
$sqls = "SELECT * FROM orderchild INNER JOIN product ON orderchild.pid=product.pid 
INNER JOIN
shop
ON shop.sid=product.sid WHERE orderchild.opid = '$opid' ";
$results = mysqli_query($conn, $sqls);

if (mysqli_num_rows($results) > 0) {
    while($rows = mysqli_fetch_assoc($results)) {
    $pid=$rows['pid'];
	$image=$rows['image'];
	$imageone=$rows['imageone'];
	$name=$rows['name'];
	$weight=$rows['weight'];
	$price=$rows['price'];
	$old_price=$rows['old_price'];
	$note=$rows['note'];
	$description=$rows['description'];
	$return_policy=$rows['return_policy'];
	$purchasingPrice=$rows['purchasing_price'];
	$discount=$rows['discount'];
	$sid=$rows['sid'];
	$total_price=$rows['total_price'];
	$shopName = $rows['shop_name'];
	?>
	
                    <tr>
                        <td><?php echo $pid; ?></td>
                        <td><?php echo $name; ?> </td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $weight; ?></td>
                        <td><?php echo $discount; ?>%</td>
                        <td><?php echo $total_price; ?></td>
                        <td><?php echo $shopName; ?></td>
                    </tr>
	
	<?php
    }
} else {
echo "0 results";
}
?>
                </tbody>

              </table>  

     

  </div>

</div>



    </div>

  </div>

</div>



<?php
 }
    } else {
        echo "<br/><center><p>No order found..please make sure your order tracking id is correct.<p/></center>";
    }

}else{
	header('Location:404.php');
}
?>





	</div>
	<div class="clearfix"></div>
	
	<!-- end content -->
</div>
</div>


<?php include_once("footer.php"); ?>
</body>
</html>