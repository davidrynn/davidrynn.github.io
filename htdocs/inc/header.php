<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $pageTitle ?></title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="favicon.ico">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body id="<?php echo $page ?>">
	<header>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid"><!-- container-fluid -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
          data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">David Rynn</a>
        </div>
          <!-- collect nav links in this div -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
        

          <ul class="nav navbar-nav">
            <li <?php if ($page=="home") {echo "class='active'";} ?>><a href="index.php">Home</a></li>
            <li <?php if ($page=="web_development") {echo "class='active'";} ?>><a href="web_development.php">Web Development</a></li>
            <li <?php if ($page=="acting") {echo "class='active'";} ?>><a href="acting.php">Acting</a></li>
            <li <?php if ($page=="travel_blog") {echo "class='active'";} ?>><a href="travel_blog.php">Travel Blog</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->

    </nav>

	</header>