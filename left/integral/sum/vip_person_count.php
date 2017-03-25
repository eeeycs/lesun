<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_person_count.css" type="text/css" />
<script type="text/javascript">
function date_se()
{
var start_date=document.getElementById('start_date').value;
var end_date=document.getElementById('end_date').value;
var href='vip_person_count.php?start_date='+start_date;
href=href+' & end_date='+end_date;
location.href=href;
}
</script>
</head>
<body>
<p>
  <?php
include("../../../include/link.php");$date=date("Y-m-d");

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
$start_date=(isset($_GET['start_date']))?$_GET['start_date']:$date;
$end_date=(isset($_GET['end_date']))?$_GET['end_date']:$date;

echo "起始日期：<input type='date' name='start_date' id='start_date' value=$start_date size='8'>";
echo "&nbsp;&nbsp;结束日期：<input type='date' name='end_date' id='end_date' value=$end_date size='8'>&nbsp;&nbsp;";
?>
  <input onClick="date_se()" type="button" value="查询">
<p>
</p>
<table  style='white-space: nowrap;'  border="1" cellspacing="0">
    <caption class="caption_bigtitle">
     VIP顾客统计汇总系统
    </caption>
    
  <tr>
    <td>注册日期</td>	
    <td>vip代码</td>	
    <td>顾客姓名</td>	
    <td>vip卡号</td>	
    <td>性别</td>
    <td>出生日期</td>	
    <td>总积分</td>	
    <td>总储值</td>	
    <td>最后消费日期</td>	
    <td>移动电话</td>	
    <td>家庭电话</td>	
    <td>电子邮件</td>	
    <td>地址</td>
  </tr>
   
<?php
include("../../../include/link.php");$sql_src="SELECT * FROM j_vip_data where ((date>='$start_date')and(date<='$end_date')) order by serial_number desc";
$result_src=mysql_query($sql_src);
while($row_src=mysql_fetch_array($result_src,MYSQL_BOTH))
{
echo "<tr>";
echo "<td>$row_src[date]</td>";
echo "<td>$row_src[vip_code]</td>";
echo "<td>$row_src[vip_name]</td>";
echo "<td>$row_src[vip_card_number]</td>";
echo "<td>$row_src[sex]</td>";
echo "<td>$row_src[birthdate]</td>";

$vip_card_number=$row_src['vip_card_number'];
$sql="SELECT integral FROM j_vip_integral_value where ((date>='$start_date')and(date<='$end_date')and(vip_card_number='$vip_card_number'))";
$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['integral'];
}
$sum_integral=$sum;

$sql="SELECT value FROM j_vip_integral_value where ((date>='$start_date')and(date<='$end_date')and(vip_card_number='$vip_card_number'))";
$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['value'];
}
$sum_value=$sum;

$sql="SELECT date FROM j_vip_integral_value where ((date>='$start_date')and(date<='$end_date')and(vip_card_number='$vip_card_number')) order by serial_number desc";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$last_expense_date=$row['date'];


echo "<td>$sum_integral</td>";
echo "<td>$sum_value</td>";
echo "<td>$last_expense_date</td>";



echo "<td>$row_src[phone_number]</td>";
echo "<td>$row_src[home_number]</td>";
echo "<td>$row_src[email]</td>";
echo "<td>$row_src[address]</td>";
echo "</tr>";

}


?>

</table>

</body>
</html>
