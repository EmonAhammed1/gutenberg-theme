<?php
/**
 * FAQ Accordion Pattern
 *
 * @package Realome
 */

return array(
	'title'      => __( '09. FAQ Accordion', 'realome' ),
	'categories' => array( 'vhs-sections' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull" style="padding-top:60px;padding-right:24px;padding-bottom:60px;padding-left:24px">
	<!-- wp:columns {"align":"wide","verticalAlignment":"top"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">
		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#1e293b"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#1e293b">Questions,<br><span style="color:#0284c7">Answered</span>.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"}}} -->
			<p class="has-text-color" style="color:#64748b">Need immediate help? Call us directly at:<br><strong style="color:#0284c7">(305) 501-1901</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"65%"} -->
		<div class="wp-block-column" style="flex-basis:65%">
			<!-- wp:details {"style":{"border":{"width":"0px","style":"none","color":"transparent"},"spacing":{"padding":{"top":"16px","bottom":"16px"}}},"showContent":true} -->
			<details class="wp-block-details" open style="padding-top:16px;padding-bottom:16px"><summary><strong style="color:#0f172a">How long does VHS-C tape conversion take?</strong></summary>
			<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} -->
			<p class="has-text-color" style="color:#475569">Standard turnaround time is 3 to 5 business days for most orders. Rush 24-hour service is available upon request.</p>
			<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details {"style":{"border":{"width":"0px","style":"none","color":"transparent"},"spacing":{"padding":{"top":"16px","bottom":"16px"}}}} -->
			<details class="wp-block-details" style="padding-top:16px;padding-bottom:16px"><summary><strong style="color:#0f172a">Do I need a VHS-C adapter to bring my tapes?</strong></summary>
			<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} -->
			<p class="has-text-color" style="color:#475569">No! We have specialized motorized adapters, camcorders, and professional VCR decks in our studio.</p>
			<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details {"style":{"border":{"width":"0px","style":"none","color":"transparent"},"spacing":{"padding":{"top":"16px","bottom":"16px"}}}} -->
			<details class="wp-block-details" style="padding-top:16px;padding-bottom:16px"><summary><strong style="color:#0f172a">What if my tape is damaged or broken?</strong></summary>
			<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} -->
			<p class="has-text-color" style="color:#475569">We offer tape splicing, mold cleaning, and shell replacement services in-house before digitizing.</p>
			<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->

			<!-- wp:details {"style":{"border":{"width":"0px","style":"none","color":"transparent"},"spacing":{"padding":{"top":"16px","bottom":"16px"}}}} -->
			<details class="wp-block-details" style="padding-top:16px;padding-bottom:16px"><summary><strong style="color:#0f172a">How will I receive my digital video files?</strong></summary>
			<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} -->
			<p class="has-text-color" style="color:#475569">You will receive a private cloud streaming/download link and optional MP4 video files saved on a USB 3.0 flash drive.</p>
			<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
