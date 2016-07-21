<?php
/**
 * The template for displaying Search Results pages.
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

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'questis-2014' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
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
	</div>
<?php get_footer(); ?>
