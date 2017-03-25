<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from c_money_clearing order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");
$service_shop=$service_shop_s;

$cash_sum=0;
$sql_s="select cash from c_money where (service_shop='$service_shop')";
$result_s=mysql_query($sql_s);
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
$cash_sum=$cash_sum+$row_s['cash'];	
}
$money_balance=$cash_sum;


$clearing_money=$_POST['clearing_money'];
$collect_person_code=$_POST['collect_person_code'];
$collect_person=$_POST['collect_person'];
$pay_person_code=$_POST['pay_person_code'];
$pay_person=$_POST['pay_person'];
$memo=$_POST['memo'];

$sql_s="select person_name from g_user_data where (person_code='$collect_person_code')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$collect_person_s=$row_s['person_name'];

$sql_s="select person_name from g_user_data where (person_code='$pay_person_code')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$pay_person_s=$row_s['person_name'];




$sql = "INSERT INTO `c_money_clearing` (`serial_number`,`date`, `time`, `service_shop`, `money_balance`, `clearing_money`, `collect_person_code`, `collect_person`, `pay_person_code`, `pay_person`, `memo`) VALUES (
'$serial_number',
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




$sql_s="select serial_number from c_money order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$date=$date;
$time=$time;
$serial_number=$serial_number_s+1;
$sell_odd_number=0;
$cash=-$clearing_money;
$cash_ticket=0;
$slot_card=0;
$value_card=0;
$integral_exchange=0;
$else_way=0;
$service_person=$service_person_s;
$service_shop=$service_shop_s;
$memo=$memo;

$sql_i="INSERT INTO `c_money` (`date`, `time`, `serial_number`, `sell_odd_number`, `cash`, `cash_ticket`, `slot_card`, `value_card`, `integral_exchange`, `else_way`, `service_person`, `service_shop`, `memo`) VALUES (
'$date',
'$time',
'$serial_number',
'$sell_odd_number',
'$cash',
'$cash_ticket',
'$slot_card',
'$value_card',
'$integral_exchange',
'$else_way',
'$service_person',
'$service_shop',
'$memo'
);";

if(($collect_person==$collect_person_s)&&($pay_person==$pay_person_s)&&$collect_person!=''&&$pay_person!='')
{
mysql_query($sql);
mysql_query($sql_i);
}
else
{
echo "收款人代码与收款人不符或缴款人代码与缴款人不符";	
}


mysql_close();
echo "完成";
?>