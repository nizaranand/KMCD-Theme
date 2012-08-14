<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
$options = get_option( 'adapt_theme_settings' );
?>
</div>
<!-- /main -->

    <div id="footer" class="clearfix">

        <div id="footer-widget-wrap" class="clearfix">

            <div id="footer-one">
            	<?php dynamic_sidebar('footer-one'); ?>
            </div>
            <!-- /footer-one -->

            <div id="footer-two">
            	<?php dynamic_sidebar('footer-two'); ?>
            </div>
            <!-- /footer-two -->

            <div id="footer-three">
            	<?php dynamic_sidebar('footer-three'); ?>
            </div>
            <!-- /footer-three -->

			<div id="footer-four">
            	<?php dynamic_sidebar('footer-four'); ?>
            </div>
            <!-- /footer-four -->

        </div>
        <!-- /footer-widget-wrap -->

		<div id="footer-bottom" class="clearfix">

            <div id="copyright">
                &copy; <?php echo date('Y'); ?>  <?php bloginfo( 'name' ) ?> <a href="<?php bloginfo( 'url' ); ?>/impressum">Impressum</a> <a href="<?php bloginfo( 'url' ); ?>/datenschutz">Datenschutz</a>
            </div>
            <!-- /copyright -->

            <div id="back-to-top">
                <a href="#toplink"><?php _e('back up', ''); ?> &uarr;</a>
            </div>
            <!-- /back-to-top -->

        </div>
        <!-- /footer-bottom -->

	</div>
	<!-- /footer -->

</div>
<!-- wrap -->

<!-- WP Footer -->
<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3697592-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
