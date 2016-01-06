<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.3.min.js"></script>
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>
	<header id="header" role="banner">
		<div class="container-fluid">
			<div class="col-md-2">
				<a href="<?php echo home_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-1.png" class="img-responsive center-block" id="logo"></a>
			</div>
			<div class="col-md-2">
				<ul class="nav navbar-nav menu">
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-11 active" id="btn-menu">
						<a href="javascript:void(0)" id="funcao-menu" onclick="abre_menu()">
							<center><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></center>
						</a>
					</li>
				</ul>
				<ul class="nav navbar-nav links-sociais">
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-11 active">
						<a href="https://www.facebook.com/quatrorodas">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_facebook.png" class="center-block">
						</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-11 active">
						<a href="https://instagram.com/quatro_rodas">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_instagram.png" class="center-block">
						</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-11 active">
						<a href="https://twitter.com/quatrorodas">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_twitter.png" class="center-block">
						</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-11 active">
						<a href="http://www.abril.com.br/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_abril.png" class="center-block">
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-8 menu-principal">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'depth'          => 2,
							'container'      => false,
							'menu_class'     => 'nav navbar-nav',
							'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
							'walker'         => new Odin_Bootstrap_Nav_Walker()
						)
					);
				?>
			</div>

		</div><!-- .container-->
	</header><!-- #header -->
	<script>
	$(document).ready(function() {
    
	var width = $(document).width();
	if(width < 768)
		{
		fechar_menu();
		}
	});
	
	$(window).resize(function(){
		var width = $(document).width();
		if(width < 768)
			{
			fechar_menu();
			}
		else
			{
			abre_menu();
			}
		});
	
	function abre_menu()
		{
		$(".links-sociais").show();
		$(".menu-principal").show();
		$("#funcao-menu").attr('onclick', 'fechar_menu()');
		}
	function fechar_menu()
		{
		$(".links-sociais").hide();
		$(".menu-principal").hide();
		$("#funcao-menu").attr('onclick', 'abre_menu()');
		}
		
	</script>



		