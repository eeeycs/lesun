<?php
session_start();
?>
<script src='../../../js/calendar.js' type='text/javascript'>
</script>
<script src='../../../js/cookie.js' type='text/javascript'>
</script>
<script src='../../../js/jquery-2.1.1.js' type='text/javascript'>
</script>

<script type='text/javascript'>

</script>

<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_birthdate_list.css" type="text/css" />
</head>
<body>
<table style='white-space: nowrap;'  border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      近期生日查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>流水号</td>  
    <td>日期</td>
    <td>时间</td>
    <td>VIP卡号</td>
    <td>顾客代码</td>	
    <td>顾客姓名</td>
    <td>出生日期</td>	
    <td>是否农历</td>	
    <td>生日差距</td>	
    <td>备注</td>
  </tr>
<?php
function table($table,$file_name)
{
include("../../../include/link.php");


$sql_s="select serial_number from $table order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];




$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");


$sql_s3="select date from $table order by date desc limit 1";
$result_s3=mysql_query($sql_s3);
$row_s3=mysql_fetch_array($result_s3,MYSQL_BOTH);

$dates3=$row_s3['date'];

if($date<>$dates3)
{
mysql_query("TRUNCATE TABLE j_vip_birthdate_list");

echo "new";

$sql_s="select vip_card_number,vip_code,vip_name,birthdate,if_lunar from j_vip_data";
$result_s=mysql_query($sql_s);
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))

{
$sql_s2="select serial_number from j_vip_birthdate_list order by serial_number desc limit 1";
$result_s2=mysql_query($sql_s2);
$row_s2=mysql_fetch_array($result_s2,MYSQL_BOTH);
$serial_number_s22=$row_s2['serial_number'];
$serial_number2=$serial_number_s22+1;

//echo $serial_number2;


$vip_card_number=$row_s['vip_card_number'];
$vip_name=$row_s['vip_name'];

$vip_code_s=$row_s['vip_code'];
$birthdate_s=$row_s['birthdate'];
$if_lunar=$row_s['if_lunar'];

$vip_code=$vip_code_s;
$birthdate=$birthdate_s;



$birthdate_year=substr($birthdate,0,4);
$birthdate_month=substr($birthdate,5,2);
$birthdate_day=substr($birthdate,8,2);


if($if_lunar=='yes')
{
echo"
<script type='text/javascript'>
var solar = calendar.lunar2solar($birthdate_year,$birthdate_month,$birthdate_day);
var year=solar.sYear;
var month=solar.sMonth;
var day=solar.sDay;



$.ajax({
   url: 'action.php',  
   type: 'GET',
   dataType: 'json',
   data:{
	   y:year,
	   m:month,
	   d:day,
	    serial:'$serial_number2',
  		date:'$date',
 		time:'$time',
  		vip_card_number:'$vip_card_number',
  		vip_code:'$vip_code',
  		vip_name:'$vip_name',
  		birthdate:'$birthdate',
  		if_lunar:'$if_lunar'

		
	   },
   error: function(){ 
   	//document.write('eee');
    },  
   success: function(data){   
   	//document.write(data);
     }
});

</script>
";
}

  
 
else
{

$date_year=substr($date,0,4);
$date_month=substr($date,5,2);
$date_day=substr($date,8,2);





$month_diff=$birthdate_month-$date_month;
$day_diff=$birthdate_day-$date_day;

if($month_diff==0)
{
	if($day_diff>0)
	{
	$birthdate_gap="还有".$day_diff."天";
	}
	if($day_diff==0)
	{
	$birthdate_gap="今天";
	}
	if($day_diff<0)
	{
	$birthdate_gap="还有12月";
	}	
}
if($month_diff>0)
{
	$birthdate_gap="还有".$month_diff."月";
}
if($month_diff<0)
{
	$month_diff=12+$month_diff;
	$birthdate_gap="还有".$month_diff."月";
}


$memo="";


$sql = "INSERT INTO `j_vip_birthdate_list`  VALUES (
'$serial_number2',
'$date',
'$time',
'$vip_card_number',
'$vip_code',
'$vip_name',
'$birthdate',
'$if_lunar',
'$birthdate_gap',
'$memo'
);";


mysql_query($sql);


}


}
}
  

{

$sql="SELECT * FROM $table where birthdate_gap like '%天%'  order by serial_number DESC";
$result=mysql_query($sql);
$number=18;

$page=(isset($_GET['page']))?$_GET['page']:1; 
$sum_number=mysql_num_rows($result);

$number_fields=mysql_num_fields($result);

$page_number=ceil(($number!=0)?$sum_number/$number:0); 

$start_number=($page-1)*$number;

$sql1="SELECT * FROM $table where birthdate_gap like '%天%' order by serial_number DESC limit $start_number,$number";

$result=mysql_query($sql1);

$sum_numbers=mysql_num_rows($result);

for ($i=0;$i<$number_fields;$i++) $sum_src[$i]=0;

while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
echo"<tr>";
echo"<td></td>";

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

if($page!=1 && $pages=$page-1) echo "<a href='$file_name.php?page=$pages'>上一页 </a>";
for($i=1;$i<=$page_number;$i++)echo "<a href='$file_name.php?page=$i'>$i </a>";
if($page<$page_number && $pages=$page+1)echo "<a href='$file_name.php?page=$pages'>下一页</a>";
echo "<br>"; echo "第";echo "$page";echo "页";
}

}
table('j_vip_birthdate_list','vip_birthdate_list');

?>
</body>
</html>
