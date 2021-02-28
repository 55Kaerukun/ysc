<aside id="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('サイドバー') ) : ?>
<?php endif; ?>


<!-- カテゴリー -->
<div id="recent-posts-3" class="widget widget_recent_entries">
<div class="widget-title mincho news">カテゴリー</div>
<ul>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/trademediation">賃貸仲介</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/rentalmanagement">賃貸管理</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/rentmediation">売買仲介</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/investment">不動産投資</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/insurance">保険</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/assurance">家賃保証</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/coalcenter">コールセンター</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/Internet">インターネット関連</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/reform">リフォーム・住環境向上</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/infomation-service">不動産情報サービス</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/sharing">スペースシェアリング</a></li>
	<li class="cat-item cat-item-1"><a style="color:#45AAB8;" href="https://ysc-inc.net/lodging">宿泊関連</a></li>
<?php
  /*$terms = get_terms('media_category');
  foreach ( $terms as $term ) {
  	echo '<li class="cat-item cat-item-1">';
  	echo '<a style="color: #45AAB8;" href="'.get_term_link($term).'">'.$term->name.'</a>';
  	echo '</li>';
  }
  */
?>
</ul>
</div>


</aside>