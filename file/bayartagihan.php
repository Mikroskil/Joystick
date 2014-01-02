<html>
	<head>
		<title>SUVABEWE | User Information</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once "connect.php";
			$error="";
			if (isset($_POST['bayar']))
			{
				$id=$_GET['id'];
				$myquery = mysql_query("UPDATE apartemen SET tagihan_listrik = 0, tagihan_air = 0 WHERE no_kamar = '$id'");
				
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
			<div class="container confmargin" style="height:390px">
				<div class="section userinfo">
					<div class="sectionheader bottomline">
						<b>Change Password And Email</b>
					</div>
					<div class="sectioncontent usermainsec">
						<table>
							<form method="post">
							<tr><td colspan="3"><?php echo $error;?>&nbsp;</td></tr>
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
								<td width="150px">Tagihan Listrik</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['listrik'];?>" readonly></td>
							</tr>
							<tr>
								<td width="150px">Tagihan Air</td>
								<td width="50px">:</td>
								<td><input type="text" value="<?php echo $data['air'];?>" readonly></td>
							</tr>
							<tr>
								<td></td><td></td>
								<td><input type="submit" value="Bayar" name="bayar" />
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