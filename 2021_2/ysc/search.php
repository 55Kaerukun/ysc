<?php get_header(); ?>

<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<!-- コンテンツブロック -->
<div class="row">

<!-- 左ブロック -->
<article>	

<h1 class="pagetitle  mincho">検索結果：<?php the_search_query(); ?></h1>

<!-- 本文エリア -->
<ul class="block-three">

<!-- 検索結果の表示 -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- アイテム -->
<li class="item">
<div class="item-img img-anime2"><a href="<?php the_permalink(); ?>"><?php
if ( has_post_thumbnail() ) the_post_thumbnail(array(768,512));
else echo '<img src="'.get_template_directory_uri().'/images/noimage-960x640.jpg" />';
?></a></div>
<div class="item-date"><?php echo get_post_time('Y年m月d日'); ?></div>
<h2 class="item-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 53); ?></a></h2>
<p class="item-text"><?php echo mb_substr(get_the_excerpt(), 0, 67); ?><a href="<?php the_permalink(); ?>">...</a></p>
</li>
<!-- / アイテム -->

<?php endwhile; ?>
<!-- /検索結果の表示 -->

<!-- キーワードが見つからないとき -->
<?php else: ?> 
<div class="kekka-nowords">お探しのキーワードは見つかりませんでした。</div>
<?php endif; ?>
<!-- / キーワードが見つからないとき -->

</ul>
<!-- / 本文エリア -->


<div class="clear"></div>
<!-- ページャー -->
<div class="pager">
<?php global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
	$paginate_format = '';
	$paginate_base = add_query_arg('paged','%#%');
}
else{
	$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
	user_trailingslashit('page/%#%/','paged');;
	$paginate_base .= '%_%';
}
echo paginate_links(array(
	'base' => $paginate_base,
	'format' => $paginate_format,
	'total' => $wp_query->max_num_pages,
	'mid_size' => 1,
	'current' => ($paged ? $paged : 1),
	'prev_text' => '«',
	'next_text' => '»',
)); ?>
</div>
<!-- / ページャー -->



</article>
<!-- / 左ブロック -->

</div>
<!-- / コンテンツブロック -->


</div>
<!-- / メインwrap -->

<?php get_footer(); ?>