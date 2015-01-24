<?php /* Template Name: Support */ ?>

<?php include("header.php"); ?>

<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
			<div class="content-block">
				<div class="content-wrapper">
					<h2><?php the_field('top_title'); ?></h2>
					<?php 
				    $top_desc = get_field('top_description', $post->ID);
				    if( !empty($top_desc) ): ?>
					        
						<div class="text">
							<?php echo $top_desc; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>