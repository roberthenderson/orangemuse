<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package questis-2014
 */
?>
	<div id="secondary" class="sidebar widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<aside id="fresh-thoughts" class="fresh-thoughts">
				<h3>Fresh Thoughts</h3>
				<div class="fresh-thoughts-content">
					<?php
					$featured = new WP_Query();
					$featured->query('cat=15&showposts=5'); //Fresh Thoughts id = 15

					?>
					<?php $i = 0; while ($featured->have_posts()) : $featured->the_post(); ?>
						<article>
							<h4><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'questis-2014'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
							<span class="posted-on"><?php the_date(); ?></span>
							<?php
							if($i == 0) {
								if ( has_post_thumbnail() ) {
									echo '<div class="image-clip">';
										the_post_thumbnail(array(250));
									echo '</div>';
								}
								$excerpt = get_the_excerpt();
								if(strlen($excerpt) > 70){
									echo '<p>' . substr($excerpt, 0, 70) . '…</p>';
								}else{
									echo '<p>' . $excerpt . '</p>';
								}
							}
							?>
						</article>
					<?php $i++; endwhile; ?>
				</div>
			</aside>
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
