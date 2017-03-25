<?php
session_start();

?>

<?php
include("../../../include/link.php");

$birthdate_year=$_GET['y'];
$birthdate_month=$_GET['m'];
$birthdate_day=$_GET['d'];

$serial_number2=$_GET['serial'];
$date=$_GET['date'];
$time=$_GET['time'];
$vip_card_number=$_GET['vip_card_number'];
$vip_code=$_GET['vip_code'];
$vip_name=$_GET['vip_name'];
$birthdate=$_GET['birthdate'];
$if_lunar=$_GET['if_lunar'];
$memo='农历';

//echo json_encode($birthdate);




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




?>