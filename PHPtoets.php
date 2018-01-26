<?php

echo "<h3>";
echo "EXCERCISE 1";
echo "</h3>";
echo "Zie de php file, de code is in de comments";

// I hope this is what you ment: commenting out the code

/* 
echo​ "Sed ut perspiciatis unde omnis iste natus error sit";
echo "voluptatem accusantium doloremque laudantium, totam";
echo "rem aperiam, eaque ipsa quae ab illo inventore veritatis";
echo "et quasi architecto beatae vitae dicta sunt explicabo."\n;
*/

// for​($i=0; $i<100; $i++) {}



/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 2";
echo "</h3>";

$a = 1000;
$b = 1200;
$c = 1400;

$sum = $a + $b + $c;
echo "<p>The sum of a, b and c is ";
echo $sum;
echo "</p>";




/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 3";
echo "</h3>";

echo "Zie de php file, de code is in de comments";

/* the problem with the code is that the variables used in the function are not defined within the function, but are supposed to refer to the global scope variables. You need to put the word global in front of the variables


$number1 = 100;
$number2 = 500;

function​ AddNumbers​() 
{
	global $number1, global$number2;
	echo​ $number1 + $number2;
}


*/



/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 4";
echo "</h3>";

$testString = "<p>Hello World</p>";
echo strtolower($testString);




/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 5";
echo "</h3>";

echo "Zie de php file, de code is in de comments";
/*
$data = array(
	name => "George",
	age => 50,
	male => true​,
	//list => [1,2,5,8,9]
);

foreach($data as $v) {
	echo gettype($value), "\n";
}

*/




/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 6";
echo "</h3>";
/*Calculate the sum, subtraction, division,multiplication and exponentiation of the
numbers 5 and 10 using PHP arithmetic operators.*/
$a = 5;
$b = 10;
$sum = $a + $b;
$sub = $a - $b;
$div = $a / $b;
$mult = $a * $b;
$exop = $a ** $b;

echo "<p>input = " . $a . " en " . $b . "</p>";
echo "sum=" . $sum . " subtraction= " . $sub . " division = " . $div . " multiplication = " . $mult . " exponentiation = " . $exop;

/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/


echo "<h3>";
echo "EXCERCISE 7";
echo "</h3>";

$Textstring = "the quick brown fox jumps over the lazy dog.";
$replaced = str_replace("the", "That", $Textstring);

echo "<p>";
echo $replaced;
echo "</p>";


/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/


echo "<h3>";
echo "EXCERCISE 8";
echo "</h3>";

$temperature = 10;

if ($temperature = 50 OR $temperature < 50){
	echo "temperature is low.";
}




/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 9";
echo "</h3>";

echo "Zie de php file, eerste loop code is in de comments";

$cities = array("New York City", "Seoul", "Tokyo", "Mexico City", "Shanghai", "Lagos", "Cairo", "Buenos Aires", "London", "Mumbai");

// sort the array
$citiesSorted = sort($cities);
$komma = implode(",", $cities);
echo "<p>";
echo $komma;
echo "</p>";
/*
$i;
for($i = 0; $i < count($citiesSorted); $i++){
  print_r($citiesSorted[$i]);
  }   
  */

$nexCities = array("Calcutta", "Los Angeles", "Osaka", "Beijing");
array_push($cities, $nexCities);
//print_r($cities);
$komma2 = implode(",", $cities);
echo "<p>";
echo $komma2;
echo "</p>";


/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 10";
echo "</h3>";

echo "<table border =\"1\" style='border-collapse: collapse;'>";
	for ($row=1; $row <= 5; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 5; $col++) { 
		   $p = $col * $row;
		   echo "<td style='padding:10px;'>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
	







/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/
/***********************************************************************************/

echo "<h3>";
echo "EXCERCISE 11";
echo "</h3>";

$width = 100;
$height = 100;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_POST["width"])) {
  		$width = $_POST["width"];

		if (!empty($_POST["height"])) {
	  	$height = $_POST["height"];
	  }	
	  $calculate = $width * $height; 
	  echo "The calculated area of " .$width. "and " .$height . " is " . $calculate;
  	}
}


?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<label for="width">Choose your width</label><input type="text" name="width">
	<br />
	<label for="height">Choose your height</label><input type="text" name="height">
	<br />
	 <input id="send" type="submit" name="submit" value="Submit">

	</form>

<?php


?>