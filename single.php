<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vedkrishna
 */

get_header(); ?>
<!-- Hero Area -->
<div class="hero-area">
	<div class="page-banner parallax" style="background-image:url(images/inside8.jpg);">
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
								<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_format() );

		the_post_navigation();

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

								   <!-- Post Title Goes Here -->
									 <!--
									<h3>A single person can change million lives</h3> -->

									  <!-- <div class="post-media">
											<img src="images/post-detail1.jpg" alt="">
										</div> -->
										<!-- Post Content -->
										<!--
										<div class="post-content">
											<p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec.</p>
											<img src="images/cause3.jpg" alt="" class="align-left">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ipsum, efficitur a fermen tum sed, suscipit sit amet arcu. Ut ut finibus tortor, eu ultrices turpis. Mauris vitae elit nec diam elementum elementum. Mauris ante quam, consequat ac nibh placerat, lacinia sollicitudin mi. Duis facilisis nibh quam, sit amet interdum tellus sollicitudin tempor. Curabitur aliquam erat in nisl lobortis, ut pellentesque lectus viverra.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa ipsum, efficitur a fermen tum sed, suscipit sit amet arcu. Ut ut finibus tortor, eu ultrices turpis. Mauris vitae elit nec diam elementum elementum. Mauris ante quam, consequat ac nibh placerat, lacinia sollicitudin mi. Duis facilisis nibh quam, sit amet interdum tellus sollicitudin tempor. Curabitur aliquam erat in nisl lobortis, ut pellentesque lectus viverra. Aenean sodales aliquet arcu at aliquam. Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim. Aenean vitae diam id lacus fringilla maximus. Mauris auctor efficitur nisl, non blandit urna fermentum nec.</p>
										</div> -->
										<!-- Tags -->

										<!-- <div class="tag-cloud">
												<i class="fa fa-tags"></i>
												<a href="#">Water</a>
												<a href="#">Students</a>
												<a href="#">NYC</a>
										</div> -->
										<!-- About Author -->
										<!-- <section class="about-author">
												<img src="images/user1.jpg" alt="avatar" class="img-thumbnail">
												<div class="post-author-content">
														<h3>Emma Paquette <span class="label label-primary">Author</span></h3>
														<p><strong>Beverly Barnett</strong>, is a regular writer for the Vestige Museum blog. She loves to write more about the animal species and have so much faith in the nature's doing.</p>
												</div>
										</section> -->
										<!-- Pagination -->
										<!-- <ul class="pager">
												<li class="pull-left"><a href="#">&larr; Prev Post</a></li>
												<li class="pull-right"><a href="#">Next Post &rarr;</a></li>
										</ul> -->
										<!-- Comment Block -->
										<!-- Comment Form -->
								</div>

								<!-- Sidebar -->
								<?php
								get_sidebar();
								?>
						</div>
				</div>
		</div>
</div>
<!-- Site Footer -->
<?php
get_footer();
?>
