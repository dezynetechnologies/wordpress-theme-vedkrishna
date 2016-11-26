<?php
/**
 * Template Name: Blog Page
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
        			<h1 class="block-title">Blog</h1>
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
                    	<div class="blog-list-item format-standard">
                        	<div class="row">
                            	<div class="col-md-4 col-sm-4">
                                	<a href="single-post.html" class="media-box grid-featured-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/post1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3><a href="single-post.html">A single person can change million lives</a></h3>
                                    <span class="meta-data grid-item-meta"><i class="fa fa-calendar"></i> Posted on 11th Dec, 2015</span>
                                    <div class="grid-item-excerpt">
                                        <p>A blog post sample excerpt text which can be edited by editing the blog post page. Excerpt length can be changed from the default blog settings...</p>
                                    </div>
                                    <a href="single-post.html" class="basic-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    	<div class="blog-list-item">
                        	<div class="row">
                            	<div class="col-md-4 col-sm-4">
                                	<a href="single-post.html" class="media-box grid-featured-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/post2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3><a href="single-post.html">Donate your woolens this winter</a></h3>
                                    <span class="meta-data grid-item-meta"><i class="fa fa-calendar"></i> Posted on 11th Dec, 2015</span>
                                    <div class="grid-item-excerpt">
                                        <p>A blog post sample excerpt text which can be edited by editing the blog post page. Excerpt length can be changed from the default blog settings...</p>
                                    </div>
                                    <a href="single-post.html" class="basic-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    	<div class="blog-list-item">
                        	<div class="row">
                            	<div class="col-md-4 col-sm-4">
                                	<a href="single-post.html" class="media-box grid-featured-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/post3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3><a href="single-post.html">How to survive the tough path of life</a></h3>
                                    <span class="meta-data grid-item-meta"><i class="fa fa-calendar"></i> Posted on 11th Dec, 2015</span>
                                    <div class="grid-item-excerpt">
                                        <p>A blog post sample excerpt text which can be edited by editing the blog post page. Excerpt length can be changed from the default blog settings...</p>
                                    </div>
                                    <a href="single-post.html" class="basic-link">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Page Pagination -->
                        <nav>
                       		<ul class="pagination pagination-lg">
                              	<li>
                                	<a href="#" aria-label="Previous">
                                  		<span aria-hidden="true">&laquo;</span>
                                	</a>
                              	</li>
                              	<li class="active"><a href="#">1</a></li>
                              	<li><a href="#">2</a></li>
                              	<li><a href="#">3</a></li>
                              	<li>
                                	<a href="#" aria-label="Next">
                                  		<span aria-hidden="true">&raquo;</span>
                                	</a>
                              	</li>
                        	</ul>
                       	</nav>
                    </div>
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php
    get_footer();?>
