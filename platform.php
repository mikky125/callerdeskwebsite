<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Callerdesk</title>
		
		<meta property="og:locale" content="en-in" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Callerdesk" />
		<meta property="og:description" content="" />
		<meta property="og:url" content="https://callerdesk.io/platform.php" />
		<meta property="og:site_name" content="callerdesk" />
		<meta property="og:image" content="https://callerdesk.io/images/calllogo.png" />
		<meta name="twitter:card" content="Callerdesk" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="https://callerdesk.io/images/calllogo.png" />
		
		<link rel="canonical" href="https://callerdesk.io/platform.php" />
		
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





</style>





<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script>

$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

</script>


	</head>
	<body>
    
    <?php include_once('header.php'); ?><!--header ends-->
		
		<div class="main_page">
          
            
<div class="section1 section_page about-banner">

				  
         <div class="container">
          


     <div class="inner_section">


      <div class="container">
  <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">Introduction</a>
                <a href="#" class="list-group-item text-center">Introduction</a>
                <a href="#" class="list-group-item text-center">Introduction</a>
                <a href="#" class="list-group-item text-center">Introduction</a>
                <a href="#" class="list-group-item text-center">Introduction</a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                  
                  <center>
                  
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/owsfdh4gxyc" 
                  frameborder="0" allowfullscreen></iframe>

                 
                      
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/owsfdh4gxyc" 
                  frameborder="0" allowfullscreen></iframe>

                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                    
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/owsfdh4gxyc" 
                  frameborder="0" allowfullscreen></iframe>

                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/owsfdh4gxyc" 
                  frameborder="0" allowfullscreen></iframe>

                      
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                 <center>
                     
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/owsfdh4gxyc" 
                     frameborder="0" allowfullscreen></iframe>
                     
                 </center>
                </div>
            </div>
        </div>
  </div>
</div>
	
    </div>
                  
                  
       </div>
      
      </div>
            
            
                  



<?php include_once('testimonial.php'); ?><!--header ends-->

<?php include_once('meetsales.php'); ?><!--header ends-->




       
<?php include_once('subscribe.php'); ?><!--header ends-->
          
          
          
			<div class="section5 section_page">
				
		  </div>
		</div>
        
        
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