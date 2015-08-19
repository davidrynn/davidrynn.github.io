<?php 
require_once('../inc/config.php');

$pageTitle = "Coding Experience";
$page = "web_development";
include(ROOT_PATH . 'inc/header.php');
 ?>

<div id="contain" class="contain">
	
<div class="<?php echo $page ?> intro">
	<h2>Web Development</h2>
	<div class="container">
		<div class="bs-example" data-example-id="simple-table">
    <table class="table table-condensed">
      <caption><h3><i class="fa fa-pencil fa-2x"></i>Skills</h3></caption>
      <thead>
        <tr>
          <th>Languages</th>
          <th>Frameworks/Libraries</th>
          <th>Version Control/Deployment</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Objective C</td>
        </tr>
        <tr>
          <td>Swift</td>
        </tr>
        <tr>
          <td>Javascript</td>
          <td>jQuery</td>
          <td>Git</td>
        </tr>
        <tr>
          <td>Java</td>
          <td>Cocoa</td>
          <td>AWS</td>
        </tr>
        <tr>
          <td>HTML</td>
          <td></td>
          <td>Heroku</td>
        </tr>
        <tr>
          <td>CSS</td>
          <td></td>
          <td>/td>
        </tr>
        <tr>
          <td>PHP</td>
          <td></td>
          <td></td>
        </tr>
  
      </tbody>
    </table>
  </div><!-- /example -->

    <div class="row webDev">
      <h3><i class="fa fa-cogs fa-2x"></i>Projects</h3>
      <div class="col-md-6">
        <a href="http://www.scottanddave.net" target="_blank"><img src="<?php echo BASE_URL; ?>img/scottanddave.png" class="img-responsive" alt="Wordatic game"></a>
      </div>
      <div class="col-md-6">Website for ScottandDave.net, a comedy webseries
      </div>
    </div>

		<div class="row webDev">
			<div class="col-md-6">
				<a href="http://www.wordatic.com" target="_blank"><img src="<?php echo BASE_URL; ?>img/wordatic.gif" class="img-responsive" alt="Wordatic game"></a>
			</div>
			<div class="col-md-6">WORDATIC: One page app launched from Heroku.  Social word-game/story-builder.
			</div>
		</div>

		<div class="row webDev">
			<div class="col-md-6">
				<a href="#"><img src="<?php echo BASE_URL; ?>img/semRater.gif" class="img-responsive" alt="Seminar Rater RoR"></a>
			</div>
			<div class="col-md-6"><p class="text-center">SEMINAR RATER: Ruby on Rails 4.x online database app utility for actors (in development)</p>
			</div>
		</div>

	    <div id="canvasDiv" class="row">
	    	<div class="col-md-6">
	    		<p></p>
	    		
	    	</div>

	    </div>
	</div><!-- /container -->

<?php include(ROOT_PATH . 'inc/footer.php'); ?>
</body>
</html>