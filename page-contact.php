<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<main class="main main--black">

  <div class="main__inner">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Contact
        </h1>
        <h2 class="pageHeader__subTitle">
          お問い合わせ
        </h2>
      </div>
    </div>

    <section class="contact">

      <?php echo do_shortcode('[contact-form-7 id="28" title="コンタクトフォーム 1"]') ?>

    </section>

  </div>

</main>

<?php get_footer(); ?>