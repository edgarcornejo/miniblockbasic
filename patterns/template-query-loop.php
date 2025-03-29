<?php
/**
 * Title: List of posts, 1 column
 * Slug: miniblockbasic/template-query-loop
 * Categories: query
 * Block Types: core/query
 */

?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div>
	<!-- wp:post-template -->
		<!-- wp:group -->
		<div>
			<!-- wp:post-featured-image {"isLink":true} /-->
			<!-- wp:post-title {"isLink":true} /-->
			<!-- wp:post-content /-->
			<!-- wp:post-date {"isLink":true} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:group -->
	<div>
		<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Lo sentimos, pero no se encontró nada. Intente buscar con otras palabras clave.', 'Mensaje que explica que no hay resultados de una búsqueda.', 'miniblockbasic' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group -->
	<div>
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
