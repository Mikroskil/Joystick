<html>
	<head>
		<title>SUVABEWE | Apartment</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" /></head>
		<?php
			if (isset($_POST['booking']))
			{
				header('Location:bookingvalid.php?id=' . $_GET['id']);
			}
		
		
			require_once "connect.php";
			$no = $_GET['id'];
			$pilihtabel = mysql_query("SELECT * FROM apartemen WHERE no_kamar = '$no'");
			$n = 0;
			while($row=mysql_fetch_array ($pilihtabel))
			{
				$data['id'] = $row['no_kamar'];
				$data['tipe'] = $row['type_kamar'];
				$data['harga'] = $row['harga'];
				$data['status'] = $row['available'];
				$data['booked'] = $row['booked'];
				$data['booked_fee'] = $row['booked_fee'];
				$data['tidur1'] = $row['gambar_tidur1'];
				$data['tidur2'] = $row['gambar_tidur2'];
				$data['tidur3'] = $row['gambar_tidur3'];
				$data['makan'] = $row['gambar_makan'];
				$data['dapur'] = $row['gambar_dapur'];
				$data['mandi'] = $row['gambar_mandi'];
				$data['tamu'] = $row['gambar_tamu'];
				$data['balkon'] = $row['gambar_balkon'];
			}
			
			if ($data['tipe'] == 'A')
			{
				$rowspan = 7;
				$height = 800;
			}
			else if ($data['tipe'] == 'B')
			{
				$rowspan = 8;
				$height = 950;
			}
			else if ($data['tipe'] == 'C')
			{
				$rowspan = 9;
				$height = 1100;
			}
		?>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:<?php echo $height;?>px">
				<div class="section apartmentdetail">
					<div class="sectionheader bottomline apartmentdetailheader">Apartment Detail | Type <?php echo $data['tipe'];?></div>
					<div class="sectioncontent">
						<table>
							<tr>
								<td>No Kamar</td>
								<td>:</td>
								<td><?php echo $data['id'];?></td>
							</tr>
							<tr>
								<td>Lantai</td>
								<td>:</td>
								<td><?php echo (int)($data['id']/100);?></td>
							</tr>
							<tr>
								<td>Tipe</td>
								<td>:</td>
								<td><?php echo $data['tipe'];?></td>
							</tr>
							<tr>
								<td>Status</td>
								<td>:</td>
								<td>
									<?php 
										if ($data['status'] == 0)
											echo "SOLD";
										else if ($data['booked'] == 1)
											echo "BOOKED";
										else
											echo "VACANT"; 
									?>
								</td>
							</tr>
							<tr>
								<td>Harga</td>
								<td>:</td>
								<td>Rp.<?php echo $data['harga'];?>,00</td>
							</tr>
							<tr>
								<td>Booking Fee</td>
								<td>:</td>
								<td>Rp.<?php echo $data['booked_fee'];?>,00</td>
							</tr>
							<tr valign="top">
								<td>Spesifikasi</td>
								<td>:</td>
								<td>
									<?php
										if ($data['tipe'] == 'A')
											echo 1;
										else if ($data['tipe'] == 'B')
											echo 2;
										else if ($data['tipe'] == 'C')
											echo 3;
									?>
									Ruang Tidur<br>
									Ruang Tamu<br>
									Ruang Makan<br>
									Dapur<br>
									Kamar Mandi<br>
									Balkon
								</td>
							</tr>
							<tr>
								<td>
									<form method="post">
										<?php
											if (($data['status'] != 0) & ($data['booked'] != 1))
												echo "<input type='submit' name='booking' value='BOOK'>";
										?>
									</form>
								</td>
							</tr>
						</table>
					</div>
					
				</div>
				<div class="section">
					<div class="sectionheader bottomline apartementimgheader">Photo Gallery</div>
					<div class="sectioncontent">
						<table>
							<tr>
								<td align="center">
									<img src="../img/<?php echo $data['tidur1'];?> " class="apartementimg"> <br>
									Ruang Tidur 1
								</td>
							</tr>
							<?php
								if (($data['tipe'] == 'B') | ($data['tipe'] == 'C'))
									echo "<tr><td align='center'><img src='../img/". $data['tidur2'] .
"' class='apartementimg'><br>Ruang Tidur 2</td></tr>";
								if ($data['tipe'] == 'C')
									echo "<tr><td align='center'><img src='../img/". $data['tidur3'] .
"' class='apartementimg'><br>Ruang Tidur 3</td></tr>";
							?>
							<tr>
								<td align="center">
									<img src="../img/<?php echo $data['tamu'];?> " class="apartementimg"> <br>
									Ruang Tamu
								</td>
							</tr>
							<tr>
								<td align="center">
									<img src="../img/<?php echo $data['makan'];?> " class="apartementimg"> <br>
									Ruang Makan
								</td>
							</tr>
							<tr>
								<td align="center">
									<img src="../img/<?php echo $data['dapur'];?> " class="apartementimg"> <br>
									Dapur
								</td>
							</tr>
							<tr>
								<td align="center">
									<img src="../img/<?php echo $data['mandi'];?> " class="apartementimg"> <br>
									Kamar Mandi
								</td>
							</tr>
							<tr>
								<td align="center">
									<img src="../img/<?php echo $data['balkon'];?> " class="apartementimg"> <br>
									Balkon
								</td>
							</tr>
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