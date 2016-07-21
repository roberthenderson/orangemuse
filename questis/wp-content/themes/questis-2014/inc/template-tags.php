<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package questis-2014
 */

if ( ! function_exists( 'questis_2014_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function questis_2014_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'questis-2014' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'questis-2014' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'questis-2014' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'questis_2014_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function questis_2014_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'questis-2014' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'questis-2014' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link',     'questis-2014' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'questis_2014_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function questis_2014_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( ' - %s', 'post date', 'questis-2014' ), $time_string);
	if(is_single()) {
		$posted_on = sprintf(
			_x('Posted on %s ', 'post date', 'questis-2014'), $time_string);
	}

	$byline = sprintf(
		_x( 'by %s', 'post author', 'questis-2014' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	if(is_single()) {
		echo '<span class="posted-on">' . $posted_on . '</span>' . get_avatar( get_the_author_meta( 'ID' ), 78 ) . '<span class="byline">' . $byline . '<a href="' . esc_url( get_the_author_meta( 'user_url') ) . '" class="twitter-icon" target="_blank">Follow on Twitter</a></span>';
	}else{
		echo '<span class="byline"> ' . $byline . '</span><span class="posted-on">' . $posted_on . '</span>';
	}

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function questis_2014_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'questis_2014_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'questis_2014_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so questis_2014_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so questis_2014_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in questis_2014_categorized_blog.
 */
function questis_2014_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'questis_2014_categories' );
}
add_action( 'edit_category', 'questis_2014_category_transient_flusher' );
add_action( 'save_post',     'questis_2014_category_transient_flusher' );
