<?php
/**
 * Title: 404
 * Slug: miniblockbasic/hidden-404
 * Inserter: no
 */
?>

<section id="error-404">
	<article>
		<header>
			<h1>
				<?php echo esc_html_x( 'Página no encontrada', 'Mensaje de error 404', 'miniblockbasic' ); ?>
			</h1>
			<figure>
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404-image.webp" alt="<?php echo esc_attr_x( 'image description', 'miniblockbasic' ); ?>" />
			</figure>
		</header>

		<div>
			<p><?php echo esc_html_x( 'La página que busca no existe o ha sido movida. Intente buscar usando el formulario a continuación.', 'Mensaje de error 404', 'miniblockbasic' ); ?></p>

			<!-- wp:pattern {"slug":"miniblockbasic/hidden-search"} /-->
		</div>
	</article>
</section>

