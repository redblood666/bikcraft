<?php get_header(); ?>

<?php
    if (have_posts()){
        while (have_posts()){
            the_post();
?>

            <article>
                <section>
                    <div class="introducao-interna introducao-geral">
                        <div class="container">
                            <h1><?php the_title();?></h1>
                        </div>
                    </div>
                </section>


                <section class="container conteudo-geral">
                    <div class="grid-8">
	                    <?php the_content();?>
                    </div>
                </section>
            </article>

<?php
        }
    } else {
        /*echo("<p>"._e("Sorry, no posts matched your criteria.")."</p>");*/
        ?>
        <section class="introducao-interna introducao-geral">
            <div class="container">
                <h1>Página não encontrada</h1>
            </div>
        </section>
<?php
    }
?>

<?php get_footer(); ?>


