<?php
	require 'admin/config/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
	<link rel="icon" type="image/png" href="staticImages/logo_pc.png" />	
	<title>Sponsors</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="assets\style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--Ending Head of the Index Page-->
</head>

<body id="topOfPage">
	<!--Body Content-->
	<div class="container-fluid">

		<!--Header of Body-->
		<?php
			$home_select = "";
			$judge_select = "";
			$team_select = "";
			$recipe_select = "";
			$media_select = "";
			$gallery_select = "";
			$behind_select = "";
			$sponsor_select = "active disabled";
			$android_select = "";
			$about_select = "";
		
			include "include/other_pages_header.php";
		?>
	

		
		
		
		
		
		
		<!--Behind Scenes-->
		<div class="mobileView bg-3">
		<div class="container-fluid myContainer bg-3 text-center goTopAnim">

			<h1 style="font-weight: bold; background: black; color: white; border-radius: 5px; object-fit: none;">SPONSORS</h1><br>

			<div class="row">
			<?php
			$sponsor_query = "SELECT * FROM sponsor
								ORDER BY id DESC
								LIMIT 0,12";
			$connect_sponsor_query = mysqli_query($conn, $sponsor_query);
			$count_rows = mysqli_num_rows($connect_sponsor_query);
			if($count_rows > 0){
			while($get_each_row = mysqli_fetch_array($connect_sponsor_query)){
				$id_of_sponsor = $get_each_row['id'];
				$name_of_sponsor = $get_each_row['name'];
				$img_of_sponsor = $get_each_row['img'];
				$date_sponsor = $get_each_row['date'];
				$msg_of_sponsor = $get_each_row['msg'];
			?>						
				<div class="col-sm-6 col-md-4 col-lg-3">
						<img class="resizeWithThumbnail myimageshake" src="admin\dynamicImages\sponsors\<?php echo $img_of_sponsor; ?>" alt="sponsors">
						<h2><strong><?php echo $name_of_sponsor; ?></strong></h2>
						<p style="color: #1364D1;"><strong><?php echo $msg_of_sponsor; ?></strong></p><br><br><br><br>
				</div>
			<?php
				}
			}
			?>						
			</div>

			<!--Ending Behind Scenes Container-->
		</div>
		</div>
		
		<div class="container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 100px;">
			<button class="btn btn-danger btn-lg" style="float: right; margin-right: 20px;">Get More</button><br>
		</div>
	<!--Ending Body Content-->
	</div>

	<!--Footer-->
	<?php
		include "include/footer.php";
	?>
	
</body>
</html>