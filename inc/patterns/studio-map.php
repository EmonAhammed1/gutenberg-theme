<?php
/**
 * Studio Map & Location Pattern
 *
 * @package Realome
 */

return array(
	'title'      => __( '11. Studio Map & Location', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-map-section","layout":{"type":"full"}} -->
<div class="wp-block-group alignfull vhs-map-section">
	<div class="vhs-map-wrapper">
		<!-- wp:wp-map-block/wp-map-block {"map_id":"wpmapblock_80b37248","map_marker_list":[{"id":0,"lat":25.978504,"lng":-80.223884,"title":"Memory Converter","content":"6630 Meade Street, Hollywood, FL 33024","iconType":"default","customIconUrl":"","customIconWidth":25,"customIconHeight":40}],"map_zoom":15,"map_type":"GM","map_width":100,"map_height":380,"scroll_wheel_zoom":false,"center_index":0} /-->
		
		<div class="vhs-map-overlay-grid"></div>

		<div class="vhs-map-info-card">
			<h4 class="vhs-map-card-title">Memory Converter</h4>
			<p class="vhs-map-card-address">6630 Meade Street<br>Hollywood, FL 33024</p>
			<a href="https://www.google.com/maps/dir/?api=1&amp;destination=6630+Meade+Street,+Hollywood,+FL+33024" target="_blank" rel="noopener noreferrer" class="vhs-map-card-link">Get directions &rarr;</a>
		</div>

		<div class="vhs-map-caption">google map embed &mdash; hollywood / south florida</div>
	</div>
</div>
<!-- /wp:group -->
',
);
