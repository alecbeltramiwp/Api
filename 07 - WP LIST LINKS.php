<!-- LIST LINKS
http://codex.wordpress.org/Template_Tags/wp_list_pages
http://codex.wordpress.org/Template_Tags/wp_list_categories
 -->
<!-- PAGE LINK / NOME / LI -->
<?php wp_list_pages('title_li='); ?>


<!-- CATEGORIA LINK -->
<?php $id_da_categoria = get_cat_id('CATEGORIA NAME'); $link_da_categoria = get_category_link($id_da_categoria); ?>