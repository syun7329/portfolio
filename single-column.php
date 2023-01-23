<?php get_header(); ?>

<main class="main">

  <article class="single">

    <section class="single__header singleHeader">

      <div class="singleHeader__inner">

        <p class="singleHeader__date">
          <?php echo get_post_time('Y.m.d') ?>
        </p>

        <h1 class="singleHeader__title">
          <?php echo get_the_title() ?>
        </h1>

        <div class="singleHeader__line"></div>

        <h2 class="singleHeader__excerpt">
          <?php echo get_the_excerpt() ?>
        </h2>

      </div>

    </section>

    <section class="single__main">

      <!--
      <div class="single__thumbnailWrapper">
        <img class="single__thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
      </div>
      -->

      <div class="single__content blogBody">
        <?php echo the_content(); ?>
      </div>

    </section>

  </article>

</main>

<?php get_footer(); ?>