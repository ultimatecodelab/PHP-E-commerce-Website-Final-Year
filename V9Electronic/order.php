
<?php

include("includes/db.php");
include("functions/functions.php");

//retriving customer id that was passed from payemen page
if(isset($_GET['c_id'])){

	$customer_id=$_GET['c_id']; //local variable to save a customer id
	
}	
//getting products information/no. of items from cart

$ip_add = getRealIpAddress();
	
	
	
	$total =0;
	
	
	$select_price = "select * from cart where ip_add = '$ip_add'";
	
	$run_price = mysqli_query($db, $select_price);

	$status='Pending';//initial status of a product

	$invoice_no = mt_rand();//generate random number

	$count_pro=mysqli_num_rows($run_price); //total products

	
	while($record=mysqli_fetch_array($run_price))
	{
		$product_id = $record['p_id'];
		$prod_price = "select * from products where product_id = '$product_id'";
		
		$run_product_price = mysqli_query($db, $prod_price);
		
		while($p_price=mysqli_fetch_array($run_product_price))
		{
			$product_price = array($p_price['product_price']); //get product price from table column in DB
			$value = array_sum($product_price); // sum all the values
			$total += $value;
		}
	
	//end of while
	//getting quantity form the cart
	$get_cart ="Select * from cart WHERE ip_add = '$ip_add'";
	$run_cart=mysqli_query($con,$get_cart);
	$get_qty= mysqli_fetch_array($run_cart);

	$qty=$get_qty['qty']; //saving qty from database to local variable

	if($qty==0)
	{
		//change the variable
		$qty=1;
		$sub_total =$total;
	}
	else
	{
		$qty=$qty;
		$sub_total=$total*$qty;
	}
	

	//if($run_order)
	//{
		echo "<script> alert('Order has been successfully submitted,Thanks') </script>";
		echo "<script>window.open('customer/my_account.php','_self')</script>";
		$empty_cart="delete from cart where ip_add='$ip_add'"; //empty the cart once the order has been submitted

		$run_empty=mysqli_query($con,$empty_cart);

		$insert_to_pending_order="insert into pending_orders(customer_id,invoice_no,product_id,qty,order_status) values('$customer_id','$invoice_no','$product_id','$qty','$status')";
		$run_pending_order=mysqli_query($con,$insert_to_pending_order);
}	
//}
$insert_order="insert into customer_orders(customer_id,due_amount,invoice_no,total_products,order_date,order_status) values('$customer_id','$sub_total','$invoice_no','$count_pro',NOW(),'$status')";
	$run_order = mysqli_query($con,$insert_order);
?>