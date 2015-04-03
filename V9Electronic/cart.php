<?php
session_start();

include("includes/db.php");
include("functions/functions.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | V9-Electronics</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
   
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +353 91 753 161 </a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> jamesngondo_arjunkharel@outlook.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							
							<ul class="nav navbar-nav">
								
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php

								if(!isset($_SESSION['customer_email']))
								{
									//echo "<a href='checkout.php'> Login</a>";
									echo "<li><a href='customer\customer_login.php'><i class='fa fa-lock'></i> Login</a></li>";
								}
								else
								{
									
									echo "<li><a href='logout.php'><i class='fa fa-lock'></i> Logout</a></li>";
								}
								?>
								
							</ul>
						</div>
					</div>
								<?php
									cart();
								?>
								<b>Welcome Guest!></b>
								<b style=" color: #fdb45e;">Shopping Cart:</b>
								<span>-Total Items: <?php itemsFromCart(); ?> - Total Price: £<?php getTotalPrice(); ?></span>	
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="all_products.php">All Products</a></li>
								<li><a href="Accounts.php">My Account</a></li>
								<li><a href="ShoppingCart.php">Shopping Cart</a></li>
								<li><a href="Contact.php">Contact Us</a></li>
								<li><a href="admin_area/insert_products.php">Admin Login</a></li>
							</ul>
						</div>
					</div>
					<!--Search Box starts-->
					<div>
						
							<form method="get" action="results.php" enctype="multipart/form-data">
							<input type="text" name="user_query" placeholder="Search a Product"/>
							<input type="submit" name="search" value="Search"/>
							</form>
						
					</div>
					<!--Search Box ends-->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>V9</span>-ELECTRONICS</h1>
									<h2>V9 Electronics</h2>
									<p>Delivering the very best of consumer electronics around the world. Every one of our products gives you 100% satisfaction.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />

								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>V9</span>-ELECTRONICS</h1>
									<h2>V9 Electronics</h2>
									<p>Delivering the very best of consumer electronics around the world. Every one of our products gives you 100% satisfaction. </p>

								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />

								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>V9</span>-ELECTRONICS</h1>
									<h2>V9 Electronics</h2>
									<p>Delivering the very best of consumer electronics around the world. Every one of our products gives you 100% satisfaction.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-products start-->
							<div class="category-tab ul li ">
								<ul class="nav nav-pills nav-stacked" id="categories">
									<?php getCategories(); ?>
								</ul>
							</div>
							
						</div><!--/category-products ends-->
					
						<div class="brands_products"><!--brands_products start-->
							<h2>Brands</h2>
							<div class="category-tab ul li ">
								<ul class="nav nav-pills nav-stacked" id="brands">
									<?php getBrands(); 
						
						?>
								</ul>
							</div>
						</div><!--/brands_products Ends-->
						
						
						
						<div class="shipping text-center"><!--shipping stars-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping  Ends-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
				<?php
					//$ip = getRealIpAddress();
					//echo $ip;
				?>
					<div class="features_items"  id="products_box"><!--features_items start-->
						<h2 class="title text-center">Your Cart Items</h2>
							
						<form action="cart.php" method="post" enctype="multipart/form-data">
						
							<table width="740" align="center" bgcolor="#0099CC">
								<tr align="center" bgcolor="#FE980F">
									<td><b>Remove</b></td>
									<td><b>Products(s)</b></td>
									<td><b>Quantity</b></td>
									<td><b>Total Price</b></td>
								</tr>
				<?php								
					$ip_add = getRealIpAddress();
					
					$total =0;
					
					// get item based on Ip from cart table
					$select_price = "select * from cart where ip_add = '$ip_add'";
					
					$run_price = mysqli_query($con, $select_price);
					
					while($record=mysqli_fetch_array($run_price))
					{
						$product_id = $record['p_id'];
						$prod_price = "select * from products where product_id = '$product_id'";
						
						$run_product_price = mysqli_query($con, $prod_price);
						
						while($p_price=mysqli_fetch_array($run_product_price))
						{
							$product_price = array($p_price['product_price']); //get product price from table column in DB
							$product_title = $p_price['product_title'];
							$product_image = $p_price['product_img1'];
							
							
							$value = array_sum($product_price); // sum all the values
							$only_price = array_sum($product_price);
							$total += $value;
						
					
					
					//will loop creating checkboxes as products are being added to cart 
					// adding all the neccessary info on relevant clolumns of the cart table
					
					?>
							
								<tr>
									<td><input type="checkbox" name="remove[]" value="<?php echo $product_id; ?>"></td>
									
									<td><?php echo $product_title ?><br><img src='admin_area/product_images/<?php echo $product_image ?>' width='80' height='80'/> </td>
									
									<td><input type="text" name="qty" value="1" size="3"/></td>
									<?php
													
										if(isset($_POST['update']))
										{
											// saving whatever value comes from a qty textfield
											$qty = $_POST['qty'];
											
											$insert_qty = "update cart set qty='$qty' where ip_add='$ip_add'";											
											$run_qty = mysqli_query($con, $insert_qty);
											$total = $total*$qty;
											echo "<script>alert('$total')</script>";
										}
										else {
										//echo "<script>alert('Nigga')</script>";
										}
									?>
									
									<td><?php echo "£".$only_price ?></td>
								</tr>
								
								
		<?php }} ?> 
		
		
							<tr>
								<td colspan="3" align="right" style="text-decoration:none; color:#0000CC"><b>Sub Total</b></td>
								<td style="text-decoration:none; color:#0000CC"><b><?php echo "£".$total ?></b></td>
							</tr>
							
							<tr align="center">
								<td><input type="submit" name="update" value="Update Cart" style="text-decoration:none; color:#0000CC"/></td>
								<td><input type="submit" name="continue" value="Continue Shopping" style="text-decoration:none; color:#0000CC"/></td>
								<td><button><a href="checkout.php" style="text-decoration:none; color:#0000CC">Checkout</a></button></td>
								<td></td>
							
							</tr>
	
							</table>
						</form>
						
						<?php
						function updateCart()
						{
							global $con;
							
							// for the update button
							if(isset($_POST['update']))
							{
								// post back for all the checkboxes inside update button checked - based on chekb name = remove[]
								foreach($_POST['remove'] as $remove_id)
								{
									$delete_products = "delete from cart where p_id = '$remove_id' ";
									$run_delete = mysqli_query($con, $delete_products);
									
									if($run_delete)
									{
										// update cart page and refresh 
										echo "<script>window.open('cart.php','_self')</script>";
									}
									
								}//foreach
								//
							}
							if(isset($_POST['continue']))
							{
								echo "<script>window.open('all_products.php','_self')</script>";
							}
						
						
					}
					echo @$up_cart = updateCart();	
						
						?>
						
					</div><!--features_items Ends-->
					

					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h3><span>V9</span>-Electronics</h3>
							<p>We provide the very best of consumer electronics all around the globe.</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Cliffs Of Moher</p>
								<h2>24 April 2015</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>St Patrick's Day</p>
								<h2>17 March 2015</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Map Of Ireland</p>
								<h2>24 DEC 2015</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>GMIT Galway Campus</p>
								<h2>24 May 2015</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>V9 Electronics, A Product of GMIT - Galway Campus, Ireland</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 V9-Electronics Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank">James-Arjun</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>