<?php
global $siteUrl;
global $astUrl;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!-- Preload -->
  <link rel="preload" href="<?php echo $astUrl; ?>assets/js/libs/viewport-extra.min.js" as="script">
  <?php if (is_home() || is_front_page()) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/top.css" rel="preload" as="style">
  <?php endif; ?>
  <!-- /Preload -->
  <!-- preconnect -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link rel="shortcut icon" href="<?php echo AST_IMG ?>global/
   favicon.ico/"> -->
  <!-- preconnect -->
  <!-- viewport & viewport-extra -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?php echo $astUrl; ?>assets/js/libs/viewport-extra.min.js" async></script>
  <!-- /viewport & viewport-extra -->
  <!-- jquery -->
  <script src="<?php echo $astUrl; ?>assets/js/libs/jquery-3.4.1.min.js" defer></script>
  <!-- /jquery -->
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <!-- /gsap -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <!-- SEO -->
  <!-- /SEO -->
  <!-- Font -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.3.1/dist/css/yakuhanjp.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?JkR7Y~zfclI%3D&onload=false" charset="utf-8" defer></script>
  <!-- / Font -->

  <!-- stylesheet -->
  <?php if (is_home() || is_front_page()) : ?>
    <link href="<?php echo $astUrl; ?>assets/css/top.css<?php acd(); ?>" rel="stylesheet">
  <?php elseif (is_page("philosophy")) : ?>
    <link href="<?php echo AST_CSS; ?>philosophy.css<?php acd() ?>" rel="stylesheet">
  <?php endif; ?>
  <!-- <link href="<?php echo AST_CSS; ?>page-philosophy.css<?php acd() ?>" rel="stylesheet"> -->
  <!-- /stylesheet -->

  <!-- script -->
  <script src="<?php echo $astUrl; ?>assets/js/libs/modernizr-custom.js" defer></script>
  <!-- swiper -->
  <script src="<?php echo $astUrl; ?>assets/js/libs/swiper/swiper-bundle.min.js" defer></script>
  <!-- /swiper -->
  <!-- simplebar -->
  <script src="<?php echo $astUrl; ?>assets/js/libs/simplebar.js" defer></script>
  <!-- /simplebar -->
  <script src="<?php echo $astUrl; ?>assets/js/util.js<?php acd(); ?>" defer></script>
  <script src="<?php echo $astUrl; ?>assets/js/global.js<?php acd(); ?>" defer></script>
  <script src="<?php echo $astUrl; ?>assets/js/gsap.js<?php acd(); ?>" defer></script>
  <?php if (is_home() || is_front_page()) : ?>
    <script src="<?php echo $astUrl; ?>assets/js/top.js<?php acd(); ?>" defer></script>
  <?php elseif (is_page_template("page-create.php")) : ?>
    <script src="<?php echo AST_JS; ?>page-create.js<?php acd() ?>" defer></script>
  <?php elseif (is_page("estate")) : ?>
    <script src="<?php echo AST_JS; ?>estate.js<?php acd() ?>" defer></script>
  <?php elseif (is_page("golf")) : ?>
    <script src="<?php echo AST_JS; ?>golf.js<?php acd() ?>" defer></script>
  <?php elseif (is_page("news")) : ?>
    <script src="<?php echo AST_JS; ?>news.js<?php acd() ?>" defer></script>
  <?php elseif (is_archive("archive")) : ?>
    <script src="<?php echo AST_JS; ?>news.js<?php acd() ?>" defer></script>
  <?php elseif (is_date("date")) : ?>
    <script src="<?php echo AST_JS; ?>news.js<?php acd() ?>" defer></script>
  <?php elseif (is_page("contact")) : ?>
    <script src="<?php echo AST_JS; ?>contact.js<?php acd() ?>" defer></script>
  <?php endif; ?>
  <!-- /script -->
  <?php wp_head(); ?>
</head>

<body>