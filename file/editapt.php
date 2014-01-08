<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
		require_once 'connect.php';
		$pilihtabel=mysql_query("SELECT * FROM apartemen");
		$c = 0;
		while($row=mysql_fetch_array ($pilihtabel))
		{
			if (($row['no_kamar'] != 100) & ($row['available'] != 1))
				$c = $c + 1;
		}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<?php include_once('sidemenu.php');?>
			<div class="container confmargin" style="height:<?php echo (150+$c*30);?>px">
				
				<div class="section showapt">
					<div class="sectionheader bottomline">
						<b>Admin Page | Edit Data Apartemen</b>
					</div>
					<div class="sectioncontent ">
						<table>
							<form method="post">
								<tr>
									<td width="80px"> No Kamar </td>
									<td width="200px"> Nama Pemilik </td>
									<td width="50px">&nbsp; </td>
								</tr>
								<?php
									require_once 'connect.php';
									$pilihtabel=mysql_query("SELECT * FROM apartemen");
									
									
									$i=0;
									while(($row=mysql_fetch_array($pilihtabel)))
									{
										$i = $i + 1;
										if (($row['no_kamar'] != 100) & ($row['available'] != 1))
										{
											echo 
												"<tr> 
												<td> " . $row['no_kamar'] . "</td>
												<td> " . $row['nama_pemilik'] . " <br> (" . $row['email'] . ")</td>
												<td> <a href='update_apt.php?target=" . $row['no_kamar'] . "'><input type='button' value='Ubah'></a>
												</td>
											</tr>
											";
										}
										
								}
							?>
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
</html>
