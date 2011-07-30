<?php namespace melt; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Melt: The PHP Framework You've Been Waiting For</title>

<link rel="stylesheet" href="<?php echo APP_ROOT_URL; ?>static/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo APP_ROOT_URL; ?>static/css/buttons.css" type="text/css" media="screen" />

<!-- [favicon] begin -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo APP_ROOT_URL; ?>static/favicon.ico" />
<link rel="icon" type="image/x-icon" href="<?php echo APP_ROOT_URL; ?>static/favicon.ico" />
<!-- [favicon] end -->

<!-- Some hacks for the dreaded IE7 ;) -->
<!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo APP_ROOT_URL; ?>css/ie7.css" type="text/css" media="screen" />
<![endif]-->

<!-- include jquery here!! -->
<script type='text/javascript' src='<?php echo APP_ROOT_URL; ?>static/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo APP_ROOT_URL; ?>static/js/cufon-yui.js?ver=3.1.4'></script>
<script type='text/javascript' src='<?php echo APP_ROOT_URL; ?>static/js/Gotham_300-Gotham_400-Gotham_italic_300-Gotham_italic_400.font.js?ver=3.1.4'></script>

<meta name="description" content="Melt: Web application framework optimized simplicity and freedom. Better code in less time. Written in PHP." />
<meta name="keywords" content="melt framework, melt, meltphp, melt php, php framework, web app, web application, app development, coding, melt software, php framework" />



<script type="text/javascript">                   
    Cufon.replace('h1, h2.subtitle, h2, h3.not-found',{fontFamily: 'Gotham', hover: true });
</script>    

</head>

<body class="home page page-id-2 page-template page-template-landing-php">
    <!-- START CONTAINER -->
    <div class="container">
    
        <!-- START LOGO -->
    	<a href="<?php echo APP_ROOT_URL; ?>" title="Melt Framework">
            <img src="<?php echo APP_ROOT_URL; ?>static/img/melt-logo.png" class="logo" alt="Melt Framework" />
        </a>
        <!-- END LOGO -->
        
<?php echo $this->content; ?>

        
        

    <div id="footer">
    <?php /*
        <div class="menu-footer"><ul id="menu-footer" class="menu"><li id="menu-item-59" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-59"><a href="index.html">Home</a></li>
        <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10"><a href="terms-and-conditions/index.html">License</a></li>
<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="http://stackoverflow.com/questions/tagged/melt">Team & Contributors</a></li>
</ul></div>  -->    
        
       */ ?>
      

                                <!-- <h2 class="like-this-framework">We really think <span>you will like</span> this framework</h2> -->
  <div class="made-in-sweden"></div>
              
 <p class="copyright">
            Copyright&nbsp;&copy;&nbsp;2010-2011 Melt Software AB. 

           
            Melt is licensed under <a href="<?php echo APP_ROOT_URL; ?>license">a BSD License</a> and maintained by <a href="<?php echo APP_ROOT_URL; ?>team">the awesome Melt team</a>.
            <br/>
        </p>
  
  
  <p class="footer-follow">
			<a id="follow-us-on-twitter" class="no-hover" href="http://www.twitter.com/meltframework"></a>
			<a id="follow-us-on-facebook" class="no-hover" href="http://www.facebook.com/pages/Melt-Framework/232843960089743"></a>
		</p>
		
    </div>



	
</div>
<!-- END CONTAINER -->
	
</body>
</html>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24843464-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- GitHub Ribbon -->
<a href="http://github.com/melt"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/edc6dae7a1079163caf7f17c60495bbb6d027c93/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub"></a>