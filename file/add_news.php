<html>
	<head>
		<title>SUVABEWE | Admin</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			$connect = mysql_connect("localhost","root","");
			mysql_select_db("suvabewe",$connect);
			$pilihtabel = mysql_query("SELECT * FROM berita");
			$error = "";
			if (isset($_POST["tambahberita"]))
			{
				if ($_POST["isiberita"] == "")
					$error = "Berita Belum Diisi";
				else
				{
					$judul = $_POST["judul"];
					$isi = $_POST["isiberita"];
					$tanggal = date("Y/m/d");
					if ($_POST["gambar"] != null)
					{
						$temptanggal = date("ymd");
						$filename = $_FILES["gambar"]["name"];
						$extensi = $_FILES["gambar"]["type"];
						$gambar = $temptanggal .$filename;
						$path = "../image/" . $gambar;
						move_uploaded_file($_FILES["gambar"]["tmp_name"], $path);
					}
					else
					{
						$gambar = "";
					}
					
					
					$masuk = mysql_query("INSERT INTO berita
							VALUES ('$gambar','$judul','$isi','$tanggal') " , $connect);
				}
			}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:600px">
				<?php include_once('sidemenu.php');?>
				<div class="section confmargin">
					<div class="sectionheader bottomline">ADMIN PAGE | ADD NEWS AND EVENTS</div>
					<div class="sectioncontent">
						<form method="post">
						<table width="900px">
							<tr>
								<td width="150px" valign="top" align="left">Image</td>
								<td width="700px"><input type="file" name="gambar"></td>
							</tr>
							<tr>
								<td width="150px" valign="top" align="left">Title</td>
								<td ><input type="text" maxlength="100" style="width:500px" name="judul"></td>
							</tr>
							<tr>
								<td width="150px" valign="top" align="left">Content</td>
								<td ><textarea cols="90" rows="20" wrap="soft" style="resize:none" name="isiberita"></textarea></td>
							</tr>
							<tr>
								<td colspan="2" align="center" valign="middle" height="50px">
										<input type="submit" value="Add News" name="tambahberita">
								</td>
							</tr>
							<?php 
								if ($error != "")
								{
									echo "<tr><td>",$error,"</td></tr>";
								}
							?>
						</table>
						</form>
					</div>
				</div>
			</div>
			<?php include_once ('footer.html'); ?>
		</div>
	</body>
</html>