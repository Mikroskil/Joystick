<html>
	<head>
		<title>SUVABEWE | Contact Us</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<?php
			require_once 'connect.php';
			
			$error="";
			
			if (isset($_POST['send']))
			{
				require_once 'validation.php';
				if ($_POST["nama"] == "")
					$error = "Fill your Name!";
				else if (!checkEmail($_POST["email"]))
            		$error = 'Email is invalid !';
				else if ($_POST["subject"] == "")
					$error = "Fill the Subject!";
				else if ($_POST["message"] == "")
					$error = "Fill your Message!";
				else
				{
					$nama=$_POST["nama"];
					$email=$_POST["email"];
					$subject=$_POST["subject"];
					$message=$_POST["message"];
					$pilihtabel = mysql_query("SELECT * FROM contact");
					$query=mysql_query("INSERT INTO contact VALUES
					(NULL, '$nama', '$email', '$subject', '$message')");
					if ($query) 
					{
                		$error= 'Thank you! We will reply it ASAP!';
            		}
					else
					{
						$error= 'Sorry, something must be go wrong.';
					}
				}
			}
		?>
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
						<form method="post" action="" enctype="multipart/form-data">
							<table>
								<tr>
									<td colspan="2">For Further Information</td>
								</tr>
								<tr rowspan="2">
									<td colspan="2"> <font color="#FF0000"><?php if ($error != "") echo $error; ?> </font></td>
								</tr>
								<tr>
  									<td>Name</td>
									<td>:</td>
									<td><input type="text" name="nama"></td>
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
									<td><textarea  name="message" cols="60" rows="20"></textarea></td>
								</tr>
								<tr>
									<td colspan="3" align="right"><input type="reset" value="Reset"> &nbsp;&nbsp;&nbsp;<input type = "submit" name="send" value = "Send">
									</td>
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
