<?php
	require 'admin/config/db.php';
	@$get = $_GET['team'];
	session_start();
	$random_code = $_SESSION['code'];
	$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
	<link rel="icon" type="image/png" href="staticImages/logo_pc.png" />	
	<title>Vote Confirmation</title>
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
			$sponsor_select = "";
			$android_select = "";
			$about_select = "";
		
			include "include/other_pages_header.php";
		?>
		
		
		
		
		
		
		
		
		
		
		

		<div class="container bg-3 text-center">
			<h1 style="font-weight: bold; background: black; color: white; border-radius: 5px;">VERIFY EMAIL</h1><br>
		</div>
		
		
		<div class="container bg-3 voteAlignment text-center" >
					<?php echo "Email:".$email; ?>
					<?php echo "team:".$get; ?>
					<?php echo "code:".$random_code; ?>
					<p>Please, check your email account</p>
					<p>We send you an email confirmation code</p>
					<p>check your spams, if you didn't receive in Inbox</p><br>
					<form action="#" method="post" enctype="multipart/form-data">
						<label for="codeID">Please Enter Code</label>
						<input required class="form-control" type="text" id="codeID" name="code" style="box-shadow: 3px 4px 2px #efa6a6;"><br><br><br>
						<button name="submit" type="submit" class="btn btn-success btn-md" style="float: right">Submit</button>
					</form>
		</div>

		<?php
			if(isset($_POST['submit'])){
				$user_code = $_POST['code'];
				
				if($random_code != $user_code){
					echo "<center><h1>Sorry! Entered code is Wrong</h1></center>";
				}else{
					$query_save_vote = "UPDATE teams 
										Set vote=vote+1
										WHERE id = $get";
				
					$run_query_save_vote = mysqli_query($conn, $query_save_vote);

					$query_save_email = "INSERT INTO voters(email)
										 VALUES('$email')";
					$run_query_save_email = mysqli_query($conn, $query_save_email);

					session_unset();
					session_destroy();
					echo "<center><h1>Thank You For Your Vote</h1></center>";
				}
				
				
			}
		?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>
	<div class="container-fluid" style="padding-top: 800px"></div>

	<!--Footer-->
	<?php
		include "include/footer.php";
	?>
	
</body>
</html>