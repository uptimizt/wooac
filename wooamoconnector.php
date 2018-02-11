<?php
/*
Plugin Name: WooAmoConnector
Plugin URI: https://github.com/uptimizt/wooamoconnector
Description: AmoCRM & WooCommerce - интеграция. Создание сделок и контактов с сайта в CRM
Author: WPCraft
Author URI: http://wpcraft.ru/?utm_source=wpplugin&utm_medium=plugin-link&utm_campaign=WooAmoConnector
Version: 1.0.0
*/

require_once 'inc/class-settings-api.php';
require_once 'inc/class-amocrm-api.php';
require_once 'inc/class-root-wooac.php';



//Add settings link
function wooac_add_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=wac-settings">Настройки</a>';
    array_unshift($links, $settings_link);
    return $links;
}
add_filter( "plugin_action_links_" . plugin_basename( __FILE__ ), 'wooac_add_settings_link' );
