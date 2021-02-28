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
	
	
<h2 class="pagetitle  mincho"><?php the_title(); ?>
	
<?php if(is_page("about")):?>
	<img class="coporate_title" src="https://ysc-inc.net/wp-content/themes/ysc/images/coporate_title.png" alt="会社案内">
<?php endif; ?>
	
<?php if(is_page("service")):?>
	<img class="ysservice_title" src="https://ysc-inc.net/wp-content/themes/ysc/images/ysservice.png" alt="サービス情報">
<?php endif; ?>
	
	
</h2>
	

<div class="page-contents">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>

<?php endwhile; else: ?>
<div class="kekka-nowords"><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></div>
<?php endif; ?>

</div>
<!-- / メインwrap -->

<?php get_footer(); ?>