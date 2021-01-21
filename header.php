<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package versa-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
        <nav class="mainNav nav -close admin-header">
            <div class="mainNav__container col-md-10 centerHz">
                <a href="" class="mainNav__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/fitbit-logo.png" alt="Image"></a>
                <ul class="mainNav__list col-s-8 ">
                    <li class="mainNav__link"><a href="">Fitbit Versa 3</a></li>
                    <li class="mainNav__link"><a href="">à propos de fitbit</a></li>
                    <li class="mainNav__link"><a href="">support</a></li>
                    <li class="mainNav__icon"><a href=""><img src="" alt="icone"></a></li>
                    <li class="mainNav__icon"><a href=""><img src="" alt="icone"></a></li>
                    <li class="mainNav__icon"><a href=""><img src="" alt="icone"></a></li>
                    <li class="mainNav__account"><a href="" class="button">Mon Compte</a></li>
                    <li class="mainNav__account"><a href="" class="button -secondary">Déconnexion</a></li>
                </ul>
            </div>
        </nav>
	</header>
