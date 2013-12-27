<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once 'connect.php';
			$pilihtabel=mysql_query("SELECT * FROM apartemen");
			while($row=mysql_fetch_array ($pilihtabel))
			{
				if(isset($_POST[$row['update']]))
				{
					$temp=$row['tipeapt'];
					$temp2=$row['hargaapt'];
					$temp3=$row['bfapt'];
					$temp4=$row['nama_pemilik'];
					
					mysql_query("UPDATE apartemen SET tipeapt = '$temp' & hargaapt = '$temp2' & bfapt = '$temp3' & nama_pemilik = '$temp4'");
				}
			}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<?php include_once('sidemenu.php');?>
			<div class="container confmargin" style="height:900px">
				<div class="section showapt">
					<div class="sectionheader bottomline">
						<b>Admin Page | Edit Data Apartment</b>
					</div>
					<div class="sectioncontent ">
						<form method="post">
							<table>
								<tr>
									<td>No Kamar :</td>
									<td><select>
										<?php
										while($row=mysql_fetch_array ($pilihtabel))
										{
											echo "<option>".$row['no_kamar']."</option>";
										}
										?>
										</select></td>
								</tr>
								<tr>
									<td>Tipe :</td>
									<td><input type="text" name="tipeapt" /></td>
								</tr>
								<tr>
									<td>Harga :</td>
									<td><input type="text" name="hargaapt" /></td>
								</tr>
								<tr>
									<td>Booking fee :</td>
									<td><input type="text" name="bfapt" /></td>
								</tr>
								<tr>
									<td>Status Apartemen :</td>
									<td> <select>
										<option>Sold</option>
										<option>Available for Rent</option>
										<option>Booked</option>
										<option>Vacant</option>
										</select>
									<td>
								</tr>
								<tr>
									<td>Nama Pemilik :</td>
									<td><input type="text" name="nama_pemilik" /></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="update" value="Save" /></td>
								</tr>
							</table>
						</form>
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
