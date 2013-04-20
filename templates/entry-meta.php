<?php echo __('Posted on ', 'roots'); ?><time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo get_the_date(); ?></time> <?php echo __('by', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a><br />
<?php echo __('Tags: ', 'roots'); ?><?php the_tags('',', ',''); ?><br />
