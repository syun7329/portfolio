<?php

class PostService {

	public function renderPosts($post_type, $posts_per_page) {
		$arg = array(
			'post_type' => $post_type,
			'posts_per_page' => $posts_per_page,
			'post_status'    => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
		);
		$query = new WP_Query( $arg );

		$render = "";

		if ($query->have_posts() ) {
			while ($query->have_posts()) {
				$query->the_post();
				$render .= $this->getPost($query->post);
			}
		}

		return $render;
	}

	public function renderPostsByTag($posts_per_page, $taxonomy, $terms) {
		$args = array(
			'posts_per_page' => $posts_per_page,
			'post_status'    => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'term_id',
					'terms' => $terms
				)
			)
		);

		if ($terms == 'all') {
			$tagService = new TagService();
			$postType = $tagService->getPostTypeByTagTaxonomy($taxonomy);
			$args = array(
				'post_type' => $postType,
				'posts_per_page' => $posts_per_page,
				'post_status'    => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
			);
		}

		$query = new WP_Query( $args );

		$render = "";

		if ($query->have_posts() ) {
			while ($query->have_posts()) {
				$query->the_post();
				$render .= $this->getPost($query->post);
			}
		}

		return $render;
	}

	private function getPost($post) {
		$post_type = get_post_type($post);
		if ($post_type == "news") {
			$news = new News($post);
			return $news->render();
		} else if ($post_type == "blog") {
			$blog = new Blog($post);
			return $blog->render();
		}

		return "";
	}

	public function getRelatedPosts($post_type, $postId) {
		$arg = array(
			'post_type' => $post_type,
			'posts_per_page' => 10, // 表示する件数
			'orderby' => 'date', // 日付でソート
			'order' => 'DESC',
			'post_status'    => 'publish',
			'post__not_in'=> array($postId)
		);
		$query = new WP_Query( $arg );

		$render = "";

		if ($query->have_posts() ) {
			while ($query->have_posts()) {
				$query->the_post();
				$render .= $this->getPost($query->post);
			}
		}

		return $render;
	}
}