<?php /* Template Name: Appliances - Details */ ?>

<?php include("header.php"); ?>


<?php while ( have_posts() ) : the_post(); ?>

<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
			<div class="content-block product-details">
				<div class="product-wrapper">

					<?php # main gallery ?>

					<?php if( have_rows('appliance_gallery') ): ?>

						<div class="gallery-product">
							<div class="full-image">
								<img src="" alt="">
							</div>

							<ul id="product-slider" class="flexslider">
								<ul class="slides">
									<?php while( have_rows('appliance_gallery') ): the_row();
										$image = get_sub_field('image');
									?>

									<li><img src="<?php $print_image = wp_get_attachment_image_src( $image, 'full' ); echo $print_image[0]; ?>"></li>
									<?php endwhile; ?>
								</ul>
							</ul>
						</div>

					<?php endif; ?>

					<?php ################ ?>


					<?php # rental content ?>

					<div class="rental-container">
						
					</div>
					
					<?php ################ ?>


					<?php # main content ?>


					<h2><?php the_field('name'); ?></h2>
					<?php 
				    $top_desc = get_field('description', $post->ID);
				    if( !empty($top_desc) ): ?>
					        
						<div class="text">
							<?php echo $top_desc; ?>
						</div>
					<?php endif; ?>

					<?php ################ ?>					



					<?php # extra content ?>

					<?php if( have_rows('appliance_content') ): ?>
						<?php while( have_rows('appliance_content') ): the_row();
							$subtitle = get_sub_field('title');
							$subdescription = get_sub_field('description');
						
						if(!empty($subtitle)): ?>
							<h2><?php echo $subtitle; ?></h2>
						<?php endif; 
						if(!empty($subdescription)): ?>
							<div class="text">
								<?php echo $subdescription; ?>
							</div>
						<?php endif; ?>
						
						<?php endwhile; ?>
					<?php endif; ?>

					<?php ################ ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>

<?php include("footer.php"); ?>

<script type="text/javascript">
	$.each($('#menu-main-navigation li'), function(item, i){
		if($(this).find('a').text() == 'Appliances') {
			$(this).addClass('current_page_parent');
		}
	});
</script>