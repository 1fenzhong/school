<?php get_header(); ?>

<section id="content">

        <div id="lessons">

                <?php if (have_posts()) : $counter=0; while (have_posts()) : the_post(); $counter++; ?>
                
		<article <?php post_class() ?> id="post-<?php echo $counter; ?>" url="<?php the_permalink() ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>

                        <footer class="postmetadata">
                                <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
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
