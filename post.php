<?php get_header();?>
<?php get_sidebar();?>
<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="entry">
<blockquote>
        <h2><?php the_title();?></h2>
	<h3>By <?php the_author(); ?> </h3>
	<p><strong><?php the_date(); ?> </strong></p>
</blockquote>

        <div class="entry-body">
        <?php the_content();?>
        </div>
    </div>
    <?php endwhile; else: ?>
    <p><?php ('Sorry, no posts matched your criteria.');?></p>
    <?php endif;?>

</div>
<?php dynamic_sidebar('Upper Footer'); ?>
<?php get_footer();?>
