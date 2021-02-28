<?php
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>
<h3 class="blog-title  mincho" id="comments"><?php comments_number('コメントはありません', 'コメント１件', 'コメント%件');?></h3>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf('コメントを書くには<a href="%s">ログイン</a>が必要です', get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
<?php else : ?>
<?php wp_list_comments(); ?>
<?php paginate_comments_links(); ?>
<?php endif; ?>
<?php endif; ?>

<?php comment_form(); ?>