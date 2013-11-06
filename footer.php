<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LunarLove
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'lunarlove_credits' ); ?>
			<span class="footer-left">Made With Love<span class="admin-login" title="三连击以登陆管理员后台..." onclick="atclick();" >@</span>2013</span>
			<span class="footer-right">Theme is <a href="http://aiyou.im">"LunarLove S"</a></span>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>