<?php /* Template Name: Areas Served */ ?>

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
							<p>
								<?php echo $top_desc; ?>
							</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="content-block gray">
				<h3 class="black-section-title"><span>Choose your area</span></h3>
				<div class="map-areas">
					<a href="northern-beaches/" class="northern-beaches">Northern Beaches</a>
					<a href="north-shore/" class="north-shore">North Shore</a>
					<a href="inner-west/" class="inner-west">Inner West</a>
					<a href="eastern-suburbs/" class="eastern-suburbs">Eastern Suburbs</a>
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