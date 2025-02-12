<?php 
    //consulta la bd | Da el acceso a la informacion, cada entrada la trata como post
    while( have_posts() ): the_post();
?>
    <h1 class="text-center text-primary"><?php the_title(); ?></h1> 
<?php 
    if(has_post_thumbnail()){
        the_post_thumbnail('full', array('class'=>'imagen-destacada'));
    }
    ?>
    <div class="meta-info">
        <p class="meta">
            <span>Por: </span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                <?php echo get_the_author_meta('display_name'); ?>
            </a>
        </p>
        <p class="meta">
            <span>
                categoria:
            </span>
            <?php the_category(', '); ?>
        </p>
        <p class="meta">
            <span>Fecha: </span>
            <?php the_time(get_option('date_format')); ?>
        </p>
        
    </div>
        <?php 
    the_content();
    endwhile;
?> 