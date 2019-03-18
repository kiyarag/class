<?php
include("connection.php");
//if (isset($_GET["id"])) {
	$id = $_GET["id"];
	echo $id;
//}
//structure-query-language /CRUD- Create->Retrieve(selectGarne)->update->Delete//
$sql="SELECT * FROM home WHERE id='$id'"; 
$query=mysqli_query($con, $sql);
while($row=mysqli_fetch_assoc($query)) {
?>

<form method="POST" action="">
	<div style="margin-bottom:10px;"><input type="text" name="title" value="<?php echo $row["title"]; ?>"></div>
	<div style="margin-bottom:10px;"><textarea name="content"><?php echo $row["content"]; ?></textarea></div>
	<input type="submit" value="Update" name="update">
</form>
<?php } ?>

<?php 
if (isset($_POST['update'])) {
	$title=$_POST["title"];
	$content=$_POST["content"];	
	$sql="UPDATE home SET title='$title', content='$content' WHERE id='$id'";
	$query=mysqli_query($con, $sql);
	header("Location:home.php? msg=Data Updated");
}	
?>