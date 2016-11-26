<?php
/**
 * Template Name: Contact Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vedkrishna
 */

get_header(); ?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/inside7.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">Contact us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <br>
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3 col-sm-3 col-xs-6">
                    	<h4 class="block-title">Our Locations</h4>
                        <a href="mailto:help@borntogive.com">help@borntogive.com</a>
                        <a href="http://imithemes.com/">http://borntogive.com</a>
                    </div>
                	<div class="col-md-3 col-sm-3 col-xs-6">
                        <address>
                            2500 CityWest Blvd.<br>
                            Suite 300 Houston,<br>
                            Texas - 77042<br>
                            USA
                            <br><br>
                            <strong>TEL:</strong> 1-800-7878-09<br>
                            <strong>FAX:</strong> 1-800-7878-08
                        </address>
                    </div>
                	<div class="col-md-3 col-sm-3 col-xs-6">
                        <address>
                            2500 Opera house.<br>
                            Andheri East,<br>
                            Mumbai - 400120<br>
                            India
                            <br><br>
                            <strong>TEL:</strong> 1-800-7878-09<br>
                            <strong>FAX:</strong> 1-800-7878-08
                        </address>
                    </div>
                	<div class="col-md-3 col-sm-3 col-xs-6">
                        <address>
                            1380 Solvan City<br>
                            Mechnilian,<br>
                            London - 77042<br>
                            UK
                            <br><br>
                            <strong>TEL:</strong> 1-800-7878-09<br>
                            <strong>FAX:</strong> 1-800-7878-08
                        </address>
                    </div>
                </div>
            </div>
            <div class="spacer-75"></div>
           	<div id="contact-map" style="width:100%;height:400px"></div>
            <div class="spacer-75"></div>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 content-block">
                    	<form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="http://preview.imithemes.com/born-to-give/mail/contact.php">
                        	<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="fname" name="First Name"  class="form-control input-lg" placeholder="First name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="lname" name="Last Name"  class="form-control input-lg" placeholder="Last name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                              	</div>
                           	</div>
                		</form>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4 sidebar-block">
                        <div class="widget widget_recent_causes">
                           	<h3 class="widgettitle">Latest Causes</h3>
                            <ul>
                                <li>
                                    <a href="#" class="cause-thumb">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/cause1.jpg" alt="" class="img-thumbnail">
                                        <div class="cProgress" data-complete="88" data-color="42b8d4">
                                            <strong></strong>
                                        </div>
                                    </a>
                                   	<h5><a href="single-cause.html">Help small shopkeepers of Sunyani</a></h5>
                                    <span class="meta-data">10 days left to achieve</span>
                                </li>
                                <li>
                                    <a href="#" class="cause-thumb">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/cause5.jpg" alt="" class="img-thumbnail">
                                        <div class="cProgress" data-complete="75" data-color="42b8d4">
                                            <strong></strong>
                                        </div>
                                    </a>
                                   	<h5><a href="single-cause.html">Save tigers from poachers</a></h5>
                                    <span class="meta-data">32 days left to achieve</span>
                                </li>
                                <li>
                                    <a href="#" class="cause-thumb">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/cause6.jpg" alt="" class="img-thumbnail">
                                        <div class="cProgress" data-complete="88" data-color="42b8d4">
                                            <strong></strong>
                                        </div>
                                    </a>
                                   	<h5><a href="single-cause.html">Help rebuild Nepal</a></h5>
                                    <span class="meta-data">10 days left to achieve</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php
    get_footer();?>
