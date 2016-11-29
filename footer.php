<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vedkrishna
 */

?>    <div class="site-footer parallax parallax3" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/parallax3.jpg)">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-3 col-sm-3">
                	<div class="widget footer_widget">
                    	<h4 class="widgettitle">About Born to Give</h4>
                        <p><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <ul class="social-icons-rounded social-icons-colored">
                          <li class="facebook"><a href="https://www.facebook.com/vedkrishnafoundation"><i class="fa fa-facebook-f"></i></a></li>
                     <li class="twitter"><a href="https://twitter.com/vkfoundation"><i class="fa fa-twitter"></i></a></li>
                     <li class="googleplus"><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus"></i></a></li>
                     <li class="youtube"><a href="https://www.youtube.com/channel/UCe2qJvmf7lYszKk0rU3UdEQ"><i class="fa fa-youtube-play"></i></a></li>

                     <li class="instagram"><a href="https://www.instagram.com/vedkrishnafoundation/?hl=en"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            	<div class="col-md-3 col-sm-3">
                	<div class="widget footer_widget widget_links">
                    	<h4 class="widgettitle">Blogroll</h4>
                        <ul>
                          <li><a href="<?php bloginfo('url'); ?>/careers">Become a volunteer</a></li>
                       <li><a href="<?php bloginfo('url'); ?>/our-impact">Our mission</a></li>
                       <li><a href="<?php bloginfo('url'); ?>/events">Success stories</a></li>
                       <li><a href="<?php bloginfo('url'); ?>/team">Meet our team</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">



                            <div class="twitter-wrapper">
                               <a class="twitter-timeline" href="https://twitter.com/vkfoundation"

                                  data-theme="dark"
                                  data-chrome="transparent noheader  nofooter noscrollbar"
                                  height="300" width="300">Tweets by vkfoundation</a>
                            </div>
<script>
  !function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.src = p + "://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
    }
  }(document, "script", "twitter-wjs");
</script>


</div>
            	<div class="col-md-3 col-sm-3">
                	<div class="widget footer_widget">
                     <script async src="https://d36hc0p18k1aoc.cloudfront.net/pages/a5b5e5.js"></script><div class="tintup" data-id="vedkrishna67/instagram" data-columns="1" data-mobilescroll="true"    data-infinitescroll="true" data-personalization-id="841289" style="height:280px;width:320px;"><a href="http://www.tintup.com/blog/the-best-twitter-wall-display" style="width:118px;height:31px;position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;">twitter wall for events</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <div class="site-footer-bottom">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6 col-sm-6">
                	<div class="copyrights-col-left">
                    	<p>&copy; 2016 Born to Give. All Rights Reserved</p>
                    </div>
                </div>
            	<div class="col-md-6 col-sm-6"></div>
                	<div class="copyrights-col-right">
                    	<ul class="footer-menu">
                        	<li><a href="privacy-policy.html">Privacy policy</a></li>
                        	<li><a href="payment-terms.html">Payment terms</a></li>
                        	<li><a href="refund-policy.html">Refund policy</a></li>
                        </ul>
                    </div>
           	</div>
      	</div>
  	</div>
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>

<!-- Donate Form Modal -->
<div class="modal fade" id="DonateModal" tabindex="-1" role="dialog" data-backdrop="static">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<div class="row">
                    <div class="col-md-6 col-sm-6 donate-amount-option">
                        <h4>Choose an amount</h4>
                        <ul class="predefined-amount">
                            <li><label><input type="radio" name="donation-amount">$10</label></li>
                            <li><label><input type="radio" name="donation-amount">$20</label></li>
                            <li><label><input type="radio" name="donation-amount">$30</label></li>
                            <li><label><input type="radio" name="donation-amount">$50</label></li>
                            <li><label><input type="radio" name="donation-amount">$100</label></li>
                        </ul>
                    </div>
                    <span class="donation-choice-breaker">Or</span>
                    <div class="col-md-6 col-sm-6 donate-amount-option">
                        <h4>Enter your own</h4>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">$</span>
                            <input type="number" class="form-control">
                        </div>
                    </div>
               	</div>
      		</div>
      		<div class="modal-body">
       			<div class="row">
                	<div class="col-md-6 col-sm-6 donation-form-infocol">
                    	<h4>Address</h4>
                        <input type="text" class="form-control" placeholder="Address line 1">
                        <input type="text" class="form-control" placeholder="Address line 2">
       					<div class="row">
                			<div class="col-md-8 col-sm-8 col-xs-8">
                        		<input type="text" class="form-control" placeholder="State/City">
                            </div>
                			<div class="col-md-4 col-sm-4 col-xs-4">
                        		<input type="text" class="form-control" placeholder="Zipcode">
                            </div>
                    	</div>
       					<div class="row">
                			<div class="col-md-3 col-sm-3 col-xs-3">
                        		<label>Country</label>
                            </div>
                			<div class="col-md-9 col-sm-9 col-xs-9">
                                <select class="selectpicker">
                                    <option>United States</option>
                                    <option>Australia</option>
                                    <option>Netherlands</option>
                                </select>
                            </div>
                    	</div>
                    </div>
                	<div class="col-md-6 col-sm-6 donation-form-infocol">
                    	<h4>Personal info</h4>
       					<div class="row">
                			<div class="col-md-6 col-sm-6 col-xs-6">
                        		<input type="text" class="form-control" placeholder="First name">
                            </div>
                			<div class="col-md-6 col-sm-6 col-xs-6">
                        		<input type="text" class="form-control" placeholder="Last name">
                            </div>
                    	</div>
                        <input type="text" class="form-control" placeholder="Email address">
                        <input type="text" class="form-control" placeholder="Phone no.">
                        <label class="checkbox"><input type="checkbox"> Register me on this website</label>
                    </div>
                 </div>
      		</div>
      		<div class="modal-footer text-align-center">
        		<button type="button" class="btn btn-primary">Make your donation now</button>
                <div class="spacer-20"></div>
                <p class="small">Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec. Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi.</p>
      		</div>
    	</div>
  	</div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
