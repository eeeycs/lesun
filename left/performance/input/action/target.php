<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from y_target order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];




$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");
$enter_number_target_person=$_POST['enter_number_target_person'];
$dress_number_target_person=$_POST['dress_number_target_person'];
$performance_person=$_POST['performance_person'];
$enter_number_target_shop=$_POST['enter_number_target_shop'];
$dress_number_target_shop=$_POST['dress_number_target_shop'];
$performance_shop=$_POST['performance_shop'];

$sql_i="INSERT INTO `y_target`  VALUES (
'$serial_number',
'$date',
'$time',
'$enter_number_target_person',
'$dress_number_target_person',
'$performance_person',
'$enter_number_target_shop',
'$dress_number_target_shop',
'$performance_shop'
);";


mysql_query($sql_i);
echo "完成";
?>