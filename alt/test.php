<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>test</title>
	<link rel="stylesheet" href="test.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!-- /bootstrap -->
</head>
<body>
		<nav class="menu">
			<ul>
				<li><a href="index.html" >Web Development</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Acting</a></li>
				<li><a href="contact.html">Blogs</a></li>
			</ul>
		</nav>
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
				Contact
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Contact</h4>
						</div>
						<div class="modal-body">

									<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>

										<p>Thanks for the email! I&rsquo;ll get back to you shortly.</p>

									<?php } else { ?>
								 <?php  
								 if (!isset($error_message)){
								 	echo '<h3>Feel free to contact me.  Complete the form to send me an email.  Thanks!</h3>';

								 } else {
								 	echo '<p class="message">'. $error_message . '</p>';
								 }


								 ?>

										<form method="post" action="<?php echo BASE_URL; ?>contact/">
											<div class="form-group">
											    <label for="name">Name</label>
											    <input type="text" class="form-control" id="name" placeholder="Name">
											 </div>

											  <div class="form-group">
											      <label for="email">Email address</label>
											      <input type="email" class="form-control" id="email" placeholder="Enter email">
											    </div>
											    <div class="form-group">
											        <label for="message">Message</label>
											        <textarea name="message" id="message" class="form-control"  rows= "3" placeholder="Enter Message"></textarea>
											     </div>
				
											     <div class="form-group" style = "display: none";>
											         <label for="address">Address</label>
											         <input type="text" class="form-control" name="address" id="address" placeholder="Address">
													<p>Humans (and aliens): please leave this blank</p>
											      </div>												
	
											<input type="submit" value="send">
										</form>
										<?php } ?>

						</div><!-- /modal-body -->

    				</div>
  				</div>
			</div><!-- /modal -->
</body>
</html>
