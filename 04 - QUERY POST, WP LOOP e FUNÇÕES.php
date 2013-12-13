<!--QUERY POST -->
<!-- Excluir cat &cat= - ID -->
<!-- Apenas de uma cat $cat= ID-->
<!-- INICIO DO POST LIMIT showposts = 1 =  -->
<!-- LIMIT offset= 1 -->
<!-- CATEGORY NAME = category_name=Vídeo Aulas -->
<?php query_posts('showposts=1&cat=-1, -335');?>

<!-- ABRE O LOOP -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!--FECHA O LOOP -->
<?php endwhile; else:?>
<?php endif;?> 

<!--PEGA O LINK DO POST -->
<?php the_Permalink()?>

<!-- PEGA O TITULO DO POST -->
<?php the_title();?>

<!--PEGA DATA-->
<?php the_time('j M Y');?>

<!--INFORMA OS COMENTÁRIOS-->
<?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?>

<!-- CONSIÇÂO COM PLUGIN (wp views) -->
<?php if(function_exists('the_views')){the_views();}?>

<!-- CRIA UM CAMPO PERSONALIZADO -->
<?php $key="VARIAVEL";echo get_post_meta($post->ID,$key,true);?>

<!-- LIMITA PALAVRAS (Baixe o plugin The Excerpt re-reloaded)-->
<?php the_excerpt_rereloaded(NÚMERO DE LETRAS);?>


<DOCUMENTAÇÂO DO WORDPRESS>
http://codex.wordpress.org/Function_Reference/query_posts
http://codex.wordpress.org/pt-br:Template_Tags
http://codex.wordpress.org/Custom_Fields