8<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:900px">
				<?php include_once('sidemenu.php');?>
				<div class="section aptsec">
					<div class="sectionheader bottomline">
						<b>Admin Page | Add Data Apartemen</b>
					</div>
					<div class="sectioncontent ">
					<table>
						<form method="post">
						<tr>
							<td width="300"> <label class="aptspace"> ID Apartemen : </label></td>
							<td> <input type="text" name="idapt"/> </td>
						</tr>
						<tr >
							<td> <label class="aptspace"> Foto Apartemen : </label></td>
							<td colspan="5"> <input type="file" name="fotoaptutama" />
							<input type="file" name="fotoapt1" />
							<input type="file" name="fotoapt2" />
							<input type="file" name="fotoapt3" />
							<input type="file" name="fotoapt4" />
							</td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Unit Apartemen : </label></td>
							<td> <input type="text" name="unitapt" /></td>
						</tr>
						<tr> 
							<td> <label class="aptspace"> Tipe Apartemen : </label></td>
							<td> <input type="text" name="tipeapt" /></td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Alamat Apartemen : </label></td>
							<td> <input type="text" name="almtapt" /></td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Status Apartemen : </label></td>
							<td> <select>
							<option>Sold</option>
							<option>Available for Rent</option>
							<option>Booked</option>
							<option>Vacant</option>
							</select>
							<td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Harga Apartemen : </label></td>
							<td> <input type="text" name="hargaapt" /></td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Booking Fee Apartemen : </label></td>
							<td> <input type="text" name="bfapt" /> </td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Masa Berlaku Booking Fee :</label></td>
							<td> <input type="text" name="mbfapt" /> hari</td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Spesifikasi Apartemen : </label></td>
							<td> <textarea name="spekapt"> </textarea></td>
						</tr>
						<tr>
							<td> &nbsp;</td>
							<td rowspan="2"><input type="submit" value="Add"/> <input type="reset" value="Reset"></td>
						</tr>
						</form>							
					</table>	
					</div>
				</div>
			</div>
			<?php include_once ('footer.html');?>
		</div>
	</body>
</html>
</html>
