<?php 
require_once('../inc/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);


	if ($name == "" OR $email == "" OR $message == "") {
		$error_message = "You must specify value for name, email, and message.";
	}

	if(!isset($error_message))  {
		foreach( $_POST as $value ){
			if( stripos($value, 'Content-Type: ') !== FALSE){
				$error_message =  "There was a problem with the information you entered.";
			
			}
		}
	}

	if (!isset($error_message) && $_POST["address"] != "") {
		$error_message =  "Your form submission has an error.";
	
	}


	//phpmailer 3rd party mailer section
	require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if (!isset($error_message) && !$mail->ValidateAddress($email)){
		$error_message =  "You must specify a valid email address.";
	
	}
	
	if (!isset($error_message)){
		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body .  "Email: " . $email . "<br>";
		$email_body = $email_body .  "Message: " . $message;


		//deleted AddReply to

		//setFrom
		$mail->setFrom($email, $name);
		//set to
		$mail->addAddress("davidrynn@gmail.com", "David Rynn");
		//Set the subject line
		$mail->Subject = 'David Rynn Contact Form Submission |' . $name;

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($email_body);

		//send the message, check for errors
			
		if ($mail->send()) {
			header("Location: ". BASE_URL . "contact/?status=thanks");
			exit;

		} else {
		    $error_message =  "There was a problem sending the email: " . $mail->ErrorInfo;

		}
	}
}

?>
<?php
$page = "contact";
$pageTitle = "Contact";
 include(ROOT_PATH . 'inc/header.php');
  ?>
<div id="contain" class="contain">
	
<div class="<?php echo $page ?> intro">
<div class ="contact">
	<div class = "wrapper">
		

		<h1>Contact</h1>

		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>

			<p>Thanks for the email! I&rsquo;ll get back to you shortly.</p>

		<?php } else { ?>
	 <?php  
	 if (!isset($error_message)){
	 	echo '<p>Feel free to contact me.  Complete the form to send me an email.  Thanks!</p>';

	 } else {
	 	echo '<p class="message">'. $error_message . '</p>';
	 }


	 ?>

			<form method="post" action="<?php echo BASE_URL; ?>contact/">
				<table>
					<tr>
						<th>
						<label for="name">Name</label>
						</th>
						<td>
						<input type = "text" name="name" id="name">
						</td>
					</tr>
					<tr>
						<th>
						<label for="email">Email</label>
						</th>
						<td>
						<input type = "text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<th>
						<label for="message">Message</label>
						</th>
						<td>
						<textarea name="message" id="message"></textarea>
						</td>
					</tr>
					<tr style = "display: none;">
						<th>
						<label for="address">Address</label>
						</th>
						<td>
						<input type = "text" name="address" id="address">
						<p>Humans (and aliens): please leave this blank</p>
						</td>
					</tr>

				</table>
				<input type="submit" value="send">
			</form>
			<?php } ?>

	</div>
 </div>
 <?php include(ROOT_PATH . 'inc/footer.php') ?>
 </body>
</html>