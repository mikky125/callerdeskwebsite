<!DOCTYPE html>
<html lang="en-in">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Privacy Policy - Callerdesk</title>
		<meta name="description" content="Read our privacy policy and know how we handle your personal information. Visit us to know what kind of personal information we store." >
		<meta name="twitter:card" content="summary_large_image" />
		<meta property="og:locale" content="en-in" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Privacy Policy - Callerdesk" />
		<meta property="og:description" content="Read our privacy policy and know how we handle your personal information. Visit us to know what kind of personal information we store." />
		<meta property="og:url" content="https://callerdesk.io/privacy.php" />
		<meta property="og:site_name" content="callerdesk" />
		<meta property="og:image" content="https://callerdesk.io/images/calllogo.png" />
		<meta name="twitter:card" content="" />
		<meta name="twitter:description" content="Read our privacy policy and know how we handle your personal information. Visit us to know what kind of personal information we store." />
		<meta name="twitter:title" content="Privacy Policy - Callerdesk" />
		<meta name="twitter:image" content="https://callerdesk.io/images/calllogo.png" />
		
		<link rel="canonical" href="https://callerdesk.io/privacy.php" />
		
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
                        <a href="#overview" class="sc-sp-list">Overview</a>
                    </li>
                    <li>
                        <a href="#eligibility" class="sc-sp-list">Collection</a>
                    </li>
                    <li>
                        <a href="#userAc" class="sc-sp-list">Usage</a>
                    </li>

                    <li>
                        <a href="#availofWeb" class="sc-sp-list">Disclosure</a>
                    </li>
                    <li>
                        <a href="#userGenral" class="sc-sp-list">Using Information from CallerDesk</a>
                    </li>
                    <li>
                        <a href="#deskotel" class="sc-sp-list">Access, Modification, and Deletion</a>
                    </li>
                    <li>
                        <a href="#adreserveRIght" class="sc-sp-list">Data Security</a>
                    </li>
                    <li>
                        <a href="#paymentq" class="sc-sp-list">Confidentiality of Information</a>
                    </li>
                    <li>
                        <a href="#ownerShipcon" class="sc-sp-list">General</a>
                    </li>
                    

                      
                </ul>
            </div>
        </div>


        <div class="left-col">
            <div class="inner">
                <div class="header-div" id="overview">
                    <p class="heading sc-sp-data-dis">PLEASE READ THIS UNIVERSAL TERMS OF SERVICE AGREEMENT CAREFULLY, AS IT CONTAINS IMPORTANT INFORMATION REGARDING YOUR LEGAL RIGHTS AND REMEDIES. OVERVIEW</p>
                    <div class="data">
					<h1 class="h3">Privacy Policy</h1>
                      <p>
                        This privacy policy describes how we handle your personal information. We collect, use, and share personal information to help the CallerDesk website ("CallerDesk") work and to keep it safe (details below). In formal terms, Deskotel Communications Private Limited, acting itself and through its subsidiaries, is the "data controller" of your personal information. This policy is effective 01/04/2017.</p>
                    </div>
                </div>
                <div class="header-div"  id="eligibility">
                    <p class="heading sc-sp-data-dis">Collection</p>
                    <div class="data">

                        <p>We collect and store the following personal information:</p>


                       <p>IP address, email address, mobile number, physical contact information, and (depending on the service used) sometimes financial information.</p>


<p>Cookie information which is a small amount of data that is sent to a user’s browser from a web server and is eventually stored on a user’s computer hard drive. This information is maintained distinctly and is not linked to the personal information you submit to CallerDesk</p>

<p>Computer sign-on data, statistics on page views, traffic to and from CallerDesk and Ad data (all through cookies – you can take steps to disable the cookies on your browser although this is likely to affect your ability to use the site)</p>


<p>Other apps installed on device IMEI number, Other information, 
including users IP address and standard web log information.</p>

                    </div>
                </div>
                <div class="header-div" id="userAc">
                    <p class="heading sc-sp-data-dis">Usage</p>
                    <div class="data">
<p>We use users' personal information toProvide our services</p>
<p>Resolve disputes, collect fees, and troubleshoot problems</p>
<p>Encourage safe trading and enforce our policies</p>
<p>Customize users' experience, measure interest in our services, and inform users about services and updates
Communicate marketing and promotional offers to you</p>
<p>Do other things for users as described when we collect the information</p>
<p>Track usage partners and if necessary, deny service in accordance with our terms</p>
</div>
                </div>
                <div class="header-div" id="availofWeb">
                    <p class="heading sc-sp-data-dis">Disclosure</p>
                    <div class="data">
 <p>All information contained by CallerDesk is treated as strictly confidential and CallerDesk does not and will not disclose or share such confidential information to / with any external organization. The users’ privacy is very important to us. We do not and shall not at any point in time, either sell or rent users’ personal information to third parties without users’ explicit consent.</p>


