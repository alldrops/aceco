<?php /* Template Name: Search */ ?>

<?php include("header.php"); ?>

<div class="main-content">
	<div class="wrapper">
		<div class="content-section">
			<div class="content-block search-results">
				<div class="content-wrapper">
					<h2>Search results:</h2>
					<?php
						global $query_string;

						$query_args = explode("&", $query_string);
						$search_query = array();

						foreach($query_args as $key => $string) {
							$query_split = explode("=", $string);
							$search_query[$query_split[0]] = urldecode($query_split[1]);
						} // foreach

						$search = new WP_Query($search_query);
					?>
					<div class="post-result">
						<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php include("footer.php"); ?>

<script type="text/javascript">
	$.each($('#menu-main-navigation li'), function(item, i){
		if($(this).find('a').text() == 'Blog') {
			$(this).addClass('current_page_parent');
		}
	});
</script>