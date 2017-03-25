<?php
function table($table,$file_name)
{
include("link.php");
$sql="SELECT * FROM $table order by serial_number DESC";
$result=mysql_query($sql);
$number=18;
$page=(isset($_GET['page']))?$_GET['page']:1; 
$sum_number=mysql_num_rows($result);
$number_fields=mysql_num_fields($result);
$page_number=ceil(($number!=0)?$sum_number/$number:0); 
$start_number=($page-1)*$number;
$result=mysql_query("select * from $table order by serial_number DESC limit $start_number,$number");
$sum_numbers=mysql_num_rows($result);
for ($i=0;$i<$number_fields;$i++) $sum_src[$i]=0;

while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
echo"<tr>";
echo"
<td>
	<a href='operate/$file_name.php?operate=delete&serial_number=$row[serial_number]'></a>
	<a href='operate/$file_name.php?operate=update&serial_number=$row[serial_number]'></a>
	<a class='btn btn-success btn-xs' href='operate/$file_name.php?operate=select&serial_number=$row[serial_number]'>查询</a>
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


echo"<div class='btn-group btn-group-xs'>";
if($page!=1 && $pages=$page-1) echo "<a class='btn btn-primary' href='$file_name.php?page=$pages'>上一页 </a>";
for($i=1;$i<=$page_number;$i++)echo "<a class='btn btn-info' href='$file_name.php?page=$i'>$i </a>";
if($page<$page_number && $pages=$page+1)echo "<a class='btn btn-primary' href='$file_name.php?page=$pages'>下一页</a>";
echo"</div>";
echo "<br>"; echo "<button class='btn btn-danger'>第";echo "$page";echo "页</butoon>";

}
?>