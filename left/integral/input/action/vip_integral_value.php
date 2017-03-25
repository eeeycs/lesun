<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from j_vip_integral_value order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];




$date=date("Y-m-d");
$time=date("G:i:s");
$serial_number=$serial_number_s+1;
$sell_odd_number=0;
$vip_card_number=$_POST['vip_card_number'];

$sql_s="select vip_code,vip_name from j_vip_data where (vip_card_number='$vip_card_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$vip_code_s=$row_s['vip_code'];
$vip_name_s=$row_s['vip_name'];

$vip_code=$vip_code_s;
$vip_name=$_POST['vip_name'];
$integral=$_POST['integral'];
$value=$_POST['value'];
$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];
$memo=$_POST['memo'];




$sql = "INSERT INTO `j_vip_integral_value` VALUES (
'$date',
'$time',
'$serial_number',
'$sell_odd_number',
'$vip_card_number',
'$vip_code',
'$vip_name',
'$integral',
'$value	',
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