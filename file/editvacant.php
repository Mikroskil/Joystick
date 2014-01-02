<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once "connect.php";
			
			$pilihtabel = mysql_query("SELECT * FROM apartemen WHERE no_kamar = " . $_GET['no_kamar'] );
			$error = "";
			while($row=mysql_fetch_array ($pilihtabel))
			{
				$data['id'] = $row['no_kamar'];
				$data['tipe'] = $row['type_kamar'];
				$data['harga'] = $row['harga'];
				$data['booked'] = $row['booked'];
				$data['booked_fee'] = $row['booked_fee'];
				$data['booked_date'] = $row['booked_date'];
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
				$height = 1200;
			}
			else if ($data['tipe'] == 'B')
			{
				$rowspan = 8;
				$height = 1250;
			}
			else if ($data['tipe'] == 'C')
			{
				$rowspan = 9;
				$height = 1400;
			}
					
			function upload_gambar($nama)
			{
				global $cek;
				global $data;
				if ($_FILES[$nama]["error"] > 0)
					{
						$imgName = $data[$nama];
						$cek = true;
					}
					else
					{
						$kamar = $_GET['no_kamar'];
						$filename = $_FILES[$nama]["name"];
						$tipeExtensi = $_FILES[$nama]["type"];
						$info = pathinfo($_FILES[$nama]["name"]);
						if (substr_count($tipeExtensi, 'image') > 0)
						{
							
							if ($data[$nama] != "")
							{
								$lokasi = "../img/" . $data[$nama];
								unlink($lokasi);
							}
							
							$imgName = $kamar.'-'.$nama.".".$info['extension'];
							$path = "../img/" . $imgName;
							move_uploaded_file($_FILES[$nama]["tmp_name"], $path);
							$cek = true;
						}
						else
						{
							$error = "Tidak mensupport extension file yang diupload";
							$cek = false;
						}
					}
					if ($cek) 
							return $imgName;
			}	
			$cek = true;
			$tidur1="";
			if (isset($_POST['edit']))
			{
				if ($_POST['harga'] == "")
					$harga = 0;
				else
					$harga = $_POST['harga'];
					
				if ($_POST['booked'] == "")
					$booked_fee = 0;
				else
					$booked_fee = $_POST['booked'];
				
					$id = $data['id'];
					$tidur1 = upload_gambar("tidur1");
					
				if (isset($_POST['status']))
				{
					$booked = 1;
					$tanggal = $data['booked_date'];
				}
				else
				{
					$booked = 0;
					$tanggal = "0000-00-00";
				}
					
					if ($cek)
						$edit=mysql_query("UPDATE apartemen
						SET harga='$harga', booked = '$booked' , booked_fee='$booked_fee', booked_date='$tanggal', gambar_tidur1='$tidur1'
						WHERE no_kamar='$id'
						");	
					
					if ($data['tipe'] == "B")
					{
						$tidur2 = upload_gambar("tidur2");	
						if ($cek)
						$edit=mysql_query("UPDATE apartemen
						SET gambar_tidur2='$tidur2'
						WHERE no_kamar='$id'
						");	
					}
					else if ($data['tipe'] == "C")
					{
						$tidur2 = upload_gambar("tidur2");
						$tidur3 = upload_gambar("tidur3");
						if ($cek)
						$edit=mysql_query("UPDATE apartemen
						SET gambar_tidur2='$tidur2', gambar_tidur3='$tidur3'
						WHERE no_kamar='$id'
						");	
					}
					
					$makan = upload_gambar("makan");	
					$dapur = upload_gambar("dapur");	
					$mandi = upload_gambar("mandi");	
					$tamu = upload_gambar("tamu");	
					$balkon = upload_gambar("balkon");	
					
					if ($cek)
						$edit=mysql_query("UPDATE apartemen
						SET gambar_makan='$makan', gambar_dapur='$dapur', gambar_mandi='$mandi', gambar_tamu='$tamu', gambar_balkon='$balkon'
						WHERE no_kamar='$id'
						");
					
					
				
			}
			
			$pilihtabel = mysql_query("SELECT * FROM apartemen WHERE no_kamar = " . $_GET['no_kamar'] );
			while($row=mysql_fetch_array ($pilihtabel))
			{
				$data['id'] = $row['no_kamar'];
				$data['tipe'] = $row['type_kamar'];
				$data['harga'] = $row['harga'];
				$data['booked'] = $row['booked'];
				$data['booked_fee'] = $row['booked_fee'];
				$data['booked_date'] = $row['booked_date'];
				$data['tidur1'] = $row['gambar_tidur1'];
				$data['tidur2'] = $row['gambar_tidur2'];
				$data['tidur3'] = $row['gambar_tidur3'];
				$data['makan'] = $row['gambar_makan'];
				$data['dapur'] = $row['gambar_dapur'];
				$data['mandi'] = $row['gambar_mandi'];
				$data['tamu'] = $row['gambar_tamu'];
				$data['balkon'] = $row['gambar_balkon'];
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
							<form method="post" enctype="multipart/form-data">
							<tr>
								<td colspan="3"><?php echo $error; ?> &nbsp;</td>
							</tr>
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
							<tr><td>Ruang Tidur 1</td><td><img src="../img/<?php echo $data['tidur1'];?>" class="editvacantimg"><br><input name='tidur1' type='file'></td></tr>
							<?php
								if (($data['tipe'] == 'B') | ($data['tipe'] == 'C'))
								echo "<tr><td>Ruang Tidur 2</td><td><img src='../img/". $data['tidur2'] .
"' class='editvacantimg'><br><input name='tidur2' type='file'></td></tr>";
								if ($data['tipe'] == 'C')
								echo "<tr><td>Ruang Tidur 3</td><td><img src='../img/". $data['tidur3'] .
"' class='editvacantimg'><br><input name='tidur3' type='file'></td></tr>";
							?>
							<tr>
								<td>Balkon</td>
								<td><img src="../img/<?php echo $data['balkon'];?>"  class="editvacantimg"><br><input name='balkon' type='file'></td>
							</tr>
							<tr>
								<td>Ruang Tamu</td>
								<td><img src="../img/<?php echo $data['tamu'];?>"  class="editvacantimg"><br><input name='tamu' type='file'></td>
							</tr>
							<tr>
								<td>Ruang Makan</td>
								<td><img src="../img/<?php echo $data['makan'];?>" class="editvacantimg"><br><input name='makan' type='file'></td>
							</tr>
							<tr>
								<td>Dapur</td>
								<td><img src="../img/<?php echo $data['dapur'];?>" class="editvacantimg"><br><input name='dapur' type='file'></td>
							</tr>
							<tr>
								<td>Kamar Mandi</td>
								<td><img src="../img/<?php echo $data['mandi'];?>" class="editvacantimg"><br><input name='mandi' type='file'></td>
							</tr>
							
							<tr>
								<td wdith="100">Harga</td>
								<td>:</td>
								<td><input type="text" name="harga"  value ="<?php echo $data['harga'];?>"></td>
							</tr>
							<tr>
								<td wdith="100">Booked</td>
								<td>:</td>
								<td><input type="checkbox" name="status" <?php if ($data['booked'] != 0) echo "checked";?>></td>
							</tr>
							<tr>
								<td wdith="100">Booked Date</td>
								<td>:</td>
								<td><input type="text" name="booked_date" value ="<?php echo $data['booked_date'];?>" disabled>
									
									<?php
										if ($data['booked'] != 0)
										{
											$today = date("Y-m-d");
											$sub = strtotime($today) - strtotime($data['booked_date']);
											$due = (int)($sub/(60*60*24));
											
											if ($due <= 15)
												echo "<font color='00ff00'>Due " .  $due . " days</font>";
											else
												echo "<font color='ff0000'>Due " .  $due . " days</font>";
										}
										
										
									?>
									
								</td>
							</tr>
							<tr>
								<td wdith="100">Booked Fee</td>
								<td>:</td>
								<td><input type="text" name="booked" value ="<?php echo $data['booked_fee'];?>"></td>
							</tr>
							<tr align="center">
								<td colspan="3"><input type="submit" value="Edit" name="edit"></td>

							</tr>
							</form>
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
