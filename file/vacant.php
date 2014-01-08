<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
	</head>
	<body>
		<div class="wrapper" id="wrapper">
		<?php include_once ('header.php');?>
		<?php 
			include_once('sidemenu.php');
			require_once 'connect.php';
			$pilihtabel=mysql_query("SELECT * FROM apartemen WHERE available <> 0");
			
			$c = 0;
			while($row = mysql_fetch_array($pilihtabel))
			{
				$data[$c]['no'] = $row['no_kamar'];
				$data[$c]['tipe'] = $row['type_kamar'];
				$data[$c]['harga'] = $row['harga'];
				$data[$c]['booked'] = $row['booked'];
				$data[$c]['booked_fee'] = $row['booked_fee'];
				$data[$c]['booked_date'] = $row['booked_date'];
				$c=$c+1;
			}
		?>
		
		  <div class="container confmargin" style="height:<?php echo (110+$c*28);?>px">
				<div class="section showapt">
					<div class="sectionheader bottomline">
						<b>Admin Page | Edit Vacant</b>
					</div>
					<div class="sectioncontent ">
					<table>
						<tr align='center'>	
						<th width='100'>No Kamar</th>
						<th width='30'>Tipe</th>
						<th width='150'>Harga</th>
						<th width='150'>Booked Fee</th>
						<th>Booked</th>
						<th>Booked Date</th>
						<th>&nbsp;</th>
						</tr>
						<?php
						
							
							$kosong = true;
							for ($i = 0 ; $i < $c; $i++)
							{
							  echo "<tr align='center'>";
							  echo "<td>" .$data[$i]['no']."</td>";
							  	echo "<td>" . $data[$i]['tipe'] . "</td>";
							  echo "<td align='right'>Rp." .$data[$i]['harga'] . ",00</td>";
							  echo "<td  align='right'>Rp." . $data[$i]['booked_fee'] . ",00</td>";
							  echo "<td><input type='checkbox' disabled='disabled' ";
							  if ($data[$i]['booked'] == 1)
							  	echo "checked></td><td>". $data[$i]['booked_date'] ."</td>";
							  else
								echo "></td><td>-</td>";
							  echo "<td><a href='editvacant.php?no_kamar=". $data[$i]['no'] . "'><input type='button' value='edit'></a></td>";
							  echo "</tr>";
							  $kosong = false;
							 }
							 if ($kosong)
							 {
								echo "<tr><td colspan='3' align='center' valign='center'><b>Tidak Ada Apartemen Kosong!</b></td></tr>";
							 }
							?>
							 
							</table>
					</div>
				</div>
			</div>
			<?php 
				mysql_close();
				include_once ('footer.html'); 
			?>
		</div>
	</body>
</html>
