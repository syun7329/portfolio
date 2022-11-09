<?php get_header(); ?>

<?php if(have_posts()){ while(have_posts()){ the_post(); ?>
	<section class="content blogDetail__body" style="margin: auto; max-width: 800px">
		<h2 style="font-size: xx-large; font-weight: bold; margin-bottom: 16px;"><?php echo the_title(); ?></h2>	
		<?php echo the_content(); ?>
	</section>
<?php }} ?>

<?php get_footer(); ?>