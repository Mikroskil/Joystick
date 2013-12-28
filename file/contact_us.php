<html>
	<head>
		<title>SUVABEWE | Contact Us</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<script type="text/javascript">
			function berhasil()
			{
				alert("Terima kasih")
			}
		</script>
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class = "container" style="height:730px">
				<div class="section contactsec">
					<div class="sectionheader bottomline">
						<b>CONTACT US</b><br />
					</div>
					<div class="sectioncontent ">
						<h2>SUVABEWE GROUP</h2><br>
						Jl. Thamrin No. 47<br />
						Medan 20212, Indonesia<br />
						Telp: +6261 4545 4545<br /><br>
						
						<form>
							<table>
								<tr>
									<td colspan="2">For Further Information</td>
								</tr>
								<tr>
  									<td>Name</td>
									<td>:</td>
									<td><input type="text" name="user"></td>
								</tr>
								<tr>
  									<td>Email</td>
									<td>:</td>
									<td><input type="text" name="email"></td>
								</tr>
								<tr>
  									<td>Subject</td>
									<td>:</td>
									<td><input type="text" name="subject"></td>
								</tr>
								<tr valign="top">
									<td>Message</td>
									<td>:</td>
									<td><textarea  name="pesan" cols="60" rows="20"></textarea></td>
								</tr>
								<tr>
									<td colspan="3" align="right"><input type="reset" value="Reset"> &nbsp;&nbsp;&nbsp;<input type = "submit" value = "Send" onClick="berhasil()">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<?php include_once ('footer.html');?>
		</div>
	</body>
</html>