<script src="<?php bloginfo('template_directory'); ?>/vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- PrettyPhoto Plugin -->
<script src="<?php bloginfo('template_directory'); ?>/js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="<?php bloginfo('template_directory'); ?>/js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="<?php bloginfo('template_directory'); ?>/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script> <!-- UI -->
<script src="<?php bloginfo('template_directory'); ?>/js/init.js"></script> <!-- All Scripts -->
<script src="<?php bloginfo('template_directory'); ?>/vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="<?php bloginfo('template_directory'); ?>/js/circle-progress.js"></script> <!-- Circle Progress Bars -->
<script src="<?php bloginfo('template_directory'); ?>/style-switcher/js/jquery_cookie.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/style-switcher/js/script.js"></script>
<!-- Style Switcher Start -->
<!--<div class="styleswitcher visible-lg visible-md">
  <div class="arrow-box"><a class="switch-button"><span class="fa fa-cogs fa-lg"></span></a> </div>
  <h4>Color Skins</h4>
  <ul class="color-scheme">
    <li><a href="#" data-rel="colors/color1.css" class="color1" title="color1"></a></li>
    <li><a href="#" data-rel="colors/color2.css" class="color2" title="color2"></a></li>
    <li><a href="#" data-rel="colors/color3.css" class="color3" title="color3"></a></li>
    <li><a href="#" data-rel="colors/color4.css" class="color4" title="color4"></a></li>
    <li><a href="#" data-rel="colors/color5.css" class="color5" title="color5"></a></li>
    <li><a href="#" data-rel="colors/color6.css" class="color6" title="color6"></a></li>
    <li><a href="#" data-rel="colors/color7.css" class="color7" title="color7"></a></li>
    <li><a href="#" data-rel="colors/color8.css" class="color8" title="color8"></a></li>
    <li class="nomargin"><a href="#" data-rel="colors/color9.css" class="color9" title="color9"></a></li>
    <li class="nomargin"><a href="#" data-rel="colors/color10.css" class="color10" title="color10"></a></li>
    <li class="nomargin"><a href="#" data-rel="colors/color11.css" class="color11" title="color11"></a></li>
    <li class="nomargin"><a href="#" data-rel="colors/color12.css" class="color12" title="color12"></a></li>
  </ul>
  <h4>Layout</h4>
  <ul class="layouts">
    <li class="wide-layout"><a href="#" title="Wide">Wide</a></li>
    <li class="boxed-layout"><a href="#" title="Boxed">Boxed</a></li>
  </ul>
  <h4>Background Pattern</h4>
  <ul class="background-selector">
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt1.png" data-nr="0" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt2.png" data-nr="1" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt3.png" data-nr="2" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt4.png" data-nr="3" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt5.png" data-nr="4" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt6.png" data-nr="5" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt7.png" data-nr="6" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt8.png" data-nr="7" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt9.png" data-nr="8" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt10.png" data-nr="9" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt11.png" data-nr="10" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt12.png" data-nr="11" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt13.png" data-nr="12" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt14.png" data-nr="13" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt15.png" data-nr="14" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt16.png" data-nr="15" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt17.png" data-nr="16" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt18.png" data-nr="17" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt19.png" data-nr="18" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt20.png" data-nr="19" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt21.png" data-nr="20" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt22.png" data-nr="21" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt23.png" data-nr="22" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt24.png" data-nr="23" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt25.png" data-nr="24" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt26.png" data-nr="25" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt27.png" data-nr="26" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt28.png" data-nr="27" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt29.png" data-nr="28" width="20" height="20"></li>
    <li class="nomargin"><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/patternst/ptt30.png" data-nr="29" width="20" height="20"></li>
  </ul>
  <small>*only for boxed layout</small>
  <h4>Background Image</h4>
  <ul class="background-selector1">
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/images/img1-thumb.png" data-nr="0" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/images/img2-thumb.png" data-nr="1" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/images/img3-thumb.png" data-nr="2" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/images/img4-thumb.png" data-nr="3" width="20" height="20"></li>
    <li><img alt="" src="<?php bloginfo('template_directory'); ?>/style-switcher/backgrounds/images/img5-thumb.png" data-nr="4" width="20" height="20"></li>
  </ul>
  <small>*only for boxed layout</small> </div> -->
</body>
<!-- Mirrored from preview.imithemes.com/born-to-give/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:07:19 GMT -->
</html>
