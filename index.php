<?php
	require 'admin/config/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
	<link rel="icon" type="image/png" href="staticImages/logo_pc.png" />
	<title>Pressure Cooker</title>
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
			$home_select = "active disabled";
			$judge_select = "";
			$team_select = "";
			$recipe_select = "";
			$media_select = "";
			$gallery_select = "";
		
			include "include/home_page_header.php";
		?>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<?php
			$carousel_query = "SELECT * FROM carousel
								ORDER BY id DESC";
			$connect_carousel_query = mysqli_query($conn, $carousel_query);
			$count_rows = mysqli_num_rows($connect_carousel_query);
			$show_or_not_carousel = 'hidden';
			if($count_rows > 0){
				$show_or_not_carousel = '';
			?>
		<!--Carousel (Showing sliding pictures)-->
			<div id="myCarousel" class="<?php echo $show_or_not_judges; ?> carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php
					while($get_each_row = mysqli_fetch_array($connect_carousel_query)){		
					$img1_of_carousel = $get_each_row['img1'];
					$img2_of_carousel = $get_each_row['img2'];
					$img3_of_carousel = $get_each_row['img3'];
					$date_carousel = $get_each_row['date'];
					?>
					<div class="item active">
						<img class="resizeCarouselMainPage" src="admin\dynamicImages\carousel\<?php echo $img1_of_carousel; ?>">
					</div>

					<div class="item">
						<img class="resizeCarouselMainPage" src="admin\dynamicImages\carousel\<?php echo $img2_of_carousel; ?>">
					</div>
					<div class="item">
						<img class="resizeCarouselMainPage" src="admin\dynamicImages\carousel\<?php echo $img3_of_carousel; ?>">
					</div>
			<?php
					}
			}
			?>
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
			<!--Ending of Carousel-->
			</div>
			

		
		
		
		
		
		
		
		
			<?php
			$judge_query = "SELECT * FROM judges
								ORDER BY id DESC
								LIMIT 0,3";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			$show_or_not_judges = 'hidden';
			if($count_rows > 0){
				$show_or_not_judges = '';
			?>		
		<!--Judge Container-->
		<div class="mobileView bg-3">
		<div id="judgesSection" class="<?php echo $show_or_not_judges; ?> container-fluid myContainer bg-3 text-center goTopAnim">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>

			<h2>Our Judges</h2><br>
			<h4>We are here to Judge</h4>

			<div class="row text-center slideanim">
				
			<?php
				while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$name_of_judge = $get_each_row['name'];
					$img_of_judge = $get_each_row['img'];
					$msg_of_judge = $get_each_row['msg'];
					$date_judge = $get_each_row['date'];
			?>
				<div class="col-sm-6 col-md-6 col-lg-4 nojudgedecoration zoomit">
					<a href="viewJudge.php?judge=<?php echo $id_of_judge; ?>">
						<img class="resizeJudgeMainPage"  src="admin\dynamicImages\judges\<?php echo $img_of_judge; ?>" alt="judge">
						<h3><strong><?php echo $name_of_judge; ?></strong></h3>
					</a>
				</div>
			<?php
				}
			}
			?>
			</div>
		</div>
		</div>
		<div class="<?php echo $show_or_not_judges; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="judgesLink.php" class="btn btn-danger btn-lg" style="float: right; margin-right: 20px;">All Judges</a><br>
			<!--Ending Judge Container-->
		</div>
		
		

		
		
		
		
		
		

			<?php
			$team_query = "SELECT * FROM teams
								ORDER BY id DESC
								LIMIT 0,4";
			$connect_team_query = mysqli_query($conn, $team_query);
			$count_rows = mysqli_num_rows($connect_team_query);
			$show_or_not_team = 'hidden';
			if($count_rows > 0){
				$show_or_not_team = '';
			?>
		<!--Team Container-->
		<div class="mobileView bg-1">
		<div id="teamSection" class="<?php echo $show_or_not_team; ?> container-fluid myContainer bg-1 text-center goTopAnim">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
		
			<h2>Our Teams</h2><br>
			<h4>We are here to Cook</h4>
			
			<div class="row  slideanim">
			<?php
			while($get_each_row = mysqli_fetch_array($connect_team_query)){
				$id_of_team = $get_each_row['id'];
				$name_of_team = $get_each_row['name'];
				$img_of_team = $get_each_row['img'];
				$msg_of_team = $get_each_row['msg'];
				$date_team = $get_each_row['date'];
			?>
				<div class="col-lg-3 col-md-6 col-sm-6 noteamdecoration zoomit">
					<a href="viewTeam.php?team=<?php echo $id_of_team; ?>">
					<div class="thumbnail">
						<img class="resizeTeamMainPage" src="admin\dynamicImages\teams\<?php echo $img_of_team; ?>" alt="team image">
						<h4><strong><?php echo $name_of_team; ?></strong></h4>
					</div>
					</a>
				</div>
			<?php
				}
			}
			?>
			</div>
		</div>
		</div>
		<div class="<?php echo $show_or_not_team; ?> container-fluid myContainer bg-1 text-center goTopAnim" style="padding: 50px;">
			<br><a href="teamsLink.php" class="btn btn-danger btn-lg" style="float: right; margin-right: 20px;">All Teams</a><br>
		<!--Ending Team Container-->
		</div>
		
		
		
		
		
		
		
		
		

			<?php
			$recipe_query = "SELECT * FROM recipes
								ORDER BY id DESC
								LIMIT 0,1";
			$connect_recipe_query = mysqli_query($conn, $recipe_query);
			$count_rows = mysqli_num_rows($connect_recipe_query);
			$show_or_not_recipe = 'hidden';
			if($count_rows > 0){
				$show_or_not_recipe = '';
			?>
		<!--Recipes Container-->
		<div class="mobileView bg-2">
		<div id="recipesSection" class="<?php echo $show_or_not_recipe; ?> container-fluid myContainer bg-2 text-center goTopAnim">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
		
			<h2>Latest Recipe</h2><br>
			<h4>Please, Try Youself!</h4>
			<?php
			while($get_each_row = mysqli_fetch_array($connect_recipe_query)){
				$id_of_recipe = $get_each_row['id'];
				$name_of_recipe = $get_each_row['name'];
				$img_of_recipe = $get_each_row['img'];
				$msg_of_recipe = $get_each_row['msg'];
				$date_recipe = $get_each_row['date'];
			?>
			<div class="row slideanim">
				<div class="col-lg-6 col-md-6 col-sm-6">
					
						<img class="img-thumbnail img-responsive" style="width: 100%; height: 100%" src="admin\dynamicImages\recipes\<?php echo $img_of_recipe; ?>" alt="recipe image" style="max-height: 215px; max-width: 400px;">
						<h2><strong><?php echo $name_of_recipe; ?></strong></h2>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<p class="example1" style="text-align: justify;"><?php echo substr($msg_of_recipe, 0, 900); ?>...</p>
					
				</div>
			</div>
			<?php
				}
			}
			?>
		</div>
		</div>
		<div class="<?php echo $show_or_not_recipe; ?> container-fluid myContainer bg-2 text-center goTopAnim" style="padding: 50px;">
			<br><a href="recipesLink.php" class="btn btn-danger btn-lg" style="float: right; margin-right: 20px;">All Recipes</a><br>
		<!--Ending Recipes Container-->
		</div>
		
		
		
		
		
		
		
		
		
		

			<?php
			$media_query = "SELECT * FROM media
								ORDER BY id DESC
								LIMIT 0,1";
			$connect_media_query = mysqli_query($conn, $media_query);
			$count_rows = mysqli_num_rows($connect_media_query);
			$show_or_not_media = 'hidden';
			if($count_rows > 0){
				$show_or_not_media = '';
			?>		
		<!--Media Container-->
		<div class="mobileView bg-4">
		<div id="mediaSection" class="<?php echo $show_or_not_media; ?> container-fluid myContainer bg-4 text-center goTopAnim">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			
			<h2>Latest Episode</h2>
			<?php
			while($get_each_row = mysqli_fetch_array($connect_media_query)){
				$id_of_media = $get_each_row['id'];
				$name_of_media = $get_each_row['name'];
				$video_of_media = $get_each_row['video'];
				$msg_of_media = $get_each_row['msg'];
				$date_media = $get_each_row['date'];
			?>
			<div class="row slideanim">
				<div class="col-lg-6 col-md-6 col-sm-6">
						
					<p class="example2" style="text-align: justify;"><?php echo substr($msg_of_media, 0, 900); ?>...</p>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="embed-responsive embed-responsive-16by9"  style="border-radius: 5px;">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_of_media; ?>" allowfullscreen></iframe>
					</div>
					
					<h2><strong><?php echo $name_of_media; ?></strong></h2>
				</div>
			</div>
			<?php
				}
			}
			?>			
		</div>
		</div>
		<div class="<?php echo $show_or_not_media; ?> container-fluid myContainer bg-4 text-center goTopAnim" style="padding: 50px;">
			<br><a href="mediaLink.php" class="btn btn-danger btn-lg" style="float: right; margin-right: 20px;">All Episodes</a><br>
		<!--Ending Media Container-->
		</div>
		
		
		
		
		
		
		
		
		

			<?php
			$gallery_query = "SELECT * FROM gallery
								ORDER BY id DESC
								LIMIT 0,6";
			$connect_gallery_query = mysqli_query($conn, $gallery_query);
			$count_rows = mysqli_num_rows($connect_gallery_query);
			$show_or_not_gallery = 'hidden';
			if($count_rows > 0){
				$show_or_not_gallery = '';
			?>	
		<!--Gallery Container-->
		<div class="mobileView bg-3">
		<div id="gallerySection" class="<?php echo $show_or_not_gallery; ?> container-fluid myContainer bg-3 text-center goTopAnim">
			<a href="#topOfPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
			<h2>Gallery</h2>
			<div class="row slideanim">
				
			<?php
			while($get_each_row = mysqli_fetch_array($connect_gallery_query)){
				$id_of_gallery = $get_each_row['id'];
				$name_of_gallery = $get_each_row['name'];
				$img_of_gallery = $get_each_row['img'];
				$date_gallery = $get_each_row['date'];
				$msg_of_gallery = $get_each_row['msg'];
			?>	

				<div class="col-sm-6 col-md-4 col-lg-4 nojudgedecoration zoomit">
					<a href="showGallery.php?gallery=<?php echo $id_of_gallery; ?>">
						<img class="resizeWithThumbnail" src="admin\dynamicImages\gallery\<?php echo $img_of_gallery; ?>" alt="gallery">
						<h2 style="font-size: 18px"><strong><?php echo $name_of_gallery; ?></strong></h2><br><br><br><br>
					</a>
				</div>
			<?php
				}
			}
			?>					
			</div>

		</div>
		</div>
		<div class="<?php echo $show_or_not_gallery; ?> container-fluid myContainer bg-3 text-center goTopAnim" style="padding: 50px;">
			<br><a href="galleryLink.php" class="btn btn-danger btn-lg" style="float: right; margin-right: 20px;">All Pictures</a><br>
		<!--Ending Gallery Container-->
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		<!--Contact Us Container-->
		<div class="mobileView bg-5">
		<div id="citContacts" class="container-fluid myContainer bg-5 text-center goTopAnim">
			<a href="#topOfPage" title="To Top">
    			<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>

			<h2 class="text-center">CONTACT</h2>

			<div class="row">
				<div class="col-sm-2 col-lg-3 col-lg-offset-2">
					<p>Contact us and we'll get back to you within 24 hours.</p>
					<p><span class="glyphicon glyphicon-map-marker"></span> GPO Box 826 Canberra, ACT 2601</p>
					<p><span class="glyphicon glyphicon-phone"></span> +61 2 6207 3188</p>
					<p><span class="glyphicon glyphicon-envelope"></span> infoline@cit.edu.au</p>
				</div>

				<div class="col-sm-10 slideanim col-lg-5">
					<form action="index.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input class="form-control" id="nameId" name="name" placeholder="Name" type="text" required>
						</div>
						<div class="col-sm-6 form-group">
							<input class="form-control" id="emailId" name="email" placeholder="Email" type="email" required>
						</div>
					</div>

					<textarea class="form-control" id="commentsId" name="comments" placeholder="Comment" rows="5"></textarea><br>

					<div class="row">
						<div class="col-sm-12 form-group">
							<button name="submit" class="btn btn-default pull-right" type="submit">Send</button>
						</div>
					</div>
					</form>
					
					
					<?php
						if(isset($_POST['submit'])){
							$name = $_POST['name'];
							$email = $_POST['email'];
							$comments = $_POST['comments'];
							$insert = "INSERT INTO contactus(name, email, msg)
										VALUE('$name', '$email', '$comments')";
							$run = mysqli_query($conn, $insert);
							if($run){
								echo "<script>alert('Your News Insert Successfully')</script>";
							}else{
								echo "<script>alert('Your News Insert Unsuccessfully')</script>";
							}
						}
					?>

					
					
					
				</div>
			</div>
			<hr>

			<center><img class="img-responsive" src="staticImages\map.png" width: 700px; height: 400px>
			</center>
		<!--Ending Contact Us Container-->
		</div>
		</div>










	<!--Ending Body Content-->
	</div>

	<!--Footer-->
	<?php
		include "include/footer.php";
	?>

</body>
</html>