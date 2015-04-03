<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Customer Login</title>
</head>

<body>

<?php
	@session_start(); //no error if it not initilise
	include("includes/db.php");
	//include("functions/functions.php");
?>
	<div>

	
	<form action="checkout.php" method="post">
		
		<table width="600" align="center">
			<tr>
				<td align="right"><b>Your Email: </b></td>
				<td align="left"><input type="text" name="customer_email" value=""/><br/></td>
			</tr>
			<tr>
				<td align="right"><b>Your Password: </b></td>
				<td align="left"><input type="password" name="customer_pass" value=""/><br/></td>
			</tr>
			<tr>
			<tr>
				<td colspan="5"><a href="forgot_pass.php">Forgot Password</a></td>
			</tr>
				<td colspan="5"><input type="submit" name="customer_login" value="Login"/></td>
			</tr>
			
		</table>
	 </form>
	 
	 <h4 align="center"><a href="customer_register.php">New Customer Register Here</a></h4>

</div>
<?php
//fires out  when user click login

if(isset($_POST['customer_login']))
{
	//checking if the user/customer login credentials exist in the database.
	$customer_email = $_POST['customer_email'];
	$customer_pass = $_POST['customer_pass'];
	
	$select_customer = "SELECT * FROM customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run_customer = mysqli_query($con,$select_customer);

	$check_customer=mysqli_num_rows($run_customer);
	$get_ip = getRealIpAddress(); //there is an include on the top
	//if there are any items that needs to be checked out we will direct them to checkout page when the user is logged in
	$sel_cart = "select * from cart where ip_add='$get_ip'";

	$run_cart = mysqli_query($con,$sel_cart);
	$check_cart = mysqli_num_rows($run_cart);

	if($check_customer==0)
	{
		echo "<script>alert('Password/email address is incorrect') </script>";
		exit(); //returning
	}
	if($check_customer==1 AND $check_cart==0)
	{

		$_SESSION['customer_email']=$customer_email;
		//redirect
		echo "<script>window.open('customer/my_account.php','_self')</script>";
	}
	else
	{
		$_SESSION['customer_email']=$customer_email;
		//echo "<script>window.open('payment_options.php','_self')</script>";
		echo "<script>alert('You have successfully logged!!')</script>";
		echo "<script>window.open('checkout.php','_self')</script>";
		//include("payment_options.php");
	}

	




}
?>
</body>
</html>

