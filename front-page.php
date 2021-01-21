<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();
?>
    <div class="row">
    <?php if (have_rows('title_img_desc')) :
        while (have_rows('title_img_desc')) : the_row(); ?>
        <div class="col-6">
            <h2 class="title_h2"><?php echo get_sub_field('title'); ?></h2>
            <p><?php echo get_sub_field('desc'); ?></p>
        </div>
        <div class="col-6"><img src="<?php echo get_sub_field('img')['sizes']['medium']; ?>"></div>
        <?php endwhile;
    endif; ?>
    </div>

    <div>
    <?php if (have_rows('circles_functionalities')) :
        while (have_rows('circles_functionalities')) : the_row(); ?>
        <div>
            <h2 class="title_h2"><?php echo get_sub_field('title'); ?></h2>
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
    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
