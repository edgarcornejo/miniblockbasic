<?php
/**
 * Title: Comments
 * Slug: miniblockbasic/comments
 * Categories: text
 * Block Types: core/comments
 */

?>
<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div>
	<!-- wp:heading -->
	<h2><?php esc_html_e( 'Comentarios', 'miniblockbasic' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:comments-title {"level":3} /-->
	<!-- wp:comment-template -->
	<!-- wp:group -->
	<div>
		<!-- wp:group -->
		<div>
			<!-- wp:avatar {"size":50} /-->
			<!-- wp:group -->
			<div>
				<!-- wp:comment-date /-->
				<!-- wp:comment-author-name /-->
				<!-- wp:comment-content /-->
				<!-- wp:group -->
				<div>
					<!-- wp:comment-edit-link /-->
					<!-- wp:comment-reply-link /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination -->
	<!-- wp:comments-pagination-previous /-->
	<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->
