<?php 
$pageTitle = "David Rynn - Web Development";
$page = "web_development";
include('inc/header.php');
 ?>

<div class="container">
	

	<div class="row webDev">
		<div class="col-md-6">
			<a href="http://www.wordatic.com" target="_blank"><img src="img/wordatic.gif" class="img-responsive" alt="Wordatic game"></a>
		</div>
		<div class="col-md-6">WORDATIC: One page app launched from Heroku.  Social word-game/story-builder.
		</div>
	</div>

	<div class="row webDev">
		<div class="col-md-6">
			<a href="#"><img src="img/semRater.gif" class="img-responsive" alt="Seminar Rater RoR"></a>
		</div>
		<div class="col-md-6"><p class="text-center">SEMINAR RATER: Ruby on Rails 4.x online database app utility for actors (in development)</p>
		</div>
	</div>

    <div id="canvasDiv" class="row">
    	<div class="col-md-6">
    		<p></p>
    		
    	</div>
	    <div class="col-md-6 pull-right"><script type="text/javascript" src="js/dracula.js"></script>
	    <script type="text/javascript">
	    	 prepareCanvas(document.getElementById("canvasDiv"), 400, 300);
	    </script>
		</div>	
    </div>
</div>

<?php include('inc/footer.php'); ?>
</body>
</html>