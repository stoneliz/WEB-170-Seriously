<?php get_header();?>
<?php get_sidebar('primary');?>
<?php get_sidebar('secondary');?>
<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="entry">
        <h2><?php the_title();?></h2>
        <div class="entry-body">
        <?php the_content();?>
        </div>
    </div>
    <?php endwhile; else: ?>
    <p><?php ('Sorry, no posts matched your criteria.');?></p>



    <?php endif;?>
</div>
<?php get_footer();?>
