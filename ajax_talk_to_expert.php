<?php 

if(isset($_POST)){
if($_POST['type'] == 'newsletter') {
    $to = "kaushal@callerdesk.io";  
    $from = "support@calledesk.io";
    $email = $_POST['subscriber_email'];
    $subject = "Newsletter Enquiry";
    $message =  "Email Address = " . $email;
    $headers = "From:" . $from;

    if(mail($to,$subject,$message,$headers)){
        echo "Success! Thank you for Subscribing for our Newsletter.";
    }
    else{

        echo "Sorry Can't Send mail";

    }
} else {
if(strlen($_POST['contact']) == 10) {
    $to = "kaushal@callerdesk.io";  
    $from = "support@calledesk.io";

    $name = $_POST['name'];

	$email = $_POST['contact_email'];

    $phone = $_POST['contact'];

    $subject = "Talk to Expert Form submission";

    $message = "Name = " . $name . "\n\n" . "Email Address = " . $email . "\n\n" . "Phone number = " . $phone;
    $headers = "From:" . $from;

	if(mail($to,$subject,$message,$headers)){

		echo "Mail Sent. Thank you, we will contact you shortly.";

	}
	else{

		echo "Sorry Can't Send mail";

	}
     } else {
     $message= "Invalid Number. Please Enter correct 10 digit Number.";

    }

    }
}
unset($_POST);

?>