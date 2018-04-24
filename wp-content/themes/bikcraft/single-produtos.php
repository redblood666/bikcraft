<?php
// Template Name: Single Produtos
get_header();
?>

<?php
if (have_posts()){
	while (have_posts()){
		the_post();
		?>

		<?php
/*		include (TEMPLATEPATH . "/inc/introducao.php");
		*/?>

        <section class="container produto_item animar-interno">
            <div class="grid-11">
                <img src="<?php the_field('foto_produto1');?>" alt="Bikcraft <?php the_title();?>">
                <h2><?php the_title();?></h2>
            </div>
            <div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto');?>" alt="Icone <?php the_title();?>"></div>
            <div class="grid-8"><img src="<?php the_field('foto_produto2');?>" alt="Bikcraft <?php the_title();?>"></div>
            <div class="grid-8 produto_info">
                <p><?php the_content();?></p>
            </div>
        </section>

		<?php
		include (TEMPLATEPATH . "/inc/produtos-orcamento.php");
		?>


		<?php
	}
}
?>


<?php get_footer(); ?>