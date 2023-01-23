<?php

class Business extends AbstractLayout
{
  public function render()
  {
    $title = get_the_title($this->post->ID);
    $content = $this->post->post_content;
    $src = ImageUtils::getThumbnailUrl($this->post->ID);

    $link = get_field("business_link", $this->post->ID);
    $img_link = get_field("business_image", $this->post->ID);

    $buttonHtml = $this->generateViewAllButtonHtml($link);
    $bottomImageHtml = $this->generateBottomImageHtml($img_link);

    return "
    <article class=\"restaurant\">

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

        {$buttonHtml}

      </div>

      {$bottomImageHtml}

    </article>

    ";
  }


  public function generateViewAllButtonHtml($link)
  {

    $html = "";
    $viewAllTextHtml = "";

    if ($link) {
      $viewAllTextHtml .= "
        <p class=\" viewAllButton__text\">詳しくはこちら</p>
      ";

      $html = "
        <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{$link}\" class=\"restaurant__button viewAllButton\">
          <div class=\"viewAllButton__inner\">
            {$viewAllTextHtml}
            <div class=\"viewAllButton__arrow\"></div>
          </div>
        </a>
      ";
    }

    return $html;
  }


  public function generateBottomImageHtml($img_link)
  {

    $html = "";

    if ($img_link) {

      $html = "   
        <div class=\"restaurant__BottomImgWrapper\">
          <img src=\"{$img_link}\" alt=\"\" class=\"restaurant__img\">
        </div>
      ";
    }

    return $html;
  }
}