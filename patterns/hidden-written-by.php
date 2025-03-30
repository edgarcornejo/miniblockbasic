<?php
/**
 * Title: Written by
 * Slug: miniblockbasic/hidden-written-by
 * Inserter: no
 */

?>

<div class="date-author-category">
	<small>
		<?php esc_html_e( 'Publicado el: ', 'miniblockbasic' ); ?>
		<!-- wp:post-date /-->
	</small>

	<small>
		<?php esc_html_e( 'Escrito por: ', 'miniblockbasic' ); ?>
		<!-- wp:post-author-name /-->
	</small>

	<small>
		<?php esc_html_e( 'En: ', 'miniblockbasic' ); ?>
		<!-- wp:post-terms {"term":"category"} /-->
	</small>
</div>


