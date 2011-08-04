<?php namespace melt; ?>

<?php echo $this->display("download",array("version"=>$this->version,"pushed_at"=>$this->pushed_at)); ?>

<script type='text/javascript'>
$(function() {
    $("ul.features-list li").hover(
    
    function() {
               var idx = $('ul.features-list li').index(this);
               $('ul.features-list span').eq(idx).show();
          },
          function() {
               var idx = $('ul.features-list li').index(this);
               $('ul.features-list span').eq(idx).hide();
          }
          

);
    });
</script> 

<!-- START FEATURES LIST -->
<h2></h2>

<ul class="features-list">
    <li>MVC Design Pattern <span>Melt uses the proven Model-View-Controller design pattern for clear separation of concerns.</span></li>
    <li>Application Scaffolding <span>Melt provides application scaffolding for rapid prototyping and generating CRUD behavior.</span></li>
    <li>O/R Mapping <span>Melt provides Object-Relational Mapping that maps data into native PHP objects.</span></li>
    <li>Code Generation <span>Melt provides painless code generation through the unix-like console interface.</span></li>
    <li>Input Validation <span>Melt provides a simple way to validate input data and forms.</span></li>
    <li>Gettext Localization <span>Melt uses the gettext localization standard and imports translated .po-files with drag and drop.</span></li>
    <li>Caching Scheme <span>Melt has a small footprint and cache to maximize speed.</span></li>
    <li>Modular Structure<span>Melt has a modular structure which allows it to be extended without adding complexity.</span></li>
    <li>Data Types <span>Melt provides data types to help you quickly build data structures and generate input forms.</span></li> 
    <li>Injection Prevention <span>Melt has built in features for application security and preventing SQL injection attacks.</span></li>
    <li>SQL Performance <span>Melt provides SQL table indexing and trigger support for enhanced performance and data integrity. </span></li>
    <li>Routing <span>Melt provides routing features for mapping URLs and handling requests.</span></li>   
    <li>Session Handling <span>Melt provides a secure session handling component to power session-based web apps. </span></li>
    <li>Mail Spooling <span>Melt provides a mail spooler that stores emails in the database until they can be sent.</span></li>
    <li>Authentication <span>Melt provides authentication and permission features to quickly build role-based apps.</span></li>
    <li>AJAX Integration <span>Melt is shipped with AJAX integration via JQuery and handles dynamic AJAX requests for you.</span></li>    
    <li>Debugging & Profiling <span>Melt provides debugging tools and suggests fixes to help you use the framework properly.</span></li>
    <li>Error Handling <span>Melt provides error handling and comprehensive logs to help you understand and solve problems.</span></li>
    <li>Third-Party Friendly <span>Melt works well with third-party code and allows you to easily integrate existing classes.</span></li>  
    <li>Module Library <span>Melt has an ever-growing module library with handy modules that increase your productivity. </span></li> 
</ul>

<div class="clearer"></div>
<!-- END FEATURES LIST -->

<!-- START FEATURES -->
<h2 class="big">Why You'll  <span>Love</span> Melt</h2>

<ul class="features">
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/features/unix-like-console.jpg" alt="" />
        
        <h3>Unix-like Console</h3>
        
        <p>
            Melt ships with a unix-like console that sits in your browser and provides full control of common operations and scaffolding.
            
            
        </p>
    </li>
        
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/features/super-fast.png" alt="" />
        
        <h3>Super-fast</h3>
        
        <p>
            Melt performs extremely well, even in more complex cases. The framework has been optimized for real world industrial applications.
        </p>
    </li>
    
    
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/features/no-sql-needed.jpg" alt="" />
        
        <h3>No SQL Needed</h3>
        
        <p>
            Melt lets you keep your model declarations in the application where they belong. 
            Clean, tidy and always in sync. No SQL needed.
        </p>
    </li>
    

    
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/features/refactoring-made-simple.jpg" alt="" />
        
        <h3>Refactors Well</h3>
        
        <p>
            Modeled after real-world projects, Melt handles the complexity of ever-changing requirements and product iterations with a breeze.            
        </p>
    </li>
    
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/features/quickly-adopted.png" alt="" />
        
        <h3>Quickly Adopted</h3>
        
        <p>
            Melt has well-commented source code and a VERY simple getting started guide.
            It is designed to provide low overhead for new developers.

        </p>
    </li>
    
    
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/features/a-solution-for-every-problem.png" alt="" />
        
        <h3>Gives You Simple Solutions</h3>
        
        <p>
         In the world of Melt there is a good solution for every development problem.
         The framework design makes you intuitively write beautiful code.
        </p>
    </li>    
</ul>

<div class="clearer"></div>
<!-- END FEATURES -->


<!-- START FEATURES -->
<h2 class="big">Bundled <span>Happiness</span></h2>

<ul class="features small-images">
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/integrations/jquery.png" alt="" />
        
        <h3>JQuery in the Box</h3>
        <p>
            Melt includes JQuery to fuel your AJAX applications
            and JQuery modules to simplify implementation of AJAX in your web apps.
 
            
        </p>
    </li>
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/integrations/less.png" alt="" />
        
        <h3>Forget CSS, Write LESS</h3>
        
        <p>
            LESS extends CSS with dynamic behavior such as variables, mixins, operations and functions. Melt ships with LESS support out of the box.
        </p>
    </li>

</ul>

<div class="clearer"></div>
<!-- END FEATURES -->




<h1 class="smaller">Built on the philosophy of <span>simplicity</span> and <span>freedom</span></h1>




