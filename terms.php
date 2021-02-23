<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Callerdesk</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/ion.rangeSlider.css" rel="stylesheet">
		<link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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

    $(window).on("load scroll", function () {
        var windowScroll = $(this).scrollTop();
        $(".sc-sp-data-dis").each(function () {
            var thisOffsetTop = Math.round($(this).offset().top - 30);

            if (windowScroll >= thisOffsetTop) {
                var thisAttr = $(this).attr('data-scsp');
                $('.sc-sp-list').parent().removeClass("active");
                $('.sc-sp-list[data-scsp="' + thisAttr + '"]').parent().addClass("active");
            }
        });
    });

    $('.sc-sp-list').click(function (ev) {
        ev.preventDefault();
        var thisAttr = $(this).attr("data-scsp");
        var scrollTo = $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').offset().top;

        $(this).parent().addClass("active").siblings().removeClass("active");

        $(".sc-sp-data-dis").removeClass("active");
        $('.sc-sp-data-dis[data-scsp="' + thisAttr + '"]').addClass("active");

        $('html, body').animate({
            scrollTop: scrollTo - 50
        }, 150);
    });



});

    </script>


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/style.css">

	</head>
	<body>
    
    <?php include_once('header.php'); ?><!--header ends-->
		
		<div class="main_page">

      <div class="terms-main-section">
			
    <div class="container">
      <div class="outersec">

<div class="right-col">
            <div class="inner">
                <ul>
                    <li>
                        <a href="" class="sc-sp-list">OverView</a>
                    </li>
                    <li>
                        <a href="#" class="sc-sp-list">Eligibility</a>
                    </li>
                    <li>
                        <a href="#" class="sc-sp-list">User Account</a>
                    </li>
                    
                    <li>
                        <a href="#" class="sc-sp-list">Availability of Website/Services</a>
                    </li>

                     <li>
                        <a href="#" class="sc-sp-list">User General Rule of conduct/Obligations</a>
                    </li>


               </ul>
            </div>
        </div>


        <div class="left-col">
            <div class="inner">
                <div class="header-div">
                    <p class="heading sc-sp-data-dis">Get Help</p>
                    <div class="data">

                      <h1 class="terms-heading">PLEASE READ THIS UNIVERSAL TERMS OF SERVICE AGREEMENT CAREFULLY, AS IT CONTAINS IMPORTANT INFORMATION REGARDING YOUR LEGAL RIGHTS AND REMEDIES. OVERVIEW</h1>

                      <p>
                       This Universal Terms of Service Agreement (this “Agreement”) is entered into by and between callerdesk.io, a Private Limited company ("deskotel communications") and you, and is made effective as of the date of your use of this website ("Site") or the date of electronic acceptance. This Agreement sets forth the general terms and conditions of your use of the Site and the products and services purchased or accessed through this Site (individually and collectively, the “Services”), and is in addition to (not in lieu of) any specific terms and conditions that apply to the particular Services.</p>

<p>Whether you are simply browsing or using this Site or purchase Services, your use of this Site and your electronic acceptance of this Agreement signifies that you have read, understand, acknowledge and agree to be bound by this Agreement, along with the following policies and the applicable product agreements, which are incorporated herein by reference:
</p>
<p>
The terms “we”, “us” or “our” shall refer to deskotel communications. The terms “you”, “your”, “User” or “customer” shall refer to any individual or entity who accepts this Agreement, has access to your account or uses the Services. Nothing in this Agreement shall be deemed to confer any third-party rights or benefits.
</p>
<p>
deskotel communications may, in its sole and absolute discretion, change or modify this Agreement, and any policies or agreements which are incorporated herein, at any time, and such changes or modifications shall be effective immediately upon posting to this Site. Your use of this Site or the Services after such changes or modifications have been made shall constitute your acceptance of this Agreement as last revised. If you do not agree to be bound by this Agreement as last revised, do not use (or continue to use) this Site or the Services. In addition, deskotel communications may occasionally notify you of changes or modifications to this Agreement by email. It is therefore very important that you keep your shopper account (“Account”) information current. deskotel communications assumes no liability or responsibility for your failure to receive an email notification if such failure results from an inaccurate email address.
</p>
<p>
PLEASE READ THE TERMS OF USE CAREFULLY BEFORE USING OR REGISTERING ON THE WEBSITE OR ACCESSING ANY MATERIAL, INFORMATION OR SERVICES THROUGH THE WEBSITE. YOUR USE OF THE WEBSITE OR THE SERVICES PROVIDED BY THE WEBSITE SHALL SIGNIFY YOUR ACCEPTANCE OF THE TERMS OF USE AND YOUR AGREEMENT TO BE LEGALLY BOUND BY THE SAME. 
</p>
                    
                        
                    </div>
                </div>
                <div class="header-div">
                    <p class="heading sc-sp-data-dis">Eligibility to Use</p>
                    <div class="data">

                      
                      <p>This Site and the Services are available only to Users who can form legally binding contracts under applicable law. By using this Site or the Services, you represent and warrant that you are</p>

