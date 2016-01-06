<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
	
		<div id="footer" class="container-fluid">
			<div class="col-md-2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_rodape.png" class="img-responsive center-block">
			</div>
			<div class="col-md-8">
				COPYRIGHT © 2015 - EDITORA ABRIL S.A. - TODOS OS DIREITOS RESERVADOS
			</div>
			<div class="col-md-2">
			</div>
		</div><!-- .container -->


	<?php wp_footer(); ?>
</body>
</html>
