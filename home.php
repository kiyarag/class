<?php/*
if (isset($_GET["msg"])) {
	$sucessmsg = $_GET["msg"];
}*/
?>
<div class="" style="max-width: 1200px; margin:0 auto;">
<div><?php// echo $sucessmsg; ?></div>
<form method="POST" action="homepro.php">
	<div><input type="text" name="title"><br><br></div>
	<div><textarea name="content" rows="5"></textarea><br><br></div>
	<div><input type="submit" name="submit" value="Save home"></div>
</form>


<?php
if (isset($_GET["msg"])) {
	echo  $_GET["msg"];
}
?>
<table border="1">
	<thead>
		<tr>
		<th>S.N</th>
		<th>Tittle</th>
		<th>Content</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
		<?php
		$x=1;
		include("connection.php");
		$sql = "SELECT * FROM home";
		$query = mysqli_query($con,$sql);
		while ($row=mysqli_fetch_assoc( $query)) {
		?>
		<tr>
			<td><?php echo $x; ?></td>
			<td><?php echo $row["title"]; ?></td>
			<td><?php echo $row["content"]; ?></td>
			<td><a href="update.php?&id=<?php echo $row['id'];?>">Update</a>/ 
			<a href="delete.php?&id=<?php echo $row['id'];?>">Delete</a></td>
		</tr>
		<?php $x++; } ?>
	</tbody>
</table>
</div>