<?php
/*
Template Name: Advice
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
	<main id="main" class="site-main page advice-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php //get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
		<div class="sticky-nav">
			<div class="global-container">
				<a class="advice-link" href="#advice">Advice</a>
				<a class="process-link" href="#process">Process</a>
				<a class="features-benefits-link" href="#features-benefits">Features + Benefits</a>
				<a class="our-team-link" href="#our-team">Our Team</a>
				<a class="fees-value-link" href="#fees-value">Fees+Value Proposition</a>
				<a class="talk-expert-link last" href=""><span class="icon"></span>Talk With an Expert</a>
			</div>
		</div>
		<div class="hero-image" id="advice">
			<div class="hero-image-container global-container">
				<h2>Advice That Educates</h2>
				<p class="hero-copy">You deserve to know why we recommend the strategies we do. That’s how we operate. It’s 100% about your money and not about selling you something you don’t need.</p>
				<span class="seth-macfarlane"></span>
			</div>
		</div>
		<div class="more-answers">
			<div class="global-container">
				<span class="confusion-icon"></span>
				<h3>More Answers Create More Questions</h3>
				<p>Everyone has the answer. But what’s the right answer for you? That’s the real issue.
					<span>And you won’t get this from your buddy or brother-in-law.</span>
				</p>
			</div>
		</div>
		<div class="competitors sticky-trigger">
			<div class="global-container">
				<h3>So, What's Out There Now?</h3>
				<p>You either pay for a static "snapshot in time" plan, or get biased advice for products you don’t need. We believe good advice should be objective and clear, not driven by an inflexible plan or products that simply produce commissions for the seller/advisor.</p>
				<div class="flexslider">
					<ul class="slides">
						<li class="guy">
							<div class="picture"></div>
							<div class="testimonial">
								<span class="arrow"></span>
								I ask my guy for advice and he sells me a product. I need straight, no-strings-attached advice. Not commission products for the seller, or whatever they’re calling themselves this week.
							</div>
						</li>
						<li class="girl">
							<div class="picture"></div>
							<div class="testimonial">
								<span class="arrow"></span>
								I see my financial advisor once a year. Every time he suggests products I should be buying. How do I know if it’s right for me? How does he know?
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="video">
			<h3>Questis Advice is a Q&amp;A platform that helps you make sense of your finances.<span class="arrow"></span></h3>
			<div class="hero-video">
				<div class="top">
					<span class="play">Play the Video</span>
				</div>
				<img class="splash" src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/advice-video-splash.jpg" width="1500" height="842" alt="Questis Invest Video Splash" />
			</div>
			<div class="video-container">
				<iframe id="player1" src="//player.vimeo.com/video/103513734?api=1&player_id=player1" width="630" height="354" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
		<div class="how-it-works" id="process">
			<div class="global-container">
				<div class="heading">
					<h3>How It Works</h3><h4>The 5-Step Process</h4>
				</div>
				<div class="icons-container">
					<div class="get-started col">
						<div class="icon"></div>
						<div class="content">
							<h5>Get Started</h5>
							<p>A simple five-minute online survey that prepares and organizes the info we’ll need for our first call.</p>
						</div>
					</div>
					<div class="meet-your-expert col">
						<div class="icon"></div>
						<div class="content">
							<h5>Meet Your Expert</h5>
							<p>A focused meeting with your Certified Financial Planner goes deep, defining the financial goals and objectives we’ll need for the next step.</p>
						</div>
					</div>
					<div class="establish-priorities col">
						<div class="icon"></div>
						<div class="content">
							<h5>Establish Priorities</h5>
							<p>Your expert will develop your custom action plan – an organized list of items for you to accomplish over the course of the year.</p>
						</div>
					</div>
					<div class="deliver-discuss col">
						<div class="icon"></div>
						<div class="content">
							<h5>Deliver and Discuss</h5>
							<p>A second meeting with your expert to review and discuss your custom action plan will focus on accomplishing the first several items.</p>
						</div>
					</div>
					<div class="ongoing-support col">
						<div class="icon"></div>
						<div class="content">
							<h5>Ongoing Support</h5>
							<p>We coach you along the way, with an eye toward achieving your set goals. We’ll answer any questions or make vital adjustments that come up. Anytime.</p>
						</div>
					</div>
				</div>
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/how-it-works-lines.png" width="1170" height="245" alt=""/>
			</div>
		</div>
		<div class="for-less-than">
			<div class="global-container">
				<h3>For Less Than a Bagel, Latte, or Craft Beer a Day</h3>
				<p>It’s true. For less than a dollar a day, you could get educated, unbiased advice with no strings attached. Plus, you have to ask yourself, is the free advice I’m getting now really “free?”</p>
				<a href="#">OK, so how much does it cost?</a>
				<span class="beer"></span>
			</div>
		</div>
		<div class="why-questis-advice" id="features-benefits">
			<div class="global-container">
				<h2>Why Questis Advice?</h2>
				<ul>
					<li class="education">
						<h4>Education</h4>
						<p>Questis will not only tell you what you should do, we’ll educate you on why; translating the economic genius of Nobel Laureate economists into advice that applies to your own personal situation.</p>
						<span class="icon"></span>
					</li>
					<li class="personalized-advice">
						<h4>Personalized Advice</h4>
						<p>Your life stage and financial situation is unique. One size fits one. So individualized advice is what we’ll deliver. </p>
						<span class="icon"></span>
					</li>
					<li class="accountability">
						<h4>Accountability</h4>
						<p>Questis will provide you with a list of prioritized action items and, most importantly, act as a coach and motivator so you can achieve your financial goals.</p>
						<span class="icon"></span>
					</li>
					<li class="convenient-communication">
						<h4>Convenient Communication</h4>
						<p>How do you like to work? Whether it’s Skype, GoToMeeting, on the phone, online chat, or even in-person at our offices in Charleston, we’re up for it.</p>
						<span class="icon"></span>
					</li>
				</ul>
			</div>
		</div>
		<div class="our-experts" id="our-team">
			<div class="global-container">
				<h3>Our Experts are Certified Financial Planners With:</h3>
				<ol>
					<li class="first">A College Degree</li>
					<li class="second">6,000 hours of experience in the financial industry</li>
					<li class="third">A rigorous 2-day exam</li>
					<li class="last">An oath to adhere to the Code of Ethics and Rules and conduct of the CFP Board of Standards</li>
				</ol>
				<div class="financial-planner john-tabb">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/questis-john-tabb.jpg" alt=""/>
					<div class="content">
						<div class="top-info">
							<h5>John Tabb, CFP<span>&reg;</span>, AIF<span>&reg;</span></h5>
							<h6>Chief Operating Officer</h6>
						</div>
						<p>It’s really simple – educated investors get to keep more of their hard-earned money. That’s our passion. That’s why we’re here. <a href="#">John’s full bio.</a></p>
						<span class="cfp-icon"></span>
					</div>
				</div>
				<div class="financial-planner matt-ritt">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/questis-2014/images/build/questis-matt-ritt.jpg" alt=""/>
					<div class="content">
						<div class="top-info">
							<h5>Matt Ritt, CFP<span>&reg;</span></h5>
							<h6>Investment Adviser</h6>
						</div>
						<p>I was halfway through a turkey sandwich from Bull Street Gourmet when I realized that Questis was exactly what investors needed. <a href="#">Matt’s full bio.</a></p>
						<span class="cfp-icon"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="faqs-plan-terms" id="fees-value">
			<div class="global-container">
				<h3 class="faq">Frequently Asked Questions</h3>
				<ul>
					<li>
						<h4>How do you make your money?</h4>
						<p>We’re fee only. Straight up. So that means our advice isn’t attached to financial products.</p>
					</li>
					<li>
						<h4>Why doesn’t everyone do this?</h4>
						<p>Only 6% of US households use a fee-only financial advisor. Most don’t know it’s an option. </p>
					</li>
					<li>
						<h4>How do I communicate with my advisor?</h4>
						<p>We’re always up for meeting in person. However, if this doesn’t work for you, we’re available to jump on Skype, GoToMeeting or the online meeting platform of your choice. We’re flexible.</p>
					</li>
				</ul>
				<h3>GET Expert advice on your important financial decisions</h3>
				<small>Topics include: Savings, debt, credit, real estate, retirement, insurance, estate planning.</small>
				<div class="prices-container">
					<div class="price-box one-time">
						<span class="top">One Time</span>
						<span class="price"><sup>$</sup>199</span>
						<span class="bottom">Enrollment Fee</span>
					</div>
					<div class="price-box then-a">
						<span class="top">Then A</span>
						<span class="price"><sup>$</sup>30</span>
						<span class="bottom">Monthly Fee</span>
					</div>
					<a href="#">&raquo; Plan Terms</a>
				</div>
			</div>
		</div>
		<ul class="what-you-get">
			<li>Priorities Checklist</li>
			<li>Unlimited Access to a CFP&reg; Professional</li>
			<li class="last">Personal Financial Assessment</li>
		</ul>
		<div class="sign-me-up-now">
			<a href="#" class="button">Sign Me Up Now</a>
			<a href="#" class="sub-link">&raquo; I'm not sure yet, tell me more</a>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
<script type="text/javascript">
	jQuery(document).ready(function() {
		var flexsliderEl =jQuery('.flexslider');
		if(flexsliderEl.length > 0) {
			flexsliderEl.flexslider({
				animation: "slide",
				slideshow: false
			});
		}
	});
</script>
<?php get_footer(); ?>
