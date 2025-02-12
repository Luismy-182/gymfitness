<?php 
    get_header();
?> 
<main class="section contenedor">

<ul class="listado-grid">
    <?php 
        //consulta la bd | Da el acceso a la informacion, cada entrada la trata como post
        while( have_posts() ):
        the_post();
        get_template_part('template-parts/blog');
        endwhile;
    ?> 
</ul>
<?php 
    the_posts_pagination();
?>
</main>
<?php 
    get_footer();
?>

