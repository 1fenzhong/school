<?php get_header(); ?>

<section id="content">

        <?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>分类 &#8216;<?php single_cat_title(); ?>&#8217; 下的内容</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>标签 &#8216;<?php single_tag_title(); ?>&#8217; 下的内容</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">作者发表的内容</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">全部内容</h2>
			
			<?php } ?>

                        <div id="lessons">

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<div class="entry">
							<?php the_content(); ?>
						</div>
					
						<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
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
