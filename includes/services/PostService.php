<?php

class PostService
{

  public function renderPosts($post_type, $posts_per_page)
  {
    $arg = array(
      'post_type' => $post_type,
      'posts_per_page' => $posts_per_page,
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
    );

    $query = new WP_Query($arg);

    $render = "";

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $render .= $this->getPost($query->post);
      }
    }

    return $render;
  }


  /**
   * singleページ用に記事一覧を取得する
   *
   * @param [type] $posts_per_page
   * @param [type] $postId
   * @return void
   */
  public function renderRelatedPosts($posts_per_page, $postId)
  {
    $arg = array(
      'posts_per_page' => $posts_per_page,
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'post__not_in' => [$postId]
    );

    $query = new WP_Query($arg);

    $render = "";

    // if ($query->have_posts() ) {
    // 	while ($query->have_posts()) {
    // 		// $query->the_post();
    // 		$p = new Post($query->post, -1, true);
    // 		$render .= $p->render();
    // 	}
    // }

    foreach ($query->posts as $_posts) {
      $p = new Post($_posts, -1, true);
      $render .= $p->render();
    }

    $pagination = new Pagination($query);

    return array(
      "query" => $query,
      "render" => $render,
      "pagination" => $pagination->render()
    );
  }


  public function renderPostsForFrontPage($posts_per_page)
  {

    $arg = array(
      'posts_per_page' => $posts_per_page,
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
    );

    $query = new WP_Query($arg);

    $renderPc = $this->renderPostsForFrontPagePc($query);
    $renderSp = $this->createPostsHtmlForFrontPageSP($query->posts);

    $pagination = new Pagination($query);


    return array(
      "query" => $query,
      "render" => $renderPc,
      "renderSP" => $renderSp,
      "pagination" => $pagination->render()
    );
  }

  public function renderPostsForFrontPagePc($query)
  {

    $render  =  "";

    if ($query->have_posts()) {

      // postsを5個ずつに分割
      $chunkedPosts = array_chunk($query->posts, 5);
      $slideStart            =  "<div class=\"blogSlider__slide swiper-slide\">";
      $contentsStart         =  "<div class=\"blogSlider__contents\">";
      $smallContainerStart   =  "<div class=\"blogSlider__container blogSlider__container--smallPosts\">";
      $closeDivTag           =  "</div>";

      foreach ($chunkedPosts as $_posts) {

        $render .= $slideStart;
        $render .= $contentsStart;

        $post1 = array_key_exists(0, $_posts) ? $_posts[0] : null;
        $post2 = array_key_exists(1, $_posts) ? $_posts[1] : null;
        $post3 = array_key_exists(2, $_posts) ? $_posts[2] : null;
        $post4 = array_key_exists(3, $_posts) ? $_posts[3] : null;
        $post5 = array_key_exists(4, $_posts) ? $_posts[4] : null;


        // 大きい投稿
        if ($post1 != null) {
          $post = new Post($post1, -1, false);
          $render .= $post->getBigItemHtml();
        }


        // 小さい投稿開始
        $render .= $smallContainerStart;

        if ($post2 != null) {
          $post = new Post($post2, -1, false);
          $render .= $post->getSmallItemHtml();
        }

        if ($post3 != null) {
          $post = new Post($post3, -1, false);
          $render .= $post->getSmallItemHtml();
        }

        if ($post4 != null) {
          $post = new Post($post4, -1, false);
          $render .= $post->getSmallItemHtml();
        }

        if ($post5 != null) {
          $post = new Post($post5, -1, false);
          $render .= $post->getSmallItemHtml();
        }


        // 小さい投稿終了
        $render .= $closeDivTag;

        // contentsの閉じタグ
        $render .= $closeDivTag;

        // slideの閉じタグ
        $render .= $closeDivTag;
      }
    }

    return $render;
  }

  private function getPost($post)
  {

    $post_type = get_post_type($post);

    if ($post_type == "post") {
      $p = new Post($post, 1, false);
      return $p->render();
    } else if ($post_type == "map") {
      $map = new Map($post);
      return $map->render();
    } else if ($post_type == "media_link") {
      $mediaLink = new MediaLink($post);
      return $mediaLink->render();
    }

    return "";
  }

  public function renderPostsByTag($posts_per_page, $taxonomy, $terms)
  {
    $args = array(
      'posts_per_page' => $posts_per_page,
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
          'taxonomy' => $taxonomy,
          'field' => 'term_id',
          'terms' => $terms
        )
      )
    );

    if ($terms == 'all') {
      $tagService = new TagService();
      $postType = $tagService->getPostTypeByTagTaxonomy($taxonomy);
      $args = array(
        'post_type' => $postType,
        'posts_per_page' => $posts_per_page,
        'post_status'    => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
      );
    }

    $query = new WP_Query($args);

    $render = "";

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $render .= $this->getPost($query->post);
      }
    }

    return $render;
  }


  public function getRelatedPosts($post_type, $postId)
  {
    $arg = array(
      'post_type' => $post_type,
      'posts_per_page' => 10, // 表示する件数
      'orderby' => 'date', // 日付でソート
      'order' => 'DESC',
      'post_status'    => 'publish',
      'post__not_in' => array($postId)
    );
    $query = new WP_Query($arg);

    $render = "";

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $render .= $this->getPost($query->post);
      }
    }

    return $render;
  }



  /**
   * ページ番号ごとに記事一覧を取得する
   *
   * @param [type] $paged
   * @return void
   */
  public function getPostArchives($paged, $post_type)
  {
    $arg = array(
      'posts_per_page' => get_option('posts_per_page'),
      'post_type' => $post_type,
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged,
    );

    $query = new WP_Query($arg);

    $render = "";

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $p = new Archive($query->post);
        $render .= $p->render();
      }
    }

    $pagination = new Pagination($query);
    return array(
      "query" => $query,
      "render" => $render,
      "pagination" => $pagination->render()
    );
  }



  /**
   * カテゴリ別の記事一覧を取得する
   *
   * @param [type] $paged
   * @param [type] $cat_id
   * @return void
   */
  public function getPostsByCategory($paged, $cat_id)
  {
    $arg = array(
      'posts_per_page' => get_option('posts_per_page'),
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged,
      'cat' => $cat_id,
    );

    $query = new WP_Query($arg);

    $render = "";

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $p = new Archive($query->post);
        $render .= $p->render();
      }
    }

    $pagination = new Pagination($query);
    return array(
      "query" => $query,
      "render" => $render,
      "pagination" => $pagination->render()
    );
  }

  private function createPostsHtmlForFrontPageSP($posts)
  {

    $chunkedPosts = array_chunk($posts, 2);

    $html = "";

    foreach ($chunkedPosts as $_posts) {

      $post1 = array_key_exists(0, $_posts) ? $_posts[0] : null;
      $post2 = array_key_exists(1, $_posts) ? $_posts[1] : null;

      $html .= "<div class=\"blogList__column swiper-slide\">";

      if ($post1 != null) {
        $p = new Post($post1, -1, false);
        $html .= $p->getSmallItemHtml();
      }

      if ($post2 != null) {
        $p = new Post($post2, -1, false);
        $html .= $p->getSmallItemHtml();
      }

      $html .= "</div>";
    }

    return $html;
  }



  public function renderMedia(string $post_type, int $posts_per_page)
  {

    $arg = array(
      'post_type'      =>  $post_type,
      'posts_per_page' =>  $posts_per_page,
      'post_status'    =>  'publish',
      'orderby'        =>  'date',
      'order'          =>  'DESC',
    );

    $query = new WP_Query($arg);

    $pc = $this->renderMediaForPc($query);
    $sp = $this->renderMediaForSp($query);


    return [

      "pc" => $pc,
      "sp" => $sp,

    ];
  }


  /**
   * 
   * メディアのPCレイアウト
   * 
   */
  public function renderMediaForPc($query)
  {

    $render = "";

    if ($query->have_posts()) {

      $chunked_posts   =  array_chunk($query->posts, 4);
      $sliderStart     =  "<div class=\"mediaSlider__slide swiper-slide underTabNone\">";
      $rowStart        =  "<div class=\"media__row \">";
      $closeDivTag     =  "</div>";

      foreach ($chunked_posts as $_posts) {

        $post1 = array_key_exists(0, $_posts) ? $_posts[0] : null;
        $post2 = array_key_exists(1, $_posts) ? $_posts[1] : null;
        $post3 = array_key_exists(2, $_posts) ? $_posts[2] : null;
        $post4 = array_key_exists(3, $_posts) ? $_posts[3] : null;

        $render .= $sliderStart;

        // １行目 開始
        $render .= $rowStart;

        if ($post1 != null) {
          $media = new Media($post1);
          $render .= $media->renderLargeMedia();
        }

        if ($post2 != null) {
          $media = new Media($post2);
          $render .= $media->renderSmallMedia() . $closeDivTag;
        } else {
          $render .= $closeDivTag;
        }
        // １行目 終了


        // ２行目 開始
        $render .= $rowStart;

        if ($post3 != null) {
          $media = new Media($post3);
          $render .= $media->renderSmallMedia();
        }

        if ($post4 != null) {
          $media = new Media($post4);
          $render .= $media->renderLargeMedia() . $closeDivTag;
        } else {
          $render .= $closeDivTag;
        }
        // ２行目 終了

        // mediaSlider__slideの閉じタグ
        $render .= $closeDivTag;
      }
    }

    return $render;
  }




  /**
   * 
   * メディアのSPレイアウト
   * 
   */
  public function renderMediaForSp($query)
  {

    $render = "";

    if ($query->have_posts()) {

      $chancked_posts = array_chunk($query->posts, 2);

      $sliderStart   =  "<div class=\"mediaSlider__slide swiper-slide underTabVisible\">";
      $rowStart      =  "<div class=\"media__row media__row--sp underTabVisible\">";
      $closeDivTag   =  "</div>";

      foreach ($chancked_posts as $posts) {

        $render .= $sliderStart;
        $render .= $rowStart;

        foreach ($posts as $post) {

          $media = new Media($post);
          $render .= $media->renderSpMedia();
        }

        $render .= $closeDivTag;
        $render .= $closeDivTag;
      }
    }

    return $render;
  }

  public function renderMap()
  {
    $arg = array(
      'post_type' => 'map',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
    );

    $query = new WP_Query($arg);

    $render = "";

    // $dividePosts = MapUtils::dividePostsByPrefecture($query);

    // if ($query->have_posts() ) {
    // 	while ($query->have_posts()) {
    // 		$query->the_post();
    // 		$render .= $this->getPost($query->post);
    // 	}
    // }

    // return MapUtils::dividePostsByPrefecture($query);

    return $this->createMapBlockList($query);
  }

  private function createMapBlockList($query)
  {
    $prefectures = PrefectureConst::getConstants();

    $list = [];

    foreach ($prefectures as $label => $value) {
      $posts = array_filter($query->posts, function ($post) use ($value) {
        return get_field('prefecture', $post->ID) == $value;
      });

      if (count($posts) > 0) {
        $mapBlockBean = new MapBlockBean($label, $value, $posts);
        $list[] = $mapBlockBean;
      }
    }

    return $list;
  }
}