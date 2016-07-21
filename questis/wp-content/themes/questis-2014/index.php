<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package questis-2014
 */

get_header(); ?>
<?php $blogUrl = get_site_url() ?>
	<div class="academy-menu">
		<ul class="academy-container">
			<li><a href="<?php echo $blogUrl . '/category/company' ?>">Company</a></li>
			<li><a href="<?php echo $blogUrl . '/category/investing' ?>">Investing</a></li>
			<li><a href="<?php echo $blogUrl . '/category/advice' ?>">Advice</a></li>
			<li><a href="<?php echo $blogUrl . '/category/wellth' ?>">Wellth</a></li>
			<li class="top-search"><?php get_search_form(); ?></li>
		</ul>
	</div>
	<div class="tag-container">
	<?php
		$tags = get_tags();
		$active = "";
		$tag_id = get_query_var('tag_id');
		$html = '<ul class="tags">';
		foreach ( $tags as $tag ) {
			$tag_link = get_tag_link( $tag->term_id );
			if($tag->term_id == $tag_id) {
				$active = " active";
			}else{
				$active = "";
			}

			$html .= "<li>";
			$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}{$active}'>";
			$html .= "{$tag->name}</a>";
			$html .= "</li>";
		}
		$html .= '</ul>';
		echo $html;
	?>
	</div>
	<div class="academy-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php questis_2014_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
