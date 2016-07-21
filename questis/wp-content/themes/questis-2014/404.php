<?php
/**
 * The template for displaying 404 pages (Not Found).
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
<div class="academy-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'questis-2014' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'questis-2014' ); ?></p>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( questis_2014_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<div class="widget widget_categories">
							<h2 class="widget-title"><?php _e( 'Most Used Categories', 'questis-2014' ); ?></h2>
							<ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div><!-- .widget -->
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
