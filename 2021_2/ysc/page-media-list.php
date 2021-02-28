<?php get_header(); ?>

<!-- イメージヘッダー -->
<div class="head-img">
<?php echo get_the_post_thumbnail($post->ID, 'img-head'); ?>
</div>
<!-- / イメージヘッダー -->



<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2 class="pagetitle  mincho">
	<img class="pc" src="https://ysc-inc.net//wp-content/themes/ysc/images/madia_header.png" alt="資産管理メディア">
		<img class="sp" src="https://ysc-inc.net//wp-content/themes/ysc/images/media_header_sp.png" alt="資産管理メディア">
</h2>
	

	

<div class="media-wrap"><!-- media-wrap-->
<div class="page-contents">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>
	
	
	<?php get_sidebar( $name ); ?>
</div><!-- /media-wrap-->

<?php endwhile; else: ?>
<div class="kekka-nowords"><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></div>
<?php endif; ?>


</div>
<!-- / メインwrap -->

<?php get_footer(); ?>