<?php
/*
Plugin Name:       Disable Gravity Forms
Plugin URI:        https://github.com/BellevueCollege/bc-disable-gravityforms
Description:       Activate, and all Gravity Forms are replaced with a simple maintenence message
Version:           0.0.0.1
Author:            Bellevue College ITS
Author URI:        https://www.bellevuecollege.edu
Text Domain:       bcdisablegf
GitHub Plugin URI: BellevueCollege/bc-disable-gravityforms
 */
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

add_filter( 'gform_get_form_filter', 'bcdisablegf_disable_all_forms', 10, 2 );

function bcdisablegf_disable_all_forms( $form_string, $form ) {
	return <<<HTML
	<div class="alert alert-danger">
		<h2>Form Temporarily Unavailable</h2>
		<p>We are currently doing some maintenence which requires taking forms offline for a few minutes. Please check back again soon.</p>
	</div>
HTML;
}
