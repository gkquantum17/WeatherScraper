
<html>
<body>

<?php 
	$test="I\"m a variable!"; 
	$test2 = "Me too!";
	echo $test.$test2; 
	
	$number = 75;
	echo $number/3;
	
	$name = "Gokul";
	echo "my name is $name";
	
	$a = "name";
	echo $$a; 
	
	$myArray = array("pizza", "chocolate", "coffee"); 
	print_r($myArray);
	
	echo $myArray[2];

	$anotherArray[0]="pizza"; 
	$anotherArray[1]="yogurt"; 
	$anotherArray[2]="cheese";
	
	print_r($anotherArray);
	
	echo "<br /><br />";
	
	$thirdArray=array(
		"France" => "French",
		"Germany" => "German", 
		"England" => "English" 
	);
	
	print_r($thirdArray);
	
	echo $thirdArray[France];
	echo $thirdArray[Germany];
	echo $thirdArray[England];
	
	$anotherArray[]="salad";
	echo "<br /><br />";
	print_r($anotherArray);
	echo "<br /><br />";
	unset($thirdArray["Germany"]);
	print_r($thirdArray);
	
	echo "<br /><br />";
	echo "<br /><br />";
	
	$number = 1;
	$number2 = 2;
	$number3 = 2; 
	if ($number3 == $number2 AND $number2 > $number){
		echo "True!"; 
	} else {
		echo "False!";
	}
	
	for ($i = 0; $i <=10; $i++){
		echo $i."<br />"; 
	}
	
	$array = array("cat", "dog", "turtle", "kangaroo"); 
	print_r($array);
	echo "<br /><br />";
	for ($i = 0; $i <= 4; $i++){
		echo $array[$i]."<br />";
	}
	echo "<br /><br />";
	
	foreach ($array as $key => $value){
		echo "$key $value </br />";
	}
	echo "<br /><br />";
	$variable = 1;
	while ($variable < 20){
		echo $variable. "<br />";
		$variable++; 
	}
	echo "<br /><br />";
	$array = array("apple", "banana", "grape");
	$var = 0;
	while ($array[$var]){
		echo $var." ".$array[$var]."<br />";
		$var++;
	}
	
	$nameArray = array("Bob", "Fred", "Jack"); 
	
		if ($_POST["submit"]){
			if ($_POST["name"]){
				foreach ($nameArray as $name){
					if ($_POST["name"] == $name){
						echo "Welcome ".$name; 
						$knowYou = 1; 
					}
				}
				if (!$knowYou){
					echo "i dont know you, ".$_POST['name'];
				}
				
			} else{
				echo "Please enter your name"; 
			}
		}
?>

	<form method = "post">
		<label for = "name"> Name </label>
		<input name = "name" type="text" />
		<input type="submit" name = "submit" value = "submit your name" />
	</form>
</body>
</html>















