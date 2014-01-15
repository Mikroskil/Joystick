<?php
	require_once "connect.php";
	
	for ($i = 2; $i <= 12 ; $i++)
	{
		for ($j = 1; $j <= 8; $j++)
		{
			$temp = $i*100 + $j;
			if (($j == 6) | ($j == 7))
			{
				$value = "C";
				$harga = 950000000;
			}
			else if (($j == 2) | ($j == 3))
			{
				$value = "B";
				$harga = 650000000;
			}
			else
			{
				$value = "A";
				$harga = 500000000;
			}
				
			$mysql = mysql_query("INSERT INTO apartemen SET no_kamar='$temp', type_kamar='$value', harga='$harga', booked_fee=5000000");
		}
	}
	
?>