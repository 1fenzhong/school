<?php get_header(); ?>

<section id="content">

        <div id="lessons">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" url="<?php the_permalink() ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<footer class="postmetadata">
				<?php the_tags('标签： ', ', ', '<br />'); ?>
				发表在 <?php the_category(', ') ?> | 
				<?php comments_popup_link('没有评论 &#187;', '1 条评论 &#187;', '% 条评论 &#187;'); ?>
			</footer>

		</article>

                <?php endwhile; ?>

                <?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

                <?php else : ?>

		<h2>没有找到</h2>

                <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

        <div class="clearfix"></div>
                
</section>

<?php get_footer(); ?>
