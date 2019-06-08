<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <?php include('includes/includes_css.html') ?>
          <link rel="stylesheet" href="css/animate.css">
        
        	  <script src="https://code.getmdl.io/1.1.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.0/material.indigo-pink.min.css">  
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
        
    </head>
    <body>
    
  <a href="mailto:theimagecode.gmail.com"> <span class="mail-container">theimagecode@gmail.com</span></a> 
    <div class="social-media-container hidden-xs">
    	<a href="https://www.facebook.com/TheImageCode/?fref=ts"  class="icon" target="_blank"><i class="fa fa-facebook"></i></a>	<br>
				<a href="https://www.instagram.com/theimagecode/" class="icon"  target="_blank"><i class="fa fa-instagram" style="margin-top: 15px;"></i></a>
    </div>
    
      <div class="social-media-container visible-xs">
    	<a href="https://www.facebook.com/TheImageCode/?fref=ts"  class="icon" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/theimagecode/" class="icon"  target="_blank"><i class="fa fa-instagram"></i></a>
    </div>
    
    	     <div class="outer-valign-container">
<div class="inner-valign-container">
    <div class="container-fluid adjust-mob">
    <div class="img-wrapper wow fadeIn" data-wow-duration="5s">
    	<img src="img/The Image Code-01.png" class="img-responsive" style="margin: 0 auto;">
    	</div>
    	<div class="text-wrap wow fadeInUp" data-wow-delay="2s">We are busy styling this page </div>
    	<div class="container-fluid abc wow fadeInUp" data-wow-delay="3s">
    	<div class="center-wrap-cover">
    	<div class="circle-wrap">
    	<div class="left-line">
    		<img src="img/Line_left-01.png" class="left-line-img">
    	</div>
    	
    	<div data-toggle="modal" data-target="#myModal" class="clickable">
    		<div class="circle-outer">
    			<div class="circle-inner">
    			  <div class="outer-valign-container">
<div class="inner-valign-container">
<div style="line-height: 1;">
    				<span class="subscribe-now-text">SUBSCRIBE NOW</span>
    				</div>
    				</div>
    				</div>
    			</div>
    		</div>
    		</div>
    		<div class="right-line">
    			<img src="img/Line_right-01.png" class="right-line-img">
    		</div>
    	</div>
    	</div>
    	</div>
    	<div class="modal fade" id="myModal" role="dialog" >
				  <div class="outer-valign-container">
<div class="inner-valign-container">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-con">
        <div class="modal-header" style="border: none;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: 'halohandletterregular'; font-size:40px; text-align: center; color: black; letter-spacing: 2px;">Subscribe to us for latest updates</h4>
        </div>
        <div class="modal-body">
          <form class="send-form" method="post" action="newphpmailer/submit_post_form.php" enctype="multipart/form-data">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input class="mdl-textfield__input" type="text" data-validation="custom" data-validation-regexp="^([a-zA-Z0-9.@_]+)$"  data-validation-error-msg="Please enter valid email id" id="email" name="email" /> <label class="mdl-textfield__label" for="username" style="font-family: 'latobold';">Email</label> <span class="mdl-textfield__error" style="font-family: 'latobold';">Please enter valid email id.</span></div>
    <input type="submit" name="submit" value="SUBMIT" class="send-button" style="visibility: hidden;">
</form>
        </div>
    
       <div class="ghi">
       
       <a class="btn btn-1">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     SUBMIT
    </a>
   </div>

      </div>
      
    </div>
    </div>
    </div>
  </div>
    </div>
    
    </div>
    </div>
   
       <?php include('includes/includes_js.html') ?>
       <script>
$(document).ready(function() {
    $(".ghi a").click(function() {
     $(".send-button").click();
    });
});
</script>
   <script src="js/vendor/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>	
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>
	<script>
	 $.validate();
</script>
	 
	<?php include('includes/GA_code.html') ?>
    </body>
</html>
