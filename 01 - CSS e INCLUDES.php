<!-- CORRIGINDO THEMA PARA WORDPRESS-->

<!-- Correção do topo do CSS -->

/*
Theme Name: Up News
Theme URI: http://www.upinside.com.br
Description: Este tema foi desenvolvido no curso Desenvolvendo portais com Wordpress da UpInside!
Version: 1.0
Author: Robson V. Leite
Author URL: http://www.upinside.com.br
Tags: portal
*/

<!-- CORRIGINDO LINK PARA FOLHA DE ESTILO -->
<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>

<!--PEGA HEADER E FOOTER-->
<?php get_header();?>
<?php get_footer();?>

<!--PEGA SIDEBAR-->
<?php get_sidebar();?>

<!--PEGA ARQUIVO EXTERNO -->
<?php include (TEMPLATEPATH . '/arquivo.php'); ?>

<DOCUMENTAÇÂO>
Editor de temas no painel Wordpress