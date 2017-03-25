<?php
function insert($table,$file_name,$operate,$serial_number_src)
{
include("link.php");$sql="SELECT * FROM $table";
$result=mysql_query($sql);
$number_fields=mysql_num_fields($result);
$value='';
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result,$i);
$value=$value."'".$_POST[$field_name]."',";
}
$value=substr($value,0,strlen($value)-1);
$sql="INSERT INTO $table VALUES ($value);";
mysql_query($sql);
}
?>