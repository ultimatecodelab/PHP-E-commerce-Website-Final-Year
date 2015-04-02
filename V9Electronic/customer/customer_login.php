<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Customer Login</title>
</head>

<body>
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
</body>
</html>

