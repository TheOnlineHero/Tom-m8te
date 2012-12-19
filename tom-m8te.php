<?php
/*
Plugin Name: Tom M8te
Plugin URI: http://wordpress.org/extend/plugins/tom-m8te/
Description: Tom-M8te provides useful functions that you can use in your plugins. Such as a nice function for adding social share links and database manipulation functions. 

Installation:

1) Install WordPress 3.4.2 or higher

2) Download the following file:

http://downloads.wordpress.org/plugin/tom-m8te.zip

3) Login to WordPress admin, click on Plugins / Add New / Upload, then upload the zip file you just downloaded.

4) Activate the plugin.

Version: 1.0
Author: TheOnlineHero - Tom Skroza
License: GPL2
*/
//  echo("<script language='javascript'>jQuery(window).keydown(function(e) {if (e.keyCode== 13 && e.ctrlKey) {alert('BOOO');}});</script>");

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

add_action('admin_menu', 'register_tom_m8te_page');

function register_tom_m8te_page() {
   add_menu_page('Tom M8te', 'Tom M8te', 'update_themes', 'tom-m8te/tom_m8te_docs.php', '',  '', 186);
}


function tom_add_social_share_links($url) {
	?>
	<a title="Share On Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo($url); ?>"><img style="width: 30px;" src="<?php echo(get_option("siteurl")); ?>/wp-content/plugins/tom-m8te/images/facebook.jpg" style="width: 30px;" /></a>
	<a title="Share On Twitter" target="_blank" href="http://twitter.com/intent/tweet?url=<?php echo($url); ?>"><img style="width: 30px;" src="<?php echo(get_option("siteurl")); ?>/wp-content/plugins/tom-m8te/images/twitter.jpg" style="width: 30px;" /></a>
	<?php
}

function tom_create_table($table_name, $fields_array_with_datatype, $primary_key_array) {
	global $wpdb;
  $table_name_prefix = $wpdb->prefix . $table_name;
  $fields_comma_separated = implode(",", $fields_array_with_datatype);
  $primary_key_comma_separated = implode(",", $primary_key_array);
  $primary_key_text = ", PRIMARY KEY  ($primary_key_comma_separated)";
  if (count($primary_key_array) > 1) {
    $primary_key_text = ", UNIQUE KEY ".$primary_key_array[0]." ($primary_key_comma_separated)";
  }
  
  $sql = "CREATE TABLE $table_name_prefix ($fields_comma_separated  $primary_key_text);";
  return dbDelta($sql);
}

function tom_add_fields_to_table($table_name, $fields_array_with_datatype) {
	global $wpdb;
	$table_name_prefix = $wpdb->prefix . $table_name;
	$fields_comma_separated = implode(",", $fields_array_with_datatype);
  $sql = "ALTER TABLE $table_name_prefix ADD $fields_comma_separated";
  return $wpdb->query($sql);
}

function tom_insert_record($table_name, $insert_array) {
	global $wpdb;
	$table_name_prefix = $wpdb->prefix.$table_name;
	return $wpdb->insert($table_name_prefix, $insert_array);
}

function tom_update_record_by_id($table_name, $update_array, $id_column_name, $id) {
	global $wpdb;
	$table_name_prefix = $wpdb->prefix.$table_name;
	return $wpdb->update($table_name_prefix, $update_array, array($id_column_name => $id));
}

function tom_update_record($table_name, $update_array, $where_array) {
	global $wpdb;
	$table_name_prefix = $wpdb->prefix.$table_name;
	return $wpdb->update($table_name_prefix, $update_array, $where_array);
}

function tom_delete_record_by_id($table_name, $id_column_name, $delete_id) {
	global $wpdb;
	$table_name_prefix = $wpdb->prefix.$table_name;
	return $wpdb->query($wpdb->prepare("DELETE FROM $table_name_prefix WHERE $id_column_name = %d", $delete_id));
}

function tom_get_results($table_name, $fields_array, $where_array, $order_array = array(), $limit = "") {
	global $wpdb;
	$table_name_prefix = $wpdb->prefix.$table_name;
	if ($fields_array == "*") {
		$fields_comma_separated = "*";
	} else {
		$fields_comma_separated = implode(",", $fields_array);
	}
	$order_sql = "";
	if (empty($order_array)) {
		$order_sql = "ORDER BY ".implode(",", $order_array);
	}
	$limit_sql = "";
	if ($limit != "") {
		$limit_sql = "LIMIT $limit";
	}
	return $wpdb->get_results("SELECT $fields_comma_separated FROM $table_name_prefix WHERE $where_array $order_sql $limit_sql");
}

function tom_get_row_by_id($table_name, $fields_array, $id_column_name, $id) {
	global $wpdb;
	$table_name_prefix = $wpdb->prefix.$table_name;
	$fields_comma_separated = implode(",", $fields_array);
	return $wpdb->get_row($wpdb->prepare("SELECT $fields_comma_separated FROM $table_name_prefix  WHERE $id_column_name = %d", $id));
}

?>