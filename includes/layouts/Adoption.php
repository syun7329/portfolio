<?php

class Adoption extends AbstractLayout
{
  public function render()
  {
    $title = get_the_title($this->post->ID);
    $summary = get_field("summary", $this->post->ID);
    $link = get_field("adoption_link", $this->post->ID);
    $src = ImageUtils::getThumbnailUrl($this->post->ID);

    $buttonHtml = $this->generateViewAllButtonHtml($link);

    return "
      <div class=\"adoptionCard adoption__card\">

        <div class=\"adoptionCard__inner\">

        <div class=\"adoptionCard__imgWrapper\">
          <img src=\"{$src}\" alt=\"\" class=\"adoptionCard__img\">
        </div>

        <h3 class=\"adoptionCard__title\">
          {$title}
        </h3>

        <p class=\"adoptionCard__detail\">
          {$summary}
        </p>

        {$buttonHtml}

        </div>

      </div>

    ";
  }


  public function generateViewAllButtonHtml($link)
  {
    $html = "";
    $viewAllTextHtml = "";

    if ($link) {
      for ($i = 0; $i < 100; $i++) {
        $viewAllTextHtml .= "
          <p class=\" viewAllButton__text\">
            VIEW MORE
          </p>
        ";
      }

      $html = "
        <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{$link}\" class=\"restaurant__button viewAllButton\">
          <div class=\"viewAllButton__inner\">
            {$viewAllTextHtml}
          </div>
        </a>
      ";
    }

    return $html;
  }
}