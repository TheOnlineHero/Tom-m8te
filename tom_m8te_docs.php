<style>
  table td {
    border-right: 1px solid #000;
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
            <p>$url = url of a site you wish for your users to share.</p>
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
            <p>$table_name = name of table to create, without the prefix. The prefix is auto added in for you.</p>
            <p>$fields_array_with_datatype = array of field names with datatype. For example: array("post_id mediumint(9) NOT NULL", "revision_id mediumint(9) NOT NULL")</p>
            <p>$primary_key_array = array of primary key names. For example: array("post_id", "url")</p>
          </td>
          <td>
            Creates a Mysql database table.
          </td>
        </tr>
        
        <tr>
          <td>
            tom_add_fields_to_table($table_name, $fields_array_with_datatype)
          </td>
          <td>
            <p>$table_name = name of table to edit, without the prefix. The prefix is auto added in for you.</p>
            <p>$fields_array_with_datatype = array of fields to add to table with datatype. For example: array("post_id mediumint(9) NOT NULL", "revision_id mediumint(9) NOT NULL")</p>
          </td>
          <td>
            Adds fields to a Mysql Database table.
          </td>
        </tr>

        <tr>
          <td>
            tom_insert_record($table_name, $insert_array)
          </td>
          <td>
            <p>$table_name = name of table to add records to, without the prefix. The prefix is auto added in for you.</p>
            <p>$insert_array = array of data to insert. Make sure the key is the field name, and the value is the value to insert. For example: array("post_id" => 40, "url" => "http://www.google.com.au")</p>
          </td>
          <td>
            Inserts data into the database.
          </td>
        </tr>
        

        
			</tbody>
		</table>

</div>
</div>

<?php tom_add_social_share_links("http://wordpress.org/extend/plugins/tom-m8te/"); ?>