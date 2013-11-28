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
						<b>Admin Page | Show Data Apartment</b>
					</div>
					<div class="sectioncontent ">
						<table>
							<form method="post">
								<tr>
									<td width="80px"> No Kamar </td>
									<td width="100px"> Tipe </td>
									<td width="150px"> Harga </td>
									<td width="150px"> Booking Fee </td>
									<td width="50px"> Status </td>
									<td width="120px">Pemilik</td>
									<td width="150px"> Spef </td>
									<td width="100px"> Available </td>
								</tr>
								
								<?php
									$connect=mysql_connect("localhost", "root", "");
									mysql_select_db("suvabewe",$connect);
									$pilihtabel=mysql_query("SELECT * FROM apartemen");
									
									
									$i=0;
									while(($row=mysql_fetch_array($pilihtabel)))
									{
										$temp1=$row['available'];
										$temp2=$row['booked'];
										$i = $i + 1;
										
										echo 
										"<tr> 
										<td> " . $row['no_kamar'] . "</td>
										<td> " . $row['type_kamar'] . "</td>
										<td align='right'> " . $row['harga'] . "</td>
										<td align='right'> " . $row['booked_fee'] . "</td>
										<td align='center'>
										";  
										
										if($temp1==0)
											echo "SOLD";
										else 
											{
											if($temp2==0)
												echo "VACANT";
											else 
												echo "BOOKED";
											}
										echo	
										"
										</td>
										<td>" . $row['nama_pemilik'] . "</td>
										<td>" . $row['spec_kamar'] . "</td>
										<td>" ;
										if($temp2==0)
											echo "NO";
										else 
											echo "YES";
										echo "</td>
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
