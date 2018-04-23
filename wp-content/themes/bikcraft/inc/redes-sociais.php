<?php
$contato = get_page_by_title('contato');
?>



<div class="grid-4 footer_redes">
	<h3>Redes Sociais</h3>
	<ul>
<?php
if (have_rows('redes_sociais',$contato)){
	while (have_rows('redes_sociais',$contato)){
		the_row();
		?>
		<li><a href="<?php the_sub_field('link_social');?>" target="_blank"><img src="<?php the_sub_field('imagem_social');?>" alt="<?php the_sub_field('nome_social');?>"></a></li>

		<?php
	}
}
?>

	</ul>
</div>

