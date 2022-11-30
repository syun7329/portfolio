<?php

class Post extends AbstractLayout {
	public function render() {

		$title = get_the_title($this->post->ID);
		$src = ImageUtils::getThumbnailUrl($this->post->ID);
		$date = get_the_date("Y.m.d", $this->post);
		$link = get_permalink($this->post->ID);

		return "
			<li class=\"blogItem\">
				<a href=\"${link}\" class=\"blogItem__link\">
					<p class=\"blogItem__tag\">PRESS RELEASE</p>
					<p class=\"blogItem__title\">${title}</p>
					<time class=\"blogItem__time\">${date}</time>
					<div class=\"blogItem__imgWrap\">
						<img src=\"${src}\" alt=\"\">
					</div>
				</a>
			</li>
		";
	}
}