<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_wordpressPlugin = new TrustindexPlugin_wordpressPlugin("wordpressPlugin", __FILE__, "12.4.1", "Widgets for Wordpress Reviews", "Wordpress Plugin");
$trustindex_pm_wordpressPlugin->uninstall();
?>