<p>(i) at least eighteen (18) years of age,</p>

<p>(ii) otherwise recognized as being able to form legally binding contracts under applicable law, or</p>

<p>(iii) are not a person barred from purchasing or receiving the Services found under the laws of the India or other applicable jurisdiction.</p>

<p>If you are entering into this Agreement on behalf of a corporate entity, you represent and warrant that you have the legal authority to bind such corporate entity to the terms and conditions contained in this Agreement, in which case the terms "you", "your", "User" or "customer" shall refer to such corporate entity. If, after your electronic acceptance of this Agreement, deskotel communications finds that you do not have the legal authority to bind such corporate entity, you will be personally responsible for the obligations contained in this Agreement, including, but not limited to, the payment obligations. deskotel communications shall not be liable for any loss or damage resulting from deskotel communications reliance on any instruction, notice, document or communication reasonably believed by deskotel communications to be genuine and originating from an authorized representative of your corporate entity. If there is reasonable doubt about the authenticity of any such instruction, notice, document or communication, deskotel communications reserves the right (but undertakes no duty) to require additional authentication from you. You further agree to be bound by the terms of this Agreement for transactions entered into by you, anyone acting as your agent and anyone who uses your account or the Services, whether or not authorized by you.</p>
                        
                    </div>
                </div>
                <div class="header-div">
                    <p class="heading sc-sp-data-dis">User Account, Password, And Security</p>
                    <div class="data">

                        <p>In order to access some of the features of this Site or use some of the Services, you will have to create an Account. You represent and warrant to deskotel communications that all information you submit when you create your Account is accurate, current and complete, and that you will keep your Account information accurate, current and complete. If deskotel communications has reason to believe that your Account information is untrue, inaccurate, out-of-date or incomplete, deskotel communications reserves the right, in its sole and absolute discretion, to suspend or terminate your Account. You are solely responsible for the activity that occurs on your Account, whether authorized by you or not, and you must keep your Account information secure, including without limitation your customer number/login, password, Payment Method(s) (as defined below), and shopper PIN. For security purposes, deskotel communications recommends that you change your password and shopper PIN at least once every month for each Account. You must notify deskotel communications immediately of any breach of security or unauthorized use of your Account. deskotel communications will not be liable for any loss you incur due to any unauthorized use of your Account. You, however, may be liable for any loss deskotel communications or others incur caused by your Account, whether caused by you, or by an authorized person, or by an unauthorized person.</p>                    

                    </div>
                </div>
                <div class="header-div">
                    <p class="heading sc-sp-data-dis">Availability of Website/Services</p>
                    <div class="data">
                        
                     <p>Subject to the terms and conditions of this Agreement and our other policies and procedures, we shall use commercially reasonable efforts to attempt to provide this Site and the Services on a twenty-four (24) hours a day, seven (7) days a week basis. You acknowledge and agree that from time to time this Site may be inaccessible or inoperable for any reason including, but not limited to, equipment malfunctions; periodic maintenance, repairs or replacements that we undertake from time to time; or causes beyond our reasonable control or that are not reasonably foreseeable including, but not limited to, interruption or failure of telecommunication or digital transmission links, hostile network attacks, network congestion or other failures. You acknowledge and agree that we have no control over the availability of this Site or the Service on a continuous or uninterrupted basis, and that we assume no liability to you or any other party with regard thereto.</p>


