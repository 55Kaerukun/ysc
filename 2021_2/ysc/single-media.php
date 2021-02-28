<?php get_header(); ?>

<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<h2 class="pagetitle  mincho">
	<img class="pc" src="https://ysc-inc.net/wp-content/themes/ysc/images/madia_header.png" alt="資産管理メディア">
		<img class="sp" src="https://ysc-inc.net/wp-content/themes/ysc/images/media_header_sp.png" alt="資産管理メディア">
	</h2>
	
<!-- コンテンツブロック -->
<div class="row">

<!-- ページタイトル -->
<div class="pagetitle-single  mincho"><?php the_category(', '); ?>
	
</div>
<!-- / ページタイトル -->

<!-- 投稿 -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="pagedate"><?php the_time(__('Y-m-d', 'minimalcafe')) ?></div>
<p style="font-size:20px;">カテゴリー: 
	<?php $terms = get_the_terms($post->ID, 'media_category'); foreach ($terms as $term) : ?>
<?php echo $term->name; ?>
<?php endforeach; ?>
	</p>

<h1 class="blog-title"><?php the_title(); ?></h1>

<div class="media-wrap"><!-- media-wrap-->
<div class="single-contents">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>
<?php get_sidebar( $name ); ?>
</div><!-- /media-wrap-->

<!-- 投稿が無い場合 -->
<?php endwhile; else: ?>
<div class="kekka-nowords"><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></div>
<?php endif; ?>
<!-- 投稿が無い場合 -->
<!-- / 投稿 -->


<!-- ウィジェットエリア（シングルページ記事下） -->
<div class="row">
<div class="singlebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('シングルページ記事下') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（シングルページ記事下） -->

<!-- タグ -->
<div class="blog-foot">
<div class="tagcloud widget_tag_cloud"><?php the_tags(' ', ' '); ?></div>
</div>
<!-- / タグ -->

<!-- パンくずリスト -->
<div class="breadcrumb">
<div itemscope itemtype="//schema.org/BreadcrumbList">
<ol>
<li itemscope itemprop="itemListElement" itemtype="//schema.org/ListItem">
<a itemprop="item" href="<?php echo home_url(); ?>">
<span itemprop="name">Home</span></a>
<?php $_content_no_=1;?><meta itemprop="position" content="<?php echo $_content_no_;$_content_no_++;?>" />
</li>
›
<?php $postcat = get_the_category(); ?>
<?php $catid = $postcat[0]->cat_ID; ?>
<?php $allcats = array($catid); ?>
<?php
while(!$catid==0) {
$mycat = get_category($catid);
$catid = $mycat->parent;
array_push($allcats, $catid);
}
array_pop($allcats);
$allcats = array_reverse($allcats);
?>
<?php foreach($allcats as $catid): ?>
<li itemscope itemprop="itemListElement" itemtype="//schema.org/ListItem">
<a itemprop="item" href="<?php echo get_category_link($catid); ?>">
<span itemprop="name"><?php echo get_cat_name($catid); ?></span></a>
<meta itemprop="position" content="<?php echo $_content_no_;$_content_no_++;?>" />
</li>
<?php endforeach; ?>
›
<li itemscope itemprop="itemListElement" itemtype="//schema.org/ListItem">
<span itemprop="name"><a itemprop="item" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></span>
<meta itemprop="position" content="<?php echo $_content_no_;$_content_no_++;?>" />
</li>
</ol>
</div>
</div>
<!-- / パンくずリスト -->


<!-- ウィジェットエリア（シングルページCTA） -->
<div class="row">
<div class="singlebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('シングルページCTA') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（シングルページCTA） -->


	

<?php
  $category = get_the_category();
  $cat_name = $category[0]->cat_name;
?>
	
<?php if($cat_name != "news"); ?>
	





<!-- ページャー -->
<div id="next">
<ul class="block-two">
<li class="next-left"><?php previous_post_link('%link', '%title', 'true'); ?></li>
<li class="next-right"><?php next_post_link('%link', '%title', 'true'); ?></li>
</ul>
</div>
<!-- / ページャー -->


<!-- コメントエリア -->
<?php //comments_template(); ?> 
<!-- / コメントエリア -->


<!-- ウィジェットエリア（シングルページ最下部） -->
<div class="row">
<div class="singlebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('シングルページ最下部') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（シングルページ最下部） -->
	

</div>
<!-- / コンテンツブロック -->



</div>
<!-- / メインwrap -->
	

<?php get_footer(); ?>