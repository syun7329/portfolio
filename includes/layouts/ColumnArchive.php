<?php

class ColumnArchive extends AbstractLayout
{
  public function render()
  {

    $title = get_the_title($this->post->ID);
    $link = get_permalink($this->post->ID);
    $excerpt = get_the_excerpt($this->post->ID);

    return
      "
        <article class=\"columnList__item columnItem columnItem--hover columnItem--archive js-borderAnimation\">

          <a href=\"$link\" class=\"columnItem__link\">

            <h3 class=\"columnItem__title\">
              $title
            </h3>

            <p class=\"columnItem__excerpt\">
              $excerpt
            </p>
            
          </a>

        </article>
      ";
  }
}