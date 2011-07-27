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
    	<a href="index.html" title="Melt Framework">
            <img src="/images/melt-logo.png" class="logo" alt="Melt Framework" />
        </a>
        <!-- END LOGO -->
<br/>
        
        <h2 class="subtitle">The <span>PHP framework</span> you've been waiting for</h2>
<!-- <img src="/images/screen-header.jpg" alt="Beauty and Clean - Free Minimal Wordpress Theme" /> -->
                        <!-- <h1>Build <span>secure</span> and <span>scalable</span> web apps in <span>less time</span></h1>-->



<!-- START CALL TO ACTIONS -->
<ul class="actions">
    

    
    <li><a class="green button" href="http://github.com/melt/melt">Download Melt<span>Completely free, BSD License</span></a></li>
    <p class="tinyText">Version 1.0 released July 27th, 2011. Requires PHP 5.3 & MySQL.</p>
 
        
    <!-- https://api.github.com/users/melt/repos?per_page=100&page=1-->
</ul>
<div class="socialmediabuttons">
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	<fb:like href="facebook.com/pages/Melt-Framework/232843960089743" send="false" layout="button_count" width="80" show_faces="false" font=""></fb:like>
	
	<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="meltframework" data-lang="en">Tweet</a>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<g:plusone size="small" href="http://www.meltframework.org"></g:plusone>
</div>

<div class="clearer"></div>
<!-- END CALL TO ACTIONS -->

<!-- START FEATURES LIST -->
<h2>Features</h2>

<ul class="features-list">
    <li>MVC Design Pattern<p class="feature-caption">1: Here is the caption</p></li>
    <li>CRUD & Scaffolding</li>
    <li>O/R Mapping</li>
    <li>Multi-Threading</li>
    <li>Input Validation</li>
    <li>I18N/L10N Localization</li>
    <li>Caching</li>
    <li>100% Modular</li>
    <li>Data Types</li> 
    <li>Injection Prevention</li>
    <li>DAO/ActiveRecord</li>
    <li>Output Filtering</li> 
    <li>SQL Table Indexing</li>
    <li>SQL Trigger Support</li>
    <li>User Management</li>
    <li>AJAX Messaging</li>
    <li>Mail Spooling</li>
    <li>Role-Based Permissions</li>
    <li>Maintenance Mode</li>
    <li>Module Library</li> 
    
    
</ul>

<div class="clearer"></div>
<!-- END FEATURES LIST -->

<!-- START FREE FEATURES -->
<h2 class="big">Why You'll  <span>Love</span> Melt</h2>

<ul class="free-features">
    <li>
        <img src="/images/features/unix-like-console.jpg" alt="" />
        
        <h3>Unix-Like Console</h3>
        
        <p>
            Melt ships with a unix-style console that sits in your browser and provides full control of common operations and scaffolding.
            
            
        </p>
    </li>
    
    <li>
        <img src="/images/features/refactoring-made-simple.jpg" alt="" />
        
        <h3>Refactoring Made Simple</h3>
        
        <p>
            Shaped by real-world projects, Melt handles the complexity of ever-changing requirements and product iterations with a breeze.            
        </p>
    </li>
    
    <li>
        <img src="/images/features/no-sql-needed.jpg" alt="" />
        
        <h3>No SQL Needed</h3>
        
        <p>
            Melt syncronizes against SQL to keep your database clean and tidy and even provides table indexing should you need it.
        </p>
    </li>
    
    <li>
        <img src="/images/features/a-solution-for-every-problem.png" alt="" />
        
        <h3>A Solution for Every Problem</h3>
        
        <p>
         In the world of Melt there is a good solution for every development problem.
         The framework design makes you intuitively write beautiful code.
        </p>
    </li>
</ul>

<div class="clearer"></div>
<!-- END FREE FEATURES -->


<!-- START FREE FEATURES -->
<h2 class="big">Coding <span>Happiness</span></h2>

