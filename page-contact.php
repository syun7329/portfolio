<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<main class="main">

  <section class="container">

    <h2 class="contact__title">お問い合わせ</h2>

    []


    <?php echo do_shortcode('[contact-form-7 id="28" title="コンタクトフォーム 1" html_class="contactForm contactForm--layout"]'); ?>

    <p class="contactForm__successMsg js-successMsg">
      <svg xmlns="http://www.w3.org/2000/svg" width="15.247" height="11.328" viewBox="0 0 15.247 11.328">
        <g id="グループ_3140" data-name="グループ 3140" transform="translate(-528.09 -1126.086)">
          <line id="線_50" data-name="線 50" x2="3.923" y2="4.577" transform="translate(529.5 1131.423)" fill="none" stroke="#449847" stroke-linecap="round" stroke-width="2" />
          <line id="線_51" data-name="線 51" x1="8.5" y2="8.5" transform="translate(533.423 1127.5)" fill="none" stroke="#449847" stroke-linecap="round" stroke-width="2" />
        </g>
      </svg>
      内容が正常に送信されました。
    </p>

  </section>

</main>

<?php get_footer(); ?>