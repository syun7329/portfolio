<?php

abstract class AbstractLayout
{

  protected $post;

  public function __construct($post)
  {
    $this->post = $post;
  }

  abstract public function render();
}
