<?php
include("connection.php");
$title="";
if (isset($_POST["title"])) {
	$title=$_POST["title"];
}
$content="";
if (isset($_POST["content"])) {
	$content=$_POST["content"];	
}
if($_POST["title"] != "" && $_POST["content"] != "") {
		$sql="INSERT INTO home(title,content) VALUES('$title', '$content')";
			//$qry = mysqli_query($con, $sql);
		if (!mysqli_query($con, $sql)) {
			echo "not inserted";
		}
		else
		{
			mysqli_query($con, $sql);
			//echo "data inserted";
			header("Location:home.php?msg=Data inserted");
		}
}
else{
	echo "Blank Field";
}
?>



