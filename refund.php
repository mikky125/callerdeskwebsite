<!DOCTYPE html>
<html lang="en-in">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Contact Us - Callerdesk</title>
		<meta name="description" content="Want to know more about Callerdesk or have any queries? You may contact us through filling in the provided space or call +91-927-888-3000." >
		<meta name="twitter:card" content="summary_large_image" />
		<meta property="og:locale" content="en-in" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Contact Us - Callerdesk" />
		<meta property="og:description" content="Want to know more about Callerdesk or have any queries? You may contact us through filling in the provided space or call +91-927-888-3000." />
		<meta property="og:url" content="https://callerdesk.io/refund.php" />
		<meta property="og:site_name" content="callerdesk" />
		<meta property="og:image" content="https://callerdesk.io/images/calllogo.png" />
		<meta name="twitter:card" content="" />
		<meta name="twitter:description" content="Want to know more about Callerdesk or have any queries? You may contact us through filling in the provided space or call +91-927-888-3000." />
		<meta name="twitter:title" content="Contact Us - Callerdesk" />
		<meta name="twitter:image" content="https://callerdesk.io/images/calllogo.png" />
		
		<link rel="canonical" href="https://callerdesk.io/refund.php" />
		
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
    .header-div{
        /*padding-top: 100px !important;*/
    }
</style>
<script>
  

$(function () {
    // ADDING DATA
    (function () {
        var inc = 0;
        $('.sc-sp-data-dis').each(function () {
            $(this).attr('data-scsp', "data" + inc)
            inc++;
        });
    })();
    (function () {
        var inc = 0;
        $('.sc-sp-list').each(function (ev) {
            $(this).attr('data-scsp', "data" + inc)
            inc++;
        });
    })();

//    $(window).on("load scroll", function () {
//        var windowScroll = $(this).scrollTop();
//        $(".sc-sp-data-dis").each(function () {
//            var thisOffsetTop = Math.round($(this).offset().top - 30);
//
//            if (windowScroll >= thisOffsetTop) {
//                var thisAttr = $(this).attr('data-scsp');
//                $('.sc-sp-list').parent().removeClass("active");
//                $('.sc-sp-list[data-scsp="' + thisAttr + '"]').addClass("active");
//                //$('.sc-sp-list').addClass("active").parent().parent().addClass("active");
//            }
//        });
//    });
//
//    $('.sc-sp-list').click(function (ev) {
//        ev.preventDefault();
//        var thisAttr = $(this).attr("data-scsp");
//        var scrollTo = $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').offset().top;
//        $('html, body').animate({
//            scrollTop: scrollTo - 100
//        }, 200);
//        
//        $("li").removeClass("active");
//        $(".sc-sp-list active").removeClass("active");
//        $(this).parent().addClass("active");
//        $(this).addClass("active");
//        
//        
//        
//    });
    
    
    $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top-150
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
        $("li").removeClass("active");
        $(".sc-sp-list active").removeClass("active");
        $(this).parent().addClass("active");
        $(this).addClass("active");
        //$('.header-div').addClass('')
  });
    
    
    /*$('.sc-sp-list').click(function (ev) {
        ev.preventDefault();
        $(".sc-sp-data-dis").removeClass("active");
            //        $(this).parent().addClass("active").siblings().removeClass("active");
        
        $(this).parent().addClass("active");
        
        $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').addClass("active");
        //$(this).parent().addClass("active");
        
        var thisAttr = $(this).attr("data-scsp");
        var scrollTo = $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').offset().top;
        $('html, body').animate({
            scrollTop: scrollTo - 100
        }, 200);
    });*/



});

</script>




	</head>
	<body>
    
    <?php include_once('header.php'); ?><!--header ends-->
		<div class="terms-outer-wrapper">
		  <div class="outersec">
       

       <div class="right-col">
            <div class="inner">
                <ul>
                    <li>
                        <a href="#overview" class="sc-sp-list">Standard Refund Terms</a>
                    </li>
                    <li>
                        <a href="#eligibility" class="sc-sp-list">Discontinue The Usage</a>
                    </li>
                    <li>
                        <a href="#userAc" class="sc-sp-list">Committed Service Level</a>
                    </li>

                    <li>
                        <a href="#availofWeb" class="sc-sp-list">Unavailability Cloud Phone</a>
                    </li>
                    
                    

                      
                </ul>
            </div>
        </div>


        <div class="left-col">
            <div class="inner">
				
                <div class="header-div" id="overview">
                    <p class="heading sc-sp-data-dis">Standard Refund Terms</p>
                    <div class="data">
                      <p>
                        TProducts purchased from CallerDesk.io refunded only if cancelled within the following timeframe:</p>
