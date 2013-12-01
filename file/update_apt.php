<html>
	<head>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
		require_once 'connect.php';
		$no_kamar = $_GET['target'];
		$pilihtabel=mysql_query("SELECT * FROM apartemen WHERE no_kamar='" . $no_kamar . "'");
		
		$data=Array();
		
		$row = mysql_fetch_array($pilihtabel);
		$data['no_kamar'] = $row['no_kamar'];
		$data['nama_pemilik'] = $row['nama_pemilik'];
		$data['email'] = $row['email'];
		$data['password'] = $row['password'];
		$data['tagihan_listrik'] = $row['tagihan_listrik'];
		$data['tagihan_air'] = $row['tagihan_listrik'];
		
		$cek=true;
		
		
		$error="";
		if(isset($_POST["edit"]))
		{
				if(!preg_match("/^[a-zA-Z0-9]{4,12}+$/",$_POST["password"]))
					$error="Password salah atau kurang dari 4 karakter.";
				else if(!preg_match("/^[0-9]+$/",$_POST["tagihan_listrik"]))
					$error="Tagihan Listrik salah isi!";
				else if(!preg_match("/^[0-9]+$/",$_POST["tagihan_air"]))
					$error="Tagihan Air salah isi!";
				else
				{
					$password=$_POST['password'];
					$tagihan_listrik=$_POST['tagihan_listrik'];
					$tagihan_air=$_POST['tagihan_air'];
					if ($cek)
					$edit=mysql_query("UPDATE apartemen
					SET password='$password', tagihan_listrik='$tagihan_listrik', tagihan_air='$tagihan_air'
					WHERE no_kamar='$no_kamar'
					");				
						
					if($edit==1)
						$error="Update Berhasil!";
					else
						$error = "Data tidak ditemukan!";
				}
		}
		
		
		$no_kamar = $_GET['target'];
		$pilihtabel=mysql_query("SELECT * FROM apartemen WHERE no_kamar='" . $no_kamar . "'");
		
		$data=Array();
		
		$row = mysql_fetch_array($pilihtabel);
		$data['no_kamar'] = $row['no_kamar'];
		$data['nama_pemilik'] = $row['nama_pemilik'];
		$data['email'] = $row['email'];
		$data['password'] = $row['password'];
		$data['tagihan_listrik'] = $row['tagihan_listrik'];
		$data['tagihan_air'] = $row['tagihan_air'];
		
		
		mysql_close();
	?>
	<title>SUVABEWE | Edit Data Apt. Unit <?php echo $_GET["target"] ?> </title>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<?php include_once('sidemenu.php');?>
			<div class="container confmargin" style="height:900px">
				
				<div class="section aptsec">
					<div class="sectionheader bottomline">
						<b>Admin Page | Edit Data Apartemen Berpenghuni </b>
					</div>
					<div class="sectioncontent ">
					<table>
						<form method="post">
						<tr>
							<td width="300"> <label class="aptspace"> No. Unit : </label></td>
							<td> <input type="text" name="no_kamar" value="<?php echo $data["no_kamar"]?>"readonly> </td>
						</tr>
						<tr >
							<td> <label class="aptspace"> Nama : </label></td>
							<td> <input type="text" name="nama" value="<?php echo $data["nama_pemilik"]?>"readonly></td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Email : </label></td>
							<td> <input type="text" name="email" value="<?php echo $data["email"]?>" readonly/></td>
						</tr>
						<tr> 
							<td> <label class="aptspace"> Password : </label></td>
							<td> <input type="text" name="password" value="<?php echo $data["password"]?>" /></td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Tagihan Listik : </label></td>
							<td> <input type="text" name="tagihan_listrik" value="<?php echo $data["tagihan_listrik"]?>" /></td>
						</tr>
						<tr>
							<td> <label class="aptspace"> Tagihan Air: </label></td>
							<td> <input type="text" name="tagihan_air" value="<?php echo $data["tagihan_air"]?>"/></td>
						</tr>
						<tr>
							<td>&nbsp; </td>
							<td rowspan="2"><input type="submit" name="edit" value="Edit"/></td>
						</tr>
						<?php echo $error; ?>
						</form>							
					</table>	
					</div>
				</div>
			</div>
			<?php include_once ('footer.html');?>
		</div>
	</body>
</html>
</html>
