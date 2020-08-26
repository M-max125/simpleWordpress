<?php
/**
 * 
 * HEADER template file
 * 
 * @package Shop&Drop theme
 */
?>






<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>


<header>
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-between">
                <a href="<?php bloginfo('url');?>"> 
                    <img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-fluid logo">
                </a>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'=>'top-menu',
                        'menu_class'=>'top-menu d-flex'
                    )
                    );
                ?>
            </div>
        </div>
    </div>

</header>

    
