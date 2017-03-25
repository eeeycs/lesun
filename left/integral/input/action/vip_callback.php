<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from j_vip_callback order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];



$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");
$vip_card_number=$_POST['vip_card_number'];
$callback_person=$_POST['callback_person'];
$callback_content=$_POST['callback_content'];
$callback_shop=$service_shop_s;
$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];
$memo=$_POST['memo'];






$sql = "INSERT INTO `j_vip_callback`  VALUES (
'$serial_number',
'$date',
'$time',
'$vip_card_number',
'$callback_person',
'$callback_content',
'$callback_shop',
'$check_person',
'$check_shop',
'$memo'
);";

mysql_query($sql);
mysql_close();
echo "完成";
?>