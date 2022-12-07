<?php

class Pagination
{
  private $query;

  function __construct($query)
  {
    $this->query = $query;
  }

  public function render()
  {

    $nextImagePath = get_template_directory_uri() . "/dist/assets/images/next.svg";
    $prevImagePath = get_template_directory_uri() . "/dist/assets/images/prev.svg";

    return paginate_links(array(
      'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
      'show_all' => true,
      'type' => 'list',
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $this->query->max_num_pages,
      'prev_next' => true,
      'prev_text' => "<img src=\"$prevImagePath\" class=\"\" >",
      'next_text' => "<img src=\"$nextImagePath\" class=\"\" >",
    ));
  }
}