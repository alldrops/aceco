<?php /* Template Name: Appliances - Details */ ?>

<?php include("header.php"); ?>

<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
			<div class="content-block">
				<div class="product-wrapper">
					<div class="product-gallery">
						<ul>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="content-section products">
			<div class="content-block">
				<div class="product-selector">
					<div class="product">
						<a href="#">
							<div class="product-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/placeholders/placeholder-fridge.png" alt="">
							</div>
						</a>
						<a href="#" class="prod-name">2 Door Fridge 350L</a>
						<p>3 months <span>$40.00</span> p/month</p>
						<p>6 months <span>$36.00</span> p/month</p>
						<a href="#" class="btn-view">View</a>
					</div>
					<div class="product">
						<a href="#">
							<div class="product-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/placeholders/placeholder-fridge.png" alt="">
							</div>
						</a>
						<a href="#" class="prod-name">2 Door Fridge 300L</a>
						<p>3 months <span>$38.00</span> p/month</p>
						<p>6 months <span>$34.00</span> p/month</p>
						<a href="#" class="btn-view">View</a>
					</div>
					<div class="product">
						<a href="#">
							<div class="product-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/placeholders/placeholder-fridge.png" alt="">
							</div>
						</a>
						<a href="#" class="prod-name">2 Door Fridge 250L</a>
						<p>3 months <span>$33.00</span> p/month</p>
						<p>6 months <span>$30.00</span> p/month</p>
						<a href="#" class="btn-view">View</a>
					</div>
					<div class="product">
						<a href="#">
							<div class="product-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/placeholders/placeholder-fridge.png" alt="">
							</div>
						</a>
						<a href="#" class="prod-name">2 Door Fridge 200L</a>
						<p>3 months <span>$30.00</span> p/month</p>
						<p>6 months <span>$28.00</span> p/month</p>
						<a href="#" class="btn-view">View</a>
					</div>
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

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/owl.carousel.min.js"></script>
<?php include("footer.php"); ?>