<?php 
$pageTitle = "David Rynn - Acting";
$page = "acting";
include('inc/header.php');
 ?>
<ul class="nav nav-tabs">
  <li id="resume" role="presentation" class="active" ><a href="#">Resume</a></li>
  <li id="pictures" role="presentation"><a href="#">Pictures</a></li>
</ul>

<div id="act">

	<?php include('inc/acting_resume.php'); ?>


</div>

  
<?php include('inc/footer.php'); ?>
<script>
$('#resume').on("click",function(){
    var url= "inc/acting_resume.php"; //insert your URL
    $.ajax({
      url: url,
      success: function(data){
           $('#act').html(data); //copy and paste for your special case
      }
    });
});

$('#pictures').on("click",function(){
    var url= "inc/pictures.php"; //insert your URL
    $.ajax({
      url: url,
      success: function(data){
           $('#act').html(data); //copy and paste for your special case
      }
    });
});

</script>
</body>
</html>