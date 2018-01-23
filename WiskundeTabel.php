<html>
<head>
	<title>Math Table by Esmeralda Tijhoff</title>
	<style>
		table {border: 2px solid black;
			border-collapse: collapse;
			margin: 100px auto;
		}
		th{ width: 100px; 
			background-color: black;
			color:white;
			padding: 10px;}
		td{padding:5px;
			text-align: center;}
		td.first {background-color: grey;}
		td.second {background-color: lightblue;}
		td.third {background-color: pink;}
		p{	color:purple;
			font-family: sans-serif;
		}
	</style>
</head>
<body>

<?php 

echo "<table>";
echo "<th>getal</th>";
echo "<th>kwadraat</th>";
echo "<th>derde macht</th>";

$startNum = 0;

function MathTable()
{
	for ($i=0; $i<10; $i++)
	{
		STATIC $startNum = 0;
		$startNum++;

		echo "<tr>";
		echo "<td class=\"first\">";
		echo $startNum;
		echo "</td>";
		echo "<td class=\"second\">";
		echo $startNum*$startNum;
		echo "</td>";
		echo "<td class=\"third\">";
		echo $startNum**3;
		echo "</td>";
		echo "</tr>";

		if ($i > 10) {
	        break;
	    }
    }
}


MathTable();


echo "</table></body></html>";

?>
