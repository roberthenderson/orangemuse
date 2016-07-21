<?php
/**
 * @package questis-2014
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ): ?>
		<div class="image-clip">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>
	<div class="back-to-academy">
		<div class="single-container">
			<a href="<?php echo get_site_url() ?>/academy/">&laquo; Back to Academy</a>
		</div>
	</div>
	<header class="entry-header">
		<div class="single-container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php questis_2014_posted_on(); ?>
			</div><!-- .entry-meta -->
		</div>
	</header><!-- .entry-header -->
	<div class="global-container">
		<div class="single-container">
			<div class="entry-content">
				<?php //remove_filter('the_content', 'wpautop'); ?>
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'questis-2014' ),
						'after'  => '</div>',
					) );
				?>
				<div class="social-links">
					<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" class="facebook">Share on Facebook</a>
					<a href="http://twitter.com/home?status=<?php the_title(); ?>%20<?php echo get_permalink(); ?>%20@myquestis" target="_blank" class="twitter">Tweet this article</a>
					<a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="gplus">Share on Google+</a>
				</div>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-## -->
<div class="blog-questis-invest">
	<div class="global-container">
		<h3><span class="icon"></span><span>Questis Invest</span></h3>
		<p>Harness the power of proven statistical market trending <span>and tailor your portfolio to maximize your return.</span></p>
		<a class="button" href="<?php echo get_site_url(); ?>/invest">I'm Ready to Invest</a>
	</div>
</div>
