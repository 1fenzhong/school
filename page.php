<?php get_header(); ?>

<section id="content">

        <div id="lessons">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('编辑此页面。', '<p>', '</p>'); ?>

		</article>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

        </div>

<?php get_sidebar(); ?>

<div class="clearfix"></div>

</section>

<?php get_footer(); ?>
