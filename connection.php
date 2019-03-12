<?php
//Database Connection
//$connectiondb=mysqli_connect("localhost","root","");
//$Connection=mysqli_select_db("invoice_finsoft",$Connection);

$con=mysqli_connect('localhost','root','');
if (!$con) {
	echo 'Not Connected to server';
}
if (!mysqli_select_db($con,'invoice_finsoft')) {
	echo 'Database not selected';
}

/*$name=$_POST["name"];
$address=$_POST["address"];
$number=$_POST["number"];*/

$name="";
if (isset($_POST["name"])) {
	$name=$_POST["name"];
}
$address="";
if (isset($_POST["address"])) {
	$address=$_POST["address"];
}
$number="";
if (isset($_POST["number"])) {
	$number=$_POST["number"];
}

$sql="insert into costumer_detail (name,address,number) values ('$name', '$address','$number')";
if (!mysqli_query($con, $sql)) {
	echo "not inserted";
}
else{
	echo "data inserted";
}
?>