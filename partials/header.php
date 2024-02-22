<header class="ink-grid">
	<div class="vertical-space">
		<div class="panel">
			<h1><?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small></h1>
			<nav class="ink-navigation">
				<?php wp_nav_menu([
					'theme_location' => 'primary',
					'menu_class' => 'menu horizontal black'
				]); ?>
			</nav>
		</div>
	</div>
</header>