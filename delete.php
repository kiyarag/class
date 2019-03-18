<?php
include("connection.php");
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	echo $id;
}
//structure-query-language
$sql="DELETE FROM home WHERE id='$id'"; 
$query=mysqli_query($con, $sql);
header("Location:home.php? msg=Data Deleted");
?>


