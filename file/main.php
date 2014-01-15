<html>
	<head>
		<title>SUVABEWE | Home</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		</script>
		<?php
			if (isset($_POST['booking']))
			{
				if ($_POST['kamar'] != '')
				header('Location:bookingvalid.php?id=' . $_POST['kamar']);
			}
			require_once 'connect.php';
			$pilihtabel = mysql_query("SELECT * FROM berita ORDER BY tanggal, id DESC");
			$berita = Array();
			$n = 0;
			while (($row = mysql_fetch_array($pilihtabel)) && ($n <4))
			{
					$berita[$n]['id'] = $row['id'];
					$berita[$n]['gambar']= $row['gambar'];
					$berita[$n]['judul'] = $row['judul'];
					$berita[$n]['isi'] = $row['isi'];
					$berita[$n]['tanggal'] = $row['tanggal'];
					$n = $n + 1;
			}
			$c =0;
			$pilihtabel = mysql_query("SELECT * FROM apartemen WHERE available <> 0 AND booked <> 1");
			while ($row = mysql_fetch_array($pilihtabel))
			{
					$data[$c] = $row['no_kamar'];
					$c = $c + 1;
			}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="slider">
					<?php include_once ('slider.html')?>
			</div>
			<div class="container" style="height:900px">
				<div class="section indexnewssec">
					<div class="sectionheader indexnewssechead">
						<b>NEWS AND EVENTS</b><a href="news.html" class="sectionheaderlink">all news</a>
					</div>
					<?php
					
						$pilihtabel = mysql_query("SELECT * FROM berita");
						for ( $i = 0 ; $i < $n ; $i++)
						{
							echo "<div class='sectioncontent indexnewssec'>";
							echo "<div class='newshead'><a href='newscontent.php?id=" . $berita[$i]['id'] ."'>" . $berita[$i]['judul'] . "</a></div>";
							if ($berita[$i]['gambar'] != "")
							{
								echo "<img class='newsimg' src='../img/".$berita[$i]['gambar']."'/>";
							}
							echo "<div class='newscon'>". str_replace("\n","<br>",$berita[$i]['isi']) . "</div></div>";
						}
						
					?>
					
				</div>
				<div class="section booksec">
					<div class="sectionheader">
						BOOKING APARTMENT	
					</div>
					<div class="sectioncontent bookseccon">
						<div class="booksubsec">ROOM</div>
						<form method="post">
							<div class="booksubsec">
									<select name="kamar" <?php if (isset($_SESSION['login'])) echo "disabled";?>>
										<option selected="selected" value=''>-----Pilih Apartemen-----</option>
										<?php
											for ($i = 0 ; $i < $c; $i++)
												echo "<option value='" .  $data[$i]. "'>" .  $data[$i] . "</option>";
										?>
									</select>
							</div>
							<div class="booksubsec" style="text-align:center;">
								<input type="Submit" value="BOOK" name="booking" class="booksecbutton" <?php if (isset($_SESSION['login'])) echo "disabled";?>>
							</div>
						</form>
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