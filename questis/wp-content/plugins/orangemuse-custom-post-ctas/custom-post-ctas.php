<?php
/*
Plugin Name: Orange Muse Custom Post CTAs
Plugin URI: http://www.orangemuse.com
Description: This is a custom plugin that displays a WP Meta box on admin post pages to add custom call to actions to that post.
Author: Robert Henderson
Version: 1.0
Author URI: http://www.orangemuse.com
*/

add_action('add_meta_boxes', 'custom_cta_meta_box_add');
add_action('save_post','custom_cta_save');
add_action('wp_head', 'add_fancybox_css');
add_action('wp_head', 'add_parsley_script');
add_action('the_content', 'add_ctas_to_post');

/**
 * Adds post meta to admin post page
 */
function custom_cta_meta_box_add() {
	if(function_exists('add_meta_box')) {
		add_meta_box('customcta','Add Custom CTA','customcta_meta','post','normal','high');
	}
}

/**
 * Adds content to post meta on admin post page
 *
 * @param $post
 */
function customcta_meta($post) {
	$cb_build = get_post_meta($post->ID, 'customcta_build', true);
	$cb_learn = get_post_meta($post->ID, 'customcta_learn', true);
	$cb_custom = get_post_meta($post->ID, 'customcta_custom', true);
	$cb_custom_title = get_post_meta($post->ID, 'customcta_custom_title', true);
	$cb_custom_url = get_post_meta($post->ID, 'customcta_custom_url', true);
	// We'll use this nonce field later on when saving.
	wp_nonce_field( 'custom_cta_nonce', 'meta_box_nonce' );

	$type = "";
	if($post->post_type=='page'){
		$type = "page";
	}else{
		$type = "post";
	}
	$display = ' style="display:none"';
	if(checked($cb_custom, 'on', false)){
		$display = '';
	}
	$html = '<p>Check the types of call to action\'s you would like to appear at the end of your ' . $type . '</p>';
	$html .= '<div><input type="checkbox" name="customcta_build" id="customcta_build" ' . checked($cb_build, 'on', false) . '/>';
	$html .= '<label for="customcta_build"> Add \'Build Your Portfolio Now\' CTA button to ' . $type . '</label></div>';
	$html .= '<div><input type="checkbox" name="customcta_learn" id="customcta_build" ' . checked($cb_learn, 'on', false) . '/>';
	$html .= '<label for="customcta_learn"> Add \'Contact Questis\' CTA button to ' . $type . '</label></div>';
	$html .= '<div><input type="checkbox" name="customcta_custom" id="customcta_build" ' . checked($cb_custom, 'on', false) . ' onclick="jQuery(\'#customcta_custom_data\').toggle();"/>';
	$html .= '<label for="customcta_custom"> Add a custom CTA button to ' . $type . '</label></div>';
	$html .= '<div id="customcta_custom_data"' . $display . '>';
	$html .= '<p><label for="customcta_custom_title">Button Title: </label>';
	$html .= '<input type="text" name="customcta_custom_title" id="customcta_custom_title" value="' . $cb_custom_title . '"/></p>';
	$html .= '<p><label for="customcta_custom_url">Button URL: </label>';
	$html .= '<input type="text" name="customcta_custom_url" id="customcta_custom_url" value="' . $cb_custom_url . '"/></p>';
	$html .= '</div>';

	echo $html;
}

/**
 * Saves meta info to wp_postmeta table on post save (excludes autosave)
 *
 * @param $post_id
 */
function custom_cta_save($post_id) {
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'custom_cta_nonce' ) ) return;

	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post', $post_id ) ) return;

	// now we can actually save the data
	$customcta_build = (isset($_POST['customcta_build'])) ? $_POST['customcta_build'] : "";
	update_post_meta($post_id, 'customcta_build', $customcta_build);

	$customcta_learn = (isset($_POST['customcta_learn'])) ? $_POST['customcta_learn'] : "";
	update_post_meta($post_id, 'customcta_learn', $customcta_learn);

	$customcta_custom = (isset($_POST['customcta_custom'])) ? $_POST['customcta_custom'] : "";
	update_post_meta($post_id, 'customcta_custom', $customcta_custom);

	$customcta_custom_title = (isset($_POST['customcta_custom_title'])) ? $_POST['customcta_custom_title'] : "";
	update_post_meta($post_id, 'customcta_custom_title', $customcta_custom_title);

	$customcta_custom_url = (isset($_POST['customcta_custom_url'])) ? $_POST['customcta_custom_url'] : "";
	update_post_meta($post_id, 'customcta_custom_url', $customcta_custom_url);
}

