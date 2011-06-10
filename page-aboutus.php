<?php get_header(); ?>

<section id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div id="aboutus">

        <div class="about"><?php the_content(); ?></div>
        
        <div id="we">
            <div class="me">
                <h2 class="name"><?php the_author_meta( 'display_name', 1 ); ?></h2>
                <?php echo get_avatar( 1, 200 ); ?>
                <div class="intro"><?php the_author_meta( 'description', 1 ); ?></div>
                <div class="clearfix"></div>
            </div>
        </div>

        <?php comments_template(); ?>
        
    </div>

    <?php endwhile; endif; ?>
    
</section>

<?php get_footer(); ?>
