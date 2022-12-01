<?php

class Business extends AbstractLayout
{
  public function render()
  {

    $title = get_the_title($this->post->ID);
    $content = $this->post->post_content;
    $src = ImageUtils::getThumbnailUrl($this->post->ID);
    $date = get_the_date("Y.m.d", $this->post);
    $link = get_permalink($this->post->ID);


    return "
    <div class=\"restaurant\">

      <div class=\"restaurant__inner\">

        <div class=\"restaurant__main\">

          <div class=\"restaurant__text\">

            <h2 class=\"restaurant__name\">
              {$title}
            </h2>

            <p class=\"restaurant__detail\">
              {$content}
            </p>

          </div>

          <div class=\"restaurant__logoWrapper\">
            <img src=\"{$src}\" alt=\"\" class=\"restaurant__logo\">
          </div>

        </div>

      </div>

      <div class=\"restaurant__imgWrapper\">
        <img src=\"\" alt=\"\" class=\"restaurant__img\">
      </div>

    </div>
    ";
  }
}
