<?php
/**
 * Template Name: Home Page
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
    	<!-- Start Hero Slider -->
      	<div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
            <ul class="slides">
                <li class="parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/slide4.jpg)">
                	<div class="flex-caption">
                    	<div class="container">
                        	<div class="flex-caption-table">
                            	<div class="flex-caption-cell">
                                	<div class="flex-caption-text">
                                        <h2>Let your life be<br>an Inspiration</h2>
                                        <p>Lorem ipsum dolor sit amet, consectet<br>adipiscinge lit. Nam malesuada dapi<br>bus diam, ut fringilla purus..</p>
                                        <a href="<?php bloginfo('url'); ?>/causes">
                                                                     <span class="btn btn-primary">Start with a little</a>
                                    </div>
                               	</div>
                          	</div>
                        </div>
                    </div>
                </li>
                <li class="parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/slide2.jpg)">
                	<div class="flex-caption">
                    	<div class="container">
                        	<div class="flex-caption-table">
                            	<div class="flex-caption-cell">
                                	<div class="flex-caption-text text-align-center">
                                        <h2>Make a difference for people<br>who needs it the most</h2>
                                        <a href="causes.html" class="btn btn-primary">Start with a little</a>
                                    </div>
                               	</div>
                          	</div>
                        </div>
                    </div>
                </li>
          	</ul>
       	</div>
        <!-- End Hero Slider -->
    </div>
    <div class="featured-links row">
    	<a href="<?php bloginfo('url'); ?>/causes">
                                   <span class="featured-link col-md-4 col-sm-4">

        	<span>View our causes</span>
        	<strong>Donate now</strong>
        </a>
    	<a href="<?php bloginfo('url'); ?>/careers">
                                  <span class="featured-link col-md-4 col-sm-4">
        	<span>Become a volunteer</span>
        	<strong>Join us now</strong>
        </a>
    	<a href="<?php bloginfo('url'); ?>/events">
                                   <span class="featured-link col-md-4 col-sm-4">
        	<span>View our events</span>
        	<strong>Get involved</strong>
        </a>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="lgray-bg padding-tb75">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-5 col-sm-5">
                        		<h2 class="block-title">Causes that need your<br>urgent attention</h2>
                        		<div class="spacer-30"></div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                        	<div class="spacer-10"></div>
                        	<p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec.</p>
                        </div>
                  	</div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="causes-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                <li class="item">
                                    <div class="grid-item cause-grid-item small-business format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-cause.html" class="media-box">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/causeg1.jpg" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <a class="cProgress" data-complete="88" data-color="F23827" data-toggle="tooltip" data-original-title="10 days left"><strong></strong></a>
                                                <h3 class="post-title"><a href="single-cause.html">Help small shopkeepers of Sunyani</a></h3>
                                                <div class="meta-data">Donated $26400 / <span class="cause-target">$30000</span></div>
                                            </div>
                                        	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#DonateModal">Donate Now</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="grid-item cause-grid-item small-business format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-cause.html" class="media-box">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/causeg2.jpg" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <a class="cProgress" data-complete="52" data-color="F6BB42" data-toggle="tooltip" data-original-title="25 days left"><strong></strong></a>
                                                <h3 class="post-title"><a href="single-cause.html">Help relocate the refugees</a></h3>
                                                <div class="meta-data">Donated $21840 / <span class="cause-target">$40000</span></div>
                                            </div>
                                        	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#DonateModal">Donate Now</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="grid-item cause-grid-item small-business format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-cause.html" class="media-box">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/causeg5.jpg" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <a class="cProgress" data-complete="75" data-color="8CC152" data-toggle="tooltip" data-original-title="65 days left"><strong></strong></a>
                                                <h3 class="post-title"><a href="single-cause.html">Save tigers from poachers</a></h3>
                                                <div class="meta-data">Donated $15000 / <span class="cause-target">$20000</span></div>
                                            </div>
                                        	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#DonateModal">Donate Now</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="grid-item cause-grid-item small-business format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-cause.html" class="media-box">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/causeg6.jpg" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <a class="cProgress" data-complete="88" data-color="8CC152" data-toggle="tooltip" data-original-title="70 days left"><strong></strong></a>
                                                <h3 class="post-title"><a href="single-cause.html">Help rebuild Nepal</a></h3>
                                                <div class="meta-data">Donated $176000 / <span class="cause-target">$200000</span></div>
                                            </div>
                                        	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#DonateModal">Donate Now</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="grid-item cause-grid-item small-business format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-cause.html" class="media-box">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/causeg3.jpg" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <a class="cProgress" data-complete="20" data-color="8CC152" data-toggle="tooltip" data-original-title="102 days left"><strong></strong></a>
                                                <h3 class="post-title"><a href="single-cause.html">Education for everyone</a></h3>
                                                <div class="meta-data">Donated $4000 / <span class="cause-target">$20000</span></div>
                                            </div>
                                        	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#DonateModal">Donate Now</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="grid-item cause-grid-item small-business format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-cause.html" class="media-box">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/causeg4.jpg" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <a class="cProgress" data-complete="50" data-color="8CC152" data-toggle="tooltip" data-original-title="105 days left"><strong></strong></a>
                                                <h3 class="post-title"><a href="single-cause.html">Save water initiative</a></h3>
                                                <div class="meta-data">Donated $5000 / <span class="cause-target">$10000</span></div>
                                            </div>
                                        	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#DonateModal">Donate Now</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
               	</div>
            </div>

            <div class="featured-texts row">
            	<div class="featured-text col-md-3 col-sm-3">
                	<span>Successful projects</span>
                    <strong>1043</strong>
                </div>
            	<div class="featured-text col-md-3 col-sm-3">
                	<span>People Impacted</span>
                    <strong>206400</strong>
                </div>
            	<div class="featured-text col-md-3 col-sm-3">
                	<span>Total amount raised</span>
                    <strong>$7850098</strong>
                </div>
            	<div class="featured-text col-md-3 col-sm-3">
                	<span>Total Volunteers</span>
                    <strong>217</strong>
                </div>
            </div>

            <!-- Partner Carousel -->
            <div class="partner-carousel">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3 col-sm-3">
                        	<h4 class="push-top">Our Most Trusted Supporting partners</h4>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="partners-slider" data-columns="5" data-autoplay="5000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="3" data-items-mobile="2">
                                        <li class="item"><img src="<?php bloginfo('template_directory'); ?>/images/logo1.png" alt=""></li>
                                        <li class="item"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" alt=""></li>
                                        <li class="item"><img src="<?php bloginfo('template_directory'); ?>/images/logo3.png" alt=""></li>
                                        <li class="item"><img src="<?php bloginfo('template_directory'); ?>/images/logo4.png" alt=""></li>
                                        <li class="item"><img src="<?php bloginfo('template_directory'); ?>/images/logo6.png" alt=""></li>
                                        <li class="item"><img src="<?php bloginfo('template_directory'); ?>/images/logo5.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   	</div>
                </div>
           	</div>

            <div class="parallax parallax5 parallax-light text-align-center padding-tb100" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/parallax6.jpg)">
            	<h2>Making someone smile is the most<br>beautiful thing in this world</h2>
                <a href="#" class="parallax-icon-link"><i class="fa fa-5x fa-play-circle-o"></i></a>
            </div>

            <div class="accent-bg padding-tb20 cta-fw">
    			<div class="container">
                    <a href="#" class="btn btn-default btn-ghost btn-light btn-rounded pull-right">Become a volunteer</a>
                    <h4>Let's start doing your bit for the world. Join us as a Volunteer</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php
    get_footer();?>
