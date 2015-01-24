<nav class="mobile-nav">
	<a href="#" class="menu-icon"></a>
	<?php 
		wp_nav_menu( array(
		    'theme_location' => 'main-nav',
		    'container' => false,
		    'menu_class' => '',
		    'menu_id' => ''
		) ); 
	?>
</nav>