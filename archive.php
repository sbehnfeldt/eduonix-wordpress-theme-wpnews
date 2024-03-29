<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>


<body>
<?php get_template_part( 'partials/header' ); ?>

<div class="ink-grid vertical-space">
	<div class="panel">
		<h2>
			<?php
			if (is_category()) {
				single_cat_title();
			} elseif (is_author()) {
				the_post();
				echo 'Archives by Author: ' . get_the_author();
				rewind_posts();
			}  elseif(is_tag()) {
				single_tag_title();
			} elseif(is_day()) {
				echo 'Archives by Day: ' .get_the_date();
			} elseif(is_month()) {
				echo 'Archives by Month: ' .get_the_date('F Y');
			} elseif(is_year()) {
				echo 'Archives by Year: ' .get_the_date('Y');
			} else {
				echo 'Archives';
			}
			?>
		</h2>
		<div class="column-group">
			<div class="all-70 post">
				<ul class="unstyled">
				<?php while ( have_posts() ): the_post(); ?>
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
					</li>				<?php endwhile; ?>
				</ul>
			</div>
			<div class="all-30">
				<div class="sidebar">
					<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar' ); ?>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</div>

</body>

<?php get_template_part( 'partials/footer' ); ?>
</html>
