<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/cash_administrator.css" type="text/css" />
</head>
<body>
<table style='white-space: nowrap;'  border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      现金查询调整系统
    </caption>
  <tr>
    <td>操作</td>
    <td>日期</td>
    <td>时间</td>
    <td>流水号</td>
    <td>销售单号</td>
    <td>现金</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>备注</td>

  </tr>
<?php
include("../../../include/link.php");$sql="SELECT * FROM `c_money` order by serial_number DESC";
$result=mysql_query($sql);

$number=18;
$page=(isset($_GET['page']))?$_GET['page']:1; 
$sum_number=mysql_num_rows($result);
$number_fields=mysql_num_fields($result);
$page_number=ceil(($number!=0)?$sum_number/$number:0); 
$start_number=($page-1)*$number;
$result=mysql_query("select * from c_money order by serial_number DESC limit $start_number,$number");





while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
echo"
  <tr>
    <td>
	<a href='operate/cash_administrator.php?operate=update&serial_number=$row[serial_number]'>修改</a>
	</td>
    <td>$row[date]</td>	
    <td>$row[time]</td>	
    <td>$row[serial_number]</td>	
    <td>$row[sell_odd_number]</td>	
    <td>$row[cash]</td>	
    <td>$row[service_person]</td>	
    <td>$row[service_shop]</td>	
    <td>$row[memo]</td>	
  </tr>
  ";
}

echo "</table>";

if($page!=1 && $pages=$page-1) echo "<a href='cash_administrator.php?page=$pages'>上一页 </a>";
for($i=1;$i<=$page_number;$i++)echo "<a href='cash_administrator.php?page=$i'>$i </a>";
if($page<$page_number && $pages=$page+1)echo "<a href='cash_administrator.php?page=$pages'>下一页</a>";
echo "<br>"; echo "第";echo "$page";echo "页";

?>



</body>
</html>
