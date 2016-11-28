<?php 
	$title = "";
	
	if(is_day())
	{
		$title = "Viewing " . get_the_date() . " daily archives";
	}
	else if(is_month())
	{
		$title = "Viewing " . get_the_date("F d, Y") . " monthly archives";
	}
	else if(is_year())
	{
		$title = "Viewing " . get_the_date("Y") . " yearly archives";
	}
	else 
	{
		$title = "Viewing " . single_cat_title("", false) . " archives";		
	}
?>

<?php get_header(); ?>
<?php get_sidebar();?>
<div id="content">
	<h2><?php echo $title; ?></h2>
	<div id="posts">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="postcol">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content("view more"); ?>
            </article>
        <?php endwhile; else: ?>
            <p>Sorry no posts</p>
        <?php endif; ?>
    </div>
    <?php get_sidebar("right"); ?>
</div>
<?php get_footer(); ?>