<?php
function table($table,$file_name,$operate,$serial_number_src)
{
	
@mysql_connect("localhost","root","123456") or die("error");
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db("system2");
date_default_timezone_set('Asia/Shanghai');



if($operate=='update')
{
$sql_d = "delete from $table where(serial_number='$serial_number_src')";
mysql_query($sql_d);
$sql="SELECT * FROM $table where serial_number='$serial_number_src'";
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


if($operate=="select")
{
$sql="SELECT * FROM $table where 1";
$sql2="SELECT * FROM $table";
$result2=mysql_query($sql2);
$number_fields=mysql_num_fields($result2);
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result2,$i);
if($_POST[$field_name]!="")
$sql=$sql." and($field_name like '$_POST[$field_name]')";
}
$sql=$sql." order by serial_number DESC";
$result=mysql_query($sql);

$number=18;
$page=(isset($_GET['page']))?$_GET['page']:1; 
$sum_number=mysql_num_rows($result);
$number_fields=mysql_num_fields($result);
$page_number=ceil(($number!=0)?$sum_number/$number:0); 
$start_number=($page-1)*$number;
//$sql=$sql." limit $start_number,$number";
$result=mysql_query($sql);
$sum_numbers=mysql_num_rows($result);


echo "
<table border='1' cellspacing='0' style='white-space: nowrap;'>
    <caption class='caption_bigtitle'>
      查询结果
    </caption>
  <tr>
  <td>操作</td>";
  
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result2,$i);
echo "<td>$field_name</td>";
}
echo"</tr>";

for ($i=0;$i<$number_fields;$i++) $sum_src[$i]=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
echo"<tr>";
echo"
<td>
	<a  class='btn btn-danger btn-xs' href='operate/../../$file_name.php?operate=delete&serial_number=$row[serial_number]'>删除</a>
	<a  class='btn btn-warning btn-xs' href='operate/../../$file_name.php?operate=update&serial_number=$row[serial_number]'>修改</a>
	<a class='btn btn-success btn-xs' href='operate/../../$file_name.php?operate=select&serial_number=$row[serial_number]'>查询</a>
</td>";


for ($i=0;$i<$number_fields;$i++)
{
echo"<td>$row[$i]</td>";
$sum_src[$i]=$sum_src[$i]+(float)$row[$i];
}
echo "</tr>";
}

echo "<tr>";
echo"<td><strong>合计</strong></td>";
for ($i=0;$i<$number_fields;$i++) echo"<td>$sum_src[$i]</td>";
echo "</tr>";

echo "<tr>";
echo"<td><strong>均值</strong></td>";
for ($i=0;$i<$number_fields;$i++) 
{
$sum_src[$i]=round(($sum_numbers!=0)?$sum_src[$i]/$sum_numbers:0,3);
echo"<td>$sum_src[$i]</td>";
}
echo "</tr>";


echo "</table>";



}
}
?>