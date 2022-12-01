<?php

class LayoutFactory
{

  public static function create($layout_type, $post)
  {

    switch ($layout_type) {
      case LayoutTypeConst::BUSINESS:
        return new Business($post);
        break;

      case LayoutTypeConst::COLUMN:
        return new Column($post);
        break;

      default:
        return false;
        break;
    }
  }
}