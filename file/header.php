			<link rel="stylesheet" href="../css/templates.css" type="text/css" />
			<div class="header" id="header">
				<div class="headerlogo"></div>
				<div class="headernav">
					<ul style="margin-left:-40px">
						<a href="main.php"><li class="headernavmenu">Home</li></a>
						<a href="about_us.php"><li class="headernavmenu">About Us</li></a>
						<a href="apartment.php"><li class="headernavmenu">Apartement</li></a>
						<a href="news.php"><li class="headernavmenu">News And Events</li></a>
						<a href="contact_us.php"><li class="headernavmenu">Contact Us</li></a>
						
						<li class="headernavmenu">
							<?php
								session_start();
								if (isset($_SESSION['login'])){
									$nama = explode(' ', $_SESSION['nama']);
									echo "Welcome, " . $nama[0];
								}
								else
									echo "<a href='login.php' style='color:#FFFFFF'>Login</a>";
							
								if (isset($_SESSION['login']))
								{
									echo "<div class='headerlogin' id='headerlogin' style='height:40px'>";
									if ($_SESSION['no_kamar'] == "100")
									{
										echo "<a href='admin.php'>Admin Page</a>";
									}
									else
									{
										echo "<a href='userinfo.php?id=" . $_SESSION['no_kamar'] . " '>User Information</a>";
									}
									echo "<br><a href='logout.php'>Log Out</a>";
								}
								else
								{
									
									echo "<div class='headerlogin' id='headerlogin' style='height:160px'>
										<form action='auth.php' method='post'>
										<label>Apartment Number or E-mail</label> <br />
										<input type='text' class='hltextfocus' name='no_kamar'/><br />
										<br />
										<label>Password</label> <br />
										<input type='password' class='hltextfocus' name='password'/><br />
										<br />
										<input type='submit' class='signinbut' value='Sign-in' />
										</form>";
								}
							?>
								
							</div>
						</li>
					</ul>
				</div>
			</div>