<?php
	require 'admin/config/db.php';
	@$get = $_GET['judge'];
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
	<link rel="icon" type="image/png" href="staticImages/logo_pc.png" />
	<title>Judges</title>
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
			$judge_select = "active disabled";
			$team_select = "";
			$recipe_select = "";
			$media_select = "";
			$gallery_select = "";
			$behind_select = "";
			$sponsor_select = "";
			$android_select = "";
			$about_select = "";
		
			include "include/other_pages_header.php";
		?>


		<!--Judge Container-->
		<div class="mobileView bg-3">
		<div id="startAgain" class="container-fluid myContainer bg-3 goTopAnim">

			
			<?php
			$judge_query = "SELECT * FROM judges
									WHERE id = $get";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			if($count_rows > 0){
			while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$name_of_judge = $get_each_row['name'];
					$img_of_judge = $get_each_row['img'];
					$msg_of_judge = $get_each_row['msg'];
					$date_judge = $get_each_row['date'];

			?>

			
			<h1 class="text-center" style="font-weight: bold; background: black; color: white; border-radius: 5px;"><?php echo $name_of_judge; ?></h1><br>

			<div class="row">
				<div class="col-md-6">
					<div class="thumbnail">
						<img class="resizeWithIndividualView" src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judges">
					</div>
				</div>	

				<div class="col-md-6">
					<p style="float: right; font-weight: bold;">Date: <?php echo $date_judge; ?></p><br><br>
					<p style="color: black; text-align: justify;"><strong><?php echo $msg_of_judge; ?></strong></p>
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