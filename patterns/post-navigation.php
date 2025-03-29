<?php
/**
 * Title: Post navigation
 * Slug: miniblockbasic/post-navigation
 * Categories: text
 * Block Types: core/post-navigation-link
 */

?>
<!-- wp:group -->
<div>
	<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Navegación de publicaciones', 'miniblockbasic' ); ?>","tagName":"nav"} -->
	<nav aria-label="<?php esc_attr_e( 'Navegación de publicaciones', 'miniblockbasic' ); ?>">
		<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
		<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
	</nav>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
