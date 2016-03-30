<?php
//phpmyadmin username =root & password = ""
// database name = "bank"

$con=mysql_connect("localhost","root","")or die("something went wrong");
mysql_select_db("bank",$con);
?>
