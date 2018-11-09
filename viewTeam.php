<?php
	require 'admin/config/db.php';
	@$get = $_GET['team'];
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
	<link rel="icon" type="image/png" href="staticImages/logo_pc.png" />
	<title>Teams</title>
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
			$team_select = "active disabled";
			$recipe_select = "";
			$media_select = "";
			$gallery_select = "";
			$behind_select = "";
			$sponsor_select = "";
			$android_select = "";
			$about_select = "";
		
			include "include/other_pages_header.php";
		?>


		<!--Teams Container-->
		<div class="mobileView bg-3">
		<div id="startAgain" class="container-fluid myContainer bg-3 goTopAnim">

			
			<?php
			$team_query = "SELECT * FROM teams
								WHERE id = $get";
			$connect_team_query = mysqli_query($conn, $team_query);
			$count_rows = mysqli_num_rows($connect_team_query);
			$show_or_not_team = 'hidden';
			if($count_rows > 0){
				while($get_each_row = mysqli_fetch_array($connect_team_query)){
					$id_of_team = $get_each_row['id'];
					$name_of_team = $get_each_row['name'];
					$img_of_team = $get_each_row['img'];
					$msg_of_team = $get_each_row['msg'];
					$date_team = $get_each_row['date'];
					$votes_of_team = $get_each_row['vote'];
			?>

			
			<h1 class="text-center" style="font-weight: bold; background: black; color: white; border-radius: 5px;"><?php echo $name_of_team; ?></h1><br>

			<div class="row">
				<div class="col-md-6">
					<div class="thumbnail">
						<img class="resizeWithIndividualView" src="admin\dynamicImages\teams\<?php echo $img_of_team; ?>" alt="teams">
					</div>
				</div>	

				<div class="col-md-6">
					<p style="float: right; font-weight: bold;">Date: <?php echo $date_team; ?></p><br><br>
					<p style="color: black; text-align: justify;"><strong><?php echo $msg_of_team; ?></strong></p>
				</div>	



				

			<?php
				}
			}
			?>
	


				
			</div>

			<!--Ending Judge Container-->
		</div>
		</div><br><br><br><br>


		
	<!--Ending Body Content-->
	</div>


	<!--Footer-->
	<?php
		include "include/footer.php";
	?>

</body>
</html>