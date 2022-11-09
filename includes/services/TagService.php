<?php

class TagService {

	public function renderTags($taxonomy) {
		$terms = get_terms( array(
			'taxonomy' => $taxonomy,
			'hide_empty' => false,
		));

		$render = "<li class=\"js-tag-trigger\" data-taxonomy=\"$taxonomy\" data-term=\"all\"><a class=\"active\" href=\"?\">すべて</a></li>";

		foreach ($terms as $term) {
			$render .= $this->renderTag($term, $taxonomy, false);
		}

		return $render;
	}

	public function renderTagsActiveParam($taxonomy, $activeTerm) {
		$terms = get_terms( array(
			'taxonomy' => $taxonomy,
			'hide_empty' => false,
		));

		$render = "<li class=\"js-tag-trigger\" data-taxonomy=\"$taxonomy\" data-term=\"all\"><a href=\"?\">すべて</a></li>";

		foreach ($terms as $term) {
			$render .= $this->renderTag($term, $taxonomy, $activeTerm == $term->term_id);
		}

		return $render;
	}

	private function renderTag($term, $taxonomy, $isActive) {
		if ($isActive) {
			return "<li class=\"js-tag-trigger\" data-taxonomy=\"$taxonomy\" data-term=\"$term->term_id\"><a class=\"active\" href=\"?taxonomy=$taxonomy&term=$term->term_id\">$term->name</a></li>";
		} else {
			return "<li class=\"js-tag-trigger\" data-taxonomy=\"$taxonomy\" data-term=\"$term->term_id\"><a href=\"?taxonomy=$taxonomy&term=$term->term_id\">$term->name</a></li>";
		}
	}

	public function itemTags($tags) {
		$render = "";

		if (!is_array($tags)) {
			return $render;
		}

		foreach ($tags as $tag) {
			$render .= "<span class=\"badge__item badge__blue\">$tag->name</span>";
		}

		return $render;
	}

	public function getTagTaxonomyByPostType($post_type) {
		switch ($post_type) {
			case 'work':
				return 'work_tag';
			case 'news':
				return 'news_tag';
			case 'blog':
				return 'blog_tag';
			default:
				return '';
		}
	}

	public function getPostTypeByTagTaxonomy($taxonomy) {
		switch ($taxonomy) {
			case 'work_tag':
				return 'work';
			case 'news_tag':
				return 'news';
			case 'blog_tag':
				return 'blog';
			default:
				return '';
		}
	}
}