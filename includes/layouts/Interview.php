<?php

class Interview extends AbstractLayout {
	public function render() {

		$title = get_the_title($this->post->ID);
		$excerpt = wp_trim_words ( strip_shortcodes( $this->post->post_content ), 120 );
		$src = ImageUtils::getThumbnailUrl($this->post->ID);
		$link = get_permalink($this->post->ID);

		return "
			<li class=\"interviewItem\">
				<a href=\"${link}\" class=\"interviewItem__link\">
					<div class=\"interviewItem__imgWrap\">
						<img src=\"${src}\" alt=\"${title}のサムネイル画像\" class=\"\">
					</div>
					<div class=\"interviewItem__info\">
						<p class=\"interviewItem__title\">${title}</p>
						<svg id=\"グループ_175\" data-name=\"グループ 175\" xmlns=\"http://www.w3.org/2000/svg\" width=\"36\" height=\"36\" viewBox=\"0 0 36 36\">
							<g id=\"楕円形_2\" data-name=\"楕円形 2\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\">
								<circle cx=\"18\" cy=\"18\" r=\"18\" stroke=\"none\"/>
								<circle cx=\"18\" cy=\"18\" r=\"17.5\" fill=\"none\"/>
							</g>
							<g id=\"グループ_100\" data-name=\"グループ 100\" transform=\"translate(14 14)\">
								<line id=\"線_9\" data-name=\"線 9\" x2=\"9\" transform=\"translate(0 4)\" fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-width=\"1\"/>
								<line id=\"線_10\" data-name=\"線 10\" x2=\"3\" y2=\"4\" transform=\"translate(6)\" fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-width=\"1\"/>
								<line id=\"線_11\" data-name=\"線 11\" y1=\"4\" x2=\"3\" transform=\"translate(6 4)\" fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-width=\"1\"/>
							</g>
						</svg>
					</div>
					<p class=\"interviewItem__excerpt\">${excerpt}</p>
				</a>
			</li>
		";
	}
}