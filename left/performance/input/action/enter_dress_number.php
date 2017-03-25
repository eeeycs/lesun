<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from y_enter_dress_number order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");
$enter_number=$_POST['enter_number'];
$dress_number=$_POST['dress_number'];
$belong_person=$_POST['check_person'];
$belong_shop=$_POST['check_shop'];



$sql="INSERT INTO `y_enter_dress_number` (`serial_number`, `date`, `time`, `enter_number`,`dress_number`, `belong_person`, `belong_shop`) VALUES (
'$serial_number',
'$date',
'$time',
'$enter_number',
'$dress_number',
'$belong_person',
'$belong_shop');";

mysql_query($sql);
echo "完成";
?>