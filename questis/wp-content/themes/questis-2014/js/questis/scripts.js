/**
 * Created by Robert on 6/17/14.
 */
jQuery(document).ready(function($) {

	var MOBILE_BREAKPOINT = 782,
		IS_TOUCH = true,
		bodyNode = $('body'),
		menuInit = false;

	if($('html').hasClass('no-touch')) {
		IS_TOUCH = false;
	}

	/**************/
	/*** OBJECT ***/
	/**************/
	var siteContent = $('.site-content');

	function MobileMenu() {
		if(head.screen.innerWidth <= MOBILE_BREAKPOINT && menuInit === false) {
			this.getAcademyMenuHt();
			this.toggleMenu();
			menuInit = true;
		}

		$(window).resize(function() {
			MobileMenu.prototype.getAcademyMenuHt();
			if(menuInit === false) {
				MobileMenu.prototype.toggleMenu();
				menuInit = true;
			}
			if(!$('span.mobile-hamburger-icon').hasClass('active') || head.screen.innerWidth > MOBILE_BREAKPOINT) {
				siteContent.removeAttr('style');
			}
		});
	}

	MobileMenu.prototype.getAcademyMenuHt = function() {
		var academyMenuHt = -50;
		if(head.screen.innerWidth < 500) {
			academyMenuHt = -125;
		}
		return academyMenuHt;
	};

	MobileMenu.prototype.toggleMenu = function() {
		var menuSpeed = 'fast';
		$('span.mobile-hamburger-icon').on('click', function() {
			if($(this).hasClass('active')) {
				bodyNode.animate({ top: $('.menu-questis-main-navigation-container').outerHeight()*-1 + 'px' }, menuSpeed);
				siteContent.animate({ top: MobileMenu.prototype.getAcademyMenuHt() + 'px'}, menuSpeed);
				$(this).removeClass('active');
			}else{
				bodyNode.animate({ top: 0 }, menuSpeed);
				siteContent.animate({ top: 0}, menuSpeed);
				$(this).addClass('active');
			}
		});
	};

	/**************/
	/*** OBJECT ***/
	/**************/
	function ProductsParallax() {
		if(IS_TOUCH === false) {
			this.fixOnScroll();
		}
		$(window).resize(function() {
			if($('html').hasClass('no-touch')) {
				IS_TOUCH = false;
			}
			ProductsParallax.prototype.fixOnScroll();
			ProductsParallax.prototype.removeOnMobile();
		});
	}

	/**
	 * Observes window scroll and fixes product to top of viewport as you scroll by until getting to the last product
	 * in which case all products scroll up with the page. Works on scrolling back to top as well.
	 *
	 */
	ProductsParallax.prototype.fixOnScroll = function() {
		//Calculate border-top size
		var borderSize = $('.questis-product').css('border-top-width');
		borderSize = borderSize.substring(0, borderSize.length - 2);
		parseInt(borderSize);

		var tabHt = $('a.product-tab').outerHeight() - borderSize,
			prodOne = $('.planning-for-individuals'),
			prodTwo = $('.portfolios-for-individuals'),
			prodThree = $('.financial-wellness'),
			prodOnePos = prodOne.offset(),
			prodOneTop = prodOnePos.top - tabHt,
			prodTwoPos = prodTwo.offset(),
			prodTwoTop = prodTwoPos.top - tabHt,
			prodThreePos = prodThree.offset(),
			prodThreeTop = prodThreePos.top - tabHt,
			prodOneActive = true,
			prodTwoActive = true,
			prodThreeActive = true;

		$(window).resize(function() {
			prodOnePos = prodOne.offset();
			prodOneTop = prodOnePos.top - tabHt;
			prodTwoPos = prodTwo.offset();
			prodTwoTop = prodTwoPos.top - tabHt;
			prodThreePos = prodThree.offset();
			prodThreeTop = prodThreePos.top - tabHt;
		});

		$(window).scroll(function() {
			//Need to always know top of viewport
			var viewportTop = $(window).scrollTop();
			ProductsParallax.prototype.fixHelper(viewportTop, prodOne, prodOneTop, prodOneActive, false);
			ProductsParallax.prototype.fixHelper(viewportTop, prodTwo, prodTwoTop, prodTwoActive, false);
			ProductsParallax.prototype.fixHelper(viewportTop, prodThree, prodThreeTop, prodThreeActive, true);
		});

		//On click of a tab, scroll to that tab's original position
		this.scrollToTab(prodOne, prodOneTop);
		this.scrollToTab(prodTwo, prodTwoTop);
		this.scrollToTab(prodThree, prodThreeTop);
	};

	/**
	 * Method for fixing each product to top on scroll. Called in fixOnScroll()
	 *
	 * @param viewportTop
	 * @param currProduct
	 * @param currProductTop
	 * @param productActive
	 * @param lastProduct
	 * @returns {*}
	 */
	ProductsParallax.prototype.fixHelper = function(viewportTop, currProduct, currProductTop, productActive, lastProduct) {
		if(lastProduct === true) {
			//Fix last product
			if(viewportTop >= currProductTop && productActive === true) {
				$('.questis-product').removeClass('fixed').addClass('absolute');
				productActive = false;
			}
			//Unfix last product
			if(viewportTop <= currProductTop && viewportTop >= (currProductTop - $(currProduct.prev()).outerHeight())) {
				$('.questis-product').removeClass('absolute').addClass('fixed');
				currProduct.removeClass('fixed');
				productActive = true;
			}
		}else{
			//Fix product
			if(viewportTop >= currProductTop && productActive === true) {
				currProduct.addClass('fixed');
				productActive = false;
			}
			//Unfix product
			if(viewportTop < currProductTop) {
				currProduct.removeClass('fixed');
				productActive = true;
			}
		}
	};

	ProductsParallax.prototype.scrollToTab = function(product, productTop) {
		product.find('a.product-tab').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: productTop }, 500);
		});
	};

	ProductsParallax.prototype.removeOnMobile = function() {
		if(IS_TOUCH === true) {
			$('.questis-product').removeClass('fixed').removeClass('absolute');
		}
	};

	/**************/
	/*** OBJECT ***/
	/**************/

	function LandingImgHt() {
		this.adjustHeight();
		$(window).resize(function() {
			LandingImgHt.prototype.adjustHeight();
		});
	}

	LandingImgHt.prototype.adjustHeight = function() {
		var imgClip = $('#main').find('article').find('.image-clip'),
			imgHt = imgClip.find('img').height();
		if(head.screen.innerWidth <= 1000) {
			imgClip.css({'height':imgHt + 'px'});
		}else{
			imgClip.removeAttr('style');
		}
	};

	/**************/
	/*** OBJECT ***/
	/**************/

	function InvestCalculator() {
		var rateOfReturn = 0.065;
		this.calcCompoundInterest('questis', rateOfReturn, this.getQuestisRate());
		this.calcCompoundInterest('industry', rateOfReturn, this.getIndustryRate());
	}

	/**
	 * This function calculations compound interest with a lot of formatting thrown in on every mouseup event of the
	 * slider handle. Compound interest: http://en.wikipedia.org/wiki/Compound_interest
	 *
	 * @param investAmt
	 * @param rateOfReturn
	 * @param rate
	 */
	InvestCalculator.prototype.calcCompoundInterest = function(investAmt, rateOfReturn, rate) {
		var checkSlider = setInterval(function() {
			if($('span.ui-slider-handle').length > 0) {
				$(document).on('mouseup mouseout', 'span.ui-slider-handle', function() {
					// Calculation:
					$('span.invest-amount.' + investAmt).find('span').text(
						Math.round(
							Math.pow(
								(1 + (rateOfReturn - rate)),
								parseInt($('.time-of-investment').find('span.years').text()) ) *
								parseInt($('.investment-amount').find('span.amount').text().replace(/,/g, ''))).toLocaleString()
					);
					$('span.difference').text( (parseInt($('span.invest-amount.questis').find('span').text().replace(/,/g, '')) -
						parseInt($('span.invest-amount.industry').find('span').text().replace(/,/g, ''))).toLocaleString() );
				});
			}
			clearInterval(checkSlider);
		},100);
	};

	InvestCalculator.prototype.getQuestisRate = function() {
		return this.convertPercToDec('span.questis-expense', 100, 10000);
	};

	InvestCalculator.prototype.getIndustryRate = function() {
		return this.convertPercToDec('span.industry-expense', 10, 1000);
	};

	/**
	 * Helper method to convert percentage data on page to a decimal
	 *
	 * @param selector
	 * @param num1
	 * @param num2
	 * @returns {number}
	 */
	InvestCalculator.prototype.convertPercToDec = function(selector, num1, num2) {
		return Math.round(parseFloat($(selector).text()) * num1) / num2;
	};

	/**************/
	/*** OBJECT ***/
	/**************/

	function RelatedPosts() {
		this.moveBlock();
	}

	RelatedPosts.prototype.moveBlock = function() {
		$('.rp4wp-related-posts').appendTo('article');
	};

	/**************/
	/*** OBJECT ***/
	/**************/

	function PostTags() {
		this.removeTag();
	}

	PostTags.prototype.removeTag = function() {
		$('ul.tags').find('li').find('a.active').click(function(e) {
			e.preventDefault();
			window.location = "http://" + window.location.host + "/academy";
		});
	};

	/**************/
	/*** OBJECT ***/
	/**************/

	function WellthSignup() {
		this.activatePopup();
	}

	WellthSignup.prototype.activatePopup = function() {
		$('.financial-wellness').find('a.product-button').fancybox({
			padding: 0
		});
	};

	/**************/
	/*** OBJECT ***/
	/**************/

	function HeroVideo() {
		this.showVideo();
		this.playVideo();
	}

	HeroVideo.prototype.showVideo = function() {
		$('.hero-video').find('span.play').click(function() {
			$('.hero-video').hide();
			$('.video-container').show();
		});
	};

	HeroVideo.prototype.playVideo = function() {
		var iframe = $('#player1')[0],
			player = $f(iframe),
			playButton = $('.hero-video').find('span.play');

		player.addEvent('ready', function() {
			playButton.on('click', function() {
				player.api('play');
			});
		});
	};

	/**************/
	/*** OBJECT ***/
	/**************/

	function StickyNav() {
		this.slideIn();
		this.clickLink();
	}

	/**
	 * Slides sticky-nav element in from the top when the scroll hits the top of the .sticky-trigger element
	 *
	 */
	StickyNav.prototype.slideIn = function() {
		var stickyNavActive = false;
		$(window).scroll(function() {
			var stickyTrigger = $('.sticky-trigger'),
				stickyNav = $('.sticky-nav');
			if($(window).scrollTop() >= stickyTrigger.offset().top && stickyNavActive === false) {
				stickyNav.animate({'top':0}, 250);
				stickyNavActive = true;
			}
			if($(window).scrollTop() < stickyTrigger.offset().top && stickyNavActive === true) {
				stickyNav.animate({'top':'-70px'}, 250);
				stickyNavActive = false;
			}
		});
	};

	/**
	 * When clicking one of the links in the sticky-nav, slide to that link's href attribute's matching element id
	 * on the page (href and id must match in HTML)
	 *
	 */
	StickyNav.prototype.clickLink = function() {
		$('.sticky-nav').find('a:not(".last")').each(function() {
			var sectionId = $(this).attr('href'),
				sectionTop = $(sectionId).offset().top;
			if($('html').hasClass('touch')) {
				sectionTop = sectionTop + 90;
			}
			$(this).click(function(e) {
				e.preventDefault();
				$('body, html').animate({ scrollTop: sectionTop }, 250);
			});
		});
	};

	var mobileMenu = new MobileMenu(),
		heroVideo = new HeroVideo();
	if(bodyNode.hasClass('home')) {
		var productsParallax = new ProductsParallax();
		var wellthSignup = new WellthSignup();
	}
	if(bodyNode.hasClass('blog') || bodyNode.hasClass('archive')) {
		var landingImgHt = new LandingImgHt();
		var postTags = new PostTags();
	}
	if(bodyNode.hasClass('page-template-invest-page-php')) {
		var investCalculator = new InvestCalculator();
	}
	if(bodyNode.hasClass('page-template-invest-page-php') || bodyNode.hasClass('page-template-advice-page-php')) {
		var stickyNav = new StickyNav();
	}
	if(bodyNode.hasClass('single')) {
		var relatedPosts = new RelatedPosts();
	}
});
