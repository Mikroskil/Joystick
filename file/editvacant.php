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
						
					<div class="sectioncontent">
						<table>
							<tr>
								<td width="100">No Kamar</td>
								<td>:</td>
								<td><input type="text" readonly value="<?php if (isset($_GET['no_kamar'])) echo $_GET['no_kamar'] ?>"></td>
							</tr>
							<tr>
								<td width="100">Gambar</td>
								<td>:</td>
								<td>Balkon<input type="file"></td>
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
