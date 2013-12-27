<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once "connect.php";
			
			$pilihtabel = mysql_query("SELECT * FROM apartemen WHERE no_kamar = " . $_GET['no_kamar'] );
			
			while($row=mysql_fetch_array ($pilihtabel))
			{
				$data['id'] = $row['no_kamar'];
				$data['tipe'] = $row['type_kamar'];
				$data['nama'] = $row['nama_pemilik'];
				$data['pass'] = $row['password'];
				$data['email'] = $row['email'];
				$data['listrik'] = $row['tagihan_listrik'];
				$data['air'] = $row['tagihan_air'];
			}
			
			if ($data['tipe'] == 'A')
			{
				$rowspan = 7;
				$height = 500;
			}
			else if ($data['tipe'] == 'B')
			{
				$rowspan = 8;
				$height = 525;
			}
			else if ($data['tipe'] == 'C')
			{
				$rowspan = 9;
				$height = 550;
			}
								
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
		<?php include_once ('header.php');?>
		<?php include_once('sidemenu.php');?>
		  <div class="container confmargin" style="height:<?php echo $height;?>px">
				<div class="section showapt">
					<div class="sectionheader bottomline">
						<b>Admin Page | Edit Vacant</b>
					</div>
						
					<div class="sectioncontent">
						<table>
							<tr>
								<td width="100">No Kamar</td>
								<td>:</td>
								<td><input type="text" readonly value="<?php echo $data['id'];?>"></td>
							</tr>
							<tr>
								<td>Tipe Kamar</td>
								<td>:</td>
								<td><input type="text" readonly value="<?php echo $data['tipe'];?>"></td>
							</tr>
							<tr>
								<td width="100">Gambar</td>
								<td rowspan="<?php echo $rowspan;?>" valign="top" >:</td>
								<td></td>
							</tr>
							<tr><td>Ruang Tidur 1</td><td><input name='tidur1' type='file'></td></tr>
							<?php
								if (($data['tipe'] == 'B') | ($data['tipe'] == 'C'))
								echo "<tr><td>Ruang Tidur 2</td><td><input name='tidur1' type='file'></td></tr>";
								if ($data['tipe'] == 'C')
								echo "<tr><td>Ruang Tidur 3</td><td><input name='tidur3' type='file'></td></tr>";
							?>
							<tr>
								<td>Balkon</td>
								<td><input name='balkon' type='file'></td>
							</tr>
							<tr>
								<td>Ruang Tamu</td>
								<td><input name='tamu' type='file'></td>
							</tr>
							<tr>
								<td>Ruang Makan</td>
								<td><input name='makan' type='file'></td>
							</tr>
							<tr>
								<td>Dapur</td>
								<td><input name='dapur' type='file'></td>
							</tr>
							<tr>
								<td>Kamar Mandi</td>
								<td><input name='mandi' type='file'></td>
							</tr>
							
							<tr>
								<td wdith="100">Harga</td>
								<td>:</td>
								<td><input type="text" name="harga"></td>
							</tr>
							<tr>
								<td wdith="100">Booked</td>
								<td>:</td>
								<td><input type="text" name="booked"></td>
							</tr>
							<tr align="center">
								<td colspan="3"><input type="submit" value="Edit"></td>

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
