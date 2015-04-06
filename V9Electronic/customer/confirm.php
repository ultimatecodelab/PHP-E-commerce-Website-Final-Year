<?php
session_start();
include("includes/db.php");

	if (isset($_GET['order_id']))
	{
		$order_id=$_GET['order_id'];
	}

?>
<html>

	<head>
	</head>

	<body bgcolor="#000000" >

		<?php
			if (isset($_GET['update_id']))
				{
					$order_id=$_GET['update_id'];
				}
				else
				{
					echo "<script>alert('Order ID not present')</script>";
				}

		?>
		<form action="confirm.php?update_id=<?php echo $order_id ?>" method="post">

			//checking if update id is present
			<?php
			if (isset($_GET['update_id']))
				{
					$order_id=$_GET['update_id'];
				}
				

		?>
			<table width="500" align="center" border="2" bgcolor="#CCCCCC">
			<tr align="center">
				<td colspan="5" ><h2> Please confrim your payment</h2></td>
			</tr>

			<tr>
				<td>Invoice Number: </td>
				<td> <input type="text" name="invoice_no" /> </td>
			</tr>	

			<tr>
				<td>Amount: </td>
				<td> <input type="text" name="amount" /> </td>
			</tr>
			<tr>
				<td>Select Payment  Option: </td>
				<td> <select name="payment_method">
					<option>Select Payment</option>
					<option>Bank Transfer</option>
					<option>Paypal</option>
					<option>Western Uniton</option>
				</select>

				 </td>
			</tr>

			<tr>
				<td>Transaction/RefereneID: </td>
				<td> <input type="text" name="ref_no" /> </td>
			</tr>

			

			<tr>
				<td>Payment Date:</td>
				<td> <input type="text" name="date" /> </td>
			</tr>


			
			<tr align="center">
				<td colspan="5"> <input type="submit" name="confirm" value="Confirm Payment"/> </td>
			</tr>
		</table>

		</form>
	</body>
<html>
<?php
if(isset($_POST['confirm']))
{
	$update_id=$_GET['update_id'];
	$invoice=$_POST['invoice_no'];
	$amount=$_POST['amount'];
	$payment_method=$_POST['payment_method'];
	$ref_no=$_POST['ref_no'];
	$date=$_POST['date'];
	$complete ="completed";
	$update_id=

	$insert_payment="INSERT into payments(invoice_no,amount,payment_mode,ref_no,payment_date) values('$invoice','$amount','$payment_method',
		'$ref_no','$date')";

	$run_payment=mysqli_query($con,$insert_payment);

	
	echo "<script>alert('$update_id')</script>";

	$update_order = "UPDATE customer_orders SET order_status='$complete' where order_id='$order_id'";

	$run_order=mysqli_query($con,$update_order);

	if($run_payment)
	{
		echo "<script>alert('Thank you, Order will be processed in 24 hours!!')</script>";
	}
}

?>
