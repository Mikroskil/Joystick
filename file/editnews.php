<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
		require_once 'connect.php';
		
		$pilihtabel = mysql_query("SELECT * FROM berita ORDER BY tanggal DESC");
		$c = 0;
		while($row=mysql_fetch_array ($pilihtabel))
		{
			if(isset($_POST [$row['id']]))
			{
				$temp=$row['id'];
				if ($row['gambar'] != "")
				{
					$path = "../img/" . $row['gambar'];
					unlink($path);
					
				}
				mysql_query("DELETE FROM berita WHERE id='$temp'");
			}
			$c = $c + 1;
		}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:<?php echo (200 + $c * 20)?>px">
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
									
									$pilihtabel=mysql_query("SELECT * FROM berita ORDER BY tanggal DESC");
									
									
									$cek=false;
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
										$cek = true;
									}
									
									if (!$cek)
										echo "<tr><td colspan=5 align='center'>Tidak Ada News</td></tr>";
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
