<?php
function table($table,$file_name,$operate,$serial_number)
{
@mysql_connect("localhost","root","123456") or die("error");
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db("system2");
date_default_timezone_set('Asia/Shanghai');

if($operate=='delete')
{
$sql_d="delete from $table where serial_number='$serial_number'";
mysql_query($sql_d);
}


if($operate=='update')
{

$sql="SELECT * FROM $table where serial_number='$serial_number'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$number_fields=mysql_num_fields($result);

echo "
<form action='action/$file_name.php' method='post' name='$file_name'>
<table style='white-space: nowrap;' border='1' cellspacing='0'>
    <caption class='caption_bigtitle'>
     修改
    </caption>
  <tr>";

for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result,$i);
echo "<td>$field_name</td>";
}
echo"</tr><tr>";
 
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result,$i);
echo"<td><input type='text' size='3' name='$field_name'  value='$row[$i]'></td>";
}


echo"
  </tr>
   <td><input class='btn btn-warning' type='submit' name='submit' id='submit' value='确认修改'></td>
  	<input name='serial_number_src' type='hidden' value='$serial_number'>
	<input name='operate' type='hidden' value='$operate'>
 </table>
</form>
";
}


if($operate=='select')
{
$sql="SELECT * FROM $table where serial_number='$serial_number'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$number_fields=mysql_num_fields($result);

echo "
<form action='action/$file_name.php' method='post' name='$file_name'>

<table style='white-space: nowrap;' border='1' cellspacing='0'>
    <caption class='caption_bigtitle'>
      查询
    </caption>
  <tr>";
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result,$i);
echo "<td>$field_name</td>";
}
echo"</tr><tr>";
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result,$i);
if($field_name=="date")
echo"<td><input type='text' size='3' name='$field_name'  value='$row[$i]'></td>";
else
echo"<td><input type='text' size='3' name='$field_name'  value=''></td>";
}

echo "
  </tr>
   <td><input class='btn btn-success' type='submit' name='submit' id='submit' value='查询'></td>
  	<input name='serial_number_src' type='hidden' value='$serial_number'>
	<input name='operate' type='hidden' value='$operate'>
 </table>
</form>
";	
}

}
?>

