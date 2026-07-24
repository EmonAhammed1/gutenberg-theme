<?php
/**
 * Final CTA Pattern
 *
 * @package Realome
 */

return array(
	'title'      => __( '10. Final Conversion CTA Banner', 'realome' ),
	'categories' => array( 'vhs-sections' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"color":{"background":"#112a46","text":"#ffffff"},"spacing":{"padding":{"top":"70px","bottom":"70px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#112a46;color:#ffffff;padding-top:70px;padding-right:24px;padding-bottom:70px;padding-left:24px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":2,"align":"center","style":{"color":{"text":"#ffffff"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Your Memories Deserve More Than a <span style="color:#38bdf8">Mail-Out</span>.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#cbd5e1"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#cbd5e1">Bring your tapes to our Hollywood, FL studio or request a pre-paid shipping kit today.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"#0284c7","text":"#ffffff"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="background-color:#0284c7;color:#ffffff">Get Free Quote</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#ffffff"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="color:#ffffff">Call (305) 501-1901</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
