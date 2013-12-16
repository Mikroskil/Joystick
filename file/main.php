<html>
	<head>
		<title>SUVABEWE | Home</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		</script>
		<?php
			require_once 'connect.php';
			
			
			$pilihtabel = mysql_query("SELECT * FROM berita ORDER BY tanggal DESC");
			$berita = Array();
			$n = 0;
			while (($row = mysql_fetch_array($pilihtabel)) && ($n <4))
			{
					$berita[$n]['gambar']= $row['gambar'];
					$berita[$n]['judul'] = $row['judul'];
					$berita[$n]['isi'] = $row['isi'];
					$berita[$n]['tanggal'] = $row['tanggal'];
					$n = $n + 1;
			}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="slider">
					<?php include_once ('slider.html')?>
			</div>
			<div class="container" style="height:700px">
				<div class="section indexnewssec">
					<div class="sectionheader indexnewssechead">
						<b>NEWS AND EVENTS</b><a href="news.html" class="sectionheaderlink">all news</a>
					</div>
					<?php
						$pilihtabel = mysql_query("SELECT * FROM berita");
						for ( $i = 0 ; $i < $n ; $i++)
						{
							echo "<div class='sectioncontent indexnewssec'>";
							echo "<div class='newshead'><a href='newscontent.php?title=" . $berita[$i]['judul'] ."'>" . $berita[$i]['judul'] . "</a></div>";
							if ($berita[$i]['gambar'] != "")
							{
								echo "<img class='newsimg' src='../img/" . $berita[$i]['gambar']." />";
							}
							echo "<div class='newscon'>". $berita[$i]['isi'] . "</div></div>";
						}
						
					?>
					
				</div>
			</div>
			<?php 
				mysql_close();
				include_once ('footer.html'); 
			?>
		</div>
	</body>
</html>