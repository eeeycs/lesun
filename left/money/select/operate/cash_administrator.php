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
<?php
include("../../../../include/link.php");$operate=$_GET['operate'];
$serial_number=$_GET['serial_number'];



if($operate=='update')
{

$sql="SELECT * FROM `c_money` where serial_number='$serial_number'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);

echo "
<form action='action/cash_administrator.php' method='post' name='cash_administrator'>

<table style='white-space: nowrap;'  border='1'  cellspacing='0'>
    <caption class='caption_bigtitle'>
      财务查询管理修改系统
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
    <td>操作</td>
  </tr>
  
 <tr>
    <td><input type='text' size='3' name='date'  value='$row[date]'></td>
    <td><input type='text' size='3' name='time'  value='$row[time]'></td>
    <td><input type='text' size='3' name='serial_number'  value='$row[serial_number]'></td>
    <td><input type='text' size='3' name='sell_odd_number'  value='$row[sell_odd_number]'></td>
    <td><input type='text' size='3' name='cash'  value='$row[cash]'></td>
   
    <td><input type='text' size='3' name='service_person'  value='$row[service_person]'></td>
    <td><input type='text' size='3' name='service_shop'  value='$row[service_shop]'></td>
    <td><input type='text' size='3' name='memo'  value='$row[memo]'></td>

	
    <td><input type='submit' name='submit' id='submit' value='确认修改'></td>
  </tr>
  	<input name='serial_number_src' type='hidden' value='$serial_number'>
	<td><input type='hidden' size='3' name='cash_ticket'  value='$row[cash_ticket]'></td>
    <td><input type='hidden' size='3' name='slot_card'  value='$row[slot_card]'></td>
    <td><input type='hidden' size='3' name='value_card'  value='$row[value_card]'></td>
    <td><input type='hidden' size='3' name='integral_exchange'  value='$row[integral_exchange]'></td>
    <td><input type='hidden' size='3' name='else_way'  value='$row[else_way]'></td>
 </table>
</form>
";	
}

?>


</body>
</html>
