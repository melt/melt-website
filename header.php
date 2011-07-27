<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Melt Framework</title>

<link rel="stylesheet" href="/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/buttons.css" type="text/css" media="screen" />

<!-- [favicon] begin -->
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<link rel="icon" type="image/x-icon" href="/favicon.ico" />
<!-- [favicon] end -->

<!-- Some hacks for the dreaded IE7 ;) -->
<!--[if IE 7]>
    <link rel="stylesheet" href="/css/ie7.css" type="text/css" media="screen" />
<![endif]-->

<!-- include jquery here!! -->
<script type='text/javascript' src='/js/cufon-yui.js?ver=3.1.4'></script>
<script type='text/javascript' src='/js/Gotham_300-Gotham_400-Gotham_italic_300-Gotham_italic_400.font.js?ver=3.1.4'></script>


<script type="text/javascript">                   
    Cufon.replace('h1, h2.subtitle, h2, h3.call, h3.not-found',{fontFamily: 'Gotham', hover: true });
</script>
<script  type='text/javascript'>
    
$(function() {
     $('.features-list li').hover(
          function() {
               var idx = $('.features-list li').index(this);
               $('.features-list li p').eq(idx).show();
          },
          function() {
               var idx = $('.features-list li').index(this);
               $('.features-list li p').eq(idx).hide();
          }
  });
});
</script>
<script  type='text/javascript'>
$(document).ready(function(){
	$(".button").hover(function() {
		$(this).attr("src","button-hover.png");
			}, function() {
		$(this).attr("src","button.png");
	});
});
</script>
</head>

<body class="home page page-id-2 page-template page-template-landing-php">
    <!-- START CONTAINER -->
    <div class="container">
    
        <!-- START LOGO -->
    	<a href="index.php" title="Melt Framework">
            <img src="/images/melt-logo.png" class="logo" alt="Melt Framework" />
        </a>
        <!-- END LOGO -->
<br/>