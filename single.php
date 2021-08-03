<?php 
    get_header();
?>

<article>
    <h1><?php the_title();?></h1>
    <h3>
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part('template-parts/content', 'article');
            }
        }
        ?>
    </h3>
</article>

<?php
    get_footer();
?>