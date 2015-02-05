<?php /* Template Name: Appliances - Listing */ ?>

<?php include("header.php"); ?>

<?php
	function getUrl() {
		$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
		$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
		$url .= $_SERVER["REQUEST_URI"];
		return $url;
	}

	function getApplCat() {
		$current_url = getUrl();

		$url1 = explode("appliances/", $current_url);
		$url2 = explode("/", $url1[1]);

		return $url2[0];
	}
?>

<input type="hidden" id="appl-cat" value="">
<div class="main-content">
	<div class="wrapper">
		<div class="content-section products">
			<div class="content-block">

				<?php

				$at = getApplCat();

                $args = array(
                    'post_type'             => 'appliances',
                    'orderby'               => 'order',
                    'order'                 => 'ASC',
                    'appliances_type'   	=> $at,
                    'posts_per_page'        => -1
                );

                $appliances_query = new WP_Query( $args );

                $first = true;

                if ($appliances_query->have_posts()) : ?>
					<div class="product-selector">
                    	<?php while ($appliances_query->have_posts()) : $appliances_query->the_post(); ?>
                    		<?php 
                			// Title
                			$name = get_field('name');
                			
                			// Image
                			if( have_rows('appliance_gallery') ):
                				$counter = 0;
                				if($counter < 1) {
                    				while( have_rows('appliance_gallery') ): the_row();
                    					$image = get_sub_field('image');
                    					$counter++;
                    				endwhile;
                				}
                			endif;
                			?>

                			<div class="product">
                				<a href="<?php echo get_permalink(); ?>">
                					<div class="product-image">
										<img src="<?php $print_image = wp_get_attachment_image_src( $image, 'full' ); echo $print_image[0]; ?>" alt="">
									</div>
								</a>
								<a href="<?php echo get_permalink(); ?>" class="prod-name"><?php echo $name; ?></a>

								<?php 
                    			// Prices
                    			if( have_rows('prices') ): 
                    				$counter = 0;
                    				if($counter < 2) {
                        				while( have_rows('prices') ): the_row();
                        					$num_mon = get_sub_field('number_of_months');
                        					$price = get_sub_field('price');
                        					?>
                        					<p><?php echo $num_mon ?> months <span><?php echo $price ?></span> p/month</p>
                        					<?php 
                        					$counter++;
                        				endwhile;
                    				}
                    			endif; ?>

                    			<?php 
                    			// Prices
                    			if( have_rows('combo_prices') ): 
                    				$counter = 0;
                    			?>
                    			<span class="price-title">Combo Pricing</span>
                    			<?php
                    				if($counter < 2) {
                        				while( have_rows('combo_prices') ): the_row();
                        					$num_mon = get_sub_field('number_of_months');
                        					$price = get_sub_field('price');
                        					?>
                        					<p><?php echo $num_mon ?> months <span><?php echo $price ?></span> p/month</p>
                        					<?php 
                        					$counter++;
                        				endwhile;
                    				}
                    			endif; ?>
        						<a href="<?php echo get_permalink(); ?>" class="btn-view">View</a>
                			</div> 
                		<?php endwhile; ?>
                	</div>
            	<?php endif; ?>

            	<?php wp_reset_query(); ?>
			</div>
		</div>
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
		<?php if( have_rows('content_section') ): ?>
			<?php while( have_rows('content_section') ): the_row(); ?>
				<div class="content-section">
					<?php if( have_rows('content_block') ): ?>
						<?php while( have_rows('content_block') ): the_row();
							
							$bgcolor = get_sub_field('block_background_color');
							$dashed = get_sub_field('dashed_block_border');
							$title = get_sub_field('title');
							$block_content = get_sub_field('block_content');
							$isDashed = '';

							if ($dashed == 1)
								$isDashed = 'dashed';
							?>

							<div class="content-block <?php echo $isDashed.' '.$bgcolor ?>">
								<div class="content-wrapper">
									<?php if( !empty($title) ): ?>
										<h3><?php echo $title; ?></h3>
									<?php endif; ?>
									<?php if( !empty($block_content) ): ?>
										<div class="text">
											<?php echo $block_content; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php include("footer.php"); ?>