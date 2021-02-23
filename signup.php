<?php
$type= $_GET['type'];
if($type=='exist'){
$message = 'This Business Email already registered with us';
} elseif ($type=='success') {
 $message = 'Your account created successfully. Please login to continue.';
} elseif ($type=='fail') {
 $message = 'Your account registration failed. Due to invalid email or mobile number.';
}
?>
<!DOCTYPE html>
<html lang="en-in">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign Up - Callerdesk</title>
    <meta name="description" content="Want to know more about Callerdesk or have any queries? You may contact us through filling in the provided space or call +91-927-888-3000." >
    
    <meta property="og:locale" content="en-in" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Us - Callerdesk" />
    <meta property="og:description" content="Want to know more about Callerdesk or have any queries? You may contact us through filling in the provided space or call +91-927-888-3000." />
    <meta property="og:url" content="https://callerdesk.io/contact.php" />
    <meta property="og:site_name" content="callerdesk" />
    <meta property="og:image" content="https://callerdesk.io/images/calllogo.png" />
    <meta name="twitter:card" content="" />
    <meta name="twitter:description" content="Want to know more about Callerdesk or have any queries? You may contact us through filling in the provided space or call +91-927-888-3000." />
    <meta name="twitter:title" content="Contact Us - Callerdesk" />
    <meta name="twitter:image" content="https://callerdesk.io/images/calllogo.png" />
    
    <link rel="canonical" href="https://callerdesk.io/contact.php" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .error_message_email,.error_message {
      display:none
    }

    </style>
  </head>
  <body>
    
    <?php //include_once('header.php'); ?><!--header ends-->
    
    <div class="leftpart" style="/* display: none */">
                <img src="https://newapp.callerdesk.io/assets/cloudy-assets/img/calllogo.png" alt="" class="auto">
                <ul>
                  <li>Quick and free sign‑up <span>Enter your email address to create an account.</span></li>
                  <li>Place and take calls, anywhere <span>Get cloud phone numbers & instantly Handle calls on the go.</span></li>
                  <li>Assign & Grow your team <span>Automate the Best Experience via different call routing strategies.</span></li>
                  <li>Track performance & Optimize ROI<span>Increase the impact of calls from marketing on sales pipeline & revenue.</span></li>
                </ul>
                <div class="trustby">
                    <h4>Handling 300+ corporate account base with 6000+ Customer support Executives</h4>
                    <ul>
                        <li><img src="images/hcl.png" alt="" class="auto"></li>
                        <li><img src="images/icc.png" alt="" class="auto"></li>
                        <li><img src="images/zin.png" alt="" class="auto"></li>
                         <li><img src="images/afo.png" alt="" class="auto"></li>
                    </ul>
                </div>
       </div>
       <div class="rightpart" style="/* display: none */">
          <img class="visible-xs" src="https://newapp.callerdesk.io/assets/cloudy-assets/img/calllogo.png" alt="" class="auto">
          <p style="color: green;"><?php echo $message;?></p>
          <h2>Create your Account</h2>
          <form method="post" id="form1" action="https://app.callerdesk.io/api/add_demo_account">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="company_name" placeholder="Company Name" required="">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Business Email" required="">

            <p class="verify_no"><span class="error_message_email">Email not verified.</span><a href="javascript:void(0);" onclick="sendOTPEmail();" id="verify_email">Verify now</a></p>
            </div>
             <div class="form-group">
              <input type="text" class="form-control" id="msisdn"  name="msisdn" minlength="10" maxlength="10" placeholder="Mobile Number" required="">
              <p class="verify_no"> <span class="error_message">Mobile Number not verified.</span><a href="javascript:void(0);" onclick="sendOTP();" id="verify_number"> Verify now </a></p>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
            </div>
            <div class="checkbox">
          <label>
            <input type="checkbox" required="">Please confirm that you agree to our <a href="privacy.php" target="blank">Terms & Condition</a>
          </label>
      </div>
            <div class="text-center">
                            <button id="create_account" class="btn btn-default">Create Account</button>
            </div>
    </form>

          <hr>
          <p>Already have an account? <a href="https://app.callerdesk.io" target="blank">Login</a></p>
        </div>


