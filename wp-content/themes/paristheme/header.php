<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>">Le(s) Pari(s)<br> du genre</a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => '',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
        <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
            <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
                <div class="container" id="presentation">
                    <h1>
                        <?php
                        if(get_theme_mod( 'header_banner_title_setting' )){
                            echo get_theme_mod( 'header_banner_title_setting' );
                        }else{
                            echo 'La ville est-elle un espace genré ?';
                        }
                        ?>
                    </h1>
                    <p>
                        Comment nos identités de genre nous permettent-elles de vivre la ville ? Les études sur la question mettent en avant des variations genrées dans les déplacements, l'appropriation des espaces publics, les représentations symboliques, les dépenses publiques d'aménagement... Ces différences quotidiennes peu visibles mènent-elles à l'égalité ?
                    </p>
                    <a href="#content" class="page-scroller">Enquêtez !</a>
                </div>
            </div>
        <?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>
