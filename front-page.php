<?php
/** @link https://developer.wordpress.org/reference/functions/get_header/ */
get_header();
?>

<section class="top-banner">
    <div class="content">
        <h1>Fitbit</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/customisation.png" alt="">
        <h1 class="-grey">Versa 3</h1>
    </div>
    <button class="button -big -opac">Découvrir</button>
</section>


<div class="img_desc col-12 col-lg-10 col-xl-8 centerHz">
    <div class="row">
        <?php if (have_rows('title_img_desc')) :
            while (have_rows('title_img_desc')) : the_row(); ?>
                <div class="col-12 col-md-5">
                    <h2 class="title_h2"><?php echo get_sub_field('title'); ?></h2>
                    <p><?php echo get_sub_field('desc'); ?></p>
                </div>
                <div class="col-12 col-md-7"><img src="<?php echo get_sub_field('img')['sizes']['large']; ?>"></div>
            <?php endwhile;
        endif; ?>
    </div>
</div>

<section class="reinssurance col-12 col-lg-10 col-xl-8 centerHz">
    <?php if (have_rows('reinssurance')) :
        while (have_rows('reinssurance')) : the_row(); ?>
            <div class="reinssurance__card">
                <div class="reinssurance__content">
                    <h3><?php the_sub_field('title_card'); ?></h3>
                    <p><?php the_sub_field('content_card'); ?></p>
                    <div class="reinssurance__buttons">
                        <?php $show_button_buy = get_sub_field('show_button_buy');
                        $buttonGroupBuy = get_sub_field('button_buy');
                        $buttonGroupPlus = get_sub_field('button_plus');
                        if ($show_button_buy == 1) { ?>
                            <a href="<?php echo esc_url($buttonGroupBuy['link']); ?>" class="button -small"><?php echo $buttonGroupBuy['label']; ?></a>
                        <?php } ?>
                        <a href="<?php echo esc_url($buttonGroupPlus['link']); ?>" class="button -small -secondary"><?php echo $buttonGroupPlus['label']; ?></a>
                    </div>
                </div>
                <img src="<?php echo get_sub_field('img')['url']; ?>" alt="photo">
            </div>
        <?php endwhile;
    endif; ?>
</section>

<?php if (have_rows('circles_functionalities')) :
    while (have_rows('circles_functionalities')) : the_row(); ?>
        <div class="fonctionnalites col-md-12">
            <h2 class=""><?php echo get_sub_field('title'); ?></h2>
            <div class="fonctionnalites__container col-10 centerHz">
                <?php if (have_rows('circles_functionalities_functionalities')) :
                    while (have_rows('circles_functionalities_functionalities')) : the_row(); ?>
                        <div class="fonctionnalites__image col-6 col-md-3">
                            <img src="<?php echo get_sub_field('img')['sizes']['medium']; ?>" alt="photo">
                            <p><?php echo get_sub_field('desc'); ?></p>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    <?php endwhile;
endif; ?>

<?php
get_template_part('template-parts/options-newsletter');

/** @link https://developer.wordpress.org/themes/basics/the-loop/ */
/*if( have_posts() ): while( have_posts() ) : the_post();

    // Custom Query
    $args = array(
        'post-type' => 'product',
        'post_per_page' => -1,
        'orderby' => 'name',
    )

    $the_query = new WP_Query( $args );

    if ( $the_query->have_post() ) :
        while ( $the_query->have_post() ) : $the_query->the_post();

        $postID = get_the_ID();
        $postdata = get_port($postID);

        $repeater = get_field("caracteristiques", $postID);

        endwhile;
    endif;

    $tagline = get_field("nomdechamps");


    // Check rows exists.
    if( have_rows('repeater_field_name') ):

        // Loop through rows.
        while( have_rows('repeater_field_name') ) : the_row();

            // Load sub field value.
            $sub_value = get_sub_field('sub_field');

            // Do something...

        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
endwhile;
endif;*/

/** @link https://developer.wordpress.org/reference/functions/get_footer/ */
get_footer();
?>
