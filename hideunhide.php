<?php
/**
 * Plugin Name: Hide/Unhide Menu for Guest/Member
 * Plugin URI: http://fred.my
 * Description: Hide/Unhide Menu for Guest/Member is a simple plugin that you can easily manage to hide or unhide menu for guest and member via css.
 * Version: 1.0.4
 * Author: Freddie Aziz Jasbindar
 * Author URI: http://www.facebook.com/FreddieAziz
 */

// Enqueue the CSS file
add_action('wp_enqueue_scripts', 'menu_style');
function menu_style()
{
    wp_register_style('hide_unhide', plugins_url('style.css', __FILE__));
    wp_enqueue_style('hide_unhide');
}

// Add a class to the body tag if the user is not logged in
add_filter('body_class', 'not_logged_in_class');
function not_logged_in_class($classes = '')
{
    if (!is_user_logged_in()) {
        $classes[] = 'not-logged-in';
    }
    return $classes;
}
?>