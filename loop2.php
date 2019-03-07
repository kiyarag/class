<div style="float: left;">
<style type="text/css">
.myTable{ border: 1px solid #000; }
.myTable tr{ background-color: #ccc; }
.myTable tr:nth-child(2n){ background-color: #EEE; }
</style>
<table class="myTable">
	<thead><th>S.N</th></thead>
	<tbody>
<?php
$i=1;
while ($i <= 10) {
	//echo $i;

?>
<tr>
	<td><?php echo $i ?></td>
</tr>
<?php  	$i++;  } ?>
</tbody>
</table>
<ul>
<?php
$i=1;
while ($i <= 10) {
	//echo $i;
	$i++;
?>
<li><?php echo $i ?></li>
<?php } ?>
</ul>
</div>
<div style="float: left; padding-left:10px;">
<?php
$a=22;
if ($a<10) {
	echo "Baby  <br>";
}
elseif ($a>20 && $a<30) {
	echo "Teenage  <br>";
}
else {
	echo "adult  <br>";
}
?>
<?php 
//do-while
 do {
 	$a=10;
 	echo $a ;
 	$a++;
 } 
 while ($a<10);
 ?>
</div>