<html>
	<head>
		<title>SUVABEWE | News and Events</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once 'connect.php';
			
			$pilihtabel = mysql_query("SELECT * FROM berita ORDER BY tanggal DESC");
			
			$n = 0;
			while ($row = mysql_fetch_array($pilihtabel))
			{
					if ($row['id'] == $_GET['id'])
					{
						$berita['id'] = $row['id'];
						$berita['gambar']= $row['gambar'];
						$berita['judul'] = $row['judul'];
						$berita['isi'] = $row['isi'];
						$berita['tanggal'] = $row['tanggal'];
					}
			}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:900px">
				<div class="section newspagecon">
					<div class="sectionheader bottomline">
						<b><?php echo $berita["judul"];?></b>
					</div>
					<?php
						if ($berita['gambar'] != "") 
							echo "<img class='newsconimg' src='../img/" . $berita['gambar'] . "' >";
					?>
					<div class="sectioncontent">
						<?php echo str_replace("\n","<br>",$berita['isi']); ?>
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
