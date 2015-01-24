<?php /* Template Name: Blog */ ?>

<?php include("header.php"); ?>

<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="content-block">
					<div class="content-wrapper">
						<h2><?php the_field('top_title'); ?></h2>
						<?php 
					    $top_desc = get_field('top_description', $post->ID);
					    if( !empty($top_desc) ): ?>
						        
							<div class="text">
								<p>
									<?php echo $top_desc; ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>

				<div class="content-block gray">
					<div class="content-wrapper">
						
					</div>
				</div>
		</div>







		<?php 
		// the query
		$args = array(
		    'post_type'             => 'post',
		    'posts_per_page'        => -1
		);

		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<h2><?php the_title(); ?></h2>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php include("footer.php"); ?>
