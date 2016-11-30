<?php
/**
 * Template Name: Causes Page
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
        			<h1 class="block-title">Our Causes</h1>
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
                	<div class="col-md-8 content-block">
                        <ul class="causes-list cause-page-listing">
                          <?php
                            if ( get_query_var('paged') ) $paged = get_query_var('paged');
                            if ( get_query_var('page') ) $paged = get_query_var('page');

                            $query = new WP_Query( array( 'post_type' => 'cause', 'paged' => $paged,'posts_per_page' => 2,'order_by' => 'rand' ) );

                            if ( $query->have_posts() ) : ?>
	                           <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                               <li class="causes-list-item cause-item">
                               	<div class="row">
                                   	<div class="col-md-4 col-sm-4 list-thumb">
                                      <?php if ( has_post_thumbnail() ) : ?>
                                          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                          </a>
                                        <?php endif; ?>
                                        <!--
                                           <a href="single-cause.html">
                                               <img src="<?php bloginfo('template_directory'); ?>/images/causeg1.jpg" alt="">
                                           </a> -->
                                          	<div class="cause-progress"><a class="cProgress" data-complete="88" data-color="F23827" data-toggle="tooltip" data-original-title="10 days left" data-placement="left"><strong></strong></a></div>
                                       </div>
                                       <div class="col-md-8 col-sm-8">
                                           <div class="cause-list-item-cont">
                                               <?php the_title( '<h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                                               <?php the_content(); ?>
                                               <div class="meta-data">Donated $26400 / <span class="cause-target">$30000</span></div>
                                               <?php
                                                     $my_custom_field = get_post_custom_values( 'causecoordinator' );
                                                     foreach ( $my_custom_field as $key => $value ) {
                                                       echo  $value . "<br />";
                                                     }

                                                     $mykey_values = get_post_custom_values( 'causecontact' );
                                                     foreach ( $mykey_values as $key => $value ) {
                                                       echo $value . "<br />";
                                                     }
                                                     echo get_the_term_list( the_ID(), 'causetype', '<strong>RAM Option(s):</strong> ', ', ', '' );
                                               ?>
                                           </div>
                                       </div>
                                   </div>
                               </li>
	                          <?php endwhile; wp_reset_postdata(); ?>
	                          <!-- show pagination here -->
                            <?php
                            $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $query->max_num_pages
                            ) );
                            ?>
                           <?php else : ?>
	                           <!-- show 404 error here -->
                           <?php endif; ?>
                            <!--
                            <li class="causes-list-item cause-item">
                            	<div class="row">
                                	<div class="col-md-4 col-sm-4 list-thumb">
                                        <a href="single-cause.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/causeg1.jpg" alt="">
                                        </a>
                                       	<div class="cause-progress"><a class="cProgress" data-complete="88" data-color="F23827" data-toggle="tooltip" data-original-title="10 days left" data-placement="left"><strong></strong></a></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="cause-list-item-cont">

                                            <h3 class="post-title"><a href="single-cause.html">Help small shopkeepers of Sunyani</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Nam malesuada dapi bus diam, ut fringilla purus efficitur  eget...</p>
                                            <div class="meta-data">Donated $26400 / <span class="cause-target">$30000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="causes-list-item cause-item">
                            	<div class="row">
                                	<div class="col-md-4 col-sm-4 list-thumb">
                                        <a href="single-cause.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/causeg2.jpg" alt="">
                                        </a>
                                       	<div class="cause-progress"><a class="cProgress" data-complete="52" data-color="F6BB42" data-toggle="tooltip" data-original-title="25 days left" data-placement="left"><strong></strong></a></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="cause-list-item-cont">
                                            <h3 class="post-title"><a href="single-cause.html">Help relocate the refugees</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Nam malesuada dapi bus diam, ut fringilla purus efficitur  eget...</p>
                                            <div class="meta-data">Donated $21840 / <span class="cause-target">$40000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="causes-list-item cause-item">
                            	<div class="row">
                                	<div class="col-md-4 col-sm-4 list-thumb">
                                        <a href="single-cause.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/causeg5.jpg" alt="">
                                        </a>
                                       	<div class="cause-progress"><a class="cProgress" data-complete="75" data-color="8CC152" data-toggle="tooltip" data-original-title="65 days left" data-placement="left"><strong></strong></a></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="cause-list-item-cont">
                                            <h3 class="post-title"><a href="single-cause.html">Save tigers from poachers</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Nam malesuada dapi bus diam, ut fringilla purus efficitur  eget...</p>
                                            <div class="meta-data">Donated $15000 / <span class="cause-target">$20000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="causes-list-item cause-item">
                            	<div class="row">
                                	<div class="col-md-4 col-sm-4 list-thumb">
                                        <a href="single-cause.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/causeg6.jpg" alt="">
                                        </a>
                                       	<div class="cause-progress"><a class="cProgress" data-complete="88" data-color="8CC152" data-toggle="tooltip" data-original-title="70 days left" data-placement="left"><strong></strong></a></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="cause-list-item-cont">
                                            <h3 class="post-title"><a href="single-cause.html">Help rebuild Nepal</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Nam malesuada dapi bus diam, ut fringilla purus efficitur  eget...</p>
                                            <div class="meta-data">Donated $176000 / <span class="cause-target">$200000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
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
                    <div class="col-md-4 sidebar-block">
                        <div class="widget sidebar-widget widget_categories">
                        	<h3 class="widgettitle">Cause Categories</h3>
                            <ul>
                            	<li><a href="#">Education</a> (3)</li>
                            	<li><a href="#">Environment</a> (1)</li>
                            	<li><a href="#">Global warming</a> (6)</li>
                            	<li><a href="#">Water</a> (4)</li>
                            	<li><a href="#">Wild life</a> (2)</li>
                            	<li><a href="#">Small business</a> (12)</li>
                            </ul>
                        </div>
                        <div class="widget recent_posts">
                           	<h3 class="widgettitle">Latest Posts</h3>
                            <ul>
                                <li>
                                    <a href="single-post.html" class="media-box">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/post1.jpg" alt="">
                                    </a>
                                    <h5><a href="single-post.html">A single person can change million lives</a></h5>
                                    <span class="meta-data grid-item-meta">Posted on 11th Dec, 2015</span>
                                </li>
                                <li>
                                    <a href="single-post.html" class="media-box">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/post3.jpg" alt="">
                                    </a>
                                    <h5><a href="single-post.html">Donate your woolens this winter</a></h5>
                                    <span class="meta-data grid-item-meta">Posted on 11th Dec, 2015</span>
                                </li>
                                <li>
                                    <a href="single-post.html" class="media-box">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/post2.jpg" alt="">
                                    </a>
                                    <h5><a href="single-post.html">How to survive the tough path of life</a></h5>
                                    <span class="meta-data grid-item-meta">Posted on 06th Dec, 2015</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_testimonials">
                        	<h3 class="widgettitle">Stories of change</h3>
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="1" data-autoplay="5000" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
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
                                    </ul>
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
