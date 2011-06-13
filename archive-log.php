<?php get_header(); ?>

<section id="content">

        <?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

                        <div id="lessons">

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<div class="entry">
							<?php the_content(); ?>
						</div>
					
						<?php include (TEMPLATEPATH . '/_/inc/log-meta.php' ); ?>
				</article>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>抱歉，没有内容</h2>

	<?php endif; ?>

        </div>

<?php get_sidebar(); ?>

<div class="clearfix"></div>

</section>

<?php get_footer(); ?>