<ul class="free-features">
    <li>
        <img src="/images/integrations/jquery.png" alt="" />
        
        <h3>JQuery in the Box</h3>
        <p>
            Melt includes JQuery to fuel your AJAX applications
            and JQuery modules to simplify implementation of AJAX in your web apps.
 
            
        </p>
    </li>
    <li>
        <img src="/images/integrations/less.png" alt="" />
        
        <h3>Forget CSS, Write LESS</h3>
        
        <p>
            LESS extends CSS with dynamic behavior such as variables, mixins, operations and functions. Melt ships with LESS support out of the box.
        </p>
    </li>

</ul>

<div class="clearer"></div>
<!-- END FREE FEATURES -->




<h1>Built on the philosophy of <span>simplicity</span> and <span>freedom</span></h1>



        <h2 class="subtitle">The <span>PHP framework</span> you've been waiting for</h2>
<!-- <img src="/images/screen-header.jpg" alt="Beauty and Clean - Free Minimal Wordpress Theme" /> -->
                        <!-- <h1>Build <span>secure</span> and <span>scalable</span> web apps in <span>less time</span></h1>-->



<!-- START CALL TO ACTIONS -->
<ul class="actions">
    

    
    <li><a class="green button" href="http://github.com/melt/melt">Download Melt<span>Completely free, BSD License</span></a></li>
    <p class="tinyText">Version 1.0 released July 27th, 2011. Requires PHP 5.3 & MySQL.</p>
 
        
    <!-- https://api.github.com/users/melt/repos?per_page=100&page=1-->
</ul>
  


<!-- START FREE BONUS 2 -->
<div class="free-bonus">
    <h2 class="big"><span>Need Help?</span><!-- <span class="small-title">($37 Value)</span>--></h2>
    
    <h2 class="help">tag your question <span>melt</span> on</h2>
        <a href="http://stackoverflow.com/questions/ask" target="_blank"><img class="no-top-margin" src="images/stackoverflow-logo.png" alt="" /></a>
           
    
    <ul>
        <li><a href="http://stackoverflow.com/questions/ask" target="_blank">Ask your question on Stack Overflow</a> and tag it <b>melt</b></li>
        <li> A passionate community of developers is monitoring the tag and ready to help you</li>
    </ul>    
       
   
    
</div>
<!-- END FREE BONUS 2 -->





  
  
<!-- START FREE BONUS 2 -->
<div class="free-bonus">
    <h2 class="big"><span>Bugs</span><br/><span class="small-title">(or feature suggestions)</span></h2>
        <h2 class="help">Submit your issues to</h2>
        <a href="https://github.com/melt/melt/issues/" target="_blank"><img class="no-top-margin" src="images/github-logo.png" alt="" /></a>
           
    
    
     <ul>
        <li><a href="https://github.com/melt/melt/issues/" target="_blank">Submit your issues to GitHub</a></li>
        <li>Issues will be considered by the Melt development team</li>
        <li>Both feature suggestions and bugs are welcome (especially the ugly ones!)</li>
    </ul>    
     
   <?php /*
    <h2><span>Yours FREE When You Get Instant Access To The Theme TODAY!</span></h2> */ ?>
    
</div>
<!-- END FREE BONUS 2 -->






<!-- START FREE FEATURES -->
<h2 class="big">Join the  <span>Community</span></h2>

<ul class="free-features">
    <li>
        <img src="/images/community/get-started-with-melt.png" alt="" />
        
        <h3>Get Started with Melt</h3>
        
        <p>
            <a href="https://github.com/melt/melt/wiki/Getting-Started-with-Melt" target="_blank">Get started with Melt</a> with the getting started guide. Everything you need to know to install Melt and create your first application!         
            
        </p>
    </li>
    
    <li>
        <img src="/images/community/follow-new-releases.png" alt="" />
        
        <h3>Follow New Releases</h3>
        
        <p>
            <a href="http://twitter.com/meltframework">Follow Melt on Twitter</a> to
            stay up to date with new releases and patches.       
        </p>
    </li>


           
    <li>
        <img src="/images/community/become-a-melt-guru.png" alt="" />
        
        <h3>Become a Melt Guru</h3>
        
        <p>
            <a href="https://github.com/melt/melt/wiki" target="_blank">Read the Melt documentation</a> and learn best practices. Improve your skills and teach others.     
        </p>
    </li>
    
        <li>
        <img src="/images/community/get-answers-to-your-questions.png" alt="" />
        
        <h3>Get Answers to Your Questions</h3>
        
        <p>
            <a href="http://stackoverflow.com/questions/ask">Ask your question on Stack Overflow</a> and tag it <b>melt</b> to get help.      
        </p>
    </li>
    
    
            <li>
        <img src="/images/community/submit-a-bug.png" alt="" />
        
        <h3>Submit a Bug or Suggestion</h3>
        
        <p>
            <a href="https://github.com/melt/melt/issues" target="_blank">Submit your issues to GitHub</a> for them to be considered by the Melt team. We want to kill those ugly bugs swiftly!
        </p>
    </li>
          <li>
        <img src="/images/community/contribute-to-melt.png" alt="" />
        
        <h3>Contribute to Melt</h3>
        
        <p>
            <a href="http://github.com/melt/" target="_blank">Make your own fork of Melt on GitHub</a> and contribute to the official release. Write modules and sample apps and share them with others.        
        </p>
    </li>
 
