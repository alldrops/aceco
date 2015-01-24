<?php include("header.php"); ?>

<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="content-block blog-post">
					
					<div class="content-wrapper">
						<h2><?php the_title(); ?></h2>
						<div class="post-info-title">
							<p><?php the_date('d.m.Y'); ?></p>
							<p class="time"><?php echo get_the_time(); ?></p>
						</div>
						<div class="text">
							<?php the_content(); ?>
						</div>
						<span class="author">
							By <?php echo get_the_author(); ?>
						</span>
					</div>
					<div class="social-share">
						<a target="_blank" href="#" title="Share it on Twitter" class="social-icon twitter"></a>
						<a target="_blank" href="http://www.facebook.com/sharer/sharer.php" title="Share it on Facebook" class="social-icon facebook"></a>
						<a target="_blank" href="https://plus.google.com/share?url=http://www.google.com" title="Share it on Google+" class="social-icon plus"></a>
					</div>
					<div class="post-navigation">
						<?php
						$next_post = get_next_post();
						if (!empty( $next_post )): ?>
						  <a class="next-post" title="<?php echo $next_post->post_title; ?>" href="<?php echo get_permalink( $next_post->ID ); ?>">Next Post</a>
						<?php endif; ?>

						<?php
						$prev_post = get_previous_post();
						if (!empty( $prev_post )): ?>
						  <a class="prev-post" title="<?php echo $prev_post->post_title; ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>">Previous Post</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>


<?php include("footer.php"); ?>
<script>
	$(function(){
		$.each($('#menu-main-navigation li'), function(item, i){
			if($(this).find('a').text() == 'Blog') {
				$(this).addClass('current_page_parent');
			}
		});

		$('.social-share .twitter').attr('href', 'http://twitter.com/share?text=ACECO Rentals&url=' + document.URL);
		$('.social-share .facebook').attr('href', 'http://www.facebook.com/sharer/sharer.php');
		$('.social-share .plus').attr('href', 'https://plus.google.com/share?url=' + document.URL);
	});
</script>
