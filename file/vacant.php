<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
	</head>
	<body>
		<div class="wrapper" id="wrapper">
		<?php include_once ('header.php');?>
		<?php include_once('sidemenu.php');?>
		  <div class="container confmargin" style="height:900px">
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
						<th>&nbsp;</th>
						</tr>
						<?php
						require_once 'connect.php';
						$pilihtabel=mysql_query("SELECT * FROM apartemen WHERE available <> 0");
							
							$kosong = true;
							while($row = mysql_fetch_array($pilihtabel))
							{
							  echo "<tr align='center'>";
							  echo "<form action='editvacant.php' method='get'><td><input type='text' size='1' name='no_kamar' readonly value='".$row['no_kamar']."'></td>";
							  	echo "<td>" . $row['type_kamar'] . "</td>";
							  echo "<td align='right'>Rp." . $row['harga'] . ",00</td>";
							  echo "<td  align='right'>Rp." . $row['booked_fee'] . ",00</td>";
							  echo "<td><input type='checkbox' disabled='disabled' value='";
							  if ($row['booked'] == 1)
							  	echo 1 . "checked='checked'";
							  else
							  	echo 0;
								
							  echo "'></td>";
							  
	
							  echo "<td><input type='submit' value='edit'></td>";
							  echo "</form></tr>";
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
