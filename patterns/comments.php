<?php
/**
 * Title: Comments
 * Slug: miniblockbasic/comments
 * Categories: text
 * Block Types: core/comments
 */
?>

<article>
	<header>
		<h2><?php esc_html_e( 'Comentarios', 'miniblockbasic' ); ?></h2>
		<!-- wp:comments-title {"level":3} /-->
	</header>

	<!-- wp:comment-template -->
	<div class="comment">
		<!-- wp:comment-author-name /-->
		<!-- wp:avatar {"size":48} /-->
		<!-- wp:group -->
		<div class="date-author-category">
			<!-- wp:comment-content /-->
			<!-- wp:comment-date /-->
			<!-- wp:group -->
			<div>
				<!-- wp:comment-edit-link /-->
				<!-- wp:comment-reply-link /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination -->
	<div id="#navegation-by-post">
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-next /-->
	</div>
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form /-->
</article>
