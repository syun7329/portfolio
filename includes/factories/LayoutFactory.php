<?php

class LayoutFactory
{

  public static function create($type, $post)
  {
    if ($type == LayoutTypeConst::INTERVIEW_CARD) {
      return new Interview($post);
    } else if ($type == LayoutTypeConst::POST) {
      return new Post($post);
    }
  }
}