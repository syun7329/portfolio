<?php

class TaxonomyService
{

  /**
   * カテゴリやタグを取得する
   *
   * @param string $term （例：post_tag）
   * @return array terms 
   */
  public function getTerms($term)
  {
    return get_terms($term);
  }
}