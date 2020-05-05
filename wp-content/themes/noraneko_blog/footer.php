<footer id="footer" class="footer">
	<div class="footer__inner">
		<?php
		/**
		 * Show custom menu and copyright on the footer.
		 */

		wp_nav_menu(
			array(
				'theme_location' => 'footer',
			)
		);
		?>
		<p class="footer__copyright"><small>&copy;
				<?php echo date('Y'); ?>
				<?php bloginfo( 'name' ); ?>
				All rights reserved.</small></p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>