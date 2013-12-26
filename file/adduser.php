<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			$errorMessage='';
			require_once 'connect.php';
			
    		if (isset($_POST['Add'])) 
			{
				require_once 'validation.php';
        		if (!checkPassword($_POST['password']))
            		$errorMessage = 'Password must contain at least 5 characters !';
        		else if (!checkEmail($_POST['email']))
            		$errorMessage = 'Email is invalid !';
				else 
				{
					$pilihtabel=mysql_query("SELECT * FROM apartemen");
					while ($row=mysql_fetch_array ($pilihtabel))
					{
						if ($row['no_kamar'] == $_POST['no_kamar'])
						{
							$temp=$row['no_kamar'];
							$query=mysql_query("UPDATE apartemen SET nama_pemilik='$_POST[nama_pemilik]', password='$_POST[password]', email='$_POST[email]' , available='0', booked='0' , booked_fee='0', booked_date='0' WHERE no_kamar='$temp'");	
							
						}
					}
					
									
            		if ($query) 
					{
                		$errorMessage = 'Berhasil Ditambahkan';
                		header('location:admin.php');
            		}
					else
					{
						$errorMessage = 'Penambahan gagal';
					}
				}
			}
		?>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<?php include_once('sidemenu.php');?>
			<div class="container confmargin" style="height:900px">
				<div class="section addusersec">
					<div class="sectionheader bottomline">
						<b>Admin Page | Add User</b>
					</div>
					<div class="sectioncontent ">
						<?php if ($errorMessage != "") echo $errorMessage; ?>
						<form method="post">
							<table vspace="5">
								<tr >
									<td>No Kamar </td>
									<td><select name="no_kamar">
										<option>----Pilih No Kamar----</option>
										<?php
										$pilihtabel=mysql_query("SELECT * FROM apartemen");
										while($row=mysql_fetch_array($pilihtabel))
										{
											if (($row['available'] == 1) |($row['booked'] == 1))
												echo "<option>".$row['no_kamar']."</option>";
										}
										?>
										</select></td>
								</tr>
								<tr>
									<td>Nama pemilik </td>
									<td><input type="text" name="nama_pemilik"/></td>
								</tr>
								<tr>
									<td>Password </td>
									<td><input type="password" name="password"/></td>
								</tr>
								<tr>
									<td>Email </td>
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
			<?php 
				mysql_close();
				include_once ('footer.html'); 
			?>
		</div>
	</body>
</html>
