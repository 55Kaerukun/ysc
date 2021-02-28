<?php get_header(); ?>


<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">
	
<h2 class="pagetitle  mincho">
		<img class="pc" src="https://ysc-inc.net/wp-content/themes/ysc/images/ys_sport_header.png" alt="ysお役立ち情報">
		<img class="sp" src="https://ysc-inc.net/wp-content/themes/ysc/images/ys_sport_header_sp.png" alt="ysお役立ち情報">
</h2>
	
<h2 class="media_tax_category">カテゴリー:
<?php
global $post;
echo get_the_term_list( $post->ID, 'ys_support_category' );
?>
</h2>
	
	
	

	

	
<!-- コンテンツブロック -->
<div class="row">


<h3>新着記事</h3>
<!-- 投稿記事 -->
<article>	

<!-- 投稿が存在するかを確認する条件文 -->
<?php if (have_posts()) : ?>

<!-- 投稿一覧の最初を取得 -->
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<!-- カテゴリーアーカイブの場合 -->
<?php /* If this is a category archive */ if (is_category()) { ?>
<div class="pagetitle mincho"><?php single_cat_title(); ?></div>

<!-- タグアーカイブの場合 -->
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<div class="pagetitle mincho"><?php single_tag_title(); ?></div>

<!-- 日別アーカイブの場合 -->
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<div class="pagetitle mincho"><?php echo get_the_time('Y年n月j日'); ?></div>

<!-- 月別アーカイブの場合 -->
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<div class="pagetitle mincho"><?php echo get_the_time('Y年n月'); ?></div>

<!-- 年別アーカイブの場合 -->
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<div class="pagetitle mincho"><?php echo get_the_time('Y年'); ?></div>

<!-- 著者アーカイブの場合 -->
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<div class="pagetitle mincho"><?php _e('Author Archive', 'minimalcafe'); ?></div>

<!-- 複数ページアーカイブの場合 -->
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<div class="pagetitle mincho"><?php _e('Blog Archives', 'minimalcafe'); ?></div>

<?php } ?>
<!-- / 投稿一覧の最初 -->


<!-- カテゴリーの説明 -->
<?php if (is_category() && //カテゴリページの時
          !is_paged() &&   //カテゴリページのトップの時
          category_description()) : //カテゴリの説明文が空でない時 ?>
<div class="margin-bottom30"><?php echo category_description(); ?></div>
<?php endif; ?>
<!-- / カテゴリーの説明 -->


<!-- 本文エリア -->
<ul class="block-three">

<!-- 投稿ループ -->
<?php while (have_posts()) : the_post(); ?>

<!-- アイテム -->
<li class="item">
<div class="item-img img-anime2"><a href="<?php the_permalink(); ?>"><?php
if ( has_post_thumbnail() ) the_post_thumbnail(array(768,512));
else echo '<img src="'.get_template_directory_uri().'/images/noimage-960x640.jpg" />';
?></a></div>
<div class="item-date"><?php echo get_post_time('Y年m月d日'); ?>｜<?php the_category(' / '); ?></div>
<h2 class="item-title" id="post-<?php the_ID(); ?>" <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 53); ?></a></h2>
<p class="item-text"><?php echo mb_substr(get_the_excerpt(), 0, 40); ?><a href="<?php the_permalink(); ?>">...</a></p>
</li>
<!-- / アイテム -->

<?php endwhile; ?>
<!-- / 投稿ループ -->

<!-- 投稿がない場合 -->
<?php else: ?> 
<p></p>
<?php endif; ?>
<!-- / 投稿がない場合 -->

</ul>
<!-- / 本文エリア -->
	
	
<ul>
<h3>カテゴリー一覧</h3>
<?php
  $terms = get_terms('ys_support_category');
  foreach ( $terms as $term ) {
    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</li></a>';
  }
?>
</ul>

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


<!-- ウィジェットエリア（カテゴリーページ最下部） -->
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('カテゴリーページ最下部') ) : ?>
<?php endif; ?>
</div>
<!-- / ウィジェットエリア（カテゴリーページ最下部） -->



</article>
<!-- / 投稿記事 -->

</div>
<!-- / コンテンツブロック -->


</div>
<!-- / メインwrap -->

<?php get_footer(); ?>