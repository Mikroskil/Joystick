<html>
	<head>
		<title>SUVABEWE | User Information</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once "connect.php";
			
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
								<td width="150px">No Kamar</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['id'];?>" readonly name="id"></td>
							</tr>
							<tr>
								<td width="150px">Type Kamar</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['tipe'];?>" readonly name="tipe"></td>
							</tr>
							<tr>
								<td width="150px">Nama Pemilik</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['nama'];?>" readonly name="nama"></td>
							</tr>
							<tr>
								<td width="150px">Password</td>
								<td width="50px">:</td>
								<td><input type="password" value="<?php echo $data['pass'];?>" readonly name="password"></td>
							</tr>
							<tr>
								<td width="150px">Email</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['email'];?>" readonly name="email"></td>
							</tr>
							<tr>
								<td width="150px">Tagihan Listrik</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['listrik'];?>" readonly></td>
							</tr>
							<tr>
								<td width="150px">Tagihan Air</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['air'];?>" readonly></td>
							</tr>
							</form>
						</table>
					</div>
				</div>
				<?php require_once "usersidemenu.php";?>
			</div>
			
			<?php 
				include_once ('footer.html'); 
			?>
		</div>
	</body>
</html>