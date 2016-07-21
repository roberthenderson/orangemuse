<?php
/**
 * @package questis-2014
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php questis_2014_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
		<?php if ( has_post_thumbnail() ): ?>
		<div class="image-clip">
			<a href="<?php echo get_permalink(get_the_ID()) ?>"><?php the_post_thumbnail(array(670)); ?></a>
		</div>
		<?php endif; ?>
	<div class="entry-summary">
		<?php the_content('Read More'); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
