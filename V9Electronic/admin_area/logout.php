<?php


//logging out admin by destring the session
session_start();
session_destroy();
echo "<script>alert('Good Bye!! :)')</script>";
echo "<script>window.open('login/login.php','_self')</script>";

?>