<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package versa-theme
 */
?>

<footer class="footer col-10 centerHz">
    <p class="footer__copyright">Copyright © 2020 Fitbit Inc. All rights reserved.</p>
    <!--<div class="footer__content">
        <a href="" class="footer__item">CGV</a>
        <a href="" class="footer__item">CGU</a>
        <a href="" class="footer__item">Mentions légales</a>
        <a href="" class="footer__item">Politique de confidentialité</a>
    </div>-->
    <?php
        if ( has_nav_menu( 'footer-menu' ) ) :
        wp_nav_menu ( array (
        'theme_location' => 'footer-menu' ,
        'menu_class' => 'footer__content', // classe CSS pour customiser mon menu
        ) );
    endif;
    ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
