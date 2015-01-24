<?php /* Template Name: Reviews */ ?>

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

		</div>
		<div class="content-section">
			<div class="content-block blog-posts-listing">
				
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
						<div class="post">
							<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="post-info-title">
								<p><?php echo get_the_date('d.m.Y'); ?></p>
								<p class="time"><?php echo get_the_time(); ?></p>
								<div class="excerpt">
									<a href="<?php echo get_permalink(); ?>">
										<?php echo apply_filters('the_content', substr(get_the_content(), 0, 100) ); ?>
									</a>
								</div>
								<a class="read-more" href="<?php echo get_permalink(); ?>">Read More</a>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>
