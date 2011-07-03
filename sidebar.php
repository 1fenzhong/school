<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
    <div id="tags">
        <?php wp_tag_cloud('smallest=16&largest=16&orderby=count&separator=<br>&unit=px'); ?>
    </div>
    
    <?php endif; ?>
    
</div>