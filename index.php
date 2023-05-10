<?php
/*Template Name: Coffe house */
?>

<!DOCTYPE html>
<html lang="uk">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dae</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    </head>

    <body>
    <?php get_header(); ?>
        <main>
            <section class="intro">
                <div class="intro__container">
                    <a class="btn__shop" href="#">Shop now</a>
                </div>
                <div class="intro__text">
                    <h2 class="text__suptitle">Ready To Get Drenched?</h2>
                    <h1 class="text__title">Meet Monsoon Moisture Mask</h1>
                    <a href="#">Shop Now</a>
                </div>
            </section>

            <section class="items">
                <h1 class="items__title">Pick a Pretty Bottle</h1>
                <div class="cards">
                    <?php $hero = get_field('group_645ba83eaf630');?>
                    <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "card",
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    
                    global $post;
                    
                    
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                    
                        <a class="card" href="<?php echo get_permalink(); ?>">
                        <div class="item__img">
                            <img src="<?php echo the_field('card_img'); ?>" alt="Item">
                        </div>
                        <div class="item__title">
                            <h2 class="card__title"><?php echo the_field('card_title'); ?></h2>
                        </div>
                        <div class="item__price">
                            <span class="card__price"><?php echo the_field('card_price'); ?></span>
                        </div>
                    </a>
                    <?php
                }
                    
                    wp_reset_postdata();
                    ?>

                </div>
                <div class="arrows__container">
                    <div class="arrows__inner">
                        <button class="arrow__left" href="#"></button>
                        <button class="arrow__right" href="#"></button>
                    </div>
                </div>
            </section>

            <section class="feeling">
                <div class="feeling__container">
                    <div class="feeling__img"></div>
                    <div class="feeling__text">
                        <h1 class="feeling__title">Feel the warmth of the desert wherever you are.</h1>
                        <a class="btn__feeling" href="#">Shop Sets</a>
                    </div>
                </div>
            </section>

            <section class="about">
                <div class="about__container">
                    <div class="about__images">
                        <div class="image__background">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/about__background.png" alt="Img">
                        </div>
                        <div class="image__foreground">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/about__foreground.png" alt="Img">
                        </div>
                    </div>
                    <div class="about__text">
                        <h1 class="about__title">Meet Dae</h1>
                        <p class="about__suptitle">We’re a haircare line based in sunny Arizona. Our products are made
                            up of the many things that make our home special, including the scent of orange blossoms in
                            the air, colors of majestic sunsets and nourishing ingredients derived from desert
                            botanicals. We believe haircare doesn’t have to be complicated and aimed to make a line that
                            is simple and effective. We hope that dae plays a special role in your everyday hair routine
                            from sunrise to sunset and allows you to feel the warmth of the desert wherever you are.
                        </p>
                        <a class="btn__read" href="#">Read More</a>
                    </div>
                </div>
            </section>

            <section class="galery">
                <div class="galery__container">
                    <h1 class="galery__title">Follow Us @daehair</h1>
                    <div class="galery__photos">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/gallery_1.png" alt="galery">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/gallery_2.png" alt="galery">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/gallery_4.png" alt="galery">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/gallery_5.png" alt="galery">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/gallery_6.png" alt="galery">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/gallery_7.png" alt="galery">
                    </div>
                </div>
            </section>           

            <?php get_footer(); ?>
        </main>
    </body>

</html>