<?php get_header(); ?>

<section id="content">

        <div id ="lessons">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                                <footer class="postmetadata">                                        
                                        <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
                                </footer>
			</div>
			
			<?php edit_post_link('编辑此文章','','.'); ?>
			
		</article>

                <?php comments_template(); ?>

                <?php endwhile; endif; ?>


        </div>
	
<?php get_sidebar(); ?>

<div class="clearfix"></div>

</section>

<?php get_footer(); ?>