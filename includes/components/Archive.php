<?php

class Archive {
	private $post;

	function __construct($post) {
		$this->post = $post;
	}

	public function render() {

		$title = get_the_title($this->post->ID);
		$link = get_permalink($this->post->ID);
		$thumbnail = get_the_post_thumbnail_url($this->post->ID);
		$date = get_post_time('Y.m.d', false, $this->post->ID);

		$prefix = "
			<a href=\"$link\" class=\"archiveItem\">
				<div class=\"archiveItem__imgWrap\">
					<img src=\"$thumbnail\" alt=\"\">
				</div>

				<div class=\"archiveItem__infos\">
					<p class=\"archiveItem__date\">$date</p>
		";

		$suffix = "
				</div>

				<p class=\"archiveItem__title\">$title</p>
			</a>
		";

		// <p class=\"archiveItem__category\">お知らせ</p>

		return $prefix . $suffix;
	}
}