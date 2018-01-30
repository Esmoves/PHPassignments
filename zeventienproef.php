<?php
/*
Werk deze opdracht in PHP en / of in JavaScript uit

Opdracht

De zeventienproef

Bij de zeventienproef worden de afzonderlijke cijfers van een getal “gewogen” bij elkaar opgeteld. Dat wil
zeggen dat afhankelijk van de positie het cijfer met een afgesproken getal (gewicht) wordt vermenigvuldigd.
De som van de resultaten dient een veelvoud van zeventien te zijn.
De gewichten zijn de getallen 1, 2, 3, .... Het laatste cijfer van het getal wordt met 1 vermenigvuldigd, het
voorlaatste cijfer wordt met 2 vermenigvuldigd, het op twee na laatste cijfer wordt met drie vermenigvuldigd,
enzovoorts. Deze producten worden vervolgens bij elkaar opgeteld en daarna wordt de som gedeeld door
17. Het resultaat van deze deling moet een geheel getal groter dan nul zijn. In dat geval is het nummer
geldig. Deze laatste voorwaarde zorgt ervoor dat voorkomen wordt dat een nummer dat alleen uit nullen
bestaat als geldig wordt beschouwd.

Voorbeeld
Nummer 92651109849427955
9x17 + 2x16 + 6x15 + 5x14 + 1x13 + 1x12 + 0x11 + 9x10 + 8x9 + 4x8 + 9x7 + 4x6 + 2x5 + 7x4 + 9x3 + 5x2 +
5x1 = 731

De som 731 is deelbaar door 17: delen door 17 geeft 43 (dus een geheel getal). Het nummer is dus geldig.
Schrijf een eigen functie genaamd “checkNumber” waar je als parameter een nummer mee kunt geven zoals
het nummer uit het voorbeeld hierboven. De functie retourneert true indien het nummer geldig is en de
functie retourneert false indien het nummer ongeldig is. Schrijf de opdracht uit in PHP en / of JavaScript.
*/


function checkNumber($number){

	// convert the integer to an array of numbers
	$array  = array_map('intval', str_split($number));
	$array_reverse = array_reverse ( $array );

	// SOM ( each number * multi number )
	$multi = 1;
	foreach ($array_reverse as $value) {
		$multinumber = $value * $multi;
		echo "multi is ";
		echo $multi;
		echo " value is ";
		echo $value;
		echo " multiple is ";
		echo $multinumber;
		echo "<br />";
		$multi++;
	}
	$check = ($multinumber / 17);

	if (!is_float($check)){
		echo "<h2>:) check: Your result was ". $check. " and thus valid</h2>";
	}
	else{
		echo "<h2>:( Your number was ". $check. " and thus invalid</h2>";
		echo "<p>Try: 92651109849427955.</p>"; 
	}
}

echo "<h1>Zeventienproef</h1>";

// devide SOM by 17
// check if the result is a complete number
// echo true or echo false
    if ( empty( $_POST ) ){ // if form is not send show form
    ?>
	    <form id="givenumber" method="POST" action="./zeventienproef.php">
	    <label for="number">Insert an number</label>
	    <input type="number" name="number" id="number" placeholder="12345...."><br/>
	    <input type="submit" name="submit" value="submit">
	    <p>Don't know a number? Try: 92651109849427955.</p>
	<?php
	}
	else{
		$number = $_POST['number'];
		echo "<p>Number = " .$number. "</p>";
		checkNumber($number);
}









?>