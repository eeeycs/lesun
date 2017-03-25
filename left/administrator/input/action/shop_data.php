<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from g_shop_data order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$date=date("Y-m-d");
$time=date("G:i:s");
$serial_number=$serial_number_s+1;	
$shop_code=$serial_number_s+1;	
$shop_name=$_POST['shop_name'];	
$shop_address=$_POST['shop_address'];
$start_date=$_POST['start_date'];	
$shop_status=$_POST['shop_status'];	
$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];
$memo=$_POST['memo'];



$sql = "INSERT INTO `g_shop_data` (`date`, `time`, `serial_number`, `shop_code`, `shop_name`, `shop_address`, `start_date`, `shop_status`, `check_person`, `check_shop`, `memo`) VALUES (
'$date',	
'$time',	
'$serial_number',	
'$shop_code',	
'$shop_name',	
'$shop_address',
'$start_date',	
'$shop_status',	
'$check_person',	
'$check_shop',	
'$memo'
);";



mysql_query($sql);
mysql_close();
echo "完成";
?>