/**
 * Adds Fancybox css styles
 */
function add_fancybox_css() {
	echo "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/css/third-party/fancybox/jquery.fancybox.css' media='all' />";
}

/**
 * Adds parsley validation script for lightbox form
 */
function add_parsley_script() {
	echo "<script type='text/javascript' language='javascript' src='" . get_stylesheet_directory_uri() . "/js/third-party/parsley.min.js' />";
}

/**
 * Outputs the CTA's below the content of the post on the single post page
 *
 * @param $content
 * @return string
 */
function add_ctas_to_post($content) {
	if (is_single()) {
		$custom_content = $content;
		$custom_content .= '<div class="custom-ctas content">';
		if(get_post_meta(get_the_ID(), 'customcta_build', true) != "") {
			$custom_content .= '<a href="http://app.questisportfolio.com/portfolio" class="btn btn-large questis-portfolio-tool-link btn-questis"><i class="icon icon-bar-chart questis-portfolio-tool-link"></i> Build Your Portfolio Now</a>';
		}
		if(get_post_meta(get_the_ID(), 'customcta_learn', true) != "") {
			$custom_content .= <<<EOD
			<a href="#contact-us-lightbox" class="btn btn-large btn-learn-more fancybox-learn">Contact Questis</a>
				<div id="contact-us-lightbox" style="display:none">
					<h4>Contact Questis.</h4>
					<p class="form-description">We are here to help.</p>
					<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" data-validate="parsley">
						<input type="hidden" name="oid" value="00DU0000000I4Pt">
EOD;
			$custom_content .= '<input type="hidden" name="retURL" value="'. get_permalink(get_the_ID()) .'">';
			$custom_content .= <<<EOD_TWO
						<div class="group one">
							<div class="input-text">
								<label for="first_name">First Name *</label>
								<input id="first_name" maxlength="40" name="first_name" size="20" type="text" data-required="true" data-trigger="change" class="parsley-validated">
							</div>
							<div class="input-text">
								<label for="last_name">Last Name *</label>
								<input id="last_name" maxlength="80" name="last_name" size="20" type="text" data-required="true" data-trigger="change" class="parsley-validated">
							</div>
							<div class="input-text">
								<label for="email">Email *</label>
								<input id="email" maxlength="80" name="email" size="20" type="text" data-type="email" data-required="true" data-trigger="change" class="parsley-validated">
							</div>
						</div>
						<div class="group two">
							<div class="input-text">
								<label for="phone">Phone</label>
								<input id="phone" maxlength="40" name="phone" size="20" type="text" data-type="phone" class="parsley-validated">
							</div>
							<div class="input-select">
								<label for="00NU0000003gRTL">Preferred Method of Communication</label>
								<select id="00NU0000003gRTL" name="00NU0000003gRTL" title="Preferred Method of Communication">
									<option value="">Please Select</option>
									<option value="E-Mail">Email</option>
									<option value="Phone">Phone</option>
								</select>
							</div>
							<div class="input-textarea">
								<label for="description">Ask a Question</label>
								<textarea name="description"></textarea>
							</div>
						</div>
EOD_TWO;
			$custom_content .= '<input type="hidden" name="lead_source" value="Academy Post: '. get_the_title(get_the_ID()) .'">';
			$custom_content .= <<<EOD_THREE
						<input type="submit" name="submit" value="Send" class="btn btn-submit">
						<p class="required">* Required fields</p>
					</form>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
						$('.fancybox-learn').fancybox({
							padding : 0,
							openEffect  : 'elastic',
							closeEffect  : 'elastic',
							padding : [30, 70, 30, 70],
							autoSize : false,
							width : 'auto',
							height : 'auto'
						});
					});
				</script>
EOD_THREE;

		}
		if(get_post_meta(get_the_ID(), 'customcta_custom', true) != "" && get_post_meta(get_the_ID(), 'customcta_custom_title', true) != "" && get_post_meta(get_the_ID(), 'customcta_custom_url', true) != "") {
			$custom_content .= '<a href="' . get_post_meta(get_the_ID(), 'customcta_custom_url', true) . '" class="btn btn-large btn-build-portfolio">' . get_post_meta(get_the_ID(), 'customcta_custom_title', true) . '</a>';
		}
		$custom_content .= '</div>';
		return $custom_content;
	} else {
		return $content;
	}
}