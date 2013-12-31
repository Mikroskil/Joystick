<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
		require_once 'connect.php';
		$error="";
		$pilihtabel=mysql_query("SELECT * FROM contact");
		while ($row = mysql_fetch_array($pilihtabel))
			{
				if (isset($_POST[$row['id']]))
				{
					$temp = $row['id'];
					mysql_query("DELETE FROM contact WHERE id='$temp'");
					$error="Data berhasil dihapus!";
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
						<b>Admin Page | Reply Contact Us</b>
					</div>
					
					<div class="sectioncontent ">
						<table>
							<?php echo "<font color='red'>" . $error . "</font>";?>
							<form method="post">
								<tr>
									<td width="80px"> ID </td>
									<td width="200px"> Nama <br> (Email) </td>
									<td width="170px"> Subject </td>
									<td width="300px"> Message </td>
									<td width="100px" align="center"> Action </td>
									<td></td>
								</tr>
								
								<?php
									require_once 'connect.php';
									$pilihtabel=mysql_query("SELECT * FROM contact");
									$i=0;
									while(($row=mysql_fetch_array($pilihtabel)))
									{
										$temp=$row['id'];
										$i = $i + 1;
										echo 
										"
										<tr> 
										<td> " . $row['id'] . "</td>
										<td> " . $row['nama'] . "<br> (" . $row['email'] . ")</td>
										<td> " . $row['subject'] . "</td>
										<td> " . $row['message'] . "</td>
										<td align='center'><a href='mailto:" . $row['email'] . "?Subject=[REPLY]%20" . $row['subject'] . "' target='_top'><input type='button' value='Reply' name='reply' /></a><br />
										<input type='submit' value='Delete' name='" . $row['id'] . "' /> 										
										";
									}
								?>
								</form>
						</table>
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
</html>
