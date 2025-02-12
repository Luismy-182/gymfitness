<?php 
    /*
    * Template Name:galeria
    */
    get_header();
?>

    <main class="contenedor section">
    <?php 
    //consulta la bd | Da el acceso a la informacion, cada entrada la trata como post
    while( have_posts() ): the_post();
        ?>
            <h1 class="text-center text-primary"><?php the_title(); ?></h1> 

            <?php 
            //obtener la galeria
            $galeria= get_post_gallery(get_the_ID(), false);

            //obtener los id de un array 
            $galeria_imagenes_ID=explode(",", $galeria['ids']);
            ?>
            <ul class="galeria-imagenes">
                <?php 
                    foreach($galeria_imagenes_ID as $id){
                        $imagen_grande=wp_get_attachment_image_src($id, 'large')[0];
                        $imagen_full=wp_get_attachment_image_src($id, 'full')[0];

                        ?>

                        <li>
                            <a data-lightbox="galeria" href="<?php echo $imagen_full; ?>">
                                <img src="<?php echo $imagen_grande; ?>" alt="Imagen galeria">
                            </a>
                        </li>
                        <?php
                    }
                ?>
            </ul>
    <?php 
        endwhile;
    ?> 
    </main>


    <?php 
        get_footer();
    ?>