<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
		require_once 'connect.php';
		$no_kamar = $_GET['target'];
		$pilihtabel=mysql_query("SELECT * FROM berita WHERE id='" . $id. "'");
		
		$data=Array();
		
		$row = mysql_fetch_array($pilihtabel);
		$data['gambar'] = $row['gambar'];
		$path = "../image/" . $data["gambar"];
		$data['id'] = $row['id'];
		$data['judul']=$row['judul'];
		$data['isi']=$row['isi'];
		$data['tanggal']=$row['tanggal'];
		$data['path']=$path;
		
		date_default_timezone_set('Asia/Jakarta');
		$cek=true;
		$gambar=$_POST['gambar'];
		$id=$_POST['id'];
		$judul=$_POST['judul'];
		$isi=$_POST['isi'];
		$tanggal = date("Y-m-d");

		
		$error="";
		if(isset($_POST["update"]))
		{
				if($_POST[judul==""])
					$error="Judul Belum Diisi";
				else if($_POST[isi==""])
					$error="Berita tidak boleh Kosong";
				else
				{
					if ($_FILES["gambar"]["error"] > 0)
					{
						$gambar = $data["gambar"];
						$cek = true;
					}
					else
					{
						$filename = $_FILES["gambar"]["name"];
						$extensi = $_FILES["gambar"]["type"];
						if (substr_count($extensi, 'image') > 0)
						{
							$lokasi = "../image/" . $data["gambar"];
							unlink($lokasi);
								
							$path = "../image/" . $id . $filename;
							move_uploaded_file($_FILES["gambar"]["tmp_name"], $path);
							
							$gambar =  $id . $filename;
							$cek = true;
						}
						else
						{
							$error = "Tidak mensupport extension file yang diupload";
							$cek = false;
						}
					}
					if ($cek)
					$edit=mysql_query("UPDATE berita
					SET judul='$judul', isi='$isi', gambar='$gambar'
					WHERE id='$id'
					");					
					if($edit==1)
						$error="Update Berhasil!";
					else
						$error = "Data tidak ditemukan!";
				}			
		}
		
		
		$id = $_GET['target'];
		$pilihtabel=mysql_query("SELECT * FROM berita WHERE id='" . $id. "'");
		
		$data=Array();
		
		$row = mysql_fetch_array($pilihtabel);
		$data['id'] = $row['id'];
		$data['judul'] = $row['judul'];
		$data['gambar'] = $row['gambar'];
		$data['isi'] = $row['isi'];
		$data['tanggal'] = $row['tanggal'];		
		
		mysql_close();
	?>
	<title>SUVABEWE | Edit Berita " . <?php echo $_GET["judul"] ?> . "</title>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:600px">
				<?php include_once('sidemenu.php');?>
				<div class="section confmargin">
					<div class="sectionheader bottomline">Admin Page | Add News And Events</div>
					<div class="sectioncontent">
						<form method="post">
						<table width="900px">
							<tr>
								<td width="150px" align="left" valign="top"> ID </td>
								<td width="100px"> <input type="text" maxlength="4" name="id" value="<?php echo $data['id'];?>" readonly></td>
							</tr>
							<tr>
								<td width="150px" valign="top" align="left">Image</td>
								<td width="700px"><img src="<?php echo $data["path"]?>" width="100" height="100"><br>
									<input type="file" name="gambar"/></td>
							</tr>
							<tr>
								<td width="150px" valign="top" align="left">Title</td>
								<td ><input type="text" maxlength="100" style="width:500px" name="judul" value="<?php echo $data['judul'];?>"></td>
							</tr>
							<tr>
								<td width="150px" valign="top" align="left">Content</td>
								<td ><textarea cols="90" rows="20" wrap="soft" style="resize:none" name="isi" value="<?php echo $data['isi'];?>"></textarea></td>
							</tr>
							<tr>
								<td colspan="2" align="center" valign="middle" height="50px">
										<input type="submit" value="Update News" name="update">
								</td>
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
