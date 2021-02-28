<?php get_header(); ?>

<div class="main-image"><img class="bg_img" src="<?php echo get_template_directory_uri() .'/images/main_01.png' ?>" alt="メインイメージ" />
	
	
<a href="https://ysc-inc.net/invest6" target="_blank"><img class="lp_banner" src="https://ysc-inc.net/wp-content/uploads/2020/10/lp_banner.png"></a>
	<div class="center_logo">
		<img class="logo_center animated" src="<?php echo get_template_directory_uri() .'/images/logo_center.png' ?>" alt="ロゴ" />
		<p class="main_copy">「不動産」を通して、お客様の人生を豊かにする</p>
<!-- 		<img class="main_copy" src="<?php// echo get_template_directory_uri() .'/images/main_copy.png' ?>" alt="「不動産」を通じてお客様の人生を豊かにする" /> -->
	</div>
	
</div>

<!-- トップヘッダー画像 -->
<div class="top-header">
<img src="<?php echo (get_option('slideshow1')) ? get_option('slideshow1') : get_template_directory_uri() . '/images/main_01.jpg' ?>" alt="<?php bloginfo('name'); ?>" />
</div>
<!-- / トップヘッダー画像 -->


<!-- ウィジェットエリア（トップページヘッダー画像下（大）） -->
<div class="row">
<div class="top-wide-contents">
<img src="/wp-content/themes/ysc/images/news_title.png" alt="news-title">
	<a href="https://ysc-inc.net/category/news/" class="list_ico">一覧はこちら→</a>
<!-- news area-->
<div class="top-wide-contents widget">
<ul>
<?php
  $args = array(
    'posts_per_page' => 3 // 表示件数の指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
  <li>
    <a href="<?php the_permalink(); ?>"><?php the_time('Y/m/d'); ?>　<?php the_title(); ?></a>
  </li>
<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>
</div>
<!-- /news area-->
	
<div class="row">
<div class="top-wide-contents">
	<h2>事業内容</h2>
<img class="ys_service" src="https://ysc-inc.net/wp-content/themes/ysc/images/service_title.png" alt="ysサービス">

<!-- 不動産投資 -->
<section class="fl mt60 effect-fade">
<div class="discription">
	<h3>不動産投資<br>資産形成コンサルティング</h3>
	<p>
個人のお客様向けに不動産を通した 資産形成サポートを行っております。
		<a href="https://ysc-inc.net/personal/" class="btn">view more ></a>
	</p>
	
</div>
<div>
	<img class="buil_img" src="https://ysc-inc.net/wp-content/themes/ysc/images/buil.png" alt="ビルの画像">
</div>
</section>
<!-- /不動産投資 -->
	
<!-- 経営コンサルティング -->
<section class="fl mt100 effect-fade consal_block">
<div>
	<img class="buil_img" src="https://ysc-inc.net/wp-content/themes/ysc/images/consal.png" alt="コンサルティング">
</div>
<div class="discription">
	<h3>経営コンサルティング</h3>
	<p>
法人のお客様向けに経営コンサルティング、 Webサービスを行っております。
		<a  href="https://ysc-inc.net/corporate/" class="btn">view more ></a>
	</p>
</div>
</section>
<!-- /経営コンサルティング -->
	
	
<!-- 資産管理メディア -->
<section class="fl mt100 effect-fade">
<div class="discription">
	<h3>資産管理メディア</h3>
	<p>不動産事業の課題解決をサポートする業務効率UPやツール、
事例等を集約したポータルサイトを構築しております。
		<a href="https://ysc-inc.net/wait/" class="btn">view more ></a>
	</p>
</div>
<div>
	<img class="buil_img" src="https://ysc-inc.net/wp-content/themes/ysc/images/media.png" alt="メディア">
</div>
</section>
<!-- /資産管理メディア -->
	
</div>
</div>
	
	
	
	
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページヘッダー画像下（大）') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（トップページヘッダー画像下（大）） -->


<!-- 全体warapper -->
<div class="wrapper">


<!-- メインwrap -->
<div id="main">

<!-- コンテンツブロック -->
<div class="row">

<!-- ウィジェットエリア（トップページ２列枠） -->
<div class="row">
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ２列枠（左）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ２列枠（右）') ) : ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- / ウィジェットエリア（トップページ２列枠） -->


<!-- ウィジェットエリア（トップページ下部（大）） -->
<div class="row">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ下部（大）') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（トップページ下部（大）） -->


</div>
<!-- / コンテンツブロック -->


</div>
<!-- / メインwrap -->

<script type="text/javascript">
$(function(){
	
	
	// スプラッシュアニメ
	function splashAnime(){
		   $("#splash").css('display','block');
			setTimeout(function(){
			  $("#start_copy").fadeOut(500);
			},1000);

		  setTimeout(function(){
			  $("svg").css("display","block");
			  var mySVG = $('#svgAnime').drawsvg({
				callback: function() {
					$('#contents').delay(1000).fadeIn(1000);
					$('.st0, .st1').css('fill-opacity','1');
					$('#splash').delay(500).fadeOut(500);
				}
			  });
			  mySVG.drawsvg('animate');
		  },1500);
	}
	

	

 if(sessionStorage.getItem('access')){
	 $('#contents').css('display','block');
    //console.log('2回目以降のアクセスです');
  } else {
    console.log('初回アクセスです');
	 splashAnime();
    sessionStorage.setItem('access', 0);
  }

if (window.performance) {
  if (performance.navigation.type === 1) {
	 $('#contents').css('display','none');
    splashAnime();
  } else {
    // リロードされていない
  }
}
	
	

});
</script>
	
<script>
	$(function(){
		
		$('.center_logo').fadeIn(0);
		
		/*setTimeout(function(){
			$('.center_logo').fadeIn(800);
		
		},0);
		*/
		
// 		setTimeout(function(){
// 			//$('.main_copy').addClass("fadeIn");
// 		},500);
		
    });
	
$(window).scroll(function (){
    $('.effect-fade').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height() - 100;
        if (scroll > elemPos - windowHeight){
            $(this).addClass('effect-scroll');
        }
    });
　});
</script>
<?php get_footer(); ?>