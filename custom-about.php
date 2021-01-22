<?php
/* Template Name: About */

 wp_head();
?>
<main class="about-page">

    <h1 class="about-page__title"><?php echo get_the_title() ?></h1>

    <section class="about-section scroll-about">
                <div class="trigger" id="trigger1"></div>
                <div class="trigger" id="trigger2"></div>
                <div class="trigger" id="trigger3"></div>
                <div class="trigger" id="trigger4"></div>

                <div class="loader"><span class="loader__fill" style="height : 0%;"></span></div>


                <div id="pin1">
                    <div class="about-section__container" id="txt1">
                        <div class="about-section__content">
                            <h2 class="about-section__title">2018</h2>
                            <p class="about-section__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro ad, sint numquam molestias assumenda maiores?</p>
                            <img class="about-section__img" src="http://localhost/theme-alex-arnaud/wp-content/uploads/stresse.png" alt="Une photo">    
                        </div>
                    </div>
        
        
                    <div class="about-section__container" id="txt2">
                        <div class="about-section__content">
                            <h2 class="about-section__title">2019</h2>
                            <p class="about-section__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro ad, sint numquam molestias assumenda maiores?</p>
                            <img class="about-section__img" src="http://localhost/theme-alex-arnaud/wp-content/uploads/musique.png" alt="Une photo">    
                        </div>
                    </div>
        
                    <div class="about-section__container" id="txt3">
                        <div class="about-section__content">
                            <h2 class="about-section__title">2020</h2>
                            <p class="about-section__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro ad, sint numquam molestias assumenda maiores?</p>
                            <img class="about-section__img" src="http://localhost/theme-alex-arnaud/wp-content/uploads/dodo.png" alt="Une photo">    
                        </div>
                    </div>
        
                    <div class="about-section__container" id="txt4">
                        <div class="about-section__content">
                            <h2 class="about-section__title">2021</h2>
                            <p class="about-section__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro ad, sint numquam molestias assumenda maiores?</p>
                            <img class="about-section__img" src="http://localhost/theme-alex-arnaud/wp-content/uploads/sportive.png" alt="Une photo">    
                        </div>
                    </div>
                </div>
    </section>

</main>


<?php
 wp_footer()
 ?>