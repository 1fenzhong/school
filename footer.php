
		<footer id="footer" class="source-org vcard copyright">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'after' => '', 'walker' => new description_walker() ) ); ?>

			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> <a href="http://www.miibeian.gov.cn/">粤ICP备11053315号</a></small>
		</footer>

        </div>

	</div>

	<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

</body>

</html>
