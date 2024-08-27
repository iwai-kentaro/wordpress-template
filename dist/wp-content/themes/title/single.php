<?php
global $siteUrl;
global $astUrl;
?>
<?php

/**
 * ニュース詳細
 *
 * @package WordPress
 */

?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-news">

    <?php
    get_file('headmenuUnder');
    ?>

    <main id="main" class="l-main l-main-news">

      <div class="l-main__spacer">

        <section class="l-section p-news-single">

          <div class="l-section__inner l-section__inner-newsSingle">


          </div>

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