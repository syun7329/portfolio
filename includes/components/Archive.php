<?php

class Archive
{
  private $post;

  function __construct($post)
  {
    $this->post = $post;
  }

  public function render()
  {

    $title = get_the_title($this->post->ID);
    $excerpt = get_the_excerpt($this->post->ID);
    $link = get_permalink($this->post->ID);

    $prefix = "

    <article class=\"archiveItem\">

			<a href=\"$link\" class=\"archiveItem__link\">

			<h3 class=\"archiveItem__title\">
        $title
      </h3>

      <p class=\"archiveItem__detail\">
        $excerpt
      </p>

      </div>

    </article>

		";

    // $suffix = "
    // 		</div>

    // 		<p class=\"archiveItem__title\">$title</p>
    // 	</a>
    // ";

    // <p class=\"archiveItem__category\">お知らせ</p>

    return $prefix;
  }
}