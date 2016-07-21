<?php
/**
 * The template for displaying Archive pages.
 *
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

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'questis-2014' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'questis-2014' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'questis-2014' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'questis-2014' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'questis-2014' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'questis-2014' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'questis-2014' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'questis-2014');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'questis-2014');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'questis-2014' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'questis-2014' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'questis-2014' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'questis-2014' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'questis-2014' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'questis-2014' );

						else :
							_e( 'Archives', 'questis-2014' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

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
