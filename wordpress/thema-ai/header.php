<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <nav>
    <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none;">
      <div class="logo-text">AI Nepnieuws Info</div>
      <div class="logo-sub">Herken en begrijp AI desinformatie</div>
    </a>
    <ul class="nav-links">
      <li><a href="<?php echo esc_url(home_url('/')); ?>" class="active">Home</a></li>
      <li><a href="<?php echo esc_url(home_url('/artikelen')); ?>">Artikelen</a></li>
      <li><a href="<?php echo esc_url(home_url('/vergelijking')); ?>">Vergelijking</a></li>
      <li><a href="<?php echo esc_url(home_url('/quiz')); ?>">Quiz</a></li>
    </ul>
  </nav>
</header>
