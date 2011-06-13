<footer class="meta">
        <div class="tags">
                <?php the_tags('标签： ', ' ', '<br />'); ?>
        </div>
                                
	<span class="byline author vcard">
            <span class="fn"><?php the_author(); ?></span> 又在碎碎念，
	</span>
	<?php comments_popup_link('没人理会', '被批评1次', '被批评%次', 'comments-link', ''); ?>
</footer>