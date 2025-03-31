<?php
/**
 * Title: Sidebar
 * Slug: miniblockbasic/sidebar
 * Inserter: no
 */

?>

<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
<div>
	<h3><?php esc_html_e( 'Publicaciones', 'miniblockbasic' ); ?></h3>
	<!-- wp:post-template -->
		<!-- wp:group -->
		<div>
			<!-- wp:post-title {"isLink":true} /-->
			<!-- wp:post-date {"isLink":true} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Agregue texto o bloques que se mostrarán cuando una consulta no arroje resultados.', 'miniblockbasic' ); ?>","fontSize":"medium"} -->
		<p><?php echo esc_html_x( 'Lo sentimos, pero no se encontró nada. Intente buscar con otras palabras clave.', 'Mensaje que explica que no hay resultados de una búsqueda.', 'miniblockbasic' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->

<h3><?php esc_html_e( 'Buscar', 'miniblockbasic' ); ?></h3>
<!-- wp:pattern {"slug":"miniblockbasic/hidden-search"} /-->
