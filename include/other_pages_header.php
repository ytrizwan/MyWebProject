		<!--Top Navigation Bar-->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>

					<div class="navbar-header mouseOnlogo">
						<a href="https://cit.edu.au/">
							<img class="myimage" src="staticImages/logo_pc.png" alt="logo" width="120" height="120">
						</a>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 35px;">
					<ul class="nav navbar-nav" style="margin-left: 80px;">
						<li><a href="index.php"><span style="font-weight: bold; font-size: 15px;">HOME</span></a>
						</li>
						<li class="<?php echo $judge_select; ?>"><a href="judgesLink.php"><span style="font-weight: bold; font-size: 15px;">JUDGES</span></a>
						</li>
						<li class="<?php echo $team_select; ?>"><a href="teamsLink.php"><span style="font-weight: bold; font-size: 15px;">TEAMS</span></a>
						</li>
						<li class="<?php echo $recipe_select; ?>"><a href="recipesLink.php"><span style="font-weight: bold; font-size: 15px;">RECIPES</span></a>
						</li>
						<li class="<?php echo $media_select; ?>"><a href="mediaLink.php"><span style="font-weight: bold; font-size: 15px;">EPISODES</span></a>
						</li>
						<li class="<?php echo $gallery_select; ?>"><a href="galleryLink.php"><span style="font-weight: bold; font-size: 15px;">GALLERY</span></a>
						</li>
					</ul>

					<form style="margin-right: 50px;" class="navbar-form navbar-right">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
						</div>

						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
			<!--Ending Top Navigation Bar-->
		</nav>