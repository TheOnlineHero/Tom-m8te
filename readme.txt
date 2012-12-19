=== Tom M8te ===
Contributors: MMDeveloper
Donate link: 
Tags: plugin, plugins, MySQL, database, databases, helper, helpers, method, methods, crud
Requires at least: 3.3
Tested up to: 3.4
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Tom M8te is every developers m8te, making it a little easier to make a plugin.

== Description ==

Tom M8te provides useful functions that you can use in your plugins. Such as a nice function for adding social share links and database manipulation functions. 

The social links link to Facebook and Twitter share links. 

Facebook: https://www.facebook.com/sharer/sharer.php?u=

Twitter:  http://twitter.com/intent/tweet?url=


Functions:

-------------------------------------------------

tom_add_social_share_links($url)

$url = (string) The url of a site you wish for your users to share.

Creates a share website link for Facebook and Twitter.

-----------------------

tom_create_table($table_name, $fields_array_with_datatype, $primary_key_array)

$table_name = (string) The name of table to create, without the prefix. The prefix is auto added in for you.

$fields_array_with_datatype = (array) A named array of field names with datatype. For example: array("post_id mediumint(9) NOT NULL", "revision_id mediumint(9) NOT NULL")

$primary_key_array = (array) A named array of primary key names. For example: array("post_id", "url")
                 
Creates a MySQL database table. Returns a create table sql query object.
          
-----------------------       
        
tom_add_fields_to_table($table_name, $fields_array_with_datatype)
          
$table_name = (string) The name of table to edit, without the prefix. The prefix is auto added in for you.
            
$fields_array_with_datatype = (array) A named array of fields to add to table with datatype. For example: array("post_id mediumint(9) NOT NULL", "revision_id mediumint(9) NOT NULL")
          
Adds fields to a MySQL Database table.  Returns a alter table sql query object.
          
-----------------------       

tom_insert_record($table_name, $insert_array)
          
$table_name = (string) The name of table to add records to, without the prefix. The prefix is auto added in for you.
            
$insert_array = (array) A named array of data to insert (in column => value pairs). For example: array("post_id" => 40, "url" => "http://www.google.com.au")
          
Inserts data into the database.  Returns a insert sql query object.
          
-----------------------        

tom_update_record_by_id($table_name, $update_array, $id_column_name, $id)
          
$table_name = (string) The name of table you wish to update, without the prefix. The prefix is auto added in for you.
            
$update_array = (array) A named array of data to update (in column => value pairs). For example: array("post_id" => 40, "url" => "http://www.google.com.au")
            
$id_column_name = (string) Name of the primary key
            
$id = (integer) The primary key id value of the record you wish to update.
          
Updates data in the database. Returns a update sql query object.
          
-----------------------         

tom_update_record($table_name, $update_array, $where_array)
          
$table_name = (string) The name of table you wish to update, without the prefix. The prefix is auto added in for you.
            
$update_array = (array) A named array of data to update (in column => value pairs). For example: array("post_id" => 40, "url" => "http://www.google.com.au")
            
$where_array = (array) A named array of WHERE clauses (in column => value pairs). For example: array("id" => 40, "post_id" => 10).
          
Similar to tom_update_record_by_id, but you have more control over which record to update. Returns a update sql query object.
          
-----------------------         
        
tom_delete_record_by_id($table_name, $id_column_name, $delete_id)
          
$table_name = (string) The name of table you wish to delete, without the prefix. The prefix is auto added in for you.
            
$id_column_name = (string) The name of the primary key field.
            
$delete_id = (integer) The primary key value of the record you wish to delete.
          
Deletes a record from the database. Returns a sql delete query object.
          
-----------------------        

tom_get_results($table_name, $fields_array, $where_array, $order_array, $limit)
          
$table_name = (string) The name of table you wish to display, without the prefix. The prefix is auto added in for you.
            
$fields_array = (array) An array of field names will be selected as part of the sql query. For example: array("id", "name", "address").
            
$where_array = (array) A named array of WHERE clauses (in column => value pairs). For example: array("id" => 40, "post_id" => 10).
            
$order_array = (array)(optional) An array of fields you wish to order the records by with order direction. For example: array("id DESC", "name ASC"). If null, there will be no order.
            
$limit = (integer)(optional) The number of records to limit by. If null, there is no limit and will select all records based on $where_array.
          
Select records from the database. Returns sql results object.
          
-----------------------        

tom_get_row_by_id($table_name, $fields_array, $id_column_name, $id)
          
$table_name = (string) The name of table you wish to display, without the prefix. The prefix is auto added in for you.
            
$fields_array = (array) An array of field names will be selected as part of the sql query. For example: array("id", "name", "address").
            
$id_column_name = (string) The name of the primary key field name.
            
$id = (integer) The primary key id value of the record you wish to select.
          
Selects a record from the database. Returns one sql record result object.
          

== Installation ==

1) Install WordPress 3.4.2 or higher

2) Download the following file:
http://downloads.wordpress.org/plugin/tom-m8te.1.0.zip

3) Login to WordPress admin, click on Plugins / Add New / Upload, then upload the zip file you just downloaded.

4) Activate the plugin.

== Changelog ==

== Upgrade notice ==
