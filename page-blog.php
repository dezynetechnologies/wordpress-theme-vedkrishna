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
                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                    <?php
                		if ( have_posts() ) :

                			/*if ( is_home() && ! is_front_page() ) : ?>
                				<header>
                					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                				</header>
                			<?php
                    endif;*/

                			/* Start the Loop */
                			while ( have_posts() ) : the_post();

                				/*
                				 * Include the Post-Format-specific template for the content.
                				 * If you want to override this in a child theme, then include a file
                				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                				 */

                				//get_template_part( 'template-parts/content', get_post_format() );
                        get_template_part( 'template-parts/content', '' );
                        //get_template_part( 'template-parts/content', 'none' );
                			endwhile;

                			the_posts_navigation();

                		else :

                			get_template_part( 'template-parts/content', 'none' );

                		endif; ?>
                    </div>
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php
    get_footer();?>
