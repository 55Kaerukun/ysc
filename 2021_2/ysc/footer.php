</div>
<!-- / 全体wrapper -->

<!-- フッターエリア -->
<footer id="footer">
	
	<div id="inner_footer">
		<div class="adress_area">
			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() .'/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>" /></a>
			<p>不動産の個人向け・法人向けコンサルティング  <br class="sp_br">株式会社ワイズシー</p>
			<p>〒170-0013  東京都豊島区東池袋1丁目17-11　<br class="sp_br">パークハイツ池袋1105号室</p>
		</div>
		<a href="https://ysc-inc.net/contact" class="footer_contact">お問い合わせ</a>
	</div>
	


<!-- フッターコンテンツ -->
<div class="footer-inner">

<!-- ウィジェットエリア（フッター２列枠） -->
<div class="row">
<article class="half">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('フッター２列枠（左）') ) : ?>
<?php endif; ?>
</div>
</article>
<article class="half">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('フッター２列枠（右）') ) : ?>
<?php endif; ?>
</div>
</article>
</div>
<!-- / ウィジェットエリア（フッター２列枠） -->
<div class="clear"></div>


</div>
<!-- / フッターコンテンツ -->

<!-- コピーライト表示 -->
<div id="copyright">
© <a href="<?php echo home_url(); ?>">2020 株式会社ワイズシー</a>
</div>
<!-- /コピーライト表示 -->

</footer>
<!-- / フッターエリア -->

<?php wp_footer(); ?>


<!-- スマホ用ハンバーガーメニュー -->
<script type="text/javascript">
// jQuery(document).ready(function(){
//  jQuery(".hamburger").click(function () {
//   jQuery("#nav").slideToggle();
//  });
// });
</script>

<!-- <div class="toggle">
<div class="hamburger hamburger--spin">
<div class="hamburger-box"><div class="hamburger-inner"></div></div>
</div>
</div> -->
<!-- / スマホ用ハンバーガーメニュー -->


    <!-- ハンバーガーメニューbtn -->
    <button id="btn" class="humbutton"><span></span></button>

    <!-- ハンバーガーメニュー -->
    <nav class="navigation">
      <ul class="nav-list">
		  <li><a href="https://ysc-inc.net/">TOP</a></li>
<li><a href="https://ysc-inc.net/about/">会社案内</a></li>
<li><a href="https://ysc-inc.net/service/">サービス情報</a></li>
<li><a href="https://ysc-inc.net/wait/">資産管理メディア</a></li>
<li><a href="https://ysc-inc.net/wait/">Ys’お役立ち情報</a></li>
<li><a href="https://ysc-inc.net//contact/">お問い合わせ</a></li>
      </ul>
	</nav>
		

		
		
   

<script>
// var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
// 
 //ハンバーガーメニュー
$("#btn").on("click", function () {
	$("html").toggleClass("is_active");
});

// もともとメニュー横並びver
// ページを読み込んだ時とリサイズされた時に発動
$(window).on('load resize', function(){
	
	// ページの横幅取得
	var w = $(window).width();

	// 768px以下になったらハンバーガーメニュー閉じる処理
	if(w < 1024){
		$("html").removeClass("is_active");
	}

});
// var hamburgers = document.querySelectorAll(".hamburger");
// if (hamburgers.length > 0) {
//   forEach(hamburgers, function(hamburger) {
//     hamburger.addEventListener("click", function() {
//       this.classList.toggle("is-active");
//     }, false);
//   });
// }
</script>
<!-- / ハンバーガーメニュー-->

<!-- doubleTapToGo Js -->
<?php if (wp_is_mobile()) :?>
<!-- モバイル端末のみ読み込み-->
<script src="<?php echo esc_url( get_template_directory_uri() );?>/jquery/doubletaptogo.js" type="text/javascript"></script>
<script>
$( function()
 {
 $( '#nav li:has(ul)' ).doubleTapToGo();
 });
	
</script>
<!-- / モバイル端末のみ読み込み -->
<?php else: ?>
<?php endif; ?>
<!-- / doubleTapToGo Js -->

<!-- トップに戻る -->
<!-- <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() );?>/jquery/scrolltopcontrol.js"></script> -->
<!-- / トップに戻る -->
<?php if ( is_home() || is_front_page() ) : ?>
</div>
<?php endif; ?>
</body>
</html>