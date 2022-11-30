<?php

class ImageUtils {

	public static function getThumbnailUrl($postId, $size = "full") {

		if (has_post_thumbnail($postId)) {
			return get_the_post_thumbnail_url($postId, $size);
		}

		return get_template_directory_uri() . "/dist/assets/images/no_img.jpg";
	}

	public static function hasThumbnail($postId) {
		return has_post_thumbnail($postId);
	}
}