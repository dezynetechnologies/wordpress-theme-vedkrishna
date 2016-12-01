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

                            $query = new WP_Query( array( 'post_type' => 'cause', 'paged' => $paged,'posts_per_page' => 3,'order_by' => 'rand' ) );

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
                                               <!-- <div class="meta-data">Donated $26400 / <span class="cause-target">$30000</span></div> -->
                                               <?php

                                                     $my_custom_field = get_post_custom_values( 'causecoordinator' );
                                                     foreach ( $my_custom_field as $key => $value ) {
                                                       echo  $value . "<br />";
                                                     }

                                                     $mykey_values = get_post_custom_values( 'causecontact' );
                                                     foreach ( $mykey_values as $key => $value ) {
                                                       echo $value . "<br />";
                                                     }
                                                    $myterms = get_the_term_list( null, 'causetype', 'Cause Type(s): ', ', ', '' );
                                                    echo $myterms;

                                               ?>
                                           </div>
                                       </div>
                                   </div>
                               </li>
	                          <?php endwhile; wp_reset_postdata(); ?>

	                          <!-- show pagination here -->
                            <nav>
                            <?php
                            $big = 999999999; // need an unlikely integer
                            //'format' => '?paged=%#%',
                            $return =  paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '/page/%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $query->max_num_pages, 'type' => 'list'
                            ) );
                            echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination pagination-lg">', $return );
                            ?>
                            </nav>
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
                        <!-- <nav>
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
                       	</nav> -->
                    </div>
                    <!-- cause sidebar -->
                    <?php get_template_part('sidebar','cause'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php
    get_footer();?>
