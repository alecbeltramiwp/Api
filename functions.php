<?php

	add_theme_support( 'post-thumbnails' ); // Habilitando Miniaturas

	add_theme_support('menus'); //Basta inserir esse código no functions.php que já vai aparecer a opção Menu no Admin

	add_action( 'widgets_init', 'starkers_widgets_init' ); // Habilitando Widgets

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'menu-principal', 'Menu Principal' );
	register_nav_menu( 'menu-topo', 'Menu Topo' );
}

function starkers_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Flickr Gallery', 'starkers' ),
		'id' => 'primary-widget-area',
		'description' => __( 'Aqui é a Galeria da Home Flickr', 'starkers' ),
		'before_widget' => '<li>',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}

function excerpt($nChar, $sEnd) {
 
    $excerpt = get_the_excerpt();
 
    $excerpt = strlen($excerpt) > $nChar ? substr($excerpt, 0, $nChar) : $excerpt;
    $excerpt = substr($excerpt, 0, strrpos($excerpt, " "));
 
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt) . $sEnd;
 
    return '<p class="entry-excerpt">' . $excerpt . '</p>';
}

/* Registando Sidebar*/
    register_sidebar( array(
        'name' => 'Page Sidebar',/*estiqueta da sidebar*/
        'id' => 'page-sidebar',/*nome da sidebar , lembrando que não pode ter espaços e caracteres especiais neste item*/ 
        'description'   => 'Sidebar de Páginas',/*descrição da sidebar*/
        'before_widget' => '', /* item que vai Antes da Widget , eu costumo deixar em branco */
        'after_widget' => '', /* item que vai Depois da Widget , costumo deixar em branco */
        'before_title' => '<h1 class="pagetitle-sidebar">
	                		<span class="pagetitle-detail"><span></span></span>
	                		<strong>', /* item que vai Antes do título(name) do widget , costumo deixar em branco também */
        'after_title' => '</strong>
					        <span class="pagetitle-detail"><span></span></span>
					      </h1>', /* item que vai Depois do título(name) do widget , em branco para mim também */
    ) );

function get_id_by_post_name($post_name)
{
    global $wpdb;
    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$post_name."'");
    return $id;
}

add_filter('query_vars', 'customquery_vars' );
function customquery_vars( $qvars )
{
    $qvars[] = 'variavel'; //Exemplo: http://url.com.br/?variavel=
    return $qvars;
}

global $wp_query;
echo $wp_query->query_vars['variavel'];

?>