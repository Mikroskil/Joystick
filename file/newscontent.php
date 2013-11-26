<html>
	<head>
		<title>SUVABEWE | News and Events</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			$connect = mysql_connect("localhost","root","");
			mysql_select_db("suvabewe",$connect);
			
			$pilihtabel = mysql_query("SELECT * FROM berita ORDER BY tanggal DESC");
			
			$n = 0;
			while ($row = mysql_fetch_array($pilihtabel))
			{
					if ($row['judul'] == $_GET['title'])
					{
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
				<div class="section newsseccon">
					<div class="sectionheader bottomline">
						<b><?php echo $berita["judul"];?></b>
					</div>
					<?php
						if ($berita['gambar'] != "") 
							echo "<img src='../img/" . $berita['gambar'] . "'>";
					?>
					<div class="sectioncontent">
						<?php echo $berita['isi']; ?>
					</div>
				</div>
			</div>
			<?php include_once ('footer.html');?>
		</div>
	</body>
</html>
</html>
