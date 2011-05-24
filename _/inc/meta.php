<footer class="meta">
        <div class="tags">
                <?php the_tags('标签： ', ' ', '<br />'); ?>
        </div>
                                
	<span class="byline author vcard">
		由 <span class="fn"><?php the_author(); ?></span>
	</span>
	<i>发表于</i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('Y年m月d日') ?></time>
	<?php comments_popup_link('没有评论', '1条评论', '%条评论', 'comments-link', ''); ?>
</footer>