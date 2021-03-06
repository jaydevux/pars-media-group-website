<?php session_start(); ?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Pars Media Group| We Make Leads</title>
<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<meta name="WE MAKE LEADS Drug Rehab and Alcohol Treatment Leads" content="Many Programs Available | Per Call or Per Site Pricing Available
Hundreds a week available | 100 % Call Recording and Tracking">
<meta name="parsmediagroup.com" content="Perfomance - Analysis - Research - Strategy">

    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

<script src="js/libs/modernizr-1.7.min.js"></script>

</head>

<body>


    <div class="blueLine"></div>
<div id="topContainer">
    

        <div class="centerContainer"> 

            <div class="logo"> <img src="img/pars-logo.jpg"></div>
                <h1 class="title">WE MAKE LEADS<br /> Drug Rehab and Alcohol Treatment Leads<h1>
                    <div class="advantages">    
                        
                            <p>Many Programs Available | Per Call or Per Site Pricing Available<br />Hundreds a week available | 100 % Call Recording and Tracking</p>

                    </div> <!-- End advantages-->   


        </div> <!-- End centerContainer-->

</div> <!-- End topContainer-->


<div class="boxShadow"><!-- boxShadow--></div> 

<div id="contentContainer"> 

        <div class="centerContainer"> 
                <h1 class="titleCall"> Radio and TV Program</h1>

                <div class="contentInfo">   
                    <ul>
                                <li>- Proven Track Record / Immediate Results </li>
                                <li>- All calls are tracked and recorded via a 3rd party call system </li>
                                <li class="reportImg"><img src="img/report_call.png"><li>
                                <li>- Hundreds a week available</li>
                                <li>- TV - Duration of 60 seconds sent through an IVR in advance of call center intercept</li>
                                <li>- Radio - Duration 60 seconds</li>

                    </ul>
                </div>  

                <h1 class="titleCall"> Organic Search Program </h1>

                    <div class="contentInfo">   
                    <ul>
                                <li>- We build out lead gen sites </li>
                                <li>- We lower your acquisition cost    </li>
                                <li>- Each site listed in GOOGLE and other major search engines local places<li>
                                <li>- Each will have a Virtual office and Google places setup, the sites will each be SEO’d for up to 5 keywords with custom content for each keyword optimized for search</li>
                                <li>- TV - Duration of 60 seconds sent through an IVR in advance of call center intercept</li>
                                <li>- Open a Local virtual office NOW! </li>

                                <li class="reportImg"><img src="img/report_seo.png"></li>

                    </ul>
                </div>


        </div> <!-- End centerContainer-->

</div> <!-- End contentContainer-->


<div class="footer">

<div class="centerContainer">

<div class="firstColumn">

<div id="container">
        <div id="contact-form" class="clearfix">
            <?php
			//init variables
			$cf = array();
			$sr = false;
			
			if(isset($_SESSION['cf_returndata'])){
				$cf = $_SESSION['cf_returndata'];
			 	$sr = true;
			}
            ?>
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="info">There were some problems with your form submission:</li>
                <?php 
				if(isset($cf['errors']) && count($cf['errors']) > 0) :
					foreach($cf['errors'] as $error) :
				?>
                <li><?php echo $error ?></li>
                <?php
					endforeach;
				endif;
				?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
            <form method="post" action="process.php">
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Full Name or Company Name" required autofocus />
                
                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="your@email.com" required />
                
                <label for="telephone">Telephone: </label>
                <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                
                <!--
                <label for="enquiry">Enquiry: </label>
                <select id="enquiry" name="enquiry">
                    <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>
                    <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Sales</option>
                    <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Support</option>
                </select> -->
                
                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 10 charcters" required data-minlength="10"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                
                <span id="loading"></span>
                <input type="submit" value="SUBMIT" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
        </div>
    </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->


</div>  <!-- End firstColumn-->

<div class="thirdColumn lastColumn">

                        <span><img src="img/pars-logo.jpg"></span>
                        <p style="font-weight: bolder; font-size:30px; padding-top:20px;">LET'S KEEP IN TOUCH<p>
                        <p><a href="mailto:info@parsmediagroup.com">info@parsmediagroup.com</a></p>    
                        <p style="color:#000; font-weight: bolder; padding-top:20px;">Call Now!</p>
                        <p style="font-size:36px; padding-top:5px; padding-bottom:20px;">954-533-0408</p>

                        <p style="color:#000; font-weight: bolder;">Visit Us</p>

                        <p style="padding-top:10px;">2700 W. CYPRESS CREEK ROAD, SUITE B-106<p>
                        <p>FORT LAUDERDALE, FLORIDA 33309<p>      
                        
                                                

                    </div>  

 </div>  <!-- End centerContainer-->                    

</div><!-- Footer-->


	<div class="blackLine">

		<p><a href="http://parsmediagroup.com/main.php">Homepage</a> | <a href="http://parsmediagroup.com/privacy.php">Privacy</a> | <a href="http://parsmediagroup.com/terms.php">Terms of Use</a> | <a href="http://parsmediagroup.com/sitemap.php">Sitemap</a>| <a href="#top">Back to Top</a> | PARS Media Group (c) Copyright 2008-2013, All Rights Reserved.<p>
	</div>



</body>

</html>