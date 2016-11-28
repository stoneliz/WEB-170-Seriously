<?php get_header(); ?>
<?php get_sidebar();?>

<div id="content">
	<h1>Search Results for <?php echo get_search_query(); ?></h1>
	<div id="posts">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="postcol">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content("view more"); ?>
                <?php comments_number("0 comments", "1 comment", "% comments"); ?>
            </article>
        <?php endwhile; else: ?>
            <p>Sorry no results came up for your search. Try searching for something else.<?php get_search_form(); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
