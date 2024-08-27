<?php
global $siteUrl;
global $astUrl;
?>
<?php
/*
Template Name:ニュース一覧　年別 / archive.php
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

        <section class="l-section p-news-archive">

          <div class="l-section__inner l-section__inner-news">

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