<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>


<body>
<?php get_template_part( 'partials/header' ); ?>

<div class="ink-grid vertical-space">
	<div class="panel">
		<div class="column-group">
			<div class="all-70 post">
				<?php while ( have_posts() ): the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<div class="meta">
						Posted on <?php the_time( 'F j, Y g:i a' ) ?>
						by <a
							href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><?php the_author() ?></a>
						<?php $categories = get_the_category();
						if ( $categories ) {
							$categories = array_map( function ( $cat ) {
								return '<a href="' . get_category_link( $cat->term_id ) . '">' . $cat->cat_name . '</a>';

							}, $categories );
							$categories = implode( ', ', $categories );
							echo " in $categories";
						}
						?>
					</div>
					<?php if ( has_post_thumbnail() ): ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<br>
					<?php the_content(); ?>
					<br>
					<?php comments_template(); ?>

				<?php endwhile; ?>
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
