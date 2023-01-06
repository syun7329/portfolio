<?php
/*
Template Name: adoption
*/
?>

<?php

$postService = new PostService();
$post = $postService->getPostsByPostType(LayoutTypeConst::ADOPTION, PostTypeConst::ADOPTION, -1);

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner main__inner--pb0">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title js-textAnimation">
          Adoption
        </h1>
        <h2 class="pageHeader__subTitle js-textAnimation">
          採用情報
        </h2>
      </div>
    </div>

    <div class="adoption">
      <div class="adoption__explain">
        <p class="adoption__title">
        有限会社GCは、<br>
        共に働く仲間を募集しています。
        </p>
        <div class="adoption__text">
          <p>
          弊社はとてもフレンドリーな会社で、社長自ら冗談を言ったり、飲食店のスタッフと事務所でサポートしている事務員も仲がよく、和気あいあいとした雰囲気の会社です。
          やるときはやる。でもずっとオンモードじゃなくていい。
          しっかり楽しんで仕事をすれば成果も自ずとついてくる。そんな考えの会社です。
          全国に飲食店を構えているので、全国のスタッフと交流があります。
          社員だけでなく、店舗で頑張ってくれるアルバイトにもしっかり還元。
          みんなで「楽しい仕事を生み出す」。そんな急成長している会社です！
          </p>
        </div>
        <div class="adoption__treat">
          <div class="adoption__treatitem">
            <h2>待遇</h2>
          </div>
          <div class="adoption__treatitem">
            <div class="adoption__treatcontent">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/adoption-treat1.svg" alt="">
              <div class="adoption__treatcontent-text">
                <h3>交通費全額支給</h3>
                <p>月に限度は決めておらず、実際に通勤にかかった費用はすべて会社が負担します。</p>
              </div>
            </div>
            <div class="adoption__treatcontent">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/adoption-treat2.svg" alt="">
              <div class="adoption__treatcontent-text">
                <h3>休暇</h3>
                <p>シフト制で長期休暇の取得もOK！ご家族がいる方もしっかりと家族サービスが出来ます。</p>
              </div>
            </div>
            <div class="adoption__treatcontent">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/adoption-treat3.svg" alt="">
              <div class="adoption__treatcontent-text">
                <h3>随時昇給あり</h3>
                <p>頑張って成果が出れば時期関係なく昇給の可能性あり！</p>
              </div>
            </div>
          </div>
        </div>
        <p class="adoption__guid">
          現在募集している職種は以下のとおりです。
        </p>
      </div>

      <?php echo $post['html'] ?>

    </div>

  </div>

</main>

<?php get_footer(); ?>