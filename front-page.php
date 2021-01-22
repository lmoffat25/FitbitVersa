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


<div class="col-10 centerHz">
    <div class="row">
        <?php if (have_rows('title_img_desc')) :
            while (have_rows('title_img_desc')) : the_row(); ?>
                <div class="col-5">
                    <h2 class="title_h2"><?php echo get_sub_field('title'); ?></h2>
                    <p><?php echo get_sub_field('desc'); ?></p>
                </div>
                <div class="col-7"><img src="<?php echo get_sub_field('img')['sizes']['medium']; ?>"></div>
            <?php endwhile;
        endif; ?>
    </div>
</div>


    <div class="col-10 centerHz">
    <?php if (have_rows('circles_functionalities')) :
        while (have_rows('circles_functionalities')) : the_row(); ?>
        <div>
            <h2 class="title_h2 col-12"><?php echo get_sub_field('title'); ?></h2>
        </div>
        <div class="row">
        <?php if (have_rows('circles_functionalities_functionalities')) :
        while (have_rows('circles_functionalities_functionalities')) : the_row(); ?>
            <div class="col-3">
            <img src="<?php echo get_sub_field('img')['sizes']['medium']; ?>">
            <h2 class="title_h2"><?php echo get_sub_field('title'); ?></h2>
            <p><?php echo get_sub_field('desc'); ?></p>
            </div>
        <?php endwhile;
    endif; ?>
        </div>
        <?php endwhile;
    endif; ?>
    </div>
    
<?php
get_template_part( 'template-parts/options-newsletter' );

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
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
