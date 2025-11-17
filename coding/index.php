<?php 
require_once('../inc/config.php');

$pageTitle = "Coding Experience";
$page = "web_development";
include(ROOT_PATH . 'inc/header.php');
?>

<div id="contain" class="contain">
	
  <div class="<?php echo $page ?> intro">

   <div class="container">
    

     <div class="bgImageContainer">
      <div class="row BAGTallRow" style="padding-top:70px;padding-bottom:50px">
        <div class="large-12 columns centeredText">
            <h2 class="whiteText workFont">Mobile App Development</h2>
<!--             <div class="BAGWideSpacer"></div>
            <div class="BAGNarrowSpacer"></div> -->
<!--             <a href="#bottomOfPage" class="medium round button lemonMilkFont" id="viewOurWorkButton">View Our Work</a>
            <div id="arrowContainer">
              <a href="#bottomOfPage"><img src="img/downButton.png" id="downArrow"></a>
            </div> -->
        </div>
      </div>
    </div>




    <div class="row BAGLightRow BAGTallRow"  id="bottomOfPage">
      <div class="small-6 large-3 columns centeredText" id="bottomOfPage">
      <img src="../img/Screenshot1.jpg" class="mockUpPhoto">
      </div>
      <div class="small-6 large-3 columns centeredText" id="bottomOfPage">
      <img src="../img/Screenshot2.jpg" class="mockUpPhoto">
      </div>
      <div class="large-6 columns">
      <h1 class="lemonMilkFont smallLineHeight">Simple Music Player</h1>
      <h5 class="lemonMilkFont">Listen to your music, simply and easily</h5>
      <p class="workFont">A simple music player for your music.  Intuitive and easy design without the clutter or sales pitch of other music players.  If you want to stream music use their player.  If you just want to listen to your music then use the Simple Music Player.</p>
      <ul>
      <li>Uses two different APIs to play local content and DRM content quick!</li>
      <li>Fast and smooth functionality with as few taps as possible</li>
      <li>Full search functions that works better than the other guys'</li>
      <li>Shuffle and loop functions with buttons directly in the view</li>
      <li>Easy navigation between song, album and artist</li>
      </ul>
      <a href="https://itunes.apple.com/us/app/simple-music-player/id1044856386?mt=8" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:165px;height:40px;"></a>
      <!-- <a href="https://geo.itunes.apple.com/us/app/starfaller-simple-fun-addicting/id915689887?mt=8" style="display:inline-block;overflow:hidden;background:url(http://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:165px;height:40px;"></a> -->
      </p>

      </div>
    </div>



    <div class="row BAGDarkRow BAGTallRow">
      <div class="small-6 large-3 columns centeredText" id="bottomOfPage">
      <img src="../img/bubbleScreenshot1.jpg" class="mockUpPhoto">
      </div>
      <div class="small-6 large-3 columns centeredText" id="bottomOfPage">
      <img src="../img/bubbleScreenshot2.jpg" class="mockUpPhoto">
      </div>
      <div class="large-6 columns" id="bottomOfPage">
      <h1 class="lemonMilkFont smallLineHeight">Attack of the Bubbles!</h1>
      <h5 class="lemonMilkFont">Bubble Popping Game</h5>
      <p class="workFont">Pop the bubbles before they stack up and reach the top of the screen.  Simple and addictive.  Good luck! 
      <ul>
      <li>Uses SpriteKit</li>
      <li>Inhouse sound design and particle effects</li>
      </ul>
      <!-- <a href="https://geo.itunes.apple.com/us/app/bad-luck-bo-chainsaw-runner/id946699755?mt=8" style="display:inline-block;overflow:hidden;background:url(http://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:165px;height:40px;"></a> -->
      </p>

      </div>
    </div>


    <div class="row BAGLightRow BAGTallRow">
      <div class="small-6 large-3 columns centeredText" id="bottomOfPage">
      <img src="../img/transitScreenshot1.jpg" class="mockUpPhoto">
      </div>
      <div class="small-6 large-3 columns centeredText" id="bottomOfPage">
      <img src="../img/transitScreenshot2.jpg" class="mockUpPhoto">
      </div>
      <div class="large-6 columns" id="bottomOfPage">
      <h1 class="lemonMilkFont smallLineHeight">InTransit</h1>
      <h5 class="lemonMilkFont">MTA Transit tracker and delay notifications</h5>
      <p class="workFont">Get crowdsourced reports of MTA delays and user generated delay reports"
      <ul>
      <li>Uses Geofences to track users for delays</li>
      <li>CoreData to store MTA Api information offline</li>
      <li>Parse APIs to store user trip data and send notifications</li>
      <li>More reliable reports of delays so you don't have to rely on the MTA</li>
      <li>Users don't even have to open the app!  They will be notified when they approach the station</li>
      </ul>
      <!-- <a href="https://geo.itunes.apple.com/us/app/poppers-fun-pepper-puzzle/id919782852?mt=8" style="display:inline-block;overflow:hidden;background:url(http://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:165px;height:40px;"></a> -->
      </p>

      </div>
    </div>

     <div class="bgImageContainer">
      <div class="row BAGTallRow" style="padding-top:125px;padding-bottom:50px">
        <div class="large-12 columns centeredText">
            <h2 class="whiteText workFont">Web Development Projects</h2>
        </div>
      </div>
    </div>

    <div class="row webDev">
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

<div class="bs-example" data-example-id="simple-table">
      <table class="table table-condensed">
        <caption><h3>Skills</h3></caption>
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
            <td>jQuery</td>
            <td>Git</td>
          </tr>
          <tr>
            <td>Swift</td>
            <td>SpriteKit</td>
            <td>AWS</td>
          </tr>
          <tr>
            <td>Javascript</td>
            <td>MPMedia/AVAudio</td>
            <td>Heroku</td>

          </tr>
          <tr>
            <td>Java</td>
            <td>Bootstrap</td>
             <td></td>

          </tr>
          <tr>
            <td>HTML</td>

          </tr>
          <tr>
            <td>CSS</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>PHP</td>
            <td></td>
            <td></td>
          </tr>

        </tbody>
      </table>
    </div><!-- /example -->
</div><!-- /container -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/custom.js"></script>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>
</body>
</html>