<?php /* Template Name: Appliances */ ?>

<?php include("header.php"); ?>

<div class="main-content">
	<div class="wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="content-section">
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
			<div class="content-block gray">
				<h3 class="black-section-title"><span>Choose an appliance</span></h3>
				<div class="content-wrapper appliances">
					<div class="appliances-selector">
						<a href="washing-machines/" class="appliance washing">
							<div class="appliance-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-washing.png" alt="">
							</div>
							Washing Machines
						</a>
						<a href="fridges/" class="appliance fridges">
							<div class="appliance-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-fridges.png" alt="">
							</div>
							Fridges
						</a>
						<a href="dryers/" class="appliance dryers">
							<div class="appliance-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-dryers.png" alt="">
							</div>
							Dryers
						</a>
						<a href="microwaves/" class="appliance microwaves">
							<div class="appliance-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-microwaves.png" alt="">
							</div>
							Microwaves
						</a>
					</div>
				</div>
			</div>
			<?php if( have_rows('content_section') ): ?>
				<?php while( have_rows('content_section') ): the_row(); ?>
					
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
										<h2><?php echo $title; ?></h2>
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

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php endwhile; ?>
	</div>
</div>

<?php include("footer.php"); ?>