<?php /* Template Name: Areas Served - Details */ ?>

<?php include("header.php"); ?>

<?php
	function get_the_slug( $id=null ){
		if( empty($id) ):
			global $post;
			if( empty($post) )
				return ''; // No global $post var available.
			$id = $post->ID;
		endif;

		$slug = basename( get_permalink($id) );
		return $slug;
	}
?>

<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
			<div class="content-block area-served-map <?php echo get_the_slug(); ?>">
				<div class="content-wrapper">
					<h2><?php the_field('top_title'); ?></h2>
				</div>
			</div>
		</div>
		<?php 
	    $top_desc = get_field('top_description', $post->ID);
	    if( !empty($top_desc) ): ?>

		<div class="content-section">
			<div class="content-block">
				<div class="content-wrapper">     
					<div class="text"
>						<p>
							<?php echo $top_desc; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="content-section">
			<div class="content-block">
				<div class="content-wrapper">
					<div class="appliances-categories">
						<a href="#" class="appliance">
							<div class="appliance-icon washing">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-washing.png" alt="">
							</div>
							Washing Machines
						</a>
						<a href="#" class="appliance">
							<div class="appliance-icon fridges">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-fridges.png" alt="">
							</div>
							Fridges
						</a>
						<a href="#" class="appliance">
							<div class="appliance-icon dryers">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-dryers.png" alt="">
							</div>
							Dryers
						</a>
						<a href="#" class="appliance">
							<div class="appliance-icon microwaves">
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

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>