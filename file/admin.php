<?php session_start(); ?>
<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:900px">
				<?php include_once('sidemenu.php');?>
				<div class="section showapt">
					<div class="sectionheader bottomline">
						<b>Admin Page | Show Data Apartment</b>
					</div>
					<div class="sectioncontent ">
						<table>
							<form method="post">
								<tr>
									<td width="50px"> ID </td>
									<td width="100px"> Foto </td>
									<td width="50px"> Unit </td>
									<td width="50px"> Tipe </td>
									<td width="150px"> Alamat </td>
									<td width="50px"> Status </td>
									<td width="120px"> Harga </td>
									<td width="120px"> Booking Fee </td>
									<td width="50px"> Masa </td>
									<td width="100px"> Spef </td>
								</tr>
								
								<tr>
									<td> bla-bla </td>
									<td> Foto </td>
									<td> unit </td>
									<td> Tipe </td>
									<td> Jl. Asia Baru No. 8 </td>
									<td> Booked </td>
									<td> Rp. 500.000.000,- </td>
									<td> Rp. 25.000.000,-</td>
									<td> 30 hari</td>
									<td> blablabla </td>
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
