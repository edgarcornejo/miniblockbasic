<?php
/**
 * Title: 404
 * Slug: miniblockbasic/hidden-404
 * Inserter: no
 */

?>
<!-- wp:group -->
<div>

	<div>

		<div>
			<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404-image.webp" alt="<?php echo esc_attr_x( 'Small totara tree on ridge above Long Point', 'image description', 'miniblockbasic' ); ?>" style="object-fit:cover"/>
			</figure>
			<!-- /wp:image -->
		</div>

		<div>
			<!-- wp:group -->
			<div>
				<!-- wp:heading {"level":1} -->
				<h1>
					<?php echo esc_html_x( 'Página no encontrada', 'Mensaje de error 404', 'miniblockbasic' ); ?>
				</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'La página que busca no existe o ha sido movida. Intente buscar usando el formulario a continuación.', 'Mensaje de error 404', 'miniblockbasic' ); ?></p>
				<!-- /wp:paragraph -->


				<!-- wp:pattern {"slug":"miniblockbasic/hidden-search"} /-->
				 
			</div>
			<!-- /wp:group -->
		</div>

	</div>

</div>
<!-- /wp:group -->
