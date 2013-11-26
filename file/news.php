<html>
	<head>
		<title>SUVABEWE | News and Events</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			$connect = mysql_connect("localhost","root","");
			mysql_select_db("suvabewe",$connect);
			
			$pilihtabel = mysql_query("SELECT * FROM berita ORDER BY tanggal DESC");
			$berita = Array();
			$n = 0;
			while (($row = mysql_fetch_array($pilihtabel)) && ($n <9))
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
			<div class="container" style="height:900px">
				<div class="section newsseccon">
					<div class="sectionheader bottomline">
						<b>NEWS AND EVENTS</b>
					</div>
					<?php
						$pilihtabel = mysql_query("SELECT * FROM berita");
						for ( $i = 0 ; $i < $n ; $i++)
						{
							echo "<div class='sectioncontent newssec'>";
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
			<?php include_once ('footer.html');?>
		</div>
	</body>
</html>
</html>
