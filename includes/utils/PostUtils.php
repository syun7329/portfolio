<?php

class PostUtils {

	/**
	 * 投稿がNEWか判断する
	 *
	 * @param [type] $id 投稿ID
	 * @param integer $days 何日以内がNEWか（初期値：7日）
	 * @return boolean true: NEW, false: NEWじゃない
	 */
	public static function isNew($id, $days = 7) {
		$post_time = get_the_time('U', $id);
		$last = time() - ($days * 24 * 60 * 60);

		return $post_time > $last;
	}
}