<!-- START HIGHLIGHT -->
<div class="free-bonus">
    <h2 class="big"><span>Need Help?</span><!-- <span class="small-title">($37 Value)</span>--></h2>
    
    <h2 class="help">tag your question <span>melt</span> on</h2>
        <a href="http://stackoverflow.com/questions/ask" target="_blank"><img class="no-top-margin" src="<?php echo APP_ROOT_URL; ?>static/img/stackoverflow-logo.png" alt="" /></a>
           
    
    <ul>
        <li><a href="http://stackoverflow.com/questions/ask" target="_blank">Ask your question on Stack Overflow</a> and tag it <b>melt</b></li>
        <li> A passionate community of developers is monitoring the tag and ready to help you</li>
    </ul>    
   
</div>
<!-- END HIGHLIGHT -->



  
<!-- START HIGHLIGHT -->
<div class="free-bonus bonus-right">
    <h2 class="big"><span>Found Bugs?</span> <span class="small-title"></span></h2>
        <h2 class="help">Submit your issues on</h2>
        <a href="https://github.com/melt/melt/issues/" target="_blank"><img class="no-top-margin" src="<?php echo APP_ROOT_URL; ?>static/img/github-logo.png" alt="" /></a>
           
    
    
     <ul>
        <li><a href="https://github.com/melt/melt/issues/" target="_blank">Submit your issues on GitHub</a></li>
        <li>Both feature suggestions and bugs are welcome (especially the ugly ones!)</li>
    </ul>    
     
   <?php /*
    <h2><span>Yours FREE When You Get Instant Access To The Theme TODAY!</span></h2> */ ?>
    
</div>
<!-- END HIGHLIGHT -->

<br class="clear" />




<!-- START FEATURES -->
<h2 class="big">Join the  <span>Community</span></h2>

<ul class="features">
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/get-started-with-melt.png" alt="" />
        
        <h3>Get Started with Melt</h3>
        
        <p>
            <a href="https://github.com/melt/melt/wiki/Getting-Started-with-Melt" target="_blank">Get started with Melt</a> on your coffee break. The getting started guide walks you through how to install Melt and build your first app.         
            
        </p>
    </li>
    
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/follow-new-releases.png" alt="" />
        
        <h3>Follow New Releases</h3>
        
        <p>
            <a href="http://twitter.com/meltframework" target="_blank">Follow Melt on Twitter</a> to
            stay up to date with new releases and patches.       
        </p>
    </li>


           
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/become-a-melt-guru.png" alt="" />
        
        <h3>Read the Documentation</h3>
        
        <p>
            <a href="https://github.com/melt/melt/wiki" target="_blank">Read the Melt documentation</a> and learn best practices. Improve your skills and teach others.     
        </p>
    </li>
    
        <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/get-answers-to-your-questions.png" alt="" />
        
        <h3>Get Answers to Your Questions</h3>
        
        <p>
            <a href="http://stackoverflow.com/questions/ask" target="_blank">Ask your question on Stack Overflow</a> and tag it <b>melt</b> to get help.      
        </p>
    </li>
    
    
            <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/submit-a-bug.png" alt="" />
        
        <h3>Submit a Bug or Suggestion</h3>
        
        <p>
            <a href="https://github.com/melt/melt/issues" target="_blank">Submit your issues on GitHub</a> for them to be considered by the Melt team. Help us kill those ugly bugs swiftly!
        </p>
    </li>
          <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/contribute-to-melt.png" alt="" />
        
        <h3>Contribute to Melt</h3>
        <p>
            <a href="http://github.com/melt/" target="_blank">Make your own fork of Melt on GitHub</a> and contribute to the official release. Write modules and sample apps and share them with others.        
        </p>
    </li>
 
</ul>

<div class="clearer"></div>
<!-- END FEATURES -->






<!-- START FEATURES -->
<h2 class="big">Spread the  <span>Love</span></h2>

<ul class="features">
  
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/make-tutorials-and-screencasts.png" alt="" />
        
        <h3>Make Tutorials & Screencasts</h3>
        
        <p>            
           <a href="http://www.youtube.com/results?search_query=meltcast&search=tag" target="_blank">Publish a screencast on YouTube</a> and tag it <strong>meltcast</strong> 
           to make it show up in the official screencasts.      
        </p>
    </li>
    

    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/join-a-local-meetup.png" alt="" />
        
        <h3>Join a Local Meetup</h3>
        
        <p>
           Connect with other coders in an offline setting and exchange experiences. <a href="http://meetup.com/melt-meetup" target="_blank">Join the Melt meetup group</a> to stay updated on events.   
        </p>
    </li> 
        
    <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/become-a-campus-ambassador.png" alt="" />
        
        <h3>Become a Campus Ambassador</h3>
        
        <p>
            Become the official ambassador at your university campus to share the excitement of the framework and help your fellow students discover Melt.
            <a href="<?php echo APP_ROOT_URL; ?>team#contact">Contact the Melt team</a> to apply.                      
        </p>
    </li>
    
     <li>
        <img src="<?php echo APP_ROOT_URL; ?>static/img/community/get-the-melt-logo.png" alt="" />
        
        <h3>Get the Melt Logo</h3>
        <p>
            Print the logo, make a t-shirt or put it on your website. <a href="<?php echo APP_ROOT_URL; ?>static/img/melt-logo-original.png">Download the logo</a> or desktop wallpaper (<a href="<?php echo APP_ROOT_URL; ?>static/img/melt-wallpaper-snow.jpg">snow</a> or <a href="<?php echo APP_ROOT_URL; ?>static/img/melt-wallpaper-light.jpg">northern light</a>) and show people that you are a Melt developer.   
        </p>
    </li>
    
</ul>

<div class="clearer"></div>
<!-- END FEATURES -->


<!-- Testimonials, Screencasts -->
