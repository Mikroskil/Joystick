<?php session_start(); ?>
<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
		require_once 'connect.php';
		$pilihtabel=mysql_query("SELECT * FROM apartemen");
		
		while($row=mysql_fetch_array ($pilihtabel))
		{
			if(isset($_POST [$row['no_kamar']]))
			{
				$temp=$row['no_kamar'];
				mysql_query("DELETE FROM apartemen WHERE no_kamar='$temp'");
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
										
										echo 
										"<tr> 
										<td> " . $row['no_kamar'] . "</td>
										<td> " . $row['nama_pemilik'] . " <br> (" . $row['email'] . ")</td>
										<td> <a href='update_apt.php?target=" . $row['no_kamar'] . "'><input type='button' value='Ubah'></a>
										</td>
									</tr>
									";
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
