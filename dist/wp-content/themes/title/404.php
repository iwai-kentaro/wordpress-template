<?php
global $siteUrl;
global $astUrl;
?>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */
?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-ir p-ir-disclaimer">

    <?php
    get_file('headmenu');
    ?>

    <main id="main" class="l-main l-main-ir">

      <div class="l-mv l-mv-under">
        <div class="l-mv__img">
          <picture class="l-mv__imgBk l-mv__imgBk-gray">
          <source srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVQI12NgYAAAAAMAASDVlMcAAAAASUVORK5CYII=" media="(max-width: 767px)">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVQI12NgYAAAAAMAASDVlMcAAAAASUVORK5CYII=" alt="">
          </picture>
          <h2 class="l-mv__imgTit l-mv__imgTit-black">404エラー</h2>
        </div>
        <div class="l-mv__nav">
          <?php get_file("mv__nav-ir"); ?>
        </div>
      </div>

      <div class="l-pankuzu">
        <ol class="l-pankuzu__list">
          <li><a href="<?php echo $siteUrl; ?>">HOME</a></li>
          <li>></li>
          <li>404エラー</li>
        </ol>
      </div>

      <div class="l-main__spacer">

        <section class="l-section p-ir-disclaimer-main">
          <div class="l-section__inner">
            <h3 class="m-tit">
              <span class="m-tit__ja">お探しのページは見つかりませんでした</span>
            </h3>
            <div class="p-ir-disclaimer-main__body">
              <p class="p-ir-disclaimer-main__bodyTxt">お探しいただいたページは一時的にアクセスできない状況にあるか、移動または削除された可能性があります。<br> お手数をおかけしますが、下記よりもう一度お探しください。</p>
            </div>
          </div>
        </section>

      </div>

    </main>

    <?php
    get_file('footcontact');
    get_file('footmenu');
    ?>

  </div>

</div>

<?php get_footer(); ?>