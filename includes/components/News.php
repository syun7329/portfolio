<?php

class News {

	private $post;

	function __construct($post) {
        $this->post = $post;
    }

	public function render() {
		$title = get_the_title($this->post->ID);
		$link = get_permalink($this->post->ID);
		$src = has_post_thumbnail($this->post->ID) ? get_the_post_thumbnail_url($this->post->ID, 'medium') : get_template_directory_uri() . "/assets/images/blog/no_img.jpg";
		$date = get_the_date("Y/m/d", $this->post);
		$excerpt = wp_trim_words ( strip_shortcodes( $this->post->post_content ), 120 );

		$tags = get_the_terms($this->post->ID, 'news_tag');

		$tagService = new TagService();
		$tags = $tagService->itemTags($tags);

		return "
			<a href=\"$link\" class=\"card\">
				<div class=\"card__thumbnail\">
					<img src=\"$src\" alt=\"\">
					<div class=\"card__thumbnail__blur\"></div>
				</div>

				<div class=\"card__contents\">
					<div class=\"card__contents__property\">
					<p class=\"card__contents__property__date\">$date</p>
						<p class=\"card__contents__property__tag\">$tags</p>
					</div>
					<p class=\"card__contents__title\">$title</p>
					<div class=\"card__contents__text\"><p>$excerpt</p></div>
				</div>
			</a>
		";
	}

}