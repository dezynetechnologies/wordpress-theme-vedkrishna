<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vedkrishna
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<div class="col-md-4 sidebar-block">
		<div class="widget tabbed_content tabs">
				<ul class="nav nav-tabs">
						<li class="active"> <a data-toggle="tab" href="#Trecent">Recent</a> </li>
						<li> <a data-toggle="tab" href="#Tpopular">Popular</a> </li>
						<li> <a data-toggle="tab" href="#Tcomments">Tags</a> </li>
				</ul>
				<div class="tab-content">
						<div id="Trecent" class="tab-pane active">
								<div class="widget recent_posts">
										<ul>
											<?php
											  $args = array('numberposts' => 3, // Number of recent posts thumbnails to display
        															'post_status' => 'publish' // Show only the published posts
																		 );
    										$recent_posts = wp_get_recent_posts($args);
    										foreach( $recent_posts as $recent ) {
													$url = esc_url( get_permalink( $recent['ID'] ) );
        									printf('<a href="%1$s" class="media-box">
															<img src="%2$s" alt="">
													</a><li><h5><a href="%3$s">%4$s</a></h5><span class="meta-data grid-item-meta">Posted on %5$s</span></li>',
														$url,
														get_the_post_thumbnail($recent['ID'], 'full'),
														$url,
            								apply_filters( 'the_title', $recent['post_title'], $recent['ID'] ),
														$recent['post_date']
        									);
    										}
												?>
												<!--
												<li>
												$args = array( 'numberposts' => '5', 'tax_query' => array(
												array(
												'taxonomy' => 'post_format',
												'field'    => 'slug',
												'terms'    => 'post-format-aside',
												'operator' => 'NOT IN'
												),
												array(
												'taxonomy' => 'post_format',
												'field'    => 'slug',
												'terms'    => 'post-format-image',
												'operator' => 'NOT IN'
												)
												) );
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
												</li> -->
										</ul>
								</div>
						</div>
						<div id="Tpopular" class="tab-pane">
								<div class="widget recent_posts">
										<ul>
											<?php
												$args = array('numberposts' => 3, // Number of recent posts thumbnails to display
																			'post_status' => 'publish', // Show only the published posts
																			'orderby' => 'title'
																		 );
												$recent_posts = wp_get_recent_posts($args);
												foreach( $recent_posts as $recent ) {
													$url = esc_url( get_permalink( $recent['ID'] ) );
													printf('<a href="%1$s" class="media-box">
															<img src="%2$s" alt="">
													</a><li><h5><a href="%3$s">%4$s</a></h5><span class="meta-data grid-item-meta">Posted on %5$s</span></li>',
														$url,
														get_the_post_thumbnail($recent['ID'], 'full'),
														$url,
														apply_filters( 'the_title', $recent['post_title'], $recent['ID'] ),
														$recent['post_date']
													);
												}
												?>
											<!--
												<li>
														<a href="single-post.html" class="media-box">
																<img src="<?php bloginfo('template_directory'); ?>/images/post2.jpg" alt="">
														</a>
														<h5><a href="single-post.html">How to survive the tough path of life</a></h5>
														<span class="meta-data grid-item-meta">Posted on 06th Dec, 2015</span>
												</li>
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
												</li> -->
										</ul>
								</div>
						</div>
						<div id="Tcomments" class="tab-pane">
								<div class="tag-cloud">
									<?php
									$tags = get_tags();
									$html = '';
									foreach ( $tags as $tag ) {
										$tag_link = get_tag_link( $tag->term_id );

										$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
										$html .= "{$tag->name}</a>";
									}
									echo $html;
									?>
								</div>
						</div>
				</div>
		</div>
		<?php
		// Only show the widget if site has multiple categories.
		if ( vedkrishna_categorized_blog() ) :
	  ?>
		<div class="widget sidebar-widget widget_categories">
			<h3 class="widgettitle">Post Categories</h3>
				<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
				</ul>
		</div>
		<?php
		endif;
		?>
		<div class="widget sidebar-widget widget_search">
			<div class="input-group">
					<input type="text" class="form-control" placeholder="Enter your keywords">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
					</span>
			</div>
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
