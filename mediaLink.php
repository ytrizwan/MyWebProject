<?php
	require 'admin/config/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
	<link rel="icon" type="image/png" href="staticImages/logo_pc.png" />
	<title>Media</title>
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
			$media_select = "active disabled";
			$gallery_select = "";
			$behind_select = "";
			$sponsor_select = "";
			$android_select = "";
			$about_select = "";
		
			include "include/other_pages_header.php";
		?>

		<!--Media Container-->
		<div class="container-fluid myContainer bg-3 text-center goTopAnim">

			
<!--			<h1 style="font-weight: bold; background: black; color: white; border-radius: 5px; margin: 100px;">EPISODES</h1><br>-->
				<div class="mediaHeading" >
					<h1 style="font-weight: bold; background: black; color: white; border-radius: 5px; object-fit: none;">EPISODES</h1><br>
				</div>
					<?php
					$media_query = "SELECT * FROM media
										ORDER BY id DESC
										LIMIT 0,4";
					$connect_media_query = mysqli_query($conn, $media_query);
					$count_rows = mysqli_num_rows($connect_media_query);
					if($count_rows > 0){
						while($get_each_row = mysqli_fetch_array($connect_media_query)){
							$id_of_media = $get_each_row['id'];
							$name_of_media = $get_each_row['name'];
							$video_of_media = $get_each_row['video'];
							$msg_of_media = $get_each_row['msg'];
							$date_media = $get_each_row['date'];						
					?>			
			<div class="mediaLinkContainer bg-3">
					<div class="row">
						<center><h3 style="font-weight: bold; padding-top: 10px;"><?php echo $name_of_media; ?></h3></center><br>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-16by9"  style="border-radius: 5px;">
  								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="col-md-6">
							
							<h6 style="float:right">Date:<?php echo $date_media; ?></h6>
							<br><br>
							<p style="text-align: justify;"><strong><?php echo $msg_of_media; ?></strong></p>
						</div>
					</div><hr>
					</div>
					<?php
						}
					}
					?>	
			<!--Ending Judge Container-->
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