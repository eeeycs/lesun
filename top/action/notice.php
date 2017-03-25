<?php
session_start();
?>
<?php
include("../../include/link.php");$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];

$sql_s="select serial_number from e_notice order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");
$caption=$_POST['caption'];
$content=$_POST['content'];
$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];
$memo=$_POST['memo'];

$sql = "INSERT INTO e_notice VALUES (
'$serial_number',
'$date',
'$time',
'$caption',
'$content',
'$check_person',
'$check_shop',
'$memo'
);";

mysql_query($sql);
?>