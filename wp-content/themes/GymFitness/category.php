<?php 
    get_header();
?> 
<main class="section contenedor">
<?php 
    $categoria=get_queried_object();
?>

<h2 class="text-primary text-center">Categoría: <?php echo $categoria->name; ?></h2>
<ul class="listado-grid">
    <?php 
        //consulta la bd | Da el acceso a la informacion, cada entrada la trata como post
        while( have_posts() ):
        the_post();
        get_template_part('template-parts/blog');
        endwhile;
    ?> 
</ul>
</main>
<?php 
    get_footer();
?>

