<?php
/**
 * Template Name: Our_Impact Page
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
        			<h1 class="block-title">Our Impact</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 content-block">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        <p>Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        <h3>There are multiple ways you can help others to change their lives</h3>
                        <ul class="checks">
                        	<li>Start a workplace campaign</li>
                            <li>Youth involvement</li>
                            <li>Become a Volunteer</li>
                            <li>Become a partner</li>
                            <li>Representative Program</li>

                        </ul>
                    </div>

                    <div class="col-md-4 sidebar-block">
                    	<div class="widget widget_donations">
                        	<i class="fa fa-inr fa-5x pull-left"></i>
                            <h4>What your single rupee can change</h4>
                            <form action="<?php bloginfo('url'); ?>/donate" method="post">
                            	<label>first Name</label>
                            	<input name="firstname" type="text" class="form-control">
                            	<label>Amount (in INR)</label>
                                <input name="amount" type="text" class="form-control" placeholder="INR">



                              <!--<button class="btn btn-default btn-ghost btn-light btn-rounded btn-block" >Donate</button>-->
<input class="btn btn-default btn-ghost btn-light btn-rounded btn-block" type="submit" value="Donate" />

                            </form>
                        </div>
                    </div>
               	</div>
            </div>
            <div class="spacer-50"></div>
            <div class="padding-tb45 parallax parallax-light parallax1 counters" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/inside6.jpg)">
            	<div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-inr fa-4x"></i> </div>
                            <div class="timer" data-perc="9000"> <span class="count">1380089</span> </div>
                            <span class="fact">Amount raised</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-heart-o fa-4x"></i> </div>
                            <div class="timer" data-perc="96"> <span class="count">3</span> </div>
                            <span class="fact">Causes</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-bar-chart-o fa-4x"></i> </div>
                            <div class="timer" data-perc="1500"> <span class="count">10</span> </div>
                            <span class="fact">Total members</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-hand-peace-o fa-4x"></i> </div>
                            <div class="timer" data-perc="1500"> <span class="count">30</span> </div>
                            <span class="fact">People Impacted</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-tb75 padding-b0">
                <div class="container">
                	<div class="text-align-center">
                       	<h2 class="block-title block-title-center">Some of the success stories</h2>
                    </div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-autoplay="5000" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <li class="item">
                                    <div class="testimonial-block">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                        </blockquote>
                                        <div class="testimonial-avatar"><img src="<?php bloginfo('template_directory'); ?>/images/story1.jpg" alt="" width="70" height="70"></div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-in">
                                                <strong>Ada Ajimobi</strong>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="testimonial-block">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                        </blockquote>
                                        <div class="testimonial-avatar"><img src="<?php bloginfo('template_directory'); ?>/images/story2.jpg" alt="" width="70" height="70"></div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-in">
                                                <strong>Chloe Lévesque</strong>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="testimonial-block">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                        </blockquote>
                                        <div class="testimonial-avatar"><img src="<?php bloginfo('template_directory'); ?>/images/story1.jpg" alt="" width="70" height="70"></div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-in">
                                                <strong>Ada Ajimobi</strong>
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

    <!-- Site Footer -->
    <?php
    get_footer();?>
