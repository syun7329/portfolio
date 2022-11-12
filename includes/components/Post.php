<?php

class Post
{

  private $post;

  function __construct($post, $index, $needSeparatorLine)
  {
    $this->post = $post;
    $this->index = $index;
    $this->needSeparatorLine = $needSeparatorLine;
  }

  public function render()
  {
    $title = get_the_title($this->post->ID);
    $link = get_permalink($this->post->ID);
    $src = has_post_thumbnail($this->post->ID) ? get_the_post_thumbnail_url($this->post->ID, 'full') : get_template_directory_uri() . "/dist/assets/images/no_img.jpg";
    $date = get_the_date("Y/m/d", $this->post);
    $excerpt = wp_trim_words(strip_shortcodes($this->post->post_content), 120);
    $tags = get_the_terms($this->post->ID, 'blog_tag');
    $thumbID = get_post_thumbnail_id($this->post->ID);
    $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
    $tagService = new TagService();
    $tags = $tagService->itemTags($tags);

    return $this->getSmallItemHtmlForSinglePage();
  }

  public function getBigItemHtml()
  {

    $title = get_the_title($this->post->ID);
    $dateTop = get_post_time('Y【D】', false, $this->post->ID);
    $dateBottom = get_post_time('m.d', false, $this->post->ID);
    $link = get_permalink($this->post->ID);
    $THEME_DIR = get_template_directory_uri();
    $thumbnail = get_the_post_thumbnail_url($this->post->ID);
    $category = get_the_category($this->post->ID)->cat_name;
    $thumbID = get_post_thumbnail_id($this->post->ID);
    $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);

    $hover = "";

    if (is_front_page()) {
      $hover = "largeBlog--hover";
    }

    return
      "
				<div class=\"blogSlider__container blogSlider__container--bigPost\">

					<article class=\"largeBlog $hover\">

						<a class=\"largeBlog__link\" href=\"$link\">

							<div class=\"largeBlog__date\">
								<p class=\"largeBlog__time largeBlog__time--year\">$dateTop</p>
								<p class=\"largeBlog__time largeBlog__time--date\">$dateBottom</p>
							</div>

							<div class=\"largeBlog__imgWrapper\">

								<div class=\"largeBlog__inner\">

									<div class=\"largeBlog__detail\">
										<p class=\"largeBlog__cat\">$category</p>
										<p class=\"largeBlog__title\">$title</p>
									</div>
									
								</div>

								<img class=\"largeBlog__img\" src=\"$thumbnail\" alt=\"$alt\"/>

							</div>

						</a>
						
					</article>

				</div>
			";
  }



  public function getSmallItemHtml()
  {

    $title = get_the_title($this->post->ID);
    $dateTop = get_post_time('Y【D】', false, $this->post->ID);
    $dateBottom = get_post_time('m.d', false, $this->post->ID);
    $link = get_permalink($this->post->ID);
    $THEME_DIR = get_template_directory_uri();
    $thumbnail = get_the_post_thumbnail_url($this->post->ID);
    $category = get_the_category($this->post->ID)->cat_name ?? "";
    $thumbID = get_post_thumbnail_id($this->post->ID);
    $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);

    $hover = "";

    if (is_front_page()) {
      $hover = "smallBlog--hover";
    }

    $html =
      "
				<article class=\"smallBlog $hover\">

					<a class=\"smallBlog__link\" href=\"$link\">

						<div class=\"smallBlog__date\">
							<p class=\"smallBlog__time smallBlog__time--year\">$dateTop</p>
							<p class=\"smallBlog__time smallBlog__time--date\">$dateBottom</p>
						</div>

						<div class=\"smallBlog__imgWrapper\">

							<img class=\"smallBlog__img\" src=\"$thumbnail\" alt=\"$alt\"/>

						</div>

						<div class=\"smallBlog__detail\">
							<p class=\"smallBlog__cat\">$category</p>
							<p class=\"smallBlog__title\">$title</p>
						</div>

					</a>
							
				</article>

			";


    if ($this->needSeparatorLine) {
      $html .= "<div class=\"blog__separatorLine\"></div>";
    }

    return $html;
  }



  private function getSmallItemHtmlForSinglePage()
  {

    $title = get_the_title($this->post->ID);
    $content = wp_strip_all_tags(mb_substr(get_post_field('post_content', $this->post->ID), 0, 540, 'UTF-8'), true);
    $link = get_permalink($this->post->ID);
    $thumbnail = get_the_post_thumbnail_url($this->post->ID);
    $thumbID = get_post_thumbnail_id($this->post->ID);
    $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true) ?? "";

    $html = "
			<a href=\"$link\" class=\"relatedArticle\">
				<div class=\"relatedArticle__imgWrap\">
					<img src=\"$thumbnail\" alt=\"$alt\">
				</div>
				<div class=\"relatedArticle__content\">
					<p class=\"relatedArticle__title\">$title</p>
					<p class=\"relatedArticle__excerpt\">$content</p>
				</div>
			</a>

			<div class=\"relatedArticle__separatorLine\"></div>
		";

    return $html;
  }
}
