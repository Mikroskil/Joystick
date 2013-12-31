<html>
	<head>
		<title>SUVABEWE | Apartment</title>
		<link rel="stylesheet" href="../css/templates.css" type="text/css" />
		<script type="text/javascript">
  function drawSquare () {
    var canvas = document.getElementById('draw-square');
    if (canvas.getContext) {
      var context = canvas.getContext('2d');
      
      context.fillStyle = "rgb(150,29,28)";
      context.moveTo(0,0);
	  context.lineTo(465,0);
	  context.lineTo(465,340);
	  context.lineTo(235,340);
	  context.lineTo(235,440);
	  context.lineTo(0,440);
	  context.closePath();
	   context.fill();
    } else {
      // put code for browsers that don't support canvas here
    }
  } </script> 
	</head>
	<body onLoad="drawSquare()">
		<div class="wrapper" id="wrapper">
			<?php include_once ('header.php');?>
			<div style="background-image:url('../img/floorplanedit.png');widht:1000; height:400;">
					<a href="test.php"><canvas id="draw-square" width="500" height="500" style="z-index:100; position:relative;"></canvas></a>
	</div>
			</div>
			<div class="container" style="height:700px">
				<div class="section apartmentsec">
					<div class="sectionheader bottomline">
						<b>APARTMENT DETAIL</b><a href="apartmentdetail.php" class="sectionheaderlink">see more detail</a>
					</div>
					<div class="sectioncontent apartmentsecimg">
						<img align="middle"/>
					</div>
					<div class="sectioncontent apartmentseccon">
						<table>
							<tr>
								<td valign="top">Apartment Number</td>
								<td valign="top">:</td>
								<td valign="top">0xx</td>
							</tr>
							<tr>
								<td valign="top">Apartment Type</td>
								<td valign="top">:</td>
								<td valign="top">C</td>
							</tr>
							<tr>
								<td valign="top">Area</td>
								<td valign="top">:</td>
								<td valign="top">xx m<sup>2</sup></td>
							</tr>
							<tr>
								<td valign="top">Status</td>
								<td valign="top">:</td>
								<td valign="top">Sold/Avalaible For Rent/Vacant</td>
							</tr>
							<tr>
								<td valign="top">Specification</td>
								<td valign="top">:</td>
								<td valign="top">3 bedroom<br />
									1 living room<br />
									bla3
								</td>
							</tr>
							<tr>
								<td valign="top">Price</td>
								<td valign="top">:</td>
								<td valign="top">Rp. xxx.xxx.xxx,00</td>
							</tr>
						</table>
					</div>
					
				</div>
				<div class="section saleapartmentsec">
					<div class="sectionheader bottomline">
						<b>SALE</b>
					</div>
					<div class="sectioncontent saleapartmentseccon">
						<div style="float:left"><img class="saleaparmentimg"/></div>
						<div class="saleaparmentcondet">
							<table>
								<tr>
									<td valign="top">Type</td>
									<td valign="top">:</td>
									<td valign="top">C</td>
								</tr>
								<tr>
									<td valign="top">Price</td>
									<td valign="top">:</td>
									<td valign="top">Rp. xxx.xxx.xxx,00</td>
								</tr>
							</table>
							See Detail
						</div>
					</div>
					<div class="sectioncontent saleapartmentseccon">
						<div style="float:left"><img class="saleaparmentimg"/></div>
						<div class="saleaparmentcondet">
							<table>
								<tr>
									<td valign="top">Type</td>
									<td valign="top">:</td>
									<td valign="top">C</td>
								</tr>
								<tr>
									<td valign="top">Price</td>
									<td valign="top">:</td>
									<td valign="top">Rp. xxx.xxx.xxx,00</td>
								</tr>
							</table>
							See Detail
						</div>
					</div>
					<div class="sectioncontent saleapartmentseccon">
						<div style="float:left"><img class="saleaparmentimg"/></div>
						<div class="saleaparmentcondet">
							<table>
								<tr>
									<td valign="top">Type</td>
									<td valign="top">:</td>
									<td valign="top">C</td>
								</tr>
								<tr>
									<td valign="top">Price</td>
									<td valign="top">:</td>
									<td valign="top">Rp. xxx.xxx.xxx,00</td>
								</tr>
							</table>
							See Detail
						</div>
					</div>
					<div class="sectioncontent saleapartmentseccon">
						<div style="float:left"><img class="saleaparmentimg"/></div>
						<div class="saleaparmentcondet">
							<table>
								<tr>
									<td valign="top">Type</td>
									<td valign="top">:</td>
									<td valign="top">C</td>
								</tr>
								<tr>
									<td valign="top">Price</td>
									<td valign="top">:</td>
									<td valign="top">Rp. xxx.xxx.xxx,00</td>
								</tr>
							</table>
							See Detail
						</div>
					</div>
				</div>
			</div>
			<?php include_once ('footer.html');?>
		</div>
	</body>
</html>