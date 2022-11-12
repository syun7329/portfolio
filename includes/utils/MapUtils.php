<?php

class MapUtils {

	public static function getEnglishPrefectureName($prefectureValue) {

		$prefectures = PrefectureConst::getConstants();

		foreach ($prefectures as $label => $value) {
			if ($value == $prefectureValue) {
				return $label;
			}
		}

	}

	// public static function dividePostsByPrefecture($query) {

	// 	$prefectures = PrefectureConst::getConstants();

	// 	$dividePosts = [];

	// 	foreach ($prefectures as $label => $value) {
	// 		$posts = array_filter($query->posts, function($post) use($value) {
  // 			return get_field('prefecture', $post->ID) == $value;
	// 		});

	// 		if (count($posts) > 0) {
	// 			$result = [];
	// 			$result['label'] = $label;
	// 			$result['posts'] = $posts;
	// 			$dividePosts[] = $result;
	// 		}
	// 	}

	// 	return $dividePosts;
	// }

}