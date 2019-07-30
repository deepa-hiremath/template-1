<?php
	if(isset($_POST["submit"])) {
		$today = date("d/m/Y");
		$firstName = $_POST["txtFirstName"];
		$lastName = $_POST["txtLastName"];
		$phone = $_POST["txtPhone"];
		$email = $_POST["txtEmail"];
		$comment = $_POST["txtComment"];

		$message  = "";  //This mail is for admin
		$message .= 'New enquiry has been posted on the website and the details are-' . " \n\r";
		$message .= "Date: $today  \n";
		$message .= "Full Name: $firstName $lastName \n";
		$message .= "Phone: $phone \n";
		$message .= "Email: $email \n";
		$message .= "Message: $comment \n";

		$to = "info@domain.com"; //Add Client Email
		$subject = "New enquiry at Business Name"; // Add client business name
		$from = "$email";
		@mail("$to", "$subject", $message,"From: $from");


		$message = "";  //This mail is for the person who contacts us
		$message .= "Dear $firstName $lastName, \n";
		$message .= "\n";
		$message .= "Thank you for your enquiry at Business Name.\n"; // Add client business name
		$message .= "\n";
		$message .= "Regards, \n";
		$message .= "Team Business Name, \n"; // Add client business name
		$message .= "Email : info@domain.com | Phone : +91 0123456789"; // Add Client e-mail and phone


		$to = "$email";
		$subject = "Your enquiry at Business Name"; // Add client business name
		$from = "info@domain.com"; //Add Client Email
		@mail("$to", "$subject", $message,"From: $from");
		echo '<script>window.location.href = "thank-you";</script>';
	}
	else {
		echo "<p>Invalid Page Submission!! Please contact Administrator.</p>";
	}
?>