<h1 class="h3">Refund Policy</h1>
<p>Annual Plans - Within 30 days of the date of the transaction</p>
<p>Monthly Plans* - Within 48 hours of the date of the transaction.</p>
*Monthly Plans include all plans with less than a 1-year term (i.e., 6 months., 9 months., etc.)

<p>“Date of the transaction,” for the purpose of this Refund Policy, means the date of purchase of any product or service, which includes the date any renewal is processed by CallerDesk.io in accordance with the terms and conditions of the applicable product or service agreement.</p>

<p>You may cancel a product at any time, but a refund will only be issued if cancellation is requested within the refund timeframe specified for the applicable product, if available at all.</p>
                    </div>
                </div>
                <div class="header-div"  id="eligibility">
                    <h2 class="heading sc-sp-data-dis" style="font-weight: 600; text-transform: uppercase; padding: 10px; color: #525151; border-bottom: 1px solid #e8e8e8; font-size: 20px;">In case, the User decides to discontinue the usage of services from us, the following conditions will apply:</h2>
                    <div class="data">

                        <p>You may terminate a Subscription at any time during its Term; however, you must pay all amounts due and owing before the termination is effective.</p>


                       <p>One-Month Subscription: A Subscription having a one-month Term may be terminated anytime without any cancellation fee.</p>
<p>Subscriptions of more than one-month If you terminate a Subscription to CallerDesk Services within 30 days of the date on which the Subscription became effective or was renewed, no refunds will be provided and you must pay for the initial 30 days of the Subscription, but no payments will be due for the remaining portion of the terminated Subscription. If you terminate a Subscription to CallerDesk Services at any other time during the term, you must pay for the remaining of the Term, and no refunds will be provided.</p>

<p>For all other Online Services If you terminate a Subscription before the end of the Term, you must pay a fee equal to one-month’s Subscription fee and you will receive a refund of any portion of the Subscription fee you have paid for the remaining of the Term; provided, however, no refunds will be provided for partially unused months.</p>

<p>No refund claims will be entertained once service acceptance is received from the user. Also, We will not be liable to refund the User in cases of force majeure or outages where We do not have a control over the resolution time, for eg. Outages at the end of our Telecom Partners, Cloud Partners, Internet Services Providers or Internet Hackers.</p>

                    </div>
                </div>
                <div class="header-div" id="userAc">
                    <p class="heading sc-sp-data-dis">Committed Service Level</p>
                    <div class="data">
<p>We guarantee 99% uptime for Our services. We measure uptime by the following mechanism:</p>

<p>We guarantee less than 20 failures in a month for 99% uptime. This will exclude scheduled downtime for maintenance and upgrades. The scheduled downtime will be not be more than 2 times in 2 weeks with a maximum duration of 2 hours per downtime. Scheduled downtime will be planned during the non-working hours. The User will be informed of the downtime in advance.</p>

<p>In case of breach of the guaranteed uptime, the penalties and its associated refund amount shall be governed by the following conditions:</p>

<p>For 0-20 incidents/ month – Zero Penalty.</p>
<p>21-40 incidents / month – 5% of the monthly rental will be refunded.</p>
<p>41-100 incidents / month – 10% of the monthly rental will be refunded.</p>
<p>100 incidents / month – 25% of the monthly rental will be refunded.</p>

<p>We may see downtime in cases of force majeure or outages where We do not have a control over the resolution time, for eg. Outages at the end of our Telecom Partners, Cloud Partners, Internet Services Providers or Internet Hackers. Also, in the event where User has failed to recharge their account or on non- payment, We shall be entitled to discontinue the services and will not be held liable for any losses suffered by the User during this period due to suspension/discontinuation of services.</p>

<p>We will however, upon request, endeavor to provide a workaround for users such that the impact can be minimized. We further endeavor to reduce such downtimes by continuous up gradation of technology and automation of processes and continuous evaluation with its partners.</p>
</div>
                </div>
                <div class="header-div" id="availofWeb">
                    <p class="heading sc-sp-data-dis">Unavailability of Desired or Committed Cloud Phone</p>

<div class="data">
                    
                     <p>We will try to amicably resolve such issue by proposing best alternatives as a replacement to the desired number. No refund will be entertained if We do not find genuine interest on part of the User to resolve the issue.</p>

</div>
               
           </div>
        </div>
      
    </div>
 </div>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>







    
        
        
        
		 
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