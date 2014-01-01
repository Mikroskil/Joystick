<html>
	<head>
		<title>SUVABEWE | Apartment</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<!--<script type="text/javascript" src="engine1/jquery_001.js"></script>
    	<script type="text/javascript" src="engine1/jquery_002.js"></script>
		<script type="text/javascript">
			$(function() {
        	$('.map').maphilight();
        
    		});
		</script> -->
		<?php
			require_once "connect.php";
			$pilihtabel = mysql_query("SELECT * FROM apartemen");
			$n = 0;
			while($row=mysql_fetch_array ($pilihtabel))
			{
				$n = $n + 1;
			}
		?>
		<script type="text/javascript">
			
			function tampil(n)
			{
				i = parseInt( parseInt(n)/100) - 1;
				j = (n % 100) - 1;
				document.getElementById("no_kamar").innerHTML = n ;
				document.getElementById("tipe_kamar").innerHTML = tipe[i][j];
				if (status[i][j] == 0)
					document.getElementById("status").innerHTML = "SOLD";
				else if (status[i][j] == 1)
					document.getElementById("status").innerHTML = "VACANT";
				else if (status[i][j] == 2)
					document.getElementById("status").innerHTML = "BOOKED";
				document.getElementById("harga").innerHTML = harga[i][j];
				document.getElementById("gambar").src = "../img/" + gmbr[i][j];
				document.getElementById("seedetail").href = "apartmentdetail.php?id=" + (n);
			}
			
			function setPage(i)
			{
				page = i;
				document.getElementById("room1").href="apartmentdetail.php?id=" + (page*100 + 1);
				document.getElementById("room1").onmouseover = new Function('tampil(page*100+1);');
				document.getElementById("room2").href="apartmentdetail.php?id=" + (page*100 + 2);
				document.getElementById("room2").onmouseover = new Function('tampil(page*100+2);'); 
				document.getElementById("room3").href="apartmentdetail.php?id=" + (page*100 + 3); 
				document.getElementById("room3").onmouseover = new Function('tampil(page*100+3);');
				document.getElementById("room4").href="apartmentdetail.php?id=" + (page*100 + 4); 
				document.getElementById("room4").onmouseover = new Function('tampil(page*100+4);');
				document.getElementById("room5").href="apartmentdetail.php?id=" + (page*100 + 5); 
				document.getElementById("room5").onmouseover = new Function('tampil(page*100+5);');
				document.getElementById("room6").href="apartmentdetail.php?id=" + (page*100 + 6); 
				document.getElementById("room6").onmouseover = new Function('tampil(page*100+6);');
				document.getElementById("room7").href="apartmentdetail.php?id=" + (page*100 + 7); 
				document.getElementById("room7").onmouseover = new Function('tampil(page*100+7);');
				document.getElementById("room8").href="apartmentdetail.php?id=" + (page*100 + 8); 
				document.getElementById("room8").onmouseover = new Function('tampil(page*100+8);');
			}
			
		
		</script>
	</head>
	<body onLoad="setPage(1)">
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<script type="text/javascript">
				var page = 1;
				<?php
					
					$x = (int)(($n-1)/8);
					$y = 8;
					
					echo "var tipe = new Array(".$x .");\n";
					echo "var status = new Array(".$x.");\n";
					echo "var harga = new Array(".$x.");\n";
					echo "var gmbr = new Array(" . $x. ");\n";
					$pilihtabel = mysql_query("SELECT * FROM apartemen");
					
					while($row=mysql_fetch_array ($pilihtabel))
					{
						if ($row['no_kamar'] != 100)
						{
							$i = (int)((int)$row['no_kamar'] / 100) - 1;
							$j = (int)((int)$row['no_kamar'] % 100) - 1 ;
							if ($j == 0)
							{
								echo "tipe[" . $i . "] = new Array(" . $y . ");";
								echo "status[" . $i . "] = new Array(" . $y . ");";
								echo "harga[" . $i . "] = new Array(" . $y . ");";
								echo "gmbr[" . $i . "] = new Array(" . $y . ");";
							}
							echo "tipe[" . $i . "][". $j ."] = \"" . $row['type_kamar']  . "\";" ;
							echo "status[" . $i. "][". $j ."] = " ;
							if ($row['available'] == 0)
								echo  "0;" ;
							else if ($row['booked'] == 1)
								echo "2;";
							else
								echo "1;";
							echo "harga[" . $i . "][". $j ."] = " . $row['harga']  . ";" ;
							echo "gmbr[" . $i . "][". $j ."] = \"" . $row['gambar_balkon']  . "\";\n" ;
						}
						
					}
					
				?>
			</script>
			<div >
					<!--<img src="../img/floorplanedit.png" usemap="#peta" class="map maphilighted" >
					<map name="peta">
						<area shape="poly" coords="85,85 , 320,85, 320,175 , 200,175 , 200,200, 85,200" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}" onCLick="pergi()">
						<area shape="poly" coords="320,30 , 500,30, 500,115 , 400,115 , 400,175, 320, 175" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}">
						<area shape="poly" coords="500, 30 , 675,30, 675,175 , 600,175 , 600, 115, 500, 115" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}">
						<area shape="poly" coords="675,85 , 920,85, 920, 200 , 810,200 , 810,175, 675, 175" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}">
						<area shape="poly" coords="920,200 , 920,315, 675,315 , 675,225 , 810,225, 810, 200" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}">
						<area shape="poly" coords="675,225 , 675,370, 500,370 , 500,275 , 600,275, 600, 225" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}">
						<area shape="poly" coords="500,275 , 500,370, 325,370 , 320,225 , 400,225, 400, 275" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}">
						<area shape="poly" coords="325,315 , 85,315, 85,200 , 200,200 , 200,225, 325, 225" href="test.php" data-maphilight="{&quot;stroke&quot;:false,&quot;fillColor&quot;:&quot;00FF00&quot;,&quot;fillOpacity&quot;:0.6,&quot;alwaysOn&quot;:true}">
					</map> -->
					<img src="../img/floorplanedit.png" usemap="#peta" >
					<map name="peta">
						<area id="room1" shape="poly" coords="85,85 , 320,85, 320,175 , 200,175 , 200,200, 85,200" href="apartmentdetail.php?id=101" >
						<area id="room2" shape="poly" coords="320,30 , 500,30, 500,115 , 400,115 , 400,175, 320, 175" href="apartmentdetail.php?id=102">
						<area id="room3" shape="poly" coords="500, 30 , 675,30, 675,175 , 600,175 , 600, 115, 500, 115" href="apartmentdetail.php?id=103">
						<area id="room4" shape="poly" coords="675,85 , 920,85, 920, 200 , 810,200 , 810,175, 675, 175" href="apartmentdetail.php?id=104">
						<area id="room5" shape="poly" coords="920,200 , 920,315, 675,315 , 675,225 , 810,225, 810, 200" href="apartmentdetail.php?id=105" >
						<area id="room6" shape="poly" coords="675,225 , 675,370, 500,370 , 500,275 , 600,275, 600, 225" href="apartmentdetail.php?id=106">
						<area id="room7" shape="poly" coords="500,275 , 500,370, 325,370 , 320,225 , 400,225, 400, 275" href="apartmentdetail.php?id=107">
						<area id="room8" shape="poly" coords="325,315 , 85,315, 85,200 , 200,200 , 200,225, 325, 225"href="apartmentdetail.php?id=108">
					</map>
					<div>
						FLOOR 
						<button class="apartmentfloor" onClick="setPage(1)">1</button>
						<button class="apartmentfloor" onClick="setPage(2)">2</button>
					</div>
	</div>
			
			<div class="container" style="height:700px">
				<div class="section apartmentsec">
					<div class="sectionheader bottomline">
						<b>APARTMENT DETAIL</b><a id="seedetail" class="sectionheaderlink">see more detail</a>
					</div>
					<div class="sectioncontent apartmentsecimg">
						<img align="middle" id="gambar"/>
					</div>
					<div class="sectioncontent apartmentseccon">
						<table>
							<tr>
								<td valign="top">Apartment Number</td>
								<td valign="top">:</td>
								<td valign="top" id="no_kamar"></td>
							</tr>
							<tr>
								<td valign="top">Apartment Type</td>
								<td valign="top">:</td>
								<td valign="top" id="tipe_kamar"></td>
							</tr>
							<tr>
								<td valign="top">Area</td>
								<td valign="top">:</td>
								<td valign="top">xx m<sup>2</sup></td>
							</tr>
							<tr>
								<td valign="top">Status</td>
								<td valign="top">:</td>
								<td valign="top" id="status"></td>
							</tr>
							<tr>
								<td valign="top">Price</td>
								<td valign="top">:</td>
								<td valign="top" id="harga"></td>
							</tr>
						</table>
					</div>
					
				</div>
				<div class="section sideapartmentsec">
					<div class="sectionheader bottomline">
						<b>SALE</b>
					</div>
					<?php
						$c = 0;
						$pilihtabel = mysql_query("SELECT * FROM apartemen");
						while($row=mysql_fetch_array ($pilihtabel))
						{
							if (($row['available'] == 1) & ($row['booked'] == 0) & ($c < 4) & ($row['no_kamar'] != 100))
							{
								$data['id'] = $row['no_kamar'];
								$data['tipe'] = $row['type_kamar'];
								$data['harga'] = $row['harga'];
								echo "
									<div class='sectioncontent sideapartmentseccon'>
										<div style='float:left'><img src='../img/" . $row['gambar_balkon'].  "' class='sideaparmentimg'/></div>
										<div class='sideaparmentcondet'>
											<table>
												<tr>
													<td valign='top'>Apartment Number</td>
													<td valign='top'>:</td>
													<td valign='top'>" . $row['no_kamar'] . "</td>
												</tr>
												<tr>
													<td valign='top'>Type</td>
													<td valign='top'>:</td>
													<td valign='top'>" . $row['type_kamar'] . "</td>
												</tr>
												<tr>
													<td valign='top'>Price</td>
													<td valign='top'>:</td>
													<td valign='top'>Rp. " . $row['harga'] .",00</td>
												</tr>
											</table>
											<a href='apartmentdetail.php?id=" . $row['no_kamar'] . "'>See Detail</a>
										</div>
									</div>
								";
								$c = $c + 1;
							}
						}
					?>
					
				</div>
			</div>
			<?php include_once ('footer.html');?>
		</div>
	</body>
</html>