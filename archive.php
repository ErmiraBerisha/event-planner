<?php get_header();?>

   
    <?php get_template_part('includes/section', 'content');?>

    <?php if( is_active_sidebar('blog-sidebar')):?>
        <?php dynamic_sidebar('blog-sidebar');?>
    <?php endif;?>

<?php get_footer();?>


