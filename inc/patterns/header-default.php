<?php
/**
 * Default header pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Header Default', 'realome' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
<!-- wp:group {"tagName":"header","align":"full","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"24px","right":"24px"}},"border":{"bottom":{"color":"#e2e8f0","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<header class="wp-block-group alignfull has-background" style="background-color:#ffffff;border-bottom-color:#e2e8f0;border-bottom-width:1px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center">

		<!-- Logo (left) -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="display:flex;align-items:center">
			<!-- wp:image {"width":160,"sizeSlug":"full","linkDestination":"custom","className":"vhs-header-logo"} -->
			<figure class="wp-block-image size-full is-resized vhs-header-logo"><a href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url( $theme_uri ) . '/assets/images/logo-main.png" alt="Memory Converter" width="160" style="height:auto"/></a></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->

		<!-- Navigation (right) -->
		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap","orientation":"horizontal"},"style":{"spacing":{"blockGap":"32px"}}} /-->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
',
);
