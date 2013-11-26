<?php session_start(); ?>
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
						<b>Admin Page | Show Data Apartment</b>
					</div>
					<div class="sectioncontent ">
						<table>
							<form method="post">
								<tr>
									<td width="80px"> No Kamar </td>
									<td width="100px"> Tipe </td>
									<td width="150px"> Harga </td>
									<td width="150px"> Booking Fee </td>
									<td width="50px"> Status </td>
									<td width="120px">Pemilik</td>
									<td width="150px"> Spef </td>
									<td width="100px"> Available </td>
								</tr>
								
								<tr>
									<td> 1XX </td>
									<td> C </td>
									<td> Rp. 500.000.000,00 </td>
									<td> Rp. 25.000.000,00 </td>
									<td> Sold/Booked/Vacant </td>
									<td> Sandy Usman Erry</td>
									<td> 3 kamar tidur <br> 1 kamar mandi <br> bla bla bla</td>
									<td> Yes/No </td>
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