<p>From time to time, deskotel communications may offer new Services (limited preview services or new features to existing Services) in a pre-release version. New Services, new features to existing Services or limited preview services shall be known, individually and collectively, as “Beta Services”. If you elect to use any Beta Services, then your use of the Beta Services is subject to the following terms and conditions: </p>

<p> (i) You acknowledge and agree that the Beta Services are pre-release versions and may not work properly;</p>

<p>(ii) You acknowledge and agree that your use of the Beta Services may expose you to unusual risks of operational failures; </p>


<p>(iii) The Beta Services are provided as-is, so we do not recommend using them in production or mission critical environments;</p>


<p>(iv) deskotel communications reserves the right to modify, change, or discontinue any aspect of the Beta Services at any time;</p>


<p>(v) Commercially released versions of the Beta Services may change substantially, and programs that use or run with the Beta Services may not work with the commercially released versions or subsequent releases;</p>



<p>(vi) deskotel communications may limit availability of customer service support time dedicated to support of the Beta Services;</p>


<p>(vii) You acknowledge and agree to provide prompt feedback regarding your experience with the Beta Services in a form reasonably requested by us, including information necessary to enable us to duplicate errors or problems you experience. You acknowledge and agree that we may use your feedback for any purpose, including product development purposes. At our request you will provide us with comments that we may use publicly for press materials and marketing collateral. Any intellectual property inherent in your feedback or arising from your use of the Beta Services shall be owned exclusively by deskotel communications;</p>


<p>(viii) You acknowledge and agree that all information regarding your use of the Beta Services, including your experience with and opinions regarding the Beta Services, is confidential, and may not be disclosed to a third party or used for any purpose other than providing feedback to deskotel communications; (ix) The Beta Services are provided “as is”, “as available”, and “with all faults”.To the fullest extent permitted by law, deskotel communications disclaims any and all warranties, statutory, express or implied, with respect to the Beta Services including, but not limited to, any implied warranties of title, merchantability, fitness for a particular purpose and non-infringement.</p>

<p>You acknowledge and agree that you have the necessary rights and permissions to share all information necessary to provide the Services with deskotel communications.You acknowledge and agree that the Services may be provided by independent contractors or third party service providers.
</p>
                    </div>
                </div>






<div class="header-div">
                    <p class="heading sc-sp-data-dis">User General Rule of conduct/Obligations</p>
                    <div class="data">
                        
                    <p>You acknowledge and agree that:</p>

                     <p>1.  Your use of this Site and the Services , including any content you submit, will comply with this Agreement and all applicable local, state, national and international laws, rules and regulations.</p>


<p>2.   You will not collect or harvest (or permit anyone else to collect or harvest) any User Content (as defined below) or any non-public or personally identifiable information about another User or any other person or entity without their express prior written consent.</p>

<p> 3.You will not use this Site or the Services in a manner (as determined by deskotel communications in its sole and absolute discretion) that: Is illegal, or promotes or encourages illegal activity; o   Promotes, encourages or engages in terrorism, violence against people, animals, or property; o  Promotes, encourages or engages in any spam or other unsolicited bulk calling, or computer or network hacking or cracking; o    Infringes on the intellectual property rights of another User or any other person or entity; o  Violates the privacy or publicity rights of another User or any other person or entity, or breaches any duty of confidentiality that you owe to another User or any other person or entity; o Interferes with the operation of this Site or the Services found at this Site; o  Contains or installs any viruses, worms, bugs, Trojan horses or other code, files or programs designed to, or capable of, disrupting, damaging or limiting the functionality of any software or hardware; or o  Contains false or deceptive language, or unsubstantiated or comparative claims, regarding deskotel communications or deskotel communications Services.</p>

<p>4. You will not copy or distribute in any medium any part of this Site or the Services , except where expressly authorized by deskotel communications.</p>


                    </div>
                </div>












                
</div>
        </div>

        
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

    </div>

    </div>      
  





  	</div>
        
        
         <?php include_once('footer.php'); ?><!--header ends-->
        
        
        
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/ion.rangeSlider.js"></script>
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
	</body>
</html>