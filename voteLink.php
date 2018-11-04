<?php
	require 'admin/config/db.php';
	@$get = $_GET['team'];
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!--Head of the Index Page-->
		<link rel="icon" type="image/png" href="staticImages/logo_pc.png" />
	<title>Voting</title>
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
		
			include "include/other_pages_header.php";
		?>
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="container bg-3 text-center">
			<h1 style="font-weight: bold; background: black; color: white; border-radius: 5px;">NEED EMAIL FOR VOTE</h1><br>
		</div>
		
		
		<div class="container bg-3 voteAlignment text-center" >
					<form action="" method="post">
						<label for="email">Enter Your Email</label>
						<input required class="form-control" type="email" id="emailId" name="email" style="box-shadow: 3px 4px 2px #efa6a6;"><br><br><br>
						<button name="submit" type="submit" class="btn btn-success btn-md" style="float: right">Next</button>
					</form>
		
		</div>
		<?php
			if(isset($_POST['submit'])){
				$email_from_user = $_POST['email'];
				$query = "SELECT * 
							FROM voters";
				$run_query = mysqli_query($conn, $query);
				$count = mysqli_num_rows($run_query);
				$vote_is_casted = false;
				if($count > 0){
					while($row = mysqli_fetch_array($run_query)){
						$email_from_database = $row['email'];
						
						if($email_from_user == $email_from_database){
							$vote_is_casted = true;
						}
					}
				}
				
				if($vote_is_casted){
					echo "<center><h4>You casted vote before, Thank you!</h4></center>";
				}else{
					$random_code = mt_rand();
					$to = $email_from_user;
					$subject = "Confermation from PressureCooker";
					
					$message = "<b>Please, don't reply on this email, Thanks</b>";
					$message .= "<h1>Code is: ".$random_code."</h1>";

					$header = "From:mail.pressurecooker.dx.am \r\n";
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html\r\n";

					$retval = mail ($to,$subject,$message,$header);

					if( $retval == true ) {
						echo "<script>window.open(\"voteConfirmationLink.php?team=$get\", '_self')</script>";
						$_SESSION['code'] = $random_code;
						$_SESSION['email'] = $email_from_user;
					}else {
						echo "Message could not be sent...";
					}
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