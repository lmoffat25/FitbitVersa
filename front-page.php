<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    if( have_posts() ): while( have_posts() ) : the_post();

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
    endif;

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
