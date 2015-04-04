<?php
//session_start();
include("includes/db.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Payement Options</title>
	</head>
<body>
	<?php
		//for receiving orders from customers
		//retriving information from customer table where ip matches
		//the current ip
		$ip = getRealIpAddress();
		$get_customer="select * from customers where customer_ip='$ip'";
		$run_customer=mysqli_query($con,$get_customer);
		$customer=mysqli_fetch_array($run_customer);
		$customer_id=$customer['customer_id'];

	?>
	<div align="center">
		<h2> Payment Options</h2>
		<b> Pay with
		<a href="http://www.paypal.com"><img src="images/home/Card_image.jpg"</a> <b> Or <a href="order.php?c_id=<?php echo "$customer_id";?>">Offiline </a> </b>

		<br><br><br><br>
		<b> If you have selected to pay offline then please check your email or account to for your invoice number of your order. <b>
		

	</div>

</body>
</html>