<?php 
$pageTitle = "Acting";
$page = "acting";
require_once('../inc/config.php');

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $pageTitle ?></title>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/teststyles.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <script src="<?php echo BASE_URL; ?>js/init.js"></script>
  <link rel="icon" href="favicon.ico">


</head>
<body>

  <ul class="testnav">

        <?php 

          $links = array("home" => "Home", "web_development" => "Web Development", "acting" => "Acting", "contact" => "Contact");
          foreach ($links as $key => $link){
          if ($link == "Home" && $pageTitle != "Home") { ?>

        <li class="nav-item"><a href="<?php echo BASE_URL; ?>">Home</a></li>
            
          <?php   } elseif ($link != $pageTitle) {
            echo '<li class="nav-item"><a href="' . BASE_URL . $key . '">' . $link . '</a></li>';
          } }?> 
  </ul>    
  <div class="footer <?php echo $page ?>">
    <div class="wrapper">
      <ul>
        <li><a href="https://twitter.com/davidrynn" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
        <li><a href="https://www.facebook.com/david.rynn.3" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="https://www.linkedin.com/pub/david-rynn/2/54b/6b9" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
        <li><a href="https://www.github.com/davidrynn" target="_blank"><i class="fa fa-github-square"></i></a></li>
      </ul>
      <p>&copy;<?php echo date('Y'); ?> David Rynn</p>

    </div>

  </div>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>

    <!-- parallax? -->
<section class="intro" id="intro" data-speed="6" data-type="background">

<ul class="nav nav-tabs">
  <li id="resume" role="presentation" class="active" ><a href="#">Resume</a></li>
  <li id="pictures" role="presentation"><a href="#">Pictures</a></li>
  <li id="videos" role="presentation"><a href="#">Videos</a></li>  
</ul>

  <?php include(ROOT_PATH . 'inc/acting_resume.php'); ?>


</section>
 




<script>
$('#resume').on("click",function(){
    var url= "<?php echo BASE_URL; ?>inc/acting_resume.php"; 
    $('this').addClass('active');
    $( '#pictures' ).removeClass( 'active' );
    $( '#videos' ).removeClass( 'active' );
    $.ajax({
      url: url,
      success: function(data){
           $('#act').html(data);
      }

    });
});

$('#pictures').on("click",function(){
    var url= "<?php echo BASE_URL; ?>inc/pictures.php"; 
    $('this').addClass('active');
    $( '#resume' ).removeClass( 'active' );
    $( '#videos' ).removeClass( 'active' );

    $.ajax({
      url: url,
      success: function(data){
           $('#act').html(data); 
      }
    });

});

$('#videos').on("click",function(){
    var url= "<?php echo BASE_URL; ?>inc/videos.php"; 
    $('this').addClass('active');
    $( '#resume' ).removeClass( 'active' );
    $( '#pictures' ).removeClass( 'active' );

    $.ajax({
      url: url,
      success: function(data){
           $('#act').html(data); 
      }
    });

});

</script>
</body>
</html>