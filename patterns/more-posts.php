<?php
/**
 * Title: More posts
 * Slug: miniblockbasic/more-posts
 * Categories: query
 * Block Types: core/query
 */

?>
<!-- wp:group  -->
<div>
	<!-- wp:heading -->
	<h2><?php esc_html_e( 'Más publicaciones', 'miniblockbasic' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
			<!-- wp:group -->
			<div>
				<!-- wp:post-title {"level":3,"isLink":true} /-->
				<!-- wp:post-date {"isLink":true} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
