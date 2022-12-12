<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php wp_head(); ?>

</head>


<body>

  <header class="header header-private_policy">
    <div class="container">
      <div class="header__top">
        <?php the_custom_logo(); ?>
        <a class="phone" href="tel:<?php the_field('phone-number') ?>"><?php the_field('phone') ?></a>
      </div>

    </div>
  </header>