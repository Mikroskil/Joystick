<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
		require_once 'connect.php';
		
		$pilihtabel = mysql_query("SELECT * FROM berita ORDER BY tanggal DESC");
		
		while($row=mysql_fetch_array ($pilihtabel))
		{
			if(isset($_POST [$row['id']]))
			{
				$temp=$row['id'];
				$path = "../image/" . $row['gambar'];
				unlink($path);
				mysql_query("DELETE FROM berita WHERE id='$temp'");
			}
		}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:600px">
				<?php include_once('sidemenu.php');?>
				<div class="section confmargin">
					<div class="sectionheader bottomline">Admin Page | Edit News And Events</div>
					<div class="sectioncontent">
						<table>
							<form method="post">
								<tr>
									<td width="50px"> ID </td>
									<td width="130px"> Tanggal </td>
									<td width="200px"> Judul Berita </td>
									<td width="80px">&nbsp;  </td>
									<td width="80px">&nbsp;  </td>
								</tr>
								
								<?php
									require_once 'connect.php';
									$pilihtabel=mysql_query("SELECT * FROM berita");
									
									
									$i=0;
									while(($row=mysql_fetch_array($pilihtabel)))
									{
										
										echo 
										"<tr> 
										<td> " . $row['id'] . "</td>
										<td> " . $row['tanggal'] . "</td>
										<td> " . $row['judul'] . "</td>
										<td align='center'>
											<a href='update_news.php?target=" . $row['id'] . "'><input type='button' value='Edit'></a>
										</td>
										<td>
											<input type='submit' value='Hapus' name='" . $row['id'] . "'>
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
