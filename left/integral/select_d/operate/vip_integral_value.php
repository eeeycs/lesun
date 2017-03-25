<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_integral_value.css" type="text/css" />
</head>
<body>
<?php
include("../../../../include/link.php");$operate=$_GET['operate'];
$serial_number=$_GET['serial_number'];
if($operate=='update')
{

$sql="SELECT * FROM `j_vip_integral_value` where serial_number='$serial_number'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);

echo "
<form action='action/vip_integral_value.php' method='post' name='performance_count'>

<table style='white-space: nowrap;'  border='1'  cellspacing='0'>
    <caption class='caption_bigtitle'>
      vip积分、储值查询管理修改系统
    </caption>
    <tr>
    <td>操作</td>
    <td>日期</td>
    <td>时间</td>	
    <td>流水号</td>	
    <td>销售单号</td>	
    <td>VIP卡号</td>	
    <td>顾客代码</td>	
    <td>顾客姓名</td>	
    <td>积分</td>
    <td>储值</td>
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
    <td><input type='text' size='3' name='vip_card_number'  value='$row[vip_card_number]'></td>	
    <td><input type='text' size='3' name='vip_code'  value='$row[vip_code]'></td>	
    <td><input type='text' size='3' name='vip_name'  value='$row[vip_name]'></td>	
    <td><input type='text' size='3' name='integral'  value='$row[integral]'></td>	
    <td><input type='text' size='3' name='value'  value='$row[value]'></td>	
    <td><input type='text' size='3' name='service_person'  value='$row[service_person]'></td>	
    <td><input type='text' size='3' name='service_shop'  value='$row[service_shop]'></td>	
    <td><input type='text' size='3' name='memo'  value='$row[memo]'></td>

	
    <td><input type='submit' name='submit' id='submit' value='确认修改'></td>
  </tr>
  	<input name='serial_number_src' type='hidden' value='$serial_number'>
 </table>
</form>
";	
}

?>


</body>
</html>
