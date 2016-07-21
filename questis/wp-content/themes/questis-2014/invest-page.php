<?php
/*
Template Name: Invest
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
	<main id="main" class="site-main page invest-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php //get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
		<div class="sticky-nav">
			<div class="global-container">
				<a class="investing" href="#investing">Investing</a>
				<a class="science-based" href="#science-based">Science-Based</a>
				<a class="thought-leaders-link" href="#thought-leaders">Thought Leaders</a>
				<a class="how-it-works" href="#how-it-works">How It Works</a>
				<a class="features-benefits-link" href="#features-benefits">Features + Benefits</a>
				<a class="working-with-us" href="#working-with-us">Working With Us</a>
				<a class="build-portfolio last" href="http://app.questisportfolio.com"><span class="icon"></span>Build Your Portfolio</a>
			</div>
		</div>
		<div class="hero-image" id="investing">
			<div class="content">
				<h1>Investing That Makes Sense</h1>
				<p>Maybe it’s just us, but we believe vetted, academic thinking trumps trendy any day. <span>That’s our approach to investing.</span></p>
			</div>
			<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/questis-invest-hero-image.jpg" alt="Questis Invest Hero Image" width="1500" height="444"/>
		</div>
		<div class="wrong-way" id="science-based">
			<div class="global-container">
				<h3>Do you Really Know Where You're Going?</h3>
				<p>Conventional investing has led millions down the wrong path. We know how to turn it all around.</p>
				<div class="col-container">
					<p>Seems everyone knows what’s going on in the market. In reality, no one does. Conventional investing is an emotional roller coaster. And it doesn’t have to be. </p>
					<p>Smart investing should be science and academic based. It’s why we’ve tapped the smartest minds in the financial industry and followed their lead to map out our process.</p>
				</div>
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/questis-invest-wrong-way.png" alt="Questis Invest Wrong Way" width="945" height="266"/>
			</div>
		</div>
		<div class="your-edge sticky-trigger">
			<div class="global-container">
				<p><span>Your Edge<span class="arrow"></span></span> Questis Invest is a proven, vetted way to maximize long-term market growth.</p>
				<span class="down-arrow"></span>
			</div>
		</div>
		<div class="how-can-it-be-proven">
			<div class="global-container">
				<span>but,</span>
				<h2>How Can It Be Proven?</h2>
			</div>
		</div>
		<div class="trust-the-market proven-step">
			<div class="global-container">
				<div class="content">
					<span><sup>#</sup>1</span>
					<h3>Trust the Market</h3>
					<p>The market knows all. For example, the daily price of fish may vary based on market expectations. We accept this price as an accurate estimate. And then we order the lobster. A stock price is no different.</p>
				</div>
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/questis-invest-proven-step-lobster.png" alt="Questis Invest Proven Step Lobster" width="273" height="272"/>
			</div>
		</div>
		<div class="safety-in-numbers proven-step">
			<div class="global-container">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/questis-invest-proven-step-numbers.png" alt="Questis Invest Proven Step Numbers" width="258" height="183"/>
				<div class="content">
					<span><sup>#</sup>2</span>
					<h3>There's Safety in Numbers</h3>
					<p>Predicting winners is a guessing game. So how do we maximize gains? Diversification. It provides more stability. More stability increases your opportunities for success.</p>
				</div>
			</div>
		</div>
		<div class="added-dimension proven-step">
			<div class="global-container">
				<div class="content">
					<span><sup>#</sup>3</span>
					<h3>Added Dimension</h3>
					<p>It’s all about dimension. Our academic research has identified these dimensions, which are well documented in markets around the world and across different time periods.</p>
				</div>
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/questis-invest-proven-step-dimension.png" alt="Questis Invest Proven Step Dimension" width="219" height="229"/>
			</div>
		</div>
		<div class="disciplined-actions proven-step">
			<div class="global-container">
				<div class="flexslider brain-flags">
					<ul class="slides">
						<li class="light-blue">
							<div class="flag">
								<div class="message">
									<span>“It was a bad idea, but I don’t want to sell at a loss”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
						<li class="green">
							<div class="flag">
								<div class="message">
									<span>“I have a proven system to pick winning managers”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
						<li class="orange">
							<div class="flag">
								<div class="message">
									<span>“The market tanked. I didn’t see it coming”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
						<li class="navy">
							<div class="flag">
								<div class="message">
									<span>“I wasn’t wrong about that stock – just unlucky”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
						<li class="light-blue">
							<div class="flag">
								<div class="message">
									<span>“My research confirms this is a great stock to own”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
						<li class="green">
							<div class="flag">
								<div class="message">
									<span>“I knew this stock was going up”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
						<li class="orange">
							<div class="flag">
								<div class="message">
									<span>“The trend looks good and should continue for a long time”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
						<li class="navy">
							<div class="flag">
								<div class="message">
									<span>“I work in that industry, so I know where it’s going”</span>
									<div class="triangle"></div>
								</div>
							</div>
							<span class="brain"></span>
						</li>
					</ul>
				</div>
				<div class="content">
					<span><sup>#</sup>4</span>
					<h3>Disciplined Actions</h3>
					<p>Humans are not wired for disciplined investing. Simple as that. So, we’ll keep you on track. Discipline and focus is on the only way to see you through.</p>
				</div>
			</div>
		</div>
		<div class="who-are-these-guys" id="thought-leaders">
			<span class="nobel-guy"></span>
			<div class="global-container">
				<div class="content">
					<h4>Who Are These Guys?</h4>
					<p>We believe successful investing is built on fundamentals developed by economic geniuses. Not TV pundits or trend followers. We’re talking about professors, Nobel Prize winners and theory builders.</p>
				</div>
				<span class="nobel">Nobel.<span class="arrow"></span></span>
			</div>
		</div>
		<div class="thought-leaders">
			<div class="global-container">
				<h4>We Follow Economic Thought Leaders</h4>
				<p>Leaders that have been educated and recognized by the countries most prestigious business schools.
					<span>Heck, the University of Chicago even named their business school after one of them.</span></p>
				<div class="flexslider leaders-slider">
					<ul class="slides">
						<li class="chicago">
							<h5>THE UNIVERSITY OF CHICAGO IS THE ALMA MATER OF...</h5>
							<div class="school-content">
								<div class="left">
									<span class="headshot"></span>
									<div class="content">
										<h6>Eugene Fama</h6>
										<p>University of Chicago
										<span>(Booth School of Business)</span></p>
									</div>
								</div>
								<div class="right">
									<p>Board member, Dimensional fund Advisors
										<span>Wrote the book on: Efficient Markets Hypothesis, Random Walk</span>
										<span>Hypothesis, Multifactor model. Nobel Prize winner.</span></p>
								</div>
							</div>
						</li>
						<li class="mit">
							<h5>Massachusetts Institute of Technology IS THE ALMA MATER OF...</h5>
							<div class="school-content">
								<div class="left">
									<span class="headshot"></span>
									<div class="content">
										<h6>Robert Merton</h6>
										<p>Mass. Institute of Technology
											<span>(Sloan School of Management)</span></p>
									</div>
								</div>
								<div class="right">
									<p>Resident Scientist, Dimensional Fund Advisors
										<span>Wrote the book on: Optimal lifetime consumption and portfolio allocation theory, asset pricing theory, valuation and derivative securities. Nobel Prize Winner.</span></p>
								</div>
							</div>
						</li>
						<li class="dartmouth">
							<h5>DARTMOUTH college IS THE ALMA MATER OF...</h5>
							<div class="school-content">
								<div class="left">
									<span class="headshot"></span>
									<div class="content">
										<h6>Kenneth French</h6>
										<p>Dartmouth College
											<span>(Tuck School of Business)</span></p>
									</div>
								</div>
								<div class="right">
									<p>Board member, Dimensional Fund Advisors
										<span>Wrote the book on: Multifactor Model</span></p>
								</div>
							</div>
						</li>
						<li class="yale">
							<h5>Yale University IS THE ALMA MATER OF...</h5>
							<div class="school-content">
								<div class="left">
									<span class="headshot"></span>
									<div class="content">
										<h6>Roger Ibbotson</h6>
										<p>Yale University
											<span>(School of Management)</span></p>
									</div>
								</div>
								<div class="right">
									<p>Board member, Dimensional Fund Advisors
										<span>Wrote the book on: Capital Markets Research, Comprehensive "SBBI" Database with Rex Sinquefield</span></p>
								</div>
							</div>
						</li>
						<li class="stanford">
							<h5>Stanford IS THE ALMA MATER OF...</h5>
							<div class="school-content">
								<div class="left">
									<span class="headshot"></span>
									<div class="content">
										<h6>Myron Scholes</h6>
										<p>Stanford University
											<span>(Graduate School of Business)</span></p>
									</div>
								</div>
								<div class="right">
									<p>Board member, Dimensional Fund Advisors
										<span>Wrote the book on: Capital Markets Research, Options Pricing Model.</span>
										<span>Nobel Prize Winner.</span></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="all-about-you" id="how-it-works">
			<h4>It's All About You</h4>
			<p>We’ll learn what makes you, well, you. After that, an investment strategy is designed and Questis walks you through it. And we coach you to stick to it.</p>
			<span class="arrow"></span>
		</div>
		<div class="hero-video">
			<div class="top">
				<span class="play">Play the Video</span>
			</div>
			<img class="splash" src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/invest-video-splash.jpg" width="1500" height="842" alt="Questis Invest Video Splash" />
		</div>
		<div class="video-container">
			<iframe id="player1" src="//player.vimeo.com/video/103513735?api=1&player_id=player1" width="630" height="354" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="invest-process">
			<div class="global-container">
				<h4>The Invest Process</h4>
				<div class="flexslider invest-process-slider">
					<ol class="invest-process-nav flex-control-nav">
						<li>Create Your Profile</li>
						<li>Design Your Portfolio</li>
						<li>Maintain Your Wealth</li>
						<li>Check-In With You</li>
					</ol>
					<ul class="slides">
						<li class="slide-1">
							<div class="content">
								<span class="step">Step 1</span>
								<h5>So, Who Are You?</h5>
								<p>The more you tell us, the better. This helps us get a clearer picture of where you are and where you want to go. Things Like:</p>
								<ul>
									<li>- Your Finances</li>
									<li>- Your Timeline</li>
									<li>- Your Goals</li>
								</ul>
								<a href="#">&raquo; Read Specific Information</a>
							</div>
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/invest-create-profile.jpg" width="391" height="272" alt=""/>
						</li>
						<li class="slide-2">
							<div class="flexslider design-portfolio">
								<ol class="design-portfolio-nav flex-control-nav">
									<li>Part 1</li>
									<li>Part 2</li>
								</ol>
								<ul class="slides">
									<li class="slide-2-a">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/invest-design-portfolio.jpg" width="356" height="290" alt=""/>
										<div class="content">
											<span class="step">Part 1 / Grow And Stabilize</span>
											<h5>WE choose the right BALANCE OF GROWTH AND STABILITY</h5>
											<p>Choosing a basic growth-stability mix is a critical first step. Sure, the decision may appear simple, but it has a high impact on your wealth.</p>
											<a href="#">&raquo; Read Specific Information</a>
										</div>
									</li>
									<li class="slide-2-b">
										<div class="content">
											<span class="step">Part 2 / Diversify</span>
											<h5>Getting the Right Global Mix</h5>
											<p>After establishing the stock-bond mix, allocations are adjusted to refine the risk-return tradeoff. Spreading your investments across several geographic locations is an important factor in diversifying your portfolio.</p>
											<a href="#">&raquo; Read Specific Information</a>
										</div>
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/invest-design-portfolio-2.jpg" width="460" height="264" alt=""/>
									</li>
								</ul>
							</div>
						</li>
						<li class="slide-3">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/invest-maintain-wealth.jpg" width="360" height="299" alt=""/>
							<div class="content">
								<span class="step">Step 3</span>
								<h5>We perform a re-balancing act.</h5>
								<p>There are times when making slight adjustments to an investor’s portfolio allocation, or “rebalancing” are beneficial. Periodic adjustments are made when the portfolio has moved away from its original target.</p>
								<a href="#">&raquo; Read Specific Information</a>
							</div>
						</li>
						<li class="slide-4">
							<div class="content">
								<span class="step">Step 4</span>
								<h5>Keeping You on Track</h5>
								<p>Here’s the hard part. Do not touch a thing. We’ll check-in with you to make sure you’re not getting antsy. Discipline is your friend. Over time, you’ll learn how it will help you achieve your goals.</p>
								<a href="#">&raquo; Read Specific Information</a>
							</div>
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/invest-check-in.jpg" width="420" height="288" alt=""/>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="fees-that-agree">
			<div class="global-container">
				<h4>Fees That Agree</h4>
				<div class="time-of-investment jui-slider">
					<div class="top">
						<span>1. Time of investment:</span>
						<div class="data-box">
							<span><span class="years">10</span> years</span>
						</div>
					</div>
					<div class="time-of-investment-slider"></div>
					<div class="x-axis">
						<span>0</span>
						<span>10</span>
						<span>20</span>
						<span>30</span>
						<span>40</span>
						<span>50</span>
					</div>
				</div>
				<div class="investment-amount jui-slider">
					<div class="top">
						<span>2. Investment Amount:</span>
						<div class="data-box">
							<span><sup>$</sup><span class="amount">500,000</span></span>
						</div>
					</div>
					<div class="investment-amount-slider"></div>
					<div class="x-axis">
						<span>$0</span>
						<span>$500,000</span>
						<span>$1,000,000</span>
						<span>$1,500,000</span>
						<span>$2,000,000</span>
						<span>$2,500,000</span>
					</div>
				</div>
				<span class="arrow"></span>
			</div>
		</div>
		<div class="invest-savings">
			<div class="global-container">
				<div class="top">
					<div class="left">
						<p>Questis Average Expense Ratio <span class="questis-expense">0.38</span>%</p>
						<span class="questis invest-amount">$<span>905,613</span></span>
					</div>
					<div class="right">
						<p>Industry Average Expense Ratio <span class="industry-expense">1.30</span>%</p>
						<span class="industry invest-amount">$<span>830,094</span></span>
					</div>
				</div>
				<div class="bottom">
					<p><span class="icon"></span><span class="savings">Savings = </span><span class="price"><sup>$</sup><span class="difference">75,518</span></span></p>
				</div>
			</div>
			<a href="#">&raquo; Why so much more with Questis?</a>
			<p class="disclaimer">Comparison intended to illustrate impact of fees only. Both portfolios experience growth of 6.5% annually. <span>Only distinguishing factor between portfolios is fees. Illustration not intended to imply a guaranteed performance.</span></p>
		</div>
		<div class="features-benefits" id="features-benefits">
			<div class="global-container">
				<h4>Features &amp; Benefits</h4>
				<ul>
					<li class="keep">
						<span class="icon"></span>
						<div class="content">
							<h5>Keep Your Money</h5>
							<p>Conventional investing does not benefit the investor. We’ll show you how smarter way to keep more of your money. </p>
						</div>
					</li>
					<li class="advice">
						<span class="icon"></span>
						<div class="content">
							<h5>Personalized Advice</h5>
							<p>Your life stage and financial situation is unique. That’s why our Questis clients receive individualized advice.</p>
						</div>
					</li>
					<li class="invest">
						<span class="icon"></span>
						<div class="content">
							<h5>Invest w/ Confidence</h5>
							<p>Peace of mind. Isn’t that what it’s all about? We’ll help you get there. Plus, we’ll educate you along the way.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="lets-get-started" id="working-with-us">
			<div class="global-container">
				<div class="heading">
					<h3>Let's Get Started</h3>
					<h4>This is how it will go. No pressure. We’re taking your lead.</h4>
				</div>
				<div class="icons-container">
					<div class="section">
						<div class="complete-investor-profile col">
							<h5>Complete Investor Profile</h5>
							<p>We learn your investing style, and you tell us all about your financial goals.</p>
							<span class="line-signifier"></span>
							<span class="icon complete"></span>
						</div>
						<div class="contact-you col">
							<span class="icon contact"></span>
							<span class="line-signifier bottom"></span>
							<h5>Matt Will Contact You</h5>
							<p>Or another one of our pros will reach out to discuss your info.</p>
						</div>
						<div class="open-account col">
							<h5>Open Account</h5>
							<p>We’ll help you open an account with one of our trusted partners.</p>
							<span class="line-signifier"></span>
							<span class="icon open"></span>
						</div>
						<div class="fund-account col">
							<span class="icon fund"></span>
							<span class="line-signifier bottom"></span>
							<h5>Fund Account</h5>
							<p>Let’s get the funds transferred and get ready.</p>
						</div>
						<div class="trade-portfolio col">
							<h5>Trade Portfolio</h5>
							<p>Our certified investors will apply your new diversified portfolio.</p>
							<span class="line-signifier"></span>
							<span class="icon trade"></span>
						</div>
						<div class="maintain-portfolio col">
							<span class="icon maintain"></span>
							<span class="line-signifier bottom"></span>
							<h5>Maintain Portfolio</h5>
							<p>We’ll monitor your account and make sure we’re all good.</p>
						</div>
						<div class="relax col">
							<h5>Relax</h5>
							<p>Actually, this is the hardest part. Let our academic research go to work.</p>
							<span class="line-signifier"></span>
							<span class="icon relax"></span>
						</div>
					</div>
				</div>
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/invest-page-chart-lines.png" width="982" height="28" alt=""/>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		var brainFlags = jQuery('.brain-flags'),
			leadersSlider = jQuery('.leaders-slider'),
			investProcess = jQuery('.invest-process-slider'),
			designPortfolio = jQuery('.design-portfolio');
		if(brainFlags.length > 0) {
			brainFlags.flexslider({
				animation: "fade",
				slideshow: true,
				slideshowSpeed: 4000
			});
		}
		if(leadersSlider.length > 0) {
			leadersSlider.flexslider({
				slideshow: false
			});
		}
		if(investProcess.length > 0) {
			investProcess.flexslider({
				slideshow: false,
				animation: "fade",
				controlsContainer: ".invest-process-slider",
				manualControls: "ol.invest-process-nav > li"
			});
		}
		if(designPortfolio.length > 0) {
			designPortfolio.flexslider({
				slideshow: false,
				controlsContainer: ".design-portfolio",
				manualControls: "ol.design-portfolio-nav > li"
			});
		}
		jQuery(function() {
			jQuery('.time-of-investment-slider').slider({
				range: "min",
				value: 10,
				min: 0,
				max: 50,
				slide: function(event, ui) {
					jQuery('.time-of-investment').find('.data-box').find('span.years').text(ui.value);
				}
			});
			jQuery('.time-of-investment').find('.data-box').find('span').val(jQuery('.time-of-investment-slider').slider("value"));
		});
		jQuery(function() {
			jQuery('.investment-amount-slider').slider({
				range: "min",
				value: 500000,
				min: 0,
				max: 2500000,
				step: 50000,
				slide: function(event, ui) {
					jQuery('.investment-amount').find('.data-box').find('span.amount').text(ui.value.toLocaleString());
				}
			});
			jQuery('.investment-amount').find('.data-box').find('span').val(jQuery('.investment-amount-slider').slider("value"));
		});
	});
</script>
<?php get_footer(); ?>
