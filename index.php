<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>


<body>
<?php get_template_part( 'partials/header' ); ?>
<form class="ink-form">
	<div class="ink-grid">
		<div class="panel">
			<div class="control-group append-button">
				<div class="control all-100">
					<input type="text" name="s" placeholder="Search news...">
				</div>
			</div>
		</div>
	</div>
</form>


<div class="ink-grid vertical-space">
	<div class="panel">
		<h2>Recent News</h2>
		<div id="car1" class="ink-carousel" data-space-after-last-slide="false" data-autoload="false">

			<ul class="stage column-group half-gutters">
				<?php while ( have_posts() ): the_post(); ?>
					<li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
						<?php the_post_thumbnail( 'news-thumb', [
							'class' => 'half-bottom-space'
						] ); ?>
						<div class="description">
							<h4 class="no-margin">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h4>
							<h5 class="slab"><?php the_time( 'F j, Y g:i a' ) ?></h5>
							<div class="excerpt"><?php the_excerpt(); ?></div>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>

		<nav id="p1" class="ink-navigation">
			<ul class="pagination black">
			</ul>
		</nav>
	</div>

	<div class="ink-grid panel">
		<div class="column-group">
			<div class="all-50">
				<h2>Featured Stories</h2>
				<div id="car3" class="ink-carousel" data-autoload="false">
					<ul class="stage column-group half-gutters unstyled">
						<?php
						$featured_query = new WP_Query( [ 'category_name' => 'featured' ] );
						if ( $featured_query->have_posts() ) {
							while ( $featured_query->have_posts() ) {
								$featured_query->the_post();
								?>
								<li class="slide xlarge-100 large-100 medium-100 small-100 tiny-100">
									<?php the_post_thumbnail( 'news-large', [
										'class' => 'half-bottom-space'
									] ); ?>
									<h4 class="no-margin">
										<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
									</h4>
									<h5 class="slab"><?php the_time( 'F j, Y g:i a' ) ?></h5>
									<div class="excerpt"><?php the_excerpt(); ?></div>
								</li>

								<?php
							}
						}
						?>
					</ul>
					<nav id="p3" class="ink-navigation" data-previous-label="" data-next-label="">
						<ul class="pagination chevron">
						</ul>
					</nav>
				</div>
				<script>
                    Ink.requireModules(['Ink.UI.Carousel_1'], function (InkCarousel) {
                        new InkCarousel('#car3', {pagination: '#p3', nextLabel: '', previousLabel: ''});
                    });
				</script>
			</div>

			<div class="all-50 popular-posts">
				<h2>Popular</h2>
				<ul class="unstyled">
					<?php $args    = [
						'orderby'        => 'comment_count',
						'posts_per_page' => '3'
					];
					$popular_query = new WP_Query( $args );
					if ( $popular_query->have_posts() ):
						while ( $popular_query->have_posts() ):
							$popular_query->the_post();

							?>
							<li class="column-group half-gutters">
								<div
									class="all-40 small-50 tiny-50"><?php the_post_thumbnail( 'news-popular' ); ?></div>
								<div class="all-60 small-50 tiny-50">
									<h4>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h4>
									<i><?php comments_number( 'No Responses', '1 Response', '% Responses' ); ?></i>
									<?php the_excerpt(); ?>
								</div>
							</li>
						<?php
						endwhile;
					endif;
					?>
				</ul>
			</div>
		</div>
	</div>
	<script>
        Ink.requireModules(['Ink.UI.Carousel_1'], function (InkCarousel) {
            new InkCarousel('#car1', {pagination: '#p1'});
        });
	</script>


	<div class="panel vertical-space">
		<h2>New in Business</h2>
		<div id="car2" class="ink-carousel" data-autoload="false">
			<ul class="stage column-group half-gutters unstyled">
				<?php
				$business_query = new WP_Query( [ 'category_name' => 'business' ] );
				if ( $business_query->have_posts() ) {
					while ( $business_query->have_posts() ) {
						$business_query->the_post();
						?>
						<li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
							<?php the_post_thumbnail( 'news-thumb', [
								'class' => 'half-bottom-space'
							] ); ?>
							<h4 class="no-margin">
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							</h4>
							<h5 class="slab"><?php the_time( 'F j, Y g:i a' ) ?></h5>
							<div class="excerpt"><?php the_excerpt(); ?></div>
						</li>

						<?php
					}
				}
				?>
			</ul>
			<nav id="p2" class="ink-navigation" data-next-label="" data-previous-label="">
				<ul class="pagination dotted">
				</ul>
			</nav>
		</div>
	</div>
	<script>
        Ink.requireModules(['Ink.UI.Carousel_1'], function (InkCarousel) {
            new InkCarousel('#car2', {pagination: '#p2'})
        });
	</script>
</div>
</body>

<?php get_template_part( 'partials/footer' ); ?>
</html>