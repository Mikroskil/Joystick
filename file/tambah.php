<?php
	require_once "connect.php";
	
	for ($i = 2; $i <= 12 ; $i++)
	{
		for ($j = 1; $j <= 8; $j++)
		{
			$temp = $i*100 + $j;
			if (($j == 2) | ($j == 3))
				$value = "C";
			else if (($j == 6) | ($j == 7))
				$value = "B";
			else
				$value = "A";
				
			$mysql = mysql_query("INSERT INTO apartemen SET no_kamar='$temp', type_kamar='$value'");
		}
	}
	
?>