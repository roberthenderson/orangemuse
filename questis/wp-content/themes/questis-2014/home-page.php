<?php
/*
Template Name: Home
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package questis-2014
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main page home-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php //get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
<!--		<div class="hero-image">-->
<!--			<div class="hero-image-container global-container">-->
<!--				<h2>Defy Convention</h2>-->
<!--				<h3>When did the conventional way become the only way?</h3>-->
<!--				<p class="hero-copy">We believe “we’ve always done it this way” isn’t a strategy. Vetted, academic thinking trumps trendy any day. And a better, smarter way is always evolving.</p>-->
<!--				<span class="man-back"></span>-->
<!--			</div>-->
<!--		</div>-->
		<div class="hero-video">
			<div class="top">
				<h3>When did the conventional way become the only way?</h3>
				<img class="graphic" src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/defy-convention.png" width="525" height="165" alt="Questis Defy Convention" />
				<span class="play">Play the Video</span>
			</div>
			<img class="splash" src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/homepage-video-splash.jpg" width="1500" height="842" alt="Questis Home Video Splash" />
		</div>
		<div class="video-container">
			<iframe id="player1" src="//player.vimeo.com/video/103513733?api=1&player_id=player1" width="630" height="354" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="how-we-work">
			<h3>How We Work</h3>
			<div class="how-we-work-container global-container">
				<div class="column">
			<span class="image">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/how-we-work-share.png" alt="Questis Shares What We Know" />
			</span>
					<h4>We Share What We Know</h4>
					<p class="col-content">We want you to know what we know. We’ll educate you on our science-based, academic approach t o your overall financial wellbeing.</p>
				</div>
				<div class="column">
			<span class="image">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/how-we-work-simple.png" alt="Questis Makes Finances Simple" />
			</span>
					<h4>We Make Finances Simple</h4>
					<p class="col-content">We translate complex financial concepts into simple advice for you to literally put into action. We’re ready to share our knowledge with you.</p>
				</div>
				<div class="column">
			<span class="image">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/how-we-work-action.png" alt="Questis takes and makes action" />
			</span>
					<h4>We take and make action</h4>
					<p class="col-content">Our solutions are a perfect blend of technology and algorithm. We’ll translate these complex concepts with a simple human approach.</p>
				</div>
			</div>
		</div>
		<div class="questis-products">
			<div class="planning-for-individuals questis-product">
				<div class="global-container">
					<div class="planning-for-individuals-container product-container">
						<a href="#" class="product-tab">Planning for Individuals</a>
						<span class="product-icon">Questis Advice</span>
						<h2>Questis Advice</h2>
						<p class="product-copy">Questis Advice gets you up-to-speed by putting you in touch with real investment pros. Ask them anything about your investments and financial plans for the future via text, chat, email or phone.</p>
						<a href="<?php echo get_site_url(); ?>/advice" class="product-button">More About Advice</a>
					</div>
				</div>
			</div>
			<div class="portfolios-for-individuals questis-product">
				<div class="global-container">
					<div class="portfolios-for-individuals-container product-container">
						<a href="#" class="product-tab">Portfolios for Individuals</a>
						<span class="product-icon">Questis Invest</span>
						<h2>Questis Invest</h2>
						<p class="product-copy">Questis Invest is a whole philosophy based on the facts of market history. We harness the power of proven statistical market trending and tailor your portfolio to maximize your return.</p>
						<a href="<?php echo get_site_url(); ?>/invest" class="product-button">More About Invest</a>
					</div>
				</div>
			</div>
			<div class="financial-wellness questis-product">
				<div class="global-container">
					<div class="financial-wellness-container product-container">
						<a href="#" class="product-tab">Financial Wellness for Employees</a>
						<span class="product-icon">Questis Well-th</span>
						<h2>Questis Well-th</h2>
						<p class="product-copy">Take care of your finances the same way you take care of your body and mind. Wellth™ offers a simple web-based management tool for you and your staff to track, build and manage your retirement plans.</p>
						<h4>Coming Fall 2014</h4>
						<a href="#wellth-signup" class="product-button">Join Reminder List</a>
						<div id="wellth-signup">
							<span class="icon"></span>
							<p>We ask for your patience while we get it ready to roll out to the public. You’ll be the first to receive an invitation to try Wellth for yourself upon launch.</p>
							<div id="mc_embed_signup">
								<form action="//myquestis.us7.list-manage.com/subscribe/post?u=b2311344ac1628c9103a3d875&amp;id=1bf2c1f3f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<label for="wellth-email">Your Email Address</label>
									<input type="email" value="" name="EMAIL" id="wellth-email" class="email" id="mce-EMAIL" required>
									<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<div style="position: absolute; left: -5000px;"><input type="text" name="b_b2311344ac1628c9103a3d875_1bf2c1f3f0" tabindex="-1" value=""></div>
									<input type="submit" value="Add Me To The List" name="subscribe" id="mc-embedded-subscribe" class="button">
								</form>
							</div>

							<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="in-the-news">
			<div class="in-the-news-container global-container">
				<h3>In the News</h3>
				<div class="news-images">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/in-the-news-wsj.png" alt="Questis In the News: Wall Street Journal" /><img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/in-the-news-crbj.png" alt="Questis In the News: Charleston Regional Business Journal" />
				</div>
			</div>
		</div>
		<div class="questis-academy">
			<div class="global-container">
				<div class="heading">
					<span>Questis</span>
					<span class="icon"></span>
					<span>Academy</span>
				</div>
				<p>The Academy is about getting on the same page and staying there. Here, you’ll find articles we’ve highlighted from the brightest minds in the industry. And translate it into real, actionable advice.</p>
				<div class="home-highlight-content">
					<?php
					$featured = new WP_Query();
					$featured->query('cat=16&showposts=3'); //Home Highlight id = 16

					?>
					<?php $i = 0; while ($featured->have_posts()) : $featured->the_post(); ?>
						<article>
							<?php
								if ( has_post_thumbnail() ) {
									echo '<div class="image-clip">';
									?>
									<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'questis-2014'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
										<?php the_post_thumbnail(array(350)); ?>
									</a>
									<?php
									echo '</div>';
								}
							?>
							<div class="content">
							<h4><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'questis-2014'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
							<?php
								$excerpt = get_the_excerpt();
								if(strlen($excerpt) > 135){
									echo '<p>' . substr($excerpt, 0, 135) . '…</p>';
								}else{
									echo '<p>' . $excerpt . '</p>';
								}
							?>
							</div>
						</article>
						<?php $i++; endwhile; ?>
				</div>
				<a href="<?php echo get_site_url(); ?>/academy" class="button">More Articles</a>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
