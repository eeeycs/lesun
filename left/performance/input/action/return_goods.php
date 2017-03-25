<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from y_return_goods order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$serial_number=$serial_number_s+1;
$return_goods_odd_number=$_POST['return_goods_odd_number'];
$date=date("Y-m-d");
$time=date("G:i:s");

$sql_s="select exchange_goods_odd_number from y_exchange_goods where(exchange_goods_odd_number='$return_goods_odd_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$exchange_goods_odd_number_s=$row_s['exchange_goods_odd_number'];

$if_exchange_goods=($exchange_goods_odd_number_s==$return_goods_odd_number)?'yes':'no';

$sql_s="select vip_card_number from y_performance_input where(serial_number='$return_goods_odd_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$vip_card_number_s=$row_s['vip_card_number'];

$vip_card_number=$vip_card_number_s;

$sql_s="select integral from j_vip_integral_value where(vip_card_number='$vip_card_number')";
$result_s=mysql_query($sql_s);
$sum_integral=0;
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
$sum_integral=$sum_integral+$row_s['integral'];
}

$account_balance=$sum_integral;



$if_return_whole_odd=$_POST['if_return_whole_odd'];


$drop_money_p=$_POST['drop_money'];
$actual_money_p=$_POST['actual_money'];
$drop_money_c=count($drop_money_p);
$actual_money_c=count($actual_money_p);
$drop_money=0;
$actual_money=0;
for($i=0;$i<$actual_money_c;$i++)
{
$drop_money=$drop_money+$drop_money_p[$i];	
$actual_money=$actual_money+$actual_money_p[$i];
}
$piece_number=$actual_money_c;
$ratio=($drop_money!=0)?$actual_money/$drop_money:0;



$return_goods_integral=0;


$sql_s="select service_person,service_shop from y_performance_input where (serial_number='$return_goods_odd_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$service_person_s=$row_s['service_person'];
$service_shop_s=$row_s['service_shop'];
$weight_person=0;
$weight_shop=0;



$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];
$memo=$_POST['memo'];


$sql="INSERT INTO `y_return_goods`  VALUES (
'$serial_number',
'$return_goods_odd_number',
'$date',
'$time',
'$if_exchange_goods',
'$vip_card_number',
'$return_goods_integral',
'$account_balance',
'$if_return_whole_odd',
'$piece_number',
'$drop_money',
'$actual_money',
'$ratio',
'$service_person_s',
'$service_shop_s',
'$weight_person',
'$weight_shop',
'$check_person',
'$check_shop',
'$memo');";

mysql_query($sql);
echo "完成";
?>