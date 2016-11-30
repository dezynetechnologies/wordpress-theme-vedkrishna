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
                    	<h4 class="block-title">Our Location</h4>
                        <a href="mailto:info@vedkrishna.com"> info@vedkrishna.com</a>
              <!--          <a href="http://imithemes.com/">http://borntogive.com</a>-->
               <a href="http://vedkrishna.com/">http://vedkrishna.com</a>
                    </div>
                	<div class="col-md-3 col-sm-3 col-xs-6">
                        <address>
                          <!--  2500 CityWest Blvd.<br>
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
                            UK-->
                             12B, J-Block,<br>
                              Old Rosa Pura Extn.,<br>
                               Najafgarh, New Delhi - 110043<br>
                               India
                            <br>
                            <strong>TEL:</strong> 9810869242<br>

                        </address>
                    </div>
                </div>
            </div>
            <br>
      <!--      <div class="spacer-75"></div>-->
            <center>

           	<div id="contact-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.130544227062!2d77.06594051467923!3d28.595860282432252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b253615d6ef%3A0xd93a819d475a8dfa!2sIcon+International+School!5e0!3m2!1sen!2sin!4v1480406723303" width=80%  height="300"  frameborder="0" style="border:0" allowfullscreen></iframe></div>

   </center>
   <div class="spacer-75"></div>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 content-block">
                    	<form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="<?php bloginfo('url'); ?>/send_from_email">
                        	<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="fname" name="fname"  class="form-control input-lg" placeholder="First name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="lname" name="lname"  class="form-control input-lg" placeholder="Last name">
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
