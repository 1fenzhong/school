
		<footer id="footer" class="source-org vcard copyright">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'after' => '', 'walker' => new description_walker() ) ); ?>

			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
		</footer>

        </div>

	</div>

	<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

</body>

</html>
