<?php

class LayoutFactory
{

  public static function create($layout_type, $post)
  {
    switch ($layout_type) {

      case LayoutTypeConst::BUSINESS:
        return new Business($post);
        break;

      case LayoutTypeConst::COLUMN_ARCHIVE:

        return new ColumnArchive($post);
        break;

      case LayoutTypeConst::ADOPTION:

        return new Adoption($post);
        break;

      default:
        return false;
        break;
    }
  }

  public static function createList($layout_type, $posts)
  {

    switch ($layout_type) {

      case LayoutTypeConst::COLUMN_FRONTPAGE:
        return new ColumnFrontPage($posts);
        break;

      default:
        return false;
        break;
    }
  }
}