<html>
	<head>
		<title>SUVABEWE | Home</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once 'connect.php';
			
			$tanggal = date("Y-m-d");
			$id = $_GET['id'];
			$pilihtabel = mysql_query("SELECT * FROM apartemen WHERE no_kamar='$id'");
			$row=mysql_fetch_array ($pilihtabel);
			$cek = true;
			if (($row['booked'] == 1) | ($row['available'] == 0))
				$cek = false;
			else
			{
				$kode = $id . "-" . strtoupper(date("D")) . "-" . time();
				if (mysql_query("UPDATE apartemen SET booked='1', booked_date='$tanggal', booked_code='$kode' WHERE no_kamar='$id'"))
					$cek = true;
				else
					$cek = false;
			}
			
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php'); ?>
			<div class="container" style="height:300px">
				<div class="section bookvalidsec">
					<div class="sectionheader bottomline">
						<?php
							if ($cek)
								echo "BOOKING BERHASIL";
							else
								echo "BOOKING GAGAL";
						?>
					</div>
					<div class="sectioncontent">
						<?php
							if ($cek)
							{
								echo "
									<table border='1' width='100%'>
										<tr>
											<td>No Apartemen</td>
											<td colspan='3'> " . $row['no_kamar'] . "</td>
										</tr>
										<tr>
											<td>Harga</td>
											<td colspan='3'> " . $row['harga'] . "</td>
										</tr>
										<tr>
											<td>Tanggal Booking</td>
											<td> " . $tanggal . "</td>
											<td>Booked  Fee</td>
											<td> " . $row['booked_fee'] . "</td>
										</tr>
										<tr>
											<td colspan='4'>Booked Code</td>
										</tr>
										<tr>
											<td colspan='4'><b>". $kode . "</b></td>
										</tr>
									</table>
									Catatan : <font color='#FF0000'>Jika tidak ada konfirmasi ke kantor pemasaran dalam jangka waktu 15 hari setelah dilakukan booking, maka booking pada kamar dihilangkan</font>
								";
							}
							else
								echo "Apartemen yang Anda pilih sudah terjual atau sudah dibooking.";
						?>
						<br><br><br><a href="main.php">Kembali Ke Halaman Utama</a>
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