<?php
if(!empty($_POST)) {
  if(strlen($_POST['number']) == 10) {
        $to = "kaushal@callerdesk.io";  
        $from = "support@calledesk.io";

        $email = $_POST['email']; 
        $name = $_POST['name'];
        $message = $_POST['message'];
        $number = $_POST['number'];
        $subject = "Contact Request Form submission";
        $message = "Name = " . $name . "\n\n" . "Email Address = " . $email . "\n\n" . "Phone number = " . $number. "\n\n" . "Message = " . $message;
        $headers = "From:" . $from;

      if(mail($to,$subject,$message,$headers)){

        $message= "Mail Sent. Thank you, we will contact you shortly.";

      }
      else{
        $message= "Sorry Can't Send mail";

      }
    } else {
     $message= "Invalid Number. Please Enter correct 10 digit Number.";

    }
}
 ?>

<!DOCTYPE html>
<html lang="en-in">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Contact Us - Callerdesk</title>
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
	</head>
	<body>
    
    <?php include_once('header.php'); ?><!--header ends-->
		
    

    <div class="row contact-bg">


              <div class="col-sm-12 upper-area-wrap">
             <div class="col-sm-12 upper-area">

                <h1>CONTACT US</h1>
                <p>Our Team of customer care ninjas are ready to hear from you.</p>

            </div>
      </div>

    </div><!-- row ends -->



     <div class="row">

      <div class="container">

      <div class="col-sm-6 contact-left">


           <div class="contact-wrapper">
            <h2 style="margin-top: 20px; font-size: 20px;">Reach out to us</h2>

            <p> Got a question about calledesk?
            are you interested in partenering with us? have some suggestion or just want to say hi? Contact Us</p>

            </div>
      <p style="color: #499e7b !important;"><?php echo $message;?></p>
       <form method="post" action="">  
            
            <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter name" required="">
            </div>
            
            <div class="form-group">
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
            </div>

            <div class="form-group">
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" name="number" required="">
            </div>

            

            <div class="form-group">
    
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Enter Message" name="message"></textarea>
        </div>


         <div class="form-group">
         <button type="submit" class="btn btn-primary contact-submit-btn">Submit</button>
         </div>


       </form>
          


          </div>





          <div class="col-sm-6 contact-right">

            
          <div class="contact-wrapper">

            <h2 style="margin-top: 20px; font-size: 20px;">Customer Care</h2>
            <p> Not sure where to start? need help in activating the calledesk?
            just visit out <a href ="https://help.callerdesk.io/" target="_blank">help center</a> or get in touch with us</p>

          </div>


             <div class="team-intro">
             

            <p class="description"><i class="fa fa-location-arrow" aria-hidden="true"></i> G-20, LGF, Sector 63 Noida, Uttar Pradesh 201307</p>
			<p class="description"><i class="fa fa-phone" aria-hidden="true"></i> +91-888-220-1213 </p>
            <p class="description"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@callerdesk.io</p>
            <p class="description"><b>For Media related queries:</b> +91-845-482-2720</p>
</div><!-- Employee Details -->    

              <div class="row contact-details">
            

               <div class="contact-detail-image">
					<ul>
						<li><a href="https://www.facebook.com/callerdesk" target="_blank" class="fb_ico ico_size"></a></li>
						<li><a href="https://www.twitter.com/callerdesk" target="_blank" class="twitt_ico ico_size"></a></li>
						<li><a href="https://www.linkedin.com/company/callerdesk" target="_blank" class="link_ico ico_size"></a></li>
					</ul>
               </div>

          


        </div>

          </div>


</div>

    </div><!-- row ends -->





        
        
         <?php include_once('footer.php'); ?><!--header ends-->
        
        
        
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
</script>

        
	</body>
</html>