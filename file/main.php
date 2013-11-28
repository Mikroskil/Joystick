<html>
	<head>
		<title>SUVABEWE | Home</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<link type="text/css" rel="stylesheet" href="../css/rhinoslider-1.05.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script type="text/javascript" src="../js/rhinoslider-1.05.min.js"></script>
		<script type="text/javascript" src="../js/mousewheel.js"></script>
		<script type="text/javascript" src="../js/easing.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#slider').rhinoslider({
					effect: 'fade',
					autoPlay: true,
				});
			});
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
					<ul id="slider" class="slideshow">
						<li class="slides"><img src="../img/welcome.png" class="slideimg"></li>
						<li class="slides"><img src="../img/slider/02.jpg" class="slideimg"></li>
						<li class="slides"><img src="../img/slider/03.jpg" class="slideimg"></li>
					</ul>
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