<?php

include 'includes/nav2.php';

?>


<br>
<br>
<br>
<br>
<br>


<?php

	if(isset($_POST['submit'])){
		//variables for psot array
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$msg = $_POST['message'];
		
		//ticketfast admin email
		$admin_email = 'contact.ticketfast@gmail.com'; 
		
		//variables for confirmation email
		$subject2 = "Form Confirmation";
		$content2 = "This is a confirmation email from ".$admin_email. ". Thank you for your enquiry, we will get back to you as soon as possible.";
		
		//content of email
		$content = "Name: ".$name."\n"."\n"."Wrote the following :"."\n\n".$msg;
		
		//user entered email
		$sender = "From: ".$email;

		//if statement to test mail function
		if(mail($admin_email, $subject, $content, $sender)){
			echo "<h3>Thank you. Your message has been successfully sent. We will contact you shortly!</h3>";
		    echo "<h5>You will be redirected to the Home page in 5 seconds</h5>";
		
		
		//Confirmation Email
		mail($email, $subject2, $content2);
		
		}
		else{
			echo "You have reached this page in error.";
		}
	}

include 'includes/footer.php';
?>