<?php 
    //consulta la bd | Da el acceso a la informacion, cada entrada la trata como post
    while( have_posts() ): the_post();
        ?>
            <h1 class="text-center text-primary"><?php the_title(); ?></h1> 

            
        <?php 
        if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class'=>'imagen-destacada'));  
        }

        if(is_page('contacto')){
            
        }
        the_content();
    endwhile;
?> 