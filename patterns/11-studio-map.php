<?php
/**
 * Title: 11. Studio Map & Location
 * Slug: realome/studio-map
 * Categories: featured, realome, vhs-sections
 * Keywords: map, location, google map, hollywood, studio
 * Viewport Width: 1280
 *
 * @package Realome
 */

?>
<!-- wp:group {"align":"full","className":"vhs-map-section","layout":{"type":"full"}} -->
<div class="wp-block-group alignfull vhs-map-section">
	<!-- wp:html -->
	<div class="vhs-map-wrapper">
		<iframe class="vhs-google-map-iframe" src="https://maps.google.com/maps?q=6630+Meade+Street,+Hollywood,+FL+33024&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		
		<div class="vhs-map-overlay-grid"></div>

		<div class="vhs-map-info-card">
			<h4 class="vhs-map-card-title">Memory Converter</h4>
			<p class="vhs-map-card-address">6630 Meade Street<br>Hollywood, FL 33024</p>
			<a href="https://www.google.com/maps/dir/?api=1&amp;destination=6630+Meade+Street,+Hollywood,+FL+33024" target="_blank" rel="noopener noreferrer" class="vhs-map-card-link">Get directions &rarr;</a>
		</div>

		<div class="vhs-map-caption">google map embed &mdash; hollywood / south florida</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
