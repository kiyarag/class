<?php
//Database Connection
//$connectiondb=mysqli_connect("localhost","root","");
//$Connection=mysqli_select_db("invoice_finsoft",$Connection);

$con=mysqli_connect('localhost','root','');
if (!$con) {
	echo 'Not Connected to server';
}
if (!mysqli_select_db($con,'neophere')) {
	echo 'Database not selected';
}
?>