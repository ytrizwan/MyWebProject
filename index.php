<!DOCTYPE html>
<html>
	<head>
		<!--Head of the Index Page-->
		<title>Pressure Cooker</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="assets\style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
			  				   integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
			  				   crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--Ending Head of the Index Page-->
	</head>
	
	<body>
		<!--Top Navigation Bar-->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header mouseOnlogo">
						<a href="https://cit.edu.au/">
							<h2 class="citLogo">
								<span class="ciLogoPressureLogo">Ci</span><span class="tLogo">T</span>
							</h2>

							<h4 class="pressureCookerLogo">
								<span class="ciLogoPressureLogo">PRESSURE</span><span class="cookerLogo">COOKER</span>
							</h4>
						</a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" style="margin-top: 25px;"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
					</ul>
				</div>
				<!--Ending Top Navigation Bar-->
			</nav>
			
		<!--Main Body Container Which Contains All the Content of Page between NavBar and Footer-->
		<div class="container-fluid">
			
		<!--Carousel (Showing sliding pictures)-->
			<div class="row" style="margin-top: 110px;">
				<div class="container-fluid">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="admin\dynamicImages\Maria Koulouris_Pressure Cooker-13.jpg" alt="Los Angeles" style="width:100%; height: 1000px;">
							</div>

							<div class="item">
								<img src="admin\dynamicImages\IP_ChrisFernance_PC_2.jpg" alt="Chicago" style="width:100%; height: 1000px;">
							</div>

							<div class="item">
								<img src="admin\dynamicImages\IP_ChrisFernance_PC_7.jpg" alt="New york" style="width:100%; height: 1000px;">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
						</a>

						<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			<!--Ending of Carousel-->
			</div>
		
		
			
			
			
			
			
			
			
			
			
			
			
			
		</div>
		
		<!--Footer At the End of Page-->
		<div class="row footerBoarder">
			<div class="col-md-6">
				<div class="col-md-1">
					<i class="fab fa-android fa-2x" style="color: greenyellow; margin: 5px;"></i>
				</div>
				
				<div class="col-md-11 footerStyleLeft">
					<a href="#">Android App</a>
				</div>
			</div>
			
			<div class="col-md-6 footerStyleRight">
				<a href="contactUs.php"><span style="margin: 20px">Contact Us</span></a><br>
				
				<a href="about.php"><span style="margin: 20px">About Us</span></a>
			</div>
		<!--Ending of Footer-->
		</div>
	</body>
</html>