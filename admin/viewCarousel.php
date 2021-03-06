<?php
	require 'config/db.php';
	@$get = $_GET['msg'];
	session_start();
	if(!isset($_SESSION['user'])){
		header("location:login.php");
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="adminAssets\style.css" rel="stylesheet">
		<link 	rel="stylesheet" 
				href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
				integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
				crossorigin="anonymous">
		
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-3">
			<div class="heading">
				<h3 style="text-align: center; font-weight: bold; color: white; line-height: 50px">Admin Panel</h3>
				<div class="pro">
				</div>
				<div class="menu">
					<ul>
						<li><a href="indexAdmin.php"><i class="fas fa-tachometer-alt" style="color: white; font-size: 25px; margin-right: 15px;"></i>Dashboard</a></li>
						<li class="active disabled"><a href="viewCarousel.php"><i class="fas fa-caret-square-left" style="color: white; font-size: 25px; margin-right: 15px;"></i>Edit Carousel</a></li>
						<li><a href="viewJudges.php"><i class="fas fa-gavel" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Judges</a></li>
						<li><a href="viewTeam.php"><i class="fab fa-slideshare" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Teams</a></li>
						<li><a href="viewRecipes.php"><i class="fas fa-cocktail" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Recipes</a></li>
						<li><a href="viewMedia.php"><i class="fas fa-video" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Episodes</a></li>
						<li><a href="viewGallery.php"><i class="fas fa-images" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Gallery</a></li>
						<li><a href="viewSponsors.php"><i class="fas fa-dollar-sign" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert Sponsors</a></li>
						<li><a href="viewBehindScenes.php"><i class="fas fa-theater-masks" style="color: white; font-size: 25px; margin-right: 15px;"></i>Insert BehindScenes</a></li>
						<li><a href="viewContactUs.php"><i class="fa fa-phone" style="color: white; font-size: 25px; margin-right: 15px;"></i>Contact Us</a></li>
						<li><a href="changeUser.php"><i class="fas fa-desktop" style="color: white; font-size: 25px; margin-right: 15px;"></i>Change UserName</a></li>
						<li><a href="changePass.php"><i class="fas fa-key" style="color: white; font-size: 25px; margin-right: 15px;"></i>Change Password</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="container-fluid" style="background: blue; border: 1px solid;">
				<div class="col-md-6">
					<a href="../index.php"><i class="fas fa-home" style="color: white; font-size: 25px; margin-right: 15px; padding-top: 12px;"></i></a>
				</div>
				<div class="col-md-6">
					<form action="logout.php">
						<button class= "btn btn-purple" style="float: right; margin: 10px">Log Out</button>
					</form>
				</div>
			</div>
			<div class="container" style="background: #FFF;">
			<?php
			$judge_query = "SELECT * FROM carousel
									ORDER BY id DESC";
			$connect_judge_query = mysqli_query($conn, $judge_query);
			$count_rows = mysqli_num_rows($connect_judge_query);
			$number_of_items = 1;
				$disableInsertBtn = '';
				if($count_rows > 0){
					$disableInsertBtn = 'disabled';
				}
			?>
				<h2>View Carousel</h2>
				<h6 style="font-weight: bold">Total Carousel : <span class="badge"><?php echo $count_rows; ?></span></h6>
				<hr>
				<center><h3><?php echo $get; ?></h3></center>
				
				<a href="insertCarousel.php" class="<?php echo $disableInsertBtn; ?> btn btn-info" style="float:right">Insert Carousel</a>

					<table class="table table-hover table-striped table-bordered">
						<tr>
							<th>S.No</th>
							<th>Image 1</th>
							<th>Image 2</th>
							<th>Image 3</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
			<?php
			if($count_rows > 0){
				while($get_each_row = mysqli_fetch_array($connect_judge_query)){
					$id_of_judge = $get_each_row['id'];
					$img1_of_judge = $get_each_row['img1'];
					$img2_of_judge = $get_each_row['img2'];
					$img3_of_judge = $get_each_row['img3'];
					$date_judge = $get_each_row['date'];
			?>	
						<tr>
							<th><?php echo $number_of_items++; ?></th>
							<th><?php echo $img1_of_judge; ?></th>
							<th><?php echo $img2_of_judge; ?></th>
							<th><?php echo $img3_of_judge; ?></th>
							<th><?php echo $date_judge; ?></th>
							<th>&nbsp;<a href="deleteCarousel.php?id=<?php echo $id_of_judge; ?>" class="btn btn-danger">Delete</a></th>
						</tr>
			<?php
				}
			}else{
					$disableInsertBtn = '';
				}
		
			?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php } ?>