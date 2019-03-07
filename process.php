<?php

$fName =$_POST["fName"];
$lName =$_POST["lName"];
$adress =$_POST["adress"];
$email =$_POST["email"];
$phone =$_POST["phone"];
/*
$bankbalance="20";
$withdraw="10";
$totalbalance=$bankbalance - $withdraw;

$allinfo = $fName ."--" . $lName ."--" . $adress ."--" . $email ."--" . $phone;
$allinfo1 = $fName.$lName.$adress.$email.$phone;*/

$check1 = "";
 if (isset($_POST["checkbox1"])) {
 	$check1 = $_POST["checkbox1"];
 }

 $check2 = "";
 if (isset($_POST["checkbox2"])) {
 	$check2 = $_POST["checkbox2"];
 }

 $check3 = "";
 if (isset($_POST["checkbox3"])) {
 	$check3 = $_POST["checkbox3"];
 }
?>

<table>	
	<tr><td>First Name: </td> <td> <?php echo $fName; ?></td></tr>
	<tr><td>Last Name: </td> <td> <?php echo $lName; ?></td></tr>
	<tr><td>Address: </td> <td> <?php echo $adress; ?></td></tr>
	<tr><td>Email: </td> <td> <?php echo $email; ?></td></tr>
	<tr><td>Phone: </td> <td> <?php echo $phone; ?></td></tr>
	<tr><td>checkbox : </td> <td> <?php echo $check1; ?></td></tr>
	<tr><td>checkbox1 : </td> <td> <?php echo $check2; ?></td></tr>
	<tr><td>checkbox2 : </td> <td> <?php echo $check3; ?></td></tr>
</table>