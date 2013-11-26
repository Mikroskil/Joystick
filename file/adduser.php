<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			$connect=mysql_connect("localhost", "root", "");
			mysql_select_db("suvabewe", $connect);
			$pilihtabel=mysql_query("SELECT * FROM apartemen");
			while($row=mysql_fetch_array ($pilihtabel))
			{
				if(isset($_POST[$row['Add']]))
				{
					$temp=$row['nama_pemilik'];
					$temp2=$row['password'];
					$temp3=$row['email'];
					mysql_query("INSERT INTO apartemen WHERE nama_pemilik = '$temp' & password = '$temp2' & email = '$temp3'");
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
						<b>Admin Page | Add User</b>
					</div>
					<div class="sectioncontent ">
						<form method="post">
							<table>
								<tr>
									<td>No Kamar :</td>
									<td><select>
										<?php
										while($row=mysql_fetch_array ($pilihtabel))
										{
											echo "<option>".$row['no_kamar']."</option>";
										}
										?>
										</select></td>
								</tr>
								<tr>
									<td>Nama pemilik :</td>
									<td><input type="text" name="nama_pemilik"/></td>
								</tr>
								<tr>
									<td>Password :</td>
									<td><input type="password" name="password"/></td>
								</tr>
								<tr>
									<td>Email :</td>
									<td><input type="text" name="email"/></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="Add" value="Add" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" /></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
