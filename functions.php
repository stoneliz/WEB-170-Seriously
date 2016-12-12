<?php 
add_action('widgets_init', 'my_sidebar');
register_nav_menus(array(
		"main-menu" => "Main website navigation",
		"util-menu" => "Utilities for my website",
		"footer-nav" => "Menu that appears in the footer"
	)); 
function my_sidebar(){
    /*Register the primary sidebar*/
    register_sidebar(
        array(
            'id'=>'primary',
            'name'=> ('Primary'),
            'description' => ('This is the primary sidebar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
    )
    );
}

$seriously_upperfooter_sidebar = array(
            'id'=>'upper-footer',
            'name'=> 'Upper Footer',
            'description' => 'Widgets placed here will go in the upper footer area',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title"><strong>',
            'after_title' => '</strong></h3>'
    );
register_sidebar($seriously_upperfooter_sidebar);

remove_action('wp_head', 'wp_generator');
?>
