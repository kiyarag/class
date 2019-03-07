<?php
	//for, while, foreach, do while == type of loop
	for ($i=1; $i < 5; $i++) { 
		echo "<li>"; 
		echo $i; 
		echo "</li>"; 
	}
?>
<?php //  start->Condition-> Increment/Decrement-> end
for ($i=2; $i<= 10; $i++) { 
	echo "---";
	echo $i;
}
?>
<br>
--------value multiply-----------
<br>
<?php 
for ($x = 1; $x <= 10; $x++){ 
	$a = 5;
	$result = $a*$x;
	echo $result;
	echo "---";
}
?>
<br><br>
--------All value Add-----------
<br><br>
<?php 
$x = 0;
$y = 5;
	for ($i=1; $i <=5 ; $i++) { 		
		$x = $x + $i;		
	}
	echo $x;
	$tsum = $x*$y;
	echo "----";
	echo $tsum; //with discount
?>
<br>
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
	$i++;
?>
<tr>
	<td><?php echo $i ?></td>
</tr>
<?php } ?>
</tbody>
</table>

<ul style="float:left;">
<?php
$i=10;
while ($i >= 1) {
	//echo $i;
	
?>
<li><?php echo $i ?></li>
<?php 
$i--; 
} ?>
</ul>

<ul style="float:left;">
<?php
$i=1;
while ($i <= 10) {
	//echo $i;
?>
<li><?php echo $i ?></li>
<?php 
$i++; 
} ?>
</ul>