</ul>

<div class="clearer"></div>
<!-- END FREE FEATURES -->






<!-- START FREE FEATURES -->
<h2 class="big">Spread the  <span>Love</span></h2>

<ul class="free-features">
  
    <li>
        <img src="/images/community/make-tutorials-and-screencasts.png" alt="" />
        
        <h3>Make Tutorials & Screencasts</h3>
        
        <p>
           Use your weblog to write a tutorial or publish a screencast on YouTube or Vimeo. <a href="">Send us the link</a> to include it in the list of tutorials on GitHub.      
        </p>
    </li>
    
    <li>
        <img src="/images/community/get-the-melt-logo.png" alt="" />
        
        <h3>Get the Melt Logo</h3>
        
        <p>
            Print the logo, make a t-shirt or put it on your website. <a href="/images/melt-logo-original.png">Download the official logo</a> and show people that you are a proud Melt developer!          
        </p>
    </li>
    
        
    <li>
        <img src="/images/community/become-a-campus-ambassador.png" alt="" />
        
        <h3>Become a Campus Ambassador</h3>
        
        <p>
            Become the official ambassador at your university campus to share the excitement of the framework and help your fellow students discover the power of Melt.
            <a href="">Contact us to apply!</a>                      
        </p>
    </li>
    
</ul>

<div class="clearer"></div>
<!-- END FREE FEATURES -->




        <h2 class="subtitle">The <span>PHP framework</span> you've been waiting for</h2>
<!-- <img src="/images/screen-header.jpg" alt="Beauty and Clean - Free Minimal Wordpress Theme" /> -->
                        <!-- <h1>Build <span>secure</span> and <span>scalable</span> web apps in <span>less time</span></h1>-->



<!-- START CALL TO ACTIONS -->
<ul class="actions">
    

    
    <li><a class="green button" href="http://github.com/melt/melt">Download Melt<span>Completely free, BSD License</span></a></li>
    <p class="tinyText">Version 1.0 released July 27th, 2011. Requires PHP 5.3 & MySQL.</p>
 
        
    <!-- https://api.github.com/users/melt/repos?per_page=100&page=1-->
</ul>
  


<!-- Testimonials, Screencasts -->


    <div id="footer">
    <?php /*
        <div class="menu-footer"><ul id="menu-footer" class="menu"><li id="menu-item-59" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-59"><a href="index.html">Home</a></li>
        <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10"><a href="terms-and-conditions/index.html">License</a></li>
<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="http://stackoverflow.com/questions/tagged/melt">Team & Contributors</a></li>
</ul></div>  -->    
        
       */ ?>
      

                                <h2 class="like-this-framework">We really think <span>you will like</span> this framework</h2>
  <div class="made-in-sweden"></div>
              
 <p class="copyright">
            Copyright&nbsp;&copy;&nbsp;2010-2011 Melt Software AB. 

           
            Melt is licensed under <a href="">the BSD License</a> and maintained by <a href="">the awesome Melt team</a>.
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

<!-- GitHub Ribbon -->
<a href="http://github.com/melt"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/edc6dae7a1079163caf7f17c60495bbb6d027c93/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub"></a>