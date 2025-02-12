<?php 
    //consulta la bd | Da el acceso a la informacion, cada entrada la trata como post
    while( have_posts() ): the_post();
        ?>
            <h1 class="text-center text-primary"><?php the_title(); ?></h1> 

            
        <?php 
        if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class'=>'imagen-destacada'));
             

         
            //obteniendo los campos de advance custom field
            $hora_inicio=get_field('hora_inicio');
            $hora_fin=get_field('hora_fin');

            ?>

            <!--mostrando los campos de advanced custom fields-->
            <p class="informacion-clase">
                
                <?php the_field('dias_clase');  ?> - <?php 
                      echo " ". $hora_inicio. " a " . $hora_fin; 
                ?>
            </p>
            
            <?php 
       
        }
        the_content();
    endwhile;
?> 