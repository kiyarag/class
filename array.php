<?php 
//Array: A group of similar item. one variable we can put multiple data.
	$fruit = array("Apple", "Mango", "Banana", "Orange", "Papaya"); //This is Indexed Array
	//echo $fruit[0], $fruit[1], $fruit[2], $fruit[3], $fruit[4];
	foreach ($fruit as $key) {
		echo "$key <br>";
	}
?>
<br>
<?php
//Associative Array : Key & Value Pair.
	$group = array("Baby" => 10,"Teenager" => 20, "Adult" => 30);
	foreach ($group as $key => $value) {
		echo $key.$value;
		//echo "$value";
		echo " --- ";
	}
?>