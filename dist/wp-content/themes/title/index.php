<?php
global $siteUrl;
global $astUrl;
?>
<?php

/**
 * TOPページ
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

<div class="l-container">

  <div class="p-top">

    <?php
    get_file('headmenu');
    ?>

    <main id="main" class="l-main l-main-top">

      <div class="l-mv l-mv-top swiper swiper-container">
        <div class="l-mv-top__inner swiper-wrapper">
       <p class="">こんにちは</p>
        </div>
      </div>
  </div>


  <div class="l-main__spacer">
    <section class="l-section">
      <div class="l-section__inner">

      </div>
    </section>

    <?php
    get_file('footcontact');
    ?>
  </div>
  </section>


</div>

</main>

<?php
get_file('footmenu');
?>

</div>

</div>

<?php get_footer(); ?>