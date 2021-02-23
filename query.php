<?php
if(isset($_POST)){
    $to = "startups@callerdesk.io";  
    $from = "kaushal@gcallerdesk.io";
    $name = $_POST['name'];
    $company = $_POST['company'];
    $region = $_POST['region'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $subject = "Invest India Query Form";
    $message =  "Name = " . $name ."\nEmail Address = " . $email ."\nCompany = " . $company ."\nContact = " . $mobile ."\nRegion = " . $region;
    $headers = "From:" . $from;
    //print_r($message);
    if(mail($to,$subject,$message)){
        echo "Success.";
    }
    else{

        echo "Sorry Can't Send mail";

    }
} 
?>