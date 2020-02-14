<?php 

//Menus de navegacion, agregar más utilizando el arreglo
function gymfitness_menus(){
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'gymfitness' )
        //menu-principal es lo que entiende wordpress y Menu Principal lo que vera el usuario, 
        //__( 'Lo que el usuario entiende', 'El Text Domain' )
    ));
}
add_action('init', 'gymfitness_menus');

//Scripts y styles
function gymfitness_scripts_styles(){
    //La hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
//wp_enqueue_scripts es una funcion propia de wordpress que debe ser llamado en el header.php con la funcion wp_head();

?>