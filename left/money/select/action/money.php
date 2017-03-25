<?php
session_start();
?>
<?php
include("../../../../include/link.php");$date=date("Y-m-d");
$time=date("G:i:s");
$service_shop='s';
$money_balance='s';
$clearing_money=$_POST['clearing_money'];
$collect_person_code=$_POST['collect_person_code'];
$collect_person=$_POST['collect_person'];
$pay_person_code=$_POST['pay_person_code'];
$pay_person=$_POST['pay_person'];
$memo=$_POST['memo'];




$sql = "INSERT INTO `c_money_clearing` (`date`, `time`, `service_shop`, `money_balance`, `clearing_money`, `collect_person_code`, `collect_person`, `pay_person_code`, `pay_person`, `memo`) VALUES (
'$date',
'$time',
'$service_shop',
'$money_balance',
'$clearing_money',
'$collect_person_code',
'$collect_person',
'$pay_person_code',
'$pay_person',
'$memo'
);";

mysql_query($sql);
mysql_close();
?>