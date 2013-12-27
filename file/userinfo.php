<html>
	<head>
		<title>SUVABEWE | User Information</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once "connect.php";
			
			if (isset($_POST['ubah_pass']))
			{
				$myquery = mysql_query("UPDATE apartemen SET password = " . $_POST['password'] . " WHERE no_kamar = " . $_POST['id']);
				
			}
			
			if (isset($_POST['ubah_email']))
			{
				$myquery = mysql_query("UPDATE apartemen SET email = " . $_POST['email'] . " WHERE no_kamar = " . $_POST['id']);
			}
			
			$pilihtabel = mysql_query("SELECT * FROM apartemen WHERE no_kamar = " . $_GET['id'] );
			
			while($row=mysql_fetch_array ($pilihtabel))
			{
				$data['id'] = $row['no_kamar'];
				$data['tipe'] = $row['type_kamar'];
				$data['nama'] = $row['nama_pemilik'];
				$data['pass'] = $row['password'];
				$data['email'] = $row['email'];
				$data['listrik'] = $row['tagihan_listrik'];
				$data['air'] = $row['tagihan_air'];
			}
			
			
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container confmargin" style="height:370px">
				<div class="section userinfo">
					<div class="sectionheader bottomline">
						<b>User Information</b>
					</div>
					<div class="sectioncontent usermainsec">
						<table>
							<form>
							<tr>
								<td>No Kamar</td>
								<td>:</td>
								<td><input type="text" value="<?php echo $data['id'];?>" name="id" readonly></td>
							</tr>
							<tr>
								<td>Type Kamar</td>
								<td>:</td>
								<td><input type="text" value="<?php echo $data['tipe'];?>" name="tipe" readonly></td>
							</tr>
							<tr>
								<td>Nama Pemilik</td>
								<td>:</td>
								<td><input type="text" value="<?php echo $data['nama'];?>" name="nama" readonly></td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" value="<?php echo $data['pass'];?>" name="password"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input type="text" value="<?php echo $data['email'];?>" name="email"></td>
							</tr>
							<tr>
								<td>Tagihan Listrik</td>
								<td>:</td>
								<td><input type="text" value="<?php echo $data['listrik'];?>" readonly></td>
							</tr>
							<tr>
								<td>Tagihan Air</td>
								<td>:</td>
								<td><input type="text" value="<?php echo $data['air'];?>" readonly></td>
							</tr>
							</form>
						</table>
					</div>
				</div>
				<div class="section usermenu">
					<div class="sectionheader bottomline">
						<b>User Menu</b>
					</div>
					<div>
						<div><a href="">Ubah Informasi</a></div>
						<div><a href="">Pembayaran Tagihan</a></div>
					</div>
				</div>
			</div>
			
			<?php 
				include_once ('footer.html'); 
			?>
		</div>
	</body>
</html>