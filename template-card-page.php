<?php
  /*Template Name: Article
  Template Post Type: post, pages*/
?>


<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <title>Dae</title>
  </head>
  <body>
  <?php get_header(); ?>
    <main>
    <?php $hero = get_field('group_645ba83eaf630');?>
      <section class="card__section">
        <div class="card__image">
          <img src="<?php echo the_field('card_img'); ?>" alt="Card" />
        </div>
        <div class="card__text">
          <h2 class="card__title">Name: <span><?php echo the_field('card_title'); ?></span></h2>
          <p class="card_description">
            Description:
            <span>
            <?php echo the_field('card_description'); ?>
            </span>
          </p>
          <h3 class="card__price">Price: <span><?php echo the_field('card_price'); ?></span></h3>
        </div>
      </section>
    </main>

   <?php get_footer(); ?>
  </body>
</html>
