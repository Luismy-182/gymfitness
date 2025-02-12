<?php 
    get_header();
?> 
<main>

<h1>desde index</h1>
    <?php 
        //consulta la bd | Da el acceso a la informacion, cada entrada la trata como post



        while( have_posts() ): the_post();
        the_title();
        the_content();
        endwhile;
    ?> 
</main>
<?php 
    get_footer();
?>