<div class="modal fade signup_modal wd_new" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="otp-header">
            <div class="username">Hi There!</div>
            <h5>Enter an OTP Sent to <span id="user_number"></span></h5>
            <span class="error_verify"></span>
        </div>
        <div class="otp_input">
            <form>
              <div class="otpRow">
                <input class="otpInput" maxlength="1" name="firstDigit" id="firstDigit" type="text">
                <input class="otpInput" maxlength="1" name="secondDigit" id="secondDigit" type="text">
                 <input class="otpInput" maxlength="1" name="thirdDigit" id="thirdDigit" type="text">
                  <input class="otpInput" maxlength="1" name="forthDigit" id="forthDigit" type="text">
                  <div class="text-center">
        <button type="button" class="btn btn-primary" onclick="verifyOTP();">Confirm OTP</button>
       </div>
       <hr>
                  <!-- <a href="" class="resendOtp">Resend</a> -->
              </div>
            </form>
        </div>
      </div>
     
     
    </div>
  </div>
</div>

<div class="modal fade signup_modal wd_new" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="otp-header">
            <div class="username">Hi There!</div>
            <h5>Enter an OTP Sent to <span id="user_email"></span></h5>
            <span class="error_verify_email"></span>
        </div>
        <div class="otp_input">
            <form>
              <div class="otpRow">
                <input class="otpInput" maxlength="1" name="firstDigit" id="firstDigit1" type="text">
                <input class="otpInput" maxlength="1" name="secondDigit" id="secondDigit1" type="text">
                 <input class="otpInput" maxlength="1" name="thirdDigit" id="thirdDigit1" type="text">
                  <input class="otpInput" maxlength="1" name="forthDigit" id="forthDigit1" type="text">
                  <div class="text-center">
        <button type="button" class="btn btn-primary" onclick="verifyOTPEmail();">Confirm OTP</button>
       </div>
       <hr>
                <!--   <a href="" class="resendOtp">Resend</a> -->
              </div>
            </form>
        </div>
      </div>
     
     
    </div>
  </div>
</div>

    


     <!-- Modal -->
<div class="modal fade signup_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
              <input type="text" class="form-control" id="pwd" placeholder="Phone No">
        </div>
        <div class="text-center">
        <button type="button" class="btn btn-primary">Send One Time Password</button>
       </div>
       <hr>
       <p>New to CallerDesk? <a href="index.php">Create Account</a></p>
      </div>
     
     
    </div>
  </div>
</div>



        
        
         <?php //include_once('footer.php'); ?><!--header ends-->
        
        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
             <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script>
        $("#range_10").ionRangeSlider({
    grid: true,
    min: 1000,
    max: 1000000,
    from: 100000,
    step: 1000,
    prettify_enabled: false
});
        </script>


 <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
            <script>
