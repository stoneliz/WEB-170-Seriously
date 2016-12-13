<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">

<?php $seriously_slider_param = array(
'cat' =>'5',
'post_count'=> '5');

$the_query = new WP_Query($seriously_slider_param);

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<a href="<?php $seriously_slider_url = get_post_custom_values( 'url' ); echo $seriously_slider_url[0]; ?>" title="<?php the_title(); ?>"</a>

<?php endwhile; endif;
wp_reset_postdata(); ?>
    <!--the loop-->

    <?php if(have_posts()) : while(have_posts()) : the_post();?>
    <div class="entry">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
            </a>
        </h2>
            <div id="content">
                <div class="post-metadata">
    <span class="author">By <?php the_author_posts_link(); ?> </span>
                    <span class="date"><?php the_time('F j, Y'); ?></span>
                    <span class="categories">See more in: <?php the_category(' &middot; '); ?></span>
                </div>
            </div>

    </div>
    <?php endwhile; else: ?>
    <p><?php ('Sorry, no posts match your criteria.'); ?></p>
    <?php endif; ?>
    <!--end the loop-->
</div>
<?php get_footer(); ?>
