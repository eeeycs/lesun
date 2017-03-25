<script src='../../../../js/calendar.js' type='text/javascript'>
</script>
<script src='../../../../js/cookie.js' type='text/javascript'>
</script>

<?php
session_start();
?>
<?php
include("../../../../include/link.php");

$sql_s="select serial_number from j_vip_birthdate order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];




$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");
$vip_card_number=$_POST['vip_card_number'];

$sql_s="select vip_code,vip_name,birthdate,if_lunar from j_vip_data where (vip_card_number='$vip_card_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$vip_code_s=$row_s['vip_code'];
$vip_name_s=$row_s['vip_name'];
$birthdate_s=$row_s['birthdate'];
$if_lunar=$row_s['if_lunar'];

$vip_code=$vip_code_s;
$vip_name=$_POST['vip_name'];
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

setcookie('year',year);
setcookie('month',month);
setcookie('day',day);

</script>
";

$birthdate_year=$_COOKIE["year"];
$birthdate_month=$_COOKIE["month"];
$birthdate_day=$_COOKIE["day"];

}


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


$gift_name=$_POST['gift_name'];
$gift_number=$_POST['gift_number'];
$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];
$memo=$_POST['memo'];



$sql = "INSERT INTO `j_vip_birthdate`  VALUES (
'$serial_number',
'$date',
'$time',
'$vip_card_number',
'$vip_code',
'$vip_name',
'$birthdate',
'$if_lunar',
'$birthdate_gap',
'$gift_name',
'$gift_number',	
'$check_person',
'$check_shop',
'$memo'
);";

if($vip_name==$vip_name_s)
{
mysql_query($sql);
}
else
{
echo "vip卡号与顾客姓名不符";
}

mysql_close();
echo "完成";
?>