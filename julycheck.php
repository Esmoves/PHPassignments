<?php

/* Functions help to automate repetitive tasks and enable you to reuse your code. Write your own function that accepts the current month as a parameter and prints one of the following responses, depending on whether it is July or not:
 
It's July, so it can get really hot.
It’s not July, so at least we’re not in the peak of the heat.
 
If you need information about how to write your own functions please read:
 
https://www.w3schools.com/php/php_functions.asp.	(PHP functions)
https://www.w3schools.com/js/js_functions.asp        	(JavaScript functions)


*/


// get current month in nunmber

// function (month) --> 
		// is current month 7 (juli)? then echo It's July, so it can get really hot.
		// is current monh not july, than echo It’s not July, so at least we’re not in the peak of the heat.

echo date('m');
echo "<br>";

if (date('m') == 7){
	echo "It's July, so it can get really hot.";
}
else{
	echo "It’s not July, so at least we’re not in the peak of the heat.";
}




?>