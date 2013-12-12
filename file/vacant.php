<html>
	<head>
		<title>SUVABEWE | Admin Page</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
	</head>
	<body>
		<div class="wrapper" id="wrapper">
		<?php include_once ('header.php');?>
		<?php include_once('sidemenu.php');?>
		  <div class="container confmargin" style="height:900px">
				<div class="section showapt">
					<div class="sectionheader bottomline">
						<b>Admin Page | Edit Vacant</b>
					</div>
					<div class="sectioncontent ">
					<?php
					require_once 'connect.php';
					$pilihtabel=mysql_query("SELECT * FROM apartemen");
						echo "
						<table>
						<tr align='center'>	
						<th width='100'>No Kamar</th>
						<th>Booked</th>
						<th>&nbsp;</th>
						</tr>";
			
						while($row = mysql_fetch_array($pilihtabel))
  						{
						  echo "<tr align='center'>";
						  echo "<form action='editvacant.php' method='get'><td><input type='text' size='1' name='no_kamar' readonly value='".$row['no_kamar']."'></td>";
						  if ($row['booked']=='0')
						  {
						  		echo "<td><input type='checkbox' checked='checked' disabled='disabled' value='1'></td>";
						  }
						  else
						  {
						  		echo "<td><input type='checkbox' disabled='disabled' value='0'></td>";
						  }

						  echo "<td><input type='submit' value='edit'></td>";
						  echo "</form></tr>";
						  
						  }
						echo "</table>";
						echo ""
?>
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
