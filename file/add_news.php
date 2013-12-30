		<?php
			require_once 'connect.php';
			
			$error = "";
			if (isset($_POST["tambahberita"]))
			{
				if ($_POST["judul"] == "")
					$error = "Judul Belum Diisi";
				else if ($_POST["isiberita"] == "")
					$error = "Berita Belum Diisi";
				else
				{
					date_default_timezone_set('Asia/Jakarta');
					$judul = $_POST["judul"];
					
					$isi = $_POST["isiberita"];
					$tanggal = date("Y-m-d");
					$name       = $_FILES['file']['name'];  
					$temp_name  = $_FILES['file']['tmp_name'];  
					if(isset($name)){
						if(!empty($name)){      
							$imageName = time().'-'.$_FILES["file"]["name"];
							$path = pathinfo(__file__);
							
							$img='..\img\\'.$imageName    ;
							if(move_uploaded_file($temp_name, $img)){
								echo 'uploaded';
							}
						} }  else {
							echo 'uploaded failed';
						} 
					$pilihtabel = mysql_query("SELECT * FROM berita");					
					$query=mysql_query("INSERT INTO berita VALUES 						
					(NULL, '$imageName','$judul','$isi','$tanggal')");
					
				}
			}
		?>
<html>
	<head>
		<title>SUVABEWE | Admin</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:600px">
				<?php include_once('sidemenu.php');?>
				<div class="section confmargin">
					<div class="sectionheader bottomline">Admin Page | Add News And Events</div>
					<div class="sectioncontent">
						<form method="post" action="" enctype="multipart/form-data">
						<table width="900px">
							<tr>
								<td width="150px" valign="top" align="left">Image</td>
								<td width="700px"><input type="file" name="file" id="file"/></td>
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
										<form method="post"><input type="submit" value="Add News" name="tambahberita"></form>
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
			<?php 
				mysql_close();
				include_once ('footer.html'); 
			?>
		</div>
	</body>
</html>