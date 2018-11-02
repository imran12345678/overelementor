<?php
/*
Plugin Name: demo Plugin
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     20160911
Author:      WordPress.org
Author URI:  https://developer.wordpress.org/
Text Domain: wporg
Domain Path: /languages
License:     GPL2
 
{Plugin Name} is free software: you can redistribute it and/or modify*/

//if the file is called directly , abort

if(!defined('WPINC'))
{
	die;

}

if(!defined('WPAC_PLUGIN_VERSION'))
{
	define('WPAC_PLUGIN_VERSION','1.0.0');
}
if(!defined('WPAC_PLUGIN_DIR'))
{
	define('WPAC_PLUGIN_DIR',plugin_dir_url( __FILE__ ));
}

if(!function_exists('wpac_my_plugin_function'))
{
	function wpac_my_plugin_function()
	{

	}
}

if(!function_exists('wpac_plugin_scripts'))
{
	function wpac_plugin_scripts()
	{
        wp_enqueue_script('wpac-js',WPAC_PLUGIN_DIR.'assets/js/main.js','jQuery','1.0.0',true);
         wp_enqueue_style('wpac-css',WPAC_PLUGIN_DIR.'assets/css/style.css');
	}
	add_action('wp_enqueue_scripts','wpac_plugin_scripts');
	add_action('wp_enqueue_styles','wpac_plugin_scripts');
}

function   wpac_register_menu_page()
{
   add_menu_page('WPAC like System','WPAC settings','manage_options','wpac-settings','wpac_settings_page_html','dashicons-thumbs-up','30');
}

add_action('admin_menu','wpac_register_menu_page');

function wpac_settings_page_html()
{
  if(!is_admin())
  {
  	return;
  } ?>
  <div class="wrap">
     <form action="options.php"  method="post" >
     	<?php 
     	settings_fields('wpac-settings');
     	do_settings_sections('wpac-settings');
     	submit_button('Save Changes');
       ?>

  	<?php
}?>
<?php 
function wpac_plugin_settings()
{
	register_setting('wpac-settings','wpac_like_btn_label');
	register_setting('wpac-settings','wpac_dislike_btn_label');
	add_settings_section('wpac_label_settings_section','WPAC Button Labels','wpac_plugin_settings_section_cb','wpac-settings');
	add_settings_field('wpac_like_label_field','Like Button Label','wpac_like_label_field_cb','wpac-settings','wpac_label_settings_section');
}
add_action('admin_init','wpac_plugin_settings');

function wpac_plugin_settings_section_cb()
{
	echo "<p>Define Button Labels</p>";
}




function wpac_like_label_field_cb()
{
    $setting = get_option('wpac_like_btn_label');
    print_r($setting);
    die;

    ?>

<input type="text" name="wpac_like_btn_label" value="<?php echo isset($setting) ? esc_attri($setting):"";?>">

    <?php
}