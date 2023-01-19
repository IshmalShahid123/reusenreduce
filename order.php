<?php
include('new_db.php');
$ProductName = $_POST["name"];
$ProductColor = $_POST["color"];
$ProductSize = $_POST["size"];
$ProductQuantity = $_POST["quantity"];
$ProductPrice = $_POST["price"];
$ProductSubTotal = $_POST["productTotal_price"];
$paymethod = $_POST["optradio"];




$c_name = mysqli_real_escape_string($conn, $_POST["customerName"]);
$email = mysqli_real_escape_string($conn, $_POST["customerEmail"]);
$address = mysqli_real_escape_string($conn, $_POST["customerAddress"]);
$phone = mysqli_real_escape_string($conn, $_POST["customerPhone"]);
$city = mysqli_real_escape_string($conn, $_POST["customerCity"]);
$note = mysqli_real_escape_string($conn, $_POST["SpecialNote"]);
$grand_total = $_POST["grand_total"];

if(!empty($_POST["customerName"])&&!empty($_POST["customerEmail"])&&!empty($_POST["customerAddress"])
&&!empty($_POST["customerPhone"])&&!empty($_POST["customerCity"])&&!empty($_POST["product_id"])
&&!empty($_POST["quantity"])&&!empty($_POST["price"]) ) {
	
$sql = "INSERT INTO orderparent (c_name, email, address, phone, city, grand_total, note, payment_method)
    VALUES ('$c_name', '$email', '$address', '$phone', '$city', '$grand_total', '$note', '$paymethod')";
if ($conn->query($sql)) {
$opid = $conn->insert_id;
}

foreach($_POST["product_id"] as $k=>$v){

  $pid = $v;
  $color = $_POST["color"][$k];
  $size = $_POST["size"][$k];
  $quantity = $_POST["quantity"][$k];
  $unit_price = $_POST["price"][$k];
  $sub_price = $_POST["productTotal_price"][$k];

   $sql ="INSERT INTO orderchild (pid, color, size, quantity, unit_price, total_price, opid)
    VALUES ('$pid', '$color', '$size', '$quantity', '$unit_price', '$sub_price', $opid)";
	   if (mysqli_query($conn, $sql)) {
		  header("Location:thankyou.php?CustomerName=$c_name&id=$opid");
	  } else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }		 

}

}else{
	echo "all fields are required";
}
?>