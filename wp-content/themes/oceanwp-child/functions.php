<?php
// Quitter si l'accès direct n'est pas autorisé
if (!defined('ABSPATH')) exit;

// DÉBUT DE L'ACTION D'ENREGISTREMENT DU PARENT
// AUTO GÉNÉRÉ - Ne pas modifier ou supprimer les marqueurs de commentaire ci-dessus ou ci-dessous :

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

function child_theme_configurator_css()
{
    wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('font-awesome', 'simple-line-icons', 'oceanwp-style'));
}
add_action('wp_enqueue_scripts', 'child_theme_configurator_css'); // Utiliser wp_enqueue_scripts pour les styles

// Créer la fonction
function ajouter_lien_admin_menu($items, $args)
{
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajouter le lien admin au menu
        if ($args->theme_location == 'main_menu') {
            $lien_admin = '<li><a href="' . admin_url() . '">Admin</a></li>';
            $items .= $lien_admin;
        }
    }
    return $items;
}
// Ajouter le filtre
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);

// FIN DE L'ACTION D'ENREGISTREMENT DU PARENT
?>