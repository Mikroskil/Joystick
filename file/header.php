			<link rel="stylesheet" href="../css/templates.css" type="text/css" />
			<script type="text/javascript">
				function mAtas()
				{
					document.getElementById("headerlogin").className = "headerloginhover";
				}
				function mKeluar()
				{
					document.getElementById("headerlogin").className = "headerlogin";
				}
				function idpassfocus(x)
				{
					document.getElementById(x).className = "hltextfocus";
				}
				function idpasslostfocus(x)
				{
					document.getElementById(x).className = "";
				}
			</script>
			<div class="header" id="header">
				<div class="headerlogo"><img src=""></img></div>
				<div class="headernav">
					<ul style="margin-left:-40px">
						<a href="main.html"><li class="headernavmenu">Home</li></a>
						<a href="about_us.html"><li class="headernavmenu">About Us</li></a>
						<a href="apartment.html"><li class="headernavmenu">Apartement</li></a>
						<a href="news.html"><li class="headernavmenu">News And Events</li></a>
						<a href="contact_us.html"><li class="headernavmenu">Contact Us</li></a>
						<a href="contact_us.html">
							<li class="headernavmenu" onmouseover="mAtas()">
								Login
								<div class="headerlogin" id="headerlogin" onmouseout="mKeluar()">
									<form>
										<label>Apartment Number or E-mail</label> <br />
										<input type="text" id="user_id" onfocus="idpassfocus('user_id')" onblur="idpasslostfocus('user_id')" /><br />
										<br />
										<label>Password</label> <br />
										<input type="password" id="user_pass" onfocus="idpassfocus('user_pass')" onblur="idpasslostfocus('user_pass')"/><br />
										<br />
										<input type="button" class="" value="Sign-in" />
									</form>
								</div>
							</li>
						</a>
					</ul>
				</div>
			</div>