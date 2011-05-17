<?php get_header(); ?>

<div id="content">

        <div id="lessons">

	<?php if (have_posts()) : ?>

		<h2>搜索结果</h2>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>没有找到相应的文章。</h2>

	<?php endif; ?>

        </div>

<?php get_sidebar(); ?>

<div class="clearfix"></div>

</section>

<?php get_footer(); ?>
