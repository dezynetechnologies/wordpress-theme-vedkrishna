<?php
/**
 * Template Name: Front Page
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
                <li class="parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/slide3.jpg)">
                	<div class="flex-caption">
                    	<div class="container">
                      <div class="flex-caption-table">
                            	<div class="flex-caption-cell text-align-center">
                        			<!--<div class="flex-caption-cause">-->
                            <!--			<h3><a href="#">Save the Glaciers</a></h3>
                    					<p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Nam malesuada dapi bus diam, ut fringilla purus efficitur  eget.</p>
                                        	<span class="meta-data">Donated $26400 / <span class="cause-target">$30000</span></span>-->
                                    		<a href="<?php bloginfo('url'); ?>/donate" class="btn btn-primary btn-lg">Donate Now</a>
                          			</div>
                        		</div>
                    	<!--	</div>
                      </div>-->
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

            <div class="padding-tb75 position-relative">
            	<div class="half-bg-right accent-bg"></div>
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-6">
                        	<h2 class="block-title">Upcoming events</h2>
                            <div class="spacer-20"></div>
                            	<ul class="events-compact-list">
                                	<li class="event-list-item">
                                    	<span class="event-date">
                                        	<span class="date">14</span>
                                            <span class="month">Jan</span>
                                            <span class="year">2016</span>
                                        </span>
                                        <div class="event-list-cont">
                                            <span class="meta-data">Thursday, 11:20 AM</span>
                                        	<h4 class="post-title"><a href="#">Summer Camp: Students Get Together</a></h4>
                    						<p>Lorem ipsum dolor sit amet, consectet adipiscing elit Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        </div>
                                    </li>
                                	<li class="event-list-item">
                                    	<span class="event-date">
                                        	<span class="date">18</span>
                                            <span class="month">Jan</span>
                                            <span class="year">2016</span>
                                        </span>
                                        <div class="event-list-cont">
                                            <span class="meta-data">Monday, 07:00 PM</span>
                                        	<h4 class="post-title"><a href="#">Fundraising for meals</a></h4>
                    						<p>Lorem ipsum dolor sit amet, consectet adipiscing elit Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        </div>
                                    </li>
                                	<li class="event-list-item">
                                    	<span class="event-date">
                                        	<span class="date">26</span>
                                            <span class="month">Feb</span>
                                            <span class="year">2016</span>
                                        </span>
                                        <div class="event-list-cont">
                                            <span class="meta-data">Friday, 01:00 PM</span>
                                        	<h4 class="post-title"><a href="#">Green Environment</a></h4>
                    						<p>Lorem ipsum dolor sit amet, consectet adipiscing elit Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        </div>
                                    </li>
                                </ul>
                        </div>

                    	<div class="col-md-6">
                            <div class="gallery-updates cols2 clearfix">
                                <ul>
                                    <li class="format-image grid-item">
                                        <a href="<?php bloginfo('template_directory'); ?>/images/gallery1.jpg" class="media-box magnific-image"> <img src="<?php bloginfo('template_directory'); ?>/images/gallery1.jpg" alt=""> </a>
                                    </li>
                                    <li class="format-gallery grid-item">
                                        <div class="media-box">
                                            <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="slide" data-pause="yes">
                                                <ul class="slides">
                                                    <li class="item"><a href="<?php bloginfo('template_directory'); ?>/images/gallery2.jpg" class="popup-image"><img src="<?php bloginfo('template_directory'); ?>/images/gallery2.jpg" alt=""></a></li>
                                                    <li class="item"><a href="<?php bloginfo('template_directory'); ?>/images/gallery3.jpg" class="popup-image"><img src="<?php bloginfo('template_directory'); ?>/images/gallery3.jpg" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="format-link grid-item">
                                        <a href="http://www.google.com/" target="_blank" class="media-box"> <img src="<?php bloginfo('template_directory'); ?>/images/gallery4.jpg" alt=""> </a>
                                    </li>
                                    <li class="format-video grid-item">
                                        <a href="https://vimeo.com/47532705" class="media-box magnific-video"> <img src="<?php bloginfo('template_directory'); ?>/images/gallery6.jpg" alt=""> </a>
                                    </li>
                                    <li class="format-image grid-item">
                                        <a href="<?php bloginfo('template_directory'); ?>/images/event1.jpg" class="media-box magnific-image"> <img src="<?php bloginfo('template_directory'); ?>/images/event1.jpg" alt=""> </a>
                                    </li>
                                    <li class="format-image grid-item">
                                        <a href="<?php bloginfo('template_directory'); ?>/images/staff1.jpg" class="media-box magnific-image"> <img src="<?php bloginfo('template_directory'); ?>/images/staff1.jpg" alt=""> </a>
                                    </li>
                                </ul>
                                <div class="gallery-updates-overlay">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax parallax6 padding-tb100" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/parallax5.jpg)">
            	<div class="container">
                    <div class="parallax-text-block pull-right">
                        <h3>Nepal has been seriously devastated by the recent earthquake.</h3>
                        <p>Over 8,000 people have died (with death toll rising), thousands more are injured, and countless more have been displaced. Many homes, <a href="#">temples</a>, and public monuments have been destroyed throughout the affected areas.</p>
                        <a href="#" class="btn btn-primary">Donate to cause</a>
                    </div>
               	</div>
            </div>

            <div class="padding-tb75 padding-b0">
                <div class="container">
                	<div class="text-align-center">
                       	<h2 class="block-title block-title-center">Some of the success stories</h2>
                    </div>
                </div>
                <div class="carousel-wrapper">
                    <div class="row">
                        <ul class="owl-carousel carousel-fw" id="stories-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                            <li class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/causeg3.jpg" alt="" class="img-responsive">
                                    </div>

                                    <div class="col-md-6">
                                    	<div class="story-slider-content">
                                    		<div class="story-slider-table">
                                    			<div class="story-slider-cell">
                                                    <blockquote>
                                                        <h3>Lori now study with her friends</h3>
                                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec.</p>
                                                    </blockquote>
                                                    <a href="#" class="btn btn-primary">View full story</a>
                                              	</div>
                                           	</div>
                                      	</div>
                                    </div>
                                </div>
                           	</li>
                            <li class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/event2.jpg" alt="" class="img-responsive">
                                    </div>

                                    <div class="col-md-6">
                                    	<div class="story-slider-content">
                                    		<div class="story-slider-table">
                                    			<div class="story-slider-cell">
                                                    <blockquote>
                                                        <h3>Everyday food for Mumbai children</h3>
                                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim.</p>
                                                    </blockquote>
                                                    <a href="#" class="btn btn-primary">View full story</a>
                                              	</div>
                                           	</div>
                                      	</div>
                                    </div>
                                </div>
                           	</li>
                      	</ul>
                  	</div>
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

            <div class="padding-tb75 lgray-bg">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-4 col-sm-4">
                       		<h2 class="block-title">Latest news from our blog</h2>
                            <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim.</p>
                        </div>

                        <div class="col-md-8 col-sm-8">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="news-slider" data-columns="2" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                        <li class="item">
                                            <div class="grid-item blog-grid-item format-standard">
                                                <div class="grid-item-inner">
                                                    <a href="single-event.html" class="media-box">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/post1.jpg" alt="">
                                                    </a>
                                                    <div class="grid-item-content">
                                                        <h3 class="post-title"><a href="single-post.html">A single person can change million lives</a></h3>
                                                        <span class="meta-data">Posted on 11th Dec, 2015</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="grid-item blog-grid-item format-standard">
                                                <div class="grid-item-inner">
                                                    <a href="single-event.html" class="media-box">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/post3.jpg" alt="">
                                                    </a>
                                                    <div class="grid-item-content">
                                                        <h3 class="post-title"><a href="single-post.html">Donate your woolens this winter</a></h3>
                                                        <span class="meta-data">Posted on 11th Dec, 2015</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="grid-item blog-grid-item format-standard">
                                                <div class="grid-item-inner">
                                                    <a href="single-event.html" class="media-box">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/post2.jpg" alt="">
                                                    </a>
                                                    <div class="grid-item-content">
                                                        <h3 class="post-title"><a href="single-post.html">How to survive the tough path of life</a></h3>
                                                        <span class="meta-data">Posted on 08th Dec, 2015</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="grid-item blog-grid-item format-standard">
                                                <div class="grid-item-inner">
                                                    <a href="single-event.html" class="media-box">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/post3.jpg" alt="">
                                                    </a>
                                                    <div class="grid-item-content">
                                                        <h3 class="post-title"><a href="single-post.html">Donate your woolens this winter</a></h3>
                                                        <span class="meta-data">Posted on 11th Dec, 2015</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accent-bg padding-tb20 cta-fw">
    			<div class="container">
                    <a href="careers" class="btn btn-default btn-ghost btn-light btn-rounded pull-right">Become a volunteer</a>
                    <h4>Let's start doing your bit for the world. Join us as a Volunteer</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php
    get_footer();?>
