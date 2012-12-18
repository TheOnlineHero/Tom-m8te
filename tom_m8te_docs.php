<style>
  table {
    border-collapse: collapse;
  }
  table td {
    border: 1px solid #000;
  }
  table th {
    text-align: left;
  }
</style>
<h2>Tom M8te</h2>
<div class="postbox " style="display: block; ">
<div class="inside">

		<table class="data">
		  <thead>
		    <tr>
		      <th>Method name</th>
		      <th>Parameters</th>
		      <th>Description</th>
		    </tr>
		  </thead>
			<tbody>	
        <tr>
          <td>
            tom_add_social_share_links($url)
          </td>
          <td>
            <p>$url = (string) The url of a site you wish for your users to share.</p>
          </td>
          <td>
            Creates a share website link for Facebook and Twitter.
          </td>
        </tr>

        <tr>
          <td>
            tom_create_table($table_name, $fields_array_with_datatype, $primary_key_array)
          </td>
          <td>
            <p>$table_name = (string) The name of table to create, without the prefix. The prefix is auto added in for you.</p>
            <p>$fields_array_with_datatype = (array) A named array of field names with datatype. For example: array("post_id mediumint(9) NOT NULL", "revision_id mediumint(9) NOT NULL")</p>
            <p>$primary_key_array = (array) A named array of primary key names. For example: array("post_id", "url")</p>
          </td>
          <td>
            Creates a MySQL database table. Returns a create table sql query object.
          </td>
        </tr>
        
        <tr>
          <td>
            tom_add_fields_to_table($table_name, $fields_array_with_datatype)
          </td>
          <td>
            <p>$table_name = (string) The name of table to edit, without the prefix. The prefix is auto added in for you.</p>
            <p>$fields_array_with_datatype = (array) A named array of fields to add to table with datatype. For example: array("post_id mediumint(9) NOT NULL", "revision_id mediumint(9) NOT NULL")</p>
          </td>
          <td>
            Adds fields to a MySQL Database table.  Returns a alter table sql query object.
          </td>
        </tr>

        <tr>
          <td>
            tom_insert_record($table_name, $insert_array)
          </td>
          <td>
            <p>$table_name = (string) The name of table to add records to, without the prefix. The prefix is auto added in for you.</p>
            <p>$insert_array = (array) A named array of data to insert (in column => value pairs). For example: array("post_id" => 40, "url" => "http://www.google.com.au")</p>
          </td>
          <td>
            Inserts data into the database.  Returns a insert sql query object.
          </td>
        </tr>

        <tr>
          <td>
            tom_update_record_by_id($table_name, $update_array, $id_column_name, $id)
          </td>
          <td>
            <p>$table_name = (string) The name of table you wish to update, without the prefix. The prefix is auto added in for you.</p>
            <p>$update_array = (array) A named array of data to update (in column => value pairs). For example: array("post_id" => 40, "url" => "http://www.google.com.au")</p>
            <p>$id_column_name = (string) Name of the primary key</p>
            <p>$id = (integer) The primary key id value of the record you wish to update.</p>
          </td>
          <td>
            Updates data in the database. Returns a update sql query object.
          </td>
        </tr>

        <tr>
          <td>
            tom_update_record($table_name, $update_array, $where_array)
          </td>
          <td>
            <p>$table_name = (string) The name of table you wish to update, without the prefix. The prefix is auto added in for you.</p>
            <p>$update_array = (array) A named array of data to update (in column => value pairs). For example: array("post_id" => 40, "url" => "http://www.google.com.au")</p>
            <p>$where_array = (array) A named array of WHERE clauses (in column => value pairs). For example: array("id" => 40, "post_id" => 10).</p>
          </td>
          <td>
            Similar to tom_update_record_by_id, but you have more control over which record to update. Returns a update sql query object.
          </td>
        </tr>
        
        <tr>
          <td>
            tom_delete_record_by_id($table_name, $id_column_name, $delete_id)
          </td>
          <td>
            <p>$table_name = (string) The name of table you wish to delete, without the prefix. The prefix is auto added in for you.</p>
            <p>$id_column_name = (string) The name of the primary key field.</p>
            <p>$delete_id = (integer) The primary key value of the record you wish to delete.</p>
          </td>
          <td>
            Deletes a record from the database. Returns a sql delete query object.
          </td>
        </tr>

        <tr>
          <td>
            tom_get_results($table_name, $fields_array, $where_array, $order_array, $limit)
          </td>
          <td>
            <p>$table_name = (string) The name of table you wish to display, without the prefix. The prefix is auto added in for you.</p>
            <p>$fields_array = (array) An array of field names will be selected as part of the sql query. For example: array("id", "name", "address").</p>
            <p>$where_array = (array) A named array of WHERE clauses (in column => value pairs). For example: array("id" => 40, "post_id" => 10).</p>
            <p>$order_array = (array)(optional) An array of fields you wish to order the records by with order direction. For example: array("id DESC", "name ASC"). If null, there will be no order.</p>
            <p>$limit = (integer)(optional) The number of records to limit by. If null, there is no limit and will select all records based on $where_array.</p>
          </td>
          <td>
            Select records from the database. Returns sql results object.
          </td>
        </tr>

        <tr>
          <td>
            tom_get_row_by_id($table_name, $fields_array, $id_column_name, $id)
          </td>
          <td>
            <p>$table_name = (string) The name of table you wish to display, without the prefix. The prefix is auto added in for you.</p>
            <p>$fields_array = (array) An array of field names will be selected as part of the sql query. For example: array("id", "name", "address").</p>
            <p>$id_column_name = (string) The name of the primary key field name.</p>
            <p>$id = (integer) The primary key id value of the record you wish to select.</p></p>
          </td>
          <td>
            Selects a record from the database. Returns one sql record result object.
          </td>
        </tr>

			</tbody>
		</table>

</div>
</div>

<?php tom_add_social_share_links("http://wordpress.org/extend/plugins/tom-m8te/"); ?>