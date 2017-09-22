<?php
/**
 * The template for displaying the footer
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>


<div class="footer-container" data-sticky-footer>
	<footer class="footer">
		<div class="footer">
			<?php do_action( 'foundationpress_before_footer' ); ?>
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php do_action( 'foundationpress_after_footer' ); ?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>