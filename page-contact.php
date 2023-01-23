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
        <h1 class="pageHeader__title js-textAnimation">
          Contact
        </h1>
        <h2 class="pageHeader__subTitle js-textAnimation">
          お問い合わせ
        </h2>
      </div>
    </div>

    <section class="contact">

      <div class="contact__container">
        <div class="contact__item">
          <h2>お問い合わせ</h2>
          <p>お仕事のご依頼やご相談はこちらからお送りください。<br>後ほど弊社担当者よりご連絡させていただきます。</p>
        </div>
        <div class="contact__item">
          <?php echo do_shortcode('[contact-form-7 id="28" title="コンタクトフォーム 1"]') ?>
        </div>
      </div>
      

    </section>

  </div>

</main>

<?php get_footer(); ?>