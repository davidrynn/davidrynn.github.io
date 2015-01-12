<?php 
$pageTitle = "David Rynn - Acting";
$page = "acting";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php');
 ?>
<ul class="nav nav-tabs">
  <li id="resume" role="presentation" class="active" ><a href="#">Resume</a></li>
  <li id="pictures" role="presentation"><a href="#">Pictures</a></li>
  <li id="videos" role="presentation"><a href="#">Videos</a></li>  
</ul>

<div id="act" class="container">

	<?php include(ROOT_PATH . 'inc/acting_resume.php'); ?>


</div>

  
<?php include(ROOT_PATH . 'inc/footer.php'); ?>
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