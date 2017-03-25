<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_number_count.css" type="text/css" />
<script type="text/javascript">
function date_se()
{
var start_date=document.getElementById('start_date').value;
var end_date=document.getElementById('end_date').value;
var href='vip_number_count.php?start_date='+start_date;
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
     VIP数量统计汇总系统
    </caption>
    
  <tr>
      <td colspan="3">&nbsp;</td>
      <td colspan="5" align="center"><strong>有消费的数量</strong></td>
      <td colspan="5" align="center"><strong>无消费的数量</strong></td>
  </tr>
  <tr>
    <td>店铺名称</td>		
    <td>VIP数量</td>		
    <td>总消费数量</td>		
    <td>指定日期</td>	
    <td>一个月内</td>			
    <td>半年内</td>		
    <td>一年内</td>
    <td>两年内</td>	
    <td>指定日期内</td>		
    <td>一个月内</td>		
    <td>半年内</td>		
    <td>一年内</td>
    <td>两年内</td>		
  </tr>
<?php
include("../../../include/link.php");include("../../../include/person_performance.php");
echo "<tr>";
echo "<td>$service_shop_s</td>";

$sql_src="SELECT count(serial_number) FROM j_vip_data where(check_shop='$service_shop_s')";
$result_src=mysql_query($sql_src);
$row_src=mysql_fetch_array($result_src,MYSQL_BOTH);
$vip_count=$row_src[0];
echo "<td>$vip_count</td>";

$sql_src="SELECT count(distinct vip_card_number) FROM j_vip_integral_value where(check_shop like '%$service_shop_s%')";
$result_src=mysql_query($sql_src);
$row_src=mysql_fetch_array($result_src,MYSQL_BOTH);
$all_count=$row_src[0];
echo "<td>$all_count</td>";

$sql_src="SELECT count(distinct vip_card_number) FROM j_vip_integral_value where ((check_shop like '%$service_shop_s%')and (date>='$start_date')and(date<='$end_date'))";
$result_src=mysql_query($sql_src);
$row_src=mysql_fetch_array($result_src,MYSQL_BOTH);
$have_direct=$row_src[0];
echo "<td>$have_direct</td>";

$date_s=date_deal($date,"month",-1);
$sql_src="SELECT count(distinct vip_card_number) FROM j_vip_integral_value where ((check_shop like '%$service_shop_s%')and (date>='$date_s')and(date<='$date'))";
$result_src=mysql_query($sql_src);
$row_src=mysql_fetch_array($result_src,MYSQL_BOTH);
$have_1_month=$row_src[0];
echo "<td>$have_1_month</td>";

$date_s=date_deal($date,"month",-6);
$sql_src="SELECT count(distinct vip_card_number) FROM j_vip_integral_value where ((check_shop like '%$service_shop_s%')and (date>='$date_s')and(date<='$date'))";
$result_src=mysql_query($sql_src);
$row_src=mysql_fetch_array($result_src,MYSQL_BOTH);
$have_half_year=$row_src[0];
echo "<td>$have_half_year</td>";

$date_s=date_deal($date,"year",-1);
$sql_src="SELECT count(distinct vip_card_number) FROM j_vip_integral_value where ((check_shop like '%$service_shop_s%')and (date>='$date_s')and(date<='$date'))";
$result_src=mysql_query($sql_src);
$row_src=mysql_fetch_array($result_src,MYSQL_BOTH);
$have_one_year=$row_src[0];
echo "<td>$have_one_year</td>";

$date_s=date_deal($date,"year",-2);
$sql_src="SELECT count(distinct vip_card_number) FROM j_vip_integral_value where ((check_shop like '%$service_shop_s%')and (date>='$date_s')and(date<='$date'))";
$result_src=mysql_query($sql_src);
$row_src=mysql_fetch_array($result_src,MYSQL_BOTH);
$have_two_year=$row_src[0];
echo "<td>$have_two_year</td>";

$no_direct=$vip_count-$have_direct;
$no_1_month=$vip_count-$have_1_month;
$no_half_year=$vip_count-$have_half_year;
$no_one_year=$vip_count-$have_one_year;
$no_two_year=$vip_count-$have_two_year;

echo "<td>$no_direct</td>";
echo "<td>$no_1_month</td>";
echo "<td>$no_half_year</td>";
echo "<td>$no_one_year</td>";
echo "<td>$no_two_year</td>";
echo "</tr>";




?>

</table>

</body>
</html>
