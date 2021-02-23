<?php
session_start();

class Controller
{
    function __construct() {
        $this->processMobileVerification();
    }
    function processMobileVerification()
    {
        $logPath = "logs/smsApilog_".date("Ymd").".txt";
        switch ($_POST["action"]) {
                case "send_otp":
                $mobile_number = $_POST['mobile_number'];                
                $otp = rand(1000, 9999);
                //echo $otp;
                $_SESSION['session_otp'] = $otp;
                $message = urlencode("Your One Time Password for Signup in Callerdesk is " . $otp); 
                $url = "https://www.mgage.solutions/SendSMS/sendmsg.php?uname=FTLINKCALLER&pass=welcome@123&send=DESKTL&dest=$mobile_number&msg=$message";  
                error_log("URl request: ". $url."\n", 3, $logPath);  
                $response = file_get_contents($url);  
                error_log("URl response: ". $response."\n", 3, $logPath); 
                echo 'Please Enter OTP to confirm your Purchase';
                        break;

                case "verify_otp":
                $otp = $_POST['otp'];
                if ($otp == $_SESSION['session_otp']) {
                    unset($_SESSION['session_otp']);
                    echo "success";
                } else {
                    echo "Mobile number verification failed";
                }
                break;
                
                case "send_otp_email":
                require '/var/www/html/app.callerdesk.io/application/third_party/PHPMailer/PHPMailerAutoload.php';
                $email = $_POST['email'];                
                $otp = rand(1000, 9999);
                $_SESSION['session_otp_email'] = $otp;
               
                      $content = "Your One Time Password for Signup in Callerdesk is " . $otp; 
                      $subject= 'Callerdesk OTP For Signup';
                      // $reportdate=date("YmdHis");
                      // $htmlfilename='emailcontentAlert_'.$reportdate.'.html';
                      // $file = fopen($htmlfilename,"w");
                      // fwrite($file,$content);
                      // fclose($file);
                      $mail = new PHPMailer();
                              $mail->IsSMTP(); // enable SMTP
                       // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                        $mail->SMTPAuth = true; // authentication enabled
                        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                        $mail->Host = "smtp.gmail.com";
                        $mail->Port = 465; // or 587
                        $mail->IsHTML(true);
                        $mail->Username = 'support@callerdesk.io';
                        $mail->Password = 'support@321';
                      $mail->Encoding='base64';
                      $mail->setFrom('support@callerdesk.io', 'Support Callerdesk');
                    //  $mail->addReplyTo('kaushal@callerdesk.io', 'Admin');
                      $mail->addAddress($email, 'User');
                      //$mail->addAddress('satay.csjm@gmail.com', 'Admin');
                      $mail->Subject = $subject;
                      $mail->msgHTML($content, dirname(__FILE__));
                      if (!$mail->send()) {
                      echo "Mailer Error: " . $mail->ErrorInfo;
                      } else {
                      echo "Mail sent!";
                      unlink($htmlfilename);
                      }
                        break;

                case "verify_otp_email":
                $otp = $_POST['otp'];
                if ($otp == $_SESSION['session_otp_email']) {
                    unset($_SESSION['session_otp_email']);
                    echo "success";
                } else {
                    echo "Email verification failed";
                }
                break;
        }
    }
}
$controller = new Controller();
?>