<?php
/**
 * Template Name: About Page
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
    	<div class="page-banner parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/parallax6.jpg);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">About us</h1>
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
                	<div class="col-md-4 col-sm-4">
                        <div class="icon-box ibox-plain">
                            <div class="ibox-icon">
                                <i class="fa fa-windows"></i>
                            </div>
                            <h3>Boxed &amp; Wide Layouts</h3>
                            <p>2 layout choices for Wide screen and Boxed layout with option to set patterns and images as background.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-plain">
                            <div class="ibox-icon">
                                <i class="fa fa-navicon"></i>
                            </div>
                            <h3>Megamenu</h3>
                            <p>The main menu is ready for the multi columns mega menu which can have any kind of HTML/TEXT inside.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-plain">
                            <div class="ibox-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <h3>Twitter Widget</h3>
                            <p>An easy to use Twitter feeds plugin is included in the template which can fetch any number of Tweets from your account.</p>
                        </div>
                   	</div>
                    <div class="col-md-8 col-sm-8">
                    	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        <div class="row">
                        	<div class="col-md-4 col-sm-4">
                            	<div class="grid-item">
                                	<img src="<?php bloginfo('template_directory'); ?>/images/event1.jpg" alt="">
                                    <div class="grid-item-content">
                                    	<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-4 col-sm-4">
                            	<div class="grid-item">
                                	<img src="<?php bloginfo('template_directory'); ?>/images/event4.jpg" alt="">
                                    <div class="grid-item-content">
                                    	<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-4 col-sm-4">
                            	<div class="grid-item">
                                	<img src="<?php bloginfo('template_directory'); ?>/images/event5.jpg" alt="">
                                    <div class="grid-item-content">
                                    	<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               	</div>

                <div class="cta">
                 	<a href="<?php bloginfo('url'); ?>/donate" class="btn btn-primary pull-right">Donate Now</a>
                	<p>Let's start doing your bit for the world. Donate a little.</p>
                </div>
                <div class="spacer-30"></div>

                <div class="row">
                	<div class="col-md-5 col-sm-5">
                		<h2>Our Staff &amp; Volunteers</h2>
                        <hr class="sm">
                       	<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                    	<div class="row">
                        	<div class="col-ms-4 col-sm-4 col-xs-4">
                                <ul class="carets">
                                    <li>Adamu Makinwa</li>
                                    <li>Casper Lundin</li>
                                    <li>Thomas Gagné</li>
                                    <li>Christina Morgan </li>
                                    <li>Markovics Zoltán </li>
                                    <li>Jacolien Hendriks</li>
                                </ul>
                           	</div>
                        	<div class="col-ms-4 col-sm-4 col-xs-4">
                                <ul class="carets">
                                    <li>Isabela Barboza </li>
                                    <li>Juhani Virtanen </li>
                                    <li>Phan Châu</li>
                                    <li>Kuzey Ünal</li>
                                    <li>Juan Rubio</li>
                                    <li>Marko Mlakar</li>
                                </ul>
                           	</div>
                        	<div class="col-ms-4 col-sm-4 col-xs-4">
                                <ul class="carets">
                                    <li>Kelly Lambert</li>
                                    <li>Walid Ahelluc</li>
                                    <li>Ernst Graf</li>
                                    <li>Lore Smets</li>
                                    <li>Camiel de Graaf</li>
                                    <li>Ladislau Berindei</li>
                                </ul>
                           	</div>
                        </div>
                    </div>
                </div>
                <div class="spacer-20"></div>
                <div class="row">
                	<div class="col-md-4 col-sm-4">
                    	<div class="grid-item grid-staff-item">
                            <div class="grid-item-inner">
                              	<div class="media-box"><img src="<?php bloginfo('template_directory'); ?>/images/staff1.jpg" alt=""></div>
                              	<div class="grid-item-content">
                                	<h3>Tayri awragh</h3>
                                    <span class="meta-data">CEO/Founder</span>
                                	<ul class="social-icons-rounded social-icons-colored">
                                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                  	</ul>
                                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                              	</div>
                            </div>
                       	</div>
                    </div>
                	<div class="col-md-4 col-sm-4">
                    	<div class="grid-item grid-staff-item">
                            <div class="grid-item-inner">
                              	<div class="media-box"><img src="<?php bloginfo('template_directory'); ?>/images/post1.jpg" alt=""></div>
                              	<div class="grid-item-content">
                                	<h3>Howard Porter</h3>
                                    <span class="meta-data">Education Campaigns Manager</span>
                                	<ul class="social-icons-rounded social-icons-colored">
                                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                  	</ul>
                                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                              	</div>
                            </div>
                       	</div>
                    </div>
                	<div class="col-md-4 col-sm-4">
                    	<div class="grid-item grid-staff-item">
                            <div class="grid-item-inner">
                              	<div class="media-box"><img src="<?php bloginfo('template_directory'); ?>/images/staff2.jpg" alt=""></div>
                              	<div class="grid-item-content">
                                	<h3>Ayoub Ameqran</h3>
                                    <span class="meta-data">Environment Campaigns Manager</span>
                                	<ul class="social-icons-rounded social-icons-colored">
                                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                  	</ul>
                                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                              	</div>
                            </div>
                       	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php
    get_footer();?>