<p>We may be required from time to time to disclose users’ personal information to Governmental or law enforcing agencies or our regulators, but we will only do so under proper authority.</p>

<p>CallerDesk also reserves the right to make use of the personal information in any investigation or judicial process relating to fraud on account of such transactions during the period CallerDesk retains such information.</p>

<p>We may also disclose personal information to enforce our policies, respond to claims that a posting or other content violates other’s rights, or protects anyone’s rights, property or safety.</p>

<p>We may also share personal information with:</p>

<p>Corporate affiliates who help detect or prevent potentially illegal acts and provide joint services</p>

<p>Service providers who help with our business operations</p>

<p>Third party vendors, including Google, use cookies to serve ads based on a user's prior visits to the website</p>

<p>Google's use of the DoubleClick cookie enables it and its partners to serve ads to your users based on their visit to your sites and/or other sites on the Internet. Users may opt out of the use of the DoubleClick cookie for interest-based advertising by visiting Ads Settings.</p>


                    </div>
                </div>
                <div class="header-div" id="userGenral">
                    <h2 class="heading sc-sp-data-dis" style="text-transform: uppercase; font-weight: 600; font-size: 20px; padding: 10px; color: #525151; border-bottom: 1px solid #e8e8e8;">Using Information from CallerDesk</h2>
                    <div class="data">

                        <p>You may use personal information gathered from CallerDesk only to follow up with another user about a specific posting, not to send spam/ phishing or collect personal information from someone who hasn't agreed to that.</p>
                        
                        
                        
                        

                       </div>
                </div>
                <div class="header-div" id="deskotel">
                    <p class="heading sc-sp-data-dis">Access, Modification, and Deletion</p>
                    <div class="data">
                        <p>You can see, modify or erase your personal information by reviewing your posting or account status page. Contact customer support at support@CallerDesk.io to review any personal information we store that is not available on CallerDesk. There may be a charge associated with such requests but these will not exceed the amounts permitted by law. We delete personal information when we no longer need it for the purposes we described earlier. We retain personal information as permitted by law to resolve disputes, enforce our policies; and prevent bad guys from coming back.</p>


                    </div>
                </div>
                <div class="header-div" id="adreserveRIght">
                    <p class="heading sc-sp-data-dis">Data Security</p>
                    <div class="data">
                      <p>
                        We use a number of mechanisms (encryption, passwords, physical security) to protect the security and integrity of your personal information against unauthorized access and disclosure. Unfortunately, no data transmission over the internet can be guaranteed to be completely secure. So while we strive to protect such information, we cannot ensure or warrant the security of any information you transmit to us and you do so at your own risk. Once any personal information comes into our possession, we will take reasonable steps to protect that information from misuse and loss and from unauthorised access, modification or disclosure.</p>

                         
                     </div>
                </div>
                <div class="header-div" id="paymentq">
                    <p class="heading sc-sp-data-dis">Confidentiality of Information</p>
                    <div class="data">
                      <p>
                        Users who use any of the features on CallerDesk agree and accept that they have been fully informed by CallerDesk that the use of features may lead to publication, to all users of CallerDesk, of any personal information posted by them while using any specific feature on CallerDesk. Users further agree that the authenticity of, and consequences from the posting by users of any personal information of themselves or any other person, are the sole responsibility of the user. Users further agree and accept that the terms of the Privacy Policy will be applicable to the use of all features, existing and new. However, the Users agree and accept that confidentiality of information posted on such features has been waived by the Users of such features themselves.</p>
                        <p>By using callerdesk services and on procuring quotations therein, you hereby authorize us to contact you via calls,mails and/or text messages on the contact details so provided,to furnish you with information with regards to the services and products of Deskotel communications pvt. ltd.This authorization shall be licit for the mentioned purposes irrespective of whether you are registered with the NDNC registry.</p>

                    </div>
                </div>
                
                <div class="header-div" id="ownerShipcon">
                    <p class="heading sc-sp-data-dis">General</p>
                    <div class="data">
 <p>We may update, upgrade, modify (partially &/or fully) this policy at any time. If we or our corporate affiliates are involved in a merger or acquisition, we may share personal information with another company, but this policy will continue to apply. Send questions about this policy to support@CallerDesk.io</p>

<p>CallerDesk shall be under no liability whatsoever in respect of any loss or damage arising directly or indirectly out of the decline of authorization for any Transaction, on Account of the Cardholder having exceeded the pre-set limit mutually agreed by us with our acquiring bank from time to time.</p>


                    
                    </div>
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