$(document).ready(function(){
                  
                  $("button#sidebarCollapse").click(function(){
    $(".overlay").toggleClass("overlay_activate");
});
    
    document.querySelector( "#sidebarCollapse" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
  });
                  
                  });

           function sendOTP() {
            $(".error_message").html("").hide();
            var number = $("#msisdn").val();
            
            if (number.length == 10 && number != null) {
                var input = {
                    "mobile_number" : number,
                    "action" : "send_otp"
                };
                $.ajax({
                    url : 'controller.php',
                    type : 'POST',
                    data : input,
                    success : function(response) {
                        // $(".success").html(response)
                        // $(".success").show();
                        // $('#otp').show();
                        // $("#buy_electricity").attr("onclick","verifyOTP()");
                        $('#myModal1').modal();
                        $('#user_number').html(number);
                    }
                });
            } else {
                $(".error_message").html('Please enter a valid 10 digit number!');
                $(".error_message").show();
                return false;
            }
        }

        function verifyOTP() {
            $(".error_message").html("");
            //$(".success").html("").hide();
            var firstDigit = $("#firstDigit").val();
            var secondDigit = $("#secondDigit").val();
            var thirdDigit = $("#thirdDigit").val();
            var forthDigit = $("#forthDigit").val();
            var otp = firstDigit+secondDigit+thirdDigit+forthDigit;
            var input = {
                "otp" : otp,
                "action" : "verify_otp"
            };
                $.ajax({
                    url : 'controller.php',
                    type : 'POST',
                    data : input,
                    success : function(response) {
                        if(response =="success") {
                         //$("#submitForm").submit();
                         $('#myModal1').modal('toggle');
                         $("#create_account").attr("type","submit");
                         $(".error_message").html('Mobile Number Verify Successfully.');
                         $(".error_message").show();
                         $("#verify_number").html("").hide();
                        } else {
                        $(".error_verify").html(response);
                        $(".error_verify").show(); 
                        }
                    }
                });
        }

        function sendOTPEmail() {
            $(".error_message_email").html("").hide();
            var email = $("#email").val();
            if (email != '') {
            
                if(
                        email.match('@gmail.com') ||
                        email.match('@hotmail.com') ||
                        email.match('@live.com') ||
                        email.match('@msn.com') ||
                        email.match('@aol.com') ||
                        email.match('@yahoo.com')
                ){
                        alert('Error!! Only Business emails are accepted for Sign Up.');
                        e.preventDefault();
                        return false; // It's a publicly available email address
                } else {
                          var input = {
                              "email" : email,
                              "action" : "send_otp_email"
                          };
                          $.ajax({
                              url : 'controller.php',
                              type : 'POST',
                              data : input,
                              success : function(response) {
                                  // $(".success").html(response)
                                  // $(".success").show();
                                  // $('#otp').show();
                                  // $("#buy_electricity").attr("onclick","verifyOTP()");
                                  $('#myModal2').modal();
                                  $('#user_email').html(email);
                              }
                          });
                  }
              
            } else {
                $(".error_message_email").html('Please enter a valid Email Id! ');
                $(".error_message_email").show();
                return false;
            }
        }

        function verifyOTPEmail() {
            $(".error_message_email").html("");
            //$(".success").html("").hide();
            var firstDigit = $("#firstDigit1").val();
            var secondDigit = $("#secondDigit1").val();
            var thirdDigit = $("#thirdDigit1").val();
            var forthDigit = $("#forthDigit1").val();
            var otp = firstDigit+secondDigit+thirdDigit+forthDigit;
            var input = {
                "otp" : otp,
                "action" : "verify_otp_email"
            };
                $.ajax({
                    url : 'controller.php',
                    type : 'POST',
                    data : input,
                    success : function(response) {
                        if(response =="success") {
                         //$("#submitForm").submit();
                         $('#myModal2').modal('toggle');
                         $("#create_account").attr("type","submit");
                         $(".error_message_email").html('Email Verify Successfully.');
                         $(".error_message_email").show();
                         $("#verify_email").html("").hide();
                        } else {
                        $(".error_verify_email").html(response);
                        $(".error_verify_email").show(); 
                        }
                    }
                });
        }

        $(document).on("submit", "#form1", function(e){
          var email = $("#email").val();
          
              if(
                    email.match('@gmail.com') ||
                    email.match('@hotmail.com') ||
                    email.match('@live.com') ||
                    email.match('@msn.com') ||
                    email.match('@aol.com') ||
                    email.match('@yahoo.com')
            ){
                    alert('Error!! Only Business emails are accepted for Sign Up.');
                    e.preventDefault();
                    return false; // It's a publicly available email address
            } else {
                  var message = $(".error_message").html();
                  var message_email = $(".error_message_email").html();
                  if(message != "Mobile Number Verify Successfully." || message_email != "Email Verify Successfully.") {
                  alert('Email or Mobile Number not verified.');
                  e.preventDefault();
                  return  false;
                    }
                }
          });
    
</script>

<script>
  $('input[type=text]').bind("cut copy paste",function(e) {
     e.preventDefault();
 });
    
   </script>
  </body>
</html>