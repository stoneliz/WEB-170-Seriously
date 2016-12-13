<?php 
    /*$mainNav = array(
        "theme_location" => "main-menu",
        "container" => "nav",
        "container_class" => "main-nav",
        "depth" => 2
    );*/
?>
<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"/>
    <meta charset = "<?php bloginfo( 'charset' ); ?>" />
    <title>
        <?php bloginfo('name');?> <?php wp_title();?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    
    <?php wp_head(); ?>  <!--needed for javascript-->
</head>
<body id="<?=$nav;?>">
    <div id="page">
        <div id="header">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                <?php bloginfo('name'); ?>
                </a>
            </h1>
            <h4><?php bloginfo('description'); ?></h4>
            <?php /*wp_nav_menu($mainNav);*/ ?>
           
        </div>
