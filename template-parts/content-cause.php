<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vedkrishna
 */
?>
<div class="blog-list-item format-standard">
	<!-- <div class="container"> -->
		<div class="row">
				  <div class="col-md-4 col-sm-4">
						<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="media-box grid-featured-img">
									<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>
						<!-- <a href="<?php esc_url( get_permalink() ); ?>" class="media-box grid-featured-img">
									<img src="<?php bloginfo('template_directory'); ?>/images/post1.jpg" alt="">
							</a>-->
					</div>
					<div class="col-md-8 col-sm-8">
							<?php
							if ( is_single() ) :
								the_title( '<h2 class="entry-title">', '</h1>' );
							else :
								the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							endif;

							if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php vedkrishna_posted_on(); ?>
							</div><!-- .entry-meta -->
							<?php
							endif; ?>
							<!-- <div class="grid-item-excerpt">
									<p>A blog post sample excerpt text which can be edited by editing the blog post page. Excerpt length can be changed from the default blog settings...</p>
							</div> -->
							<div class="grid-item-excerpt">
								<?php
								  the_content();
									/* translators: %s: Name of current post. */
									/*
									the_content( sprintf(

										wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'vedkrishna' ), array( 'span' => array( 'class' => array() ) ) ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									) );*/

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vedkrishna' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
							<?php vedkrishna_entry_footer(); ?>
							<!--
							<footer class="entry-footer">
								<?php vedkrishna_entry_footer(); ?>
							</footer> --> <!-- .entry-footer -->
							<!-- <a href="<?php esc_url( get_permalink()); ?>" class="basic-link">Read more</a> -->
					</div>
			</div>
		<!--</div>-->
	</div>
