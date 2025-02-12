<?php 

require get_template_directory().'/includes/widgets.php';
require get_template_directory().'/includes/queries.php';

function gymFitness_menus(){
    register_nav_menus( array(
        'menu-principal' =>__('Menú Principal', 'gymFitness'),
    ));
}


add_action('init','GymFitness_menus');


//creando una segunda funcion agregando la hoja de estilos 
//wp_enqueue_style() es una funcion para pasar una hoja de estilos
//get_stylesheet_uri() es una funcion que va a cargar la hoja de estilos del tema actual
function gymFitness_scripts_styles(){
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(),'8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'),'1.0.0');
    //como colocamos normalize en array de la seccion de dependencias le dices que dependes que primero cargue normalize

    //cargando cc y js de ligthbox

    if(is_page('galeria')){
        wp_enqueue_style('lightboxcss', get_template_directory_uri().'/css/lightbox.css', array() ,'2.11.5');

    }

    if(is_page('galeria')){
        wp_enqueue_script('lightboxjs', get_template_directory_uri().'/js/lightbox.js', array('jquery'),'2.11.5', true);
    }
    
    //cargando swiper js
    if(is_front_page()){
        wp_enqueue_style('swiper-css', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array() ,'11.2.2');
    }

    if(is_front_page()){
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(),'11.2.2', true);
        wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);

    }

    
    


    
    
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array(), '1.0.0', true);


}

//usamos el hook wp_enqueue_scripts para agregar hojas de estilo
add_action('wp_enqueue_scripts', 'gymFitness_scripts_styles');


//habilitando imagenes en wp

function gymFitnes_setup(){
    //se llama setup porque corre sobre el hook de setup
    //imagenes destacadas
    add_theme_support('post-thumbnails');

    //agrega titulos dinamicos
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gymFitnes_setup');


//dump and die
function dd($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    die;
}


function gymfitness_widgets(){
    register_sidebar( array(
        'name'=>'sidebar 1',
        'id'=>'sidebar_1',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3 class="text-center text-primary">',
        'after_title'=>'</h3>'
    ) );
    register_sidebar( array(
        'name'=>'sidebar 2',
        'id'=>'sidebar_2',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3 class="text-center text-primary">',
        'after_title'=>'</h3>'
    ) );

}

add_action('widgets_init','gymfitness_widgets');



function gymfitness_ubicacion_shortcode(){
    ?>
    <div class="mapa">
        <?php 
            if(is_page('contacto')){
                the_field('ubicacion');
            }

    ?>
    </div>
    <h2 class="text-center text-primary">Formulario de contacto</h2>
    <?php

    echo do_shortcode('[contact-form-7 id="102" title="Formulario de contacto 1"]');

}
add_shortcode('gymfitness_ubicacion','gymfitness_ubicacion_shortcode');









/*Imagenes dinamicas como background */
function gymfitness_hero_imagen(){
    //obtener id de imagen
    $front_id=get_option('page_on_front');

 
    //obtener la imagen
    $id_imagen=get_field('hero_imagen', $front_id);

    //obtener la tura de la imagen
    $imagen=wp_get_attachment_image_src($id_imagen, 'full')[0];

    //crear css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');


    $imagen_destacada_css="
    body.home .header{
        background-image:linear-gradient(rgb(0 0 0 /.75), rgb(0 0 0 /.75)), url($imagen);
    }
    ";

    //inyectar css

    wp_add_inline_style('custom', $imagen_destacada_css);
}

add_action('init', 'gymfitness_hero_imagen');