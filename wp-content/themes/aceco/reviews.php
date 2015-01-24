<?php /* Template Name: Reviews */ ?>

<?php include("header.php"); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
			<div class="content-block">
				<div class="content-wrapper">
					<h2><?php the_field('title'); ?></h2>
					<?php 
				    $top_desc = get_field('top_description', $post->ID);
				    if( !empty($top_desc) ): ?>
					        
						<div class="text">
							<?php echo $top_desc; ?>
						</div>
					<?php endif; ?>
					<a href="write-your-review/" class="write-review">Write Your Review</a>
				</div>
			</div>
		</div>
		<div class="content-section">
			<div class="content-block reviews-listing">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>

<?php include("footer.php"); ?>
