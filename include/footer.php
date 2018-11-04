	<!--Footer At the End of Page-->
	<footer class="goTopAnim footerBoarder">
		<center><a href="#topOfPage" title="To Top">
    			<span class="glyphicon glyphicon-chevron-up"></span>
  			</a>
		
		</center>
<div class="row">
		<div class="col-md-4 footerStyleLeft">
			<a href="workingOnIt.php">
				<div class="col-md-1">
					<i class="fab fa-android fa-2x" style="color: greenyellow; margin-left: 24px;"></i>
				</div>

				<div class="col-md-11" style="margin-right: 1px;">
					Android App
				</div>
			</a>
		</div>
		
		<div class="col-md-4 footerSponsor">
			<center><a class="footerSponsorMarginRight" href="sponsorLink.php">Sponsors</a></center>
		</div>
		
		<div class="col-md-4 footerStyleRight">
			<a href="behindScense.php"><span style="margin: 20px">Behind The Scenes</span></a><br>

			<a href="about.php"><span style="margin: 50px">About Us</span></a><br>

			<a href="admin/indexAdmin.php"><span class="glyphicon glyphicon-log-in"><span style="margin: 35px;"></span></span></a>
		</div>
	</div>
		<!--Ending of Footer-->
	</footer>

		<!--Scrolling Script-->
	<script>
		$( document ).ready( function () {
				// Add smooth scrolling to all links in navbar + footer link
				$( ".navbar a, .goTopAnim a[href='#topOfPage']" ).on( 'click', function ( event ) {
					// Make sure this.hash has a value before overriding default behavior
					if ( this.hash !== "" ) {
						// Prevent default anchor click behavior
						event.preventDefault();

						// Store hash
						var hash = this.hash;

						// Using jQuery's animate() method to add smooth page scroll
						// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
						$( 'html, body' ).animate( {
							scrollTop: $( hash ).offset().top
						}, 900, function () {

							// Add hash (#) to URL when done scrolling (default click behavior)
							window.location.hash = hash;
						} );
					} // End if
				} );

				$( window ).scroll( function () {
					$( ".slideanim" ).each( function () {
						var pos = $( this ).offset().top;

						var winTop = $( window ).scrollTop();
						if ( pos < winTop + 600 ) {
							$( this ).addClass( "slide" );
						}
					} );
				} );
			} )
			<!--Scrolling Script-->
	</script>