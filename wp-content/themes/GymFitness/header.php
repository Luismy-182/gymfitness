<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <a href="<?php echo site_url("/");?>">
                    <img class="logo" src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="imagen logo">
                </a>
            </div>


            <div class="hamburguer-menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="48" height="48" stroke-width="2.25"> <path d="M4 6l16 0"></path> <path d="M4 12l16 0"></path> <path d="M4 18l16 0"></path> </svg> 
            </div>
            <!--NAVEGACION-->
            <div class="contenedor-menu">
                <?php 
                    $args=[
                        'theme_location'=>'menu-principal',
                        'container'=>'nav',
                        'container_class'=>'menu-principal'
                    ];
                    wp_nav_menu($args);
                ?>
            </div>
        </div>

        <?php 
    if(is_page()){?>
        <div class="tagline text-center contenedor">
            <h1 class="ml2">
                <?php the_field('hero_heading') ?>
                
            </h1>
            <p><?php the_field('hero_texto'); ?></p>
        </div>
        <?php 
    }
?>
    </header>