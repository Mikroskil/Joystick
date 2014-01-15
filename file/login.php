<html>
	<head>
		<title>SUVABEWE | Login</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
	</head>
	<body>
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div class="container" style="height:330px">
				<div class="section loginseccon">
					<div class="sectionheader bottomline">
						<b>LOGIN</b>
					</div>
					<div class="sectioncontent loginsec">
					<p>&nbsp;<?php if (isset($_GET['error']) ) echo $_GET['error']; ?></p>
					<table>
						<form action="auth.php" method="post">
							<tr>
								<td><label class="logspace"> Apartment Number or Email : </label></td>
								<td><input type="text" name="no_kamar"><br></td>
							</tr>
							<tr>
								<td><label class="logspace"> Password : </label></td>
								<td><input type="password" name="password"><br></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" class="signinbut" value="Sign In"></td>
							</tr>
							<tr> <td>&nbsp;</td></tr>
							<tr>
								<td>&nbsp; </td>
								<td><span> Forget Password? </span></td>
							</tr>
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
