<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST")) {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);


	if ($name == "" OR $email == "" OR $message == "") {
		$error_message = "You must specify value for name, email, and message.";
	}

	foreach( $_POST as $value ){
		if( stripos($value, 'Content-Type: ') !== FALSE){
			$error_message =  "There was a problem with the information you entered.";
		
		}
	}

	if ($_POST["address"] != "") {
		$error_message =  "Your form submission has an error.";
	
	}

	require_once("inc/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if (!$mail->ValidateAddress($email)){
		$error_message =  "You must specify a valid email address.";
	
	}
	
	if (!isset($error_message)){
		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body .  "Email: " . $email . "<br>";
		$email_body = $email_body .  "Message: " . $message;


		//deleted AddReply to

		//per video setFrom
		$mail->setFrom($email, $name);
		//no longer need to specify $address, just put value in...
		$mail->addAddress("davidrynn@hotmail.com", "David Rynn");
		//Set the subject line per video
		$mail->Subject = 'David Rynn Contact Form Submission |' . $name;

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		// ** ignore above comment and follow video, replacing file_get_comtents...
		$mail->msgHTML($email_body);

		//deleted $mail->AltBody line per video
		
		// deleted addAttachment per video

		//send the message, check for errors
		}	
		if ($mail->send()) {
			header("Location: contact.php?status=thanks");
			exit;

		} else {
		    $error_message =  "There was a problem sending the email: " . $mail->ErrorInfo;

		} 

	
	if (isset($error_message)) {
		
	}
}


$page = "contact";
$pageTitle = "Contact"
 include('inc/header.php');
  ?>
<div class ="section page">
	<div class = "wrapper">
		

		<h1>Contact</h1>

		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>

			<p>Thanks for the email! I&rsquo;ll be in touch shortly.</p>

		<?php } else { ?>
			<p>I&rsquo;d love to hear from you!  Complete the form to send me an email.</p>

			<form method="post" action="contact.php">
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
 <?php include('inc/footer.php') ?>
 </body>
</html>