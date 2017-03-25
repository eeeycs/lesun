<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/person_performance.css" type="text/css" />
<script type="text/javascript">
function date_se()
{
var start_date=document.getElementById('start_date').value;
var end_date=document.getElementById('end_date').value;
var href='person_performance.php?start_date='+start_date;
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
      个人业绩汇总系统
    </caption>
    
  <tr>
    <td><strong><font color="#660066"><?php echo $service_person_s; ?></font></strong></td>
    <td>业绩</td>
    <td>达标率</td>	
    <td>VIP业绩</td>	
    <td>vip占比</td>	
    <td>非VIP业绩	</td>	
    <td>非vip占比	</td>	
    <td>单数</td>		
    <td>件数</td>		
    <td>客单价</td>		
    <td>商品单价</td>		
    <td>CS值</td>	
    <td>试衣率</td>		
    <td>成交率</td>	
  </tr>
   
<?php
include("../../../include/person_performance.php");


$result_src=person_performance($service_person_s,$start_date,$end_date);
echo "<tr>";
echo "<td>指定项目</td>";
for ($i=0;$i<=12;$i++) echo "<td>$result_src[$i]</td>";
echo "</tr>";

$sql="SELECT person_name FROM g_user_data where(belong_shop='$service_shop_s')";
$result=mysql_query($sql);
$i=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$rank_all[$i]=person_performance($row['person_name'],$start_date,$end_date);
$i++;
}
for($k=0;$k<=12;$k++) $rank_result[$k]=1;
for($k=0;$k<=12;$k++)
{
for($j=0;$j<$i;$j++)
{

if($rank_all[$j][$k]>$result_src[$k])
{$rank_result[$k]=$rank_result[$k]+1;}
}
}
echo "<tr>";
echo "<td>店铺排名</td>";
for ($i=0;$i<=12;$i++) echo "<td>$rank_result[$i]</td>";
echo "</tr>";


$sql="SELECT person_name FROM g_user_data";
$result=mysql_query($sql);
$i=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$rank_all[$i]=person_performance($row['person_name'],$start_date,$end_date);
$i++;
}
for($k=0;$k<=12;$k++) $rank_result[$k]=1;
for($k=0;$k<=12;$k++)
{
for($j=0;$j<$i;$j++)
{

if($rank_all[$j][$k]>$result_src[$k])
{$rank_result[$k]=$rank_result[$k]+1;}
}
}
echo "<tr>";
echo "<td>公司排名</td>";
for ($i=0;$i<=12;$i++) echo "<td>$rank_result[$i]</td>";
echo "</tr>";


$result_last_month=person_performance($service_person_s,date_deal($start_date,"month",-1),date_deal($end_date,"month",-1));
echo "<tr>";
echo "<td>上月环比</td>";
for ($i=0;$i<=12;$i++) echo "<td>$result_last_month[$i]</td>";
echo "</tr>";

$result_last_year=person_performance($service_person_s,date_deal($start_date,"year",-1),date_deal($end_date,"year",-1));
echo "<tr>";
echo "<td>去年同比</td>";
for ($i=0;$i<=12;$i++) echo "<td>$result_last_year[$i]</td>";
echo "</tr>";

?>

</table>

</body>
</html>
