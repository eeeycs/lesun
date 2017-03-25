<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from y_return_goods_money order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];



$serial_number=$serial_number_s+1;
$return_goods_money_odd_number=$_POST['return_goods_money_odd_number'];
$date=date("Y-m-d");
$time=date("G:i:s");

$sql_s="select exchange_goods_odd_number from y_exchange_goods where(exchange_goods_odd_number='$return_goods_money_odd_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$exchange_goods_odd_number_s=$row_s['exchange_goods_odd_number'];

$if_exchange_goods=($exchange_goods_odd_number_s==$return_goods_money_odd_number)?'yes':'no';

$sql_s="select vip_card_number from y_performance_input where(serial_number='$return_goods_money_odd_number')";
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

$return_money_way_p=$_POST['return_money_way'];
$return_money_money_p=$_POST['return_money_money'];
$return_money_way=implode(',',$return_money_way_p);
$return_money_money_c=count($return_money_money_p);
$return_money_money=0;
for($i=0;$i<$return_money_money_c;$i++)
{
$return_money_money=$return_money_money+$return_money_money_p[$i];
}

$value_return=0;
for($i=0;$i<$return_money_money_c;$i++)
{
if($return_money_way_p[$i]=="value_card")
{
$value_return=$return_money_money_p[$i];
}
}




$return_goods_money_integral=(-$return_money_money)/10;


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

$sql_s="select service_person,service_shop from y_performance_input where (serial_number='$return_goods_money_odd_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$service_person_s=$row_s['service_person'];
$service_shop_s=$row_s['service_shop'];

$service_person_a=explode(',',$service_person_s);
$service_shop_a=explode(',',$service_shop_s);
$service_person_c=count($service_person_a);
$service_shop_c=count($service_shop_a);


$weight_person=($service_person_c!=0)?(-$return_money_money/$service_person_c):0;
$weight_shop=($service_shop_c!=0)?(-$return_money_money/$service_shop_c):0;


$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];
$memo=$_POST['memo'];


$sql="INSERT INTO `y_return_goods_money`  VALUES (
'$serial_number',
'$return_goods_money_odd_number',
'$date',
'$time',
'$if_exchange_goods',
'$vip_card_number',
'$return_goods_money_integral',
'$account_balance',
'$return_money_way',
'$return_money_money',
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



$sql_s="select serial_number from y_performance_count order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];
for($i=0;$i<$service_person_c;$i++)
{
$serial_number_s=$serial_number_s+1;
$odd_number=$return_goods_money_odd_number;
$date=$date;
$time=$time;
$odd_numbers=0;
$piece_numbers=0;
$service_person=$service_person_a[$i];
$service_shop='';
$weight_person_2=$weight_person;
$weight_shop_2='';
$sql_i="INSERT INTO `y_performance_count` VALUES (
'$serial_number_s',
'$odd_number',
'$date',
'$time',
'$odd_numbers',
'$piece_numbers',
'$service_person',
'$service_shop',
'$weight_person_2',
'$weight_shop_2',
'$memo'
);";
mysql_query($sql_i);
}
for ($i=0;$i<$service_shop_c;$i++)
{
$serial_number_s=$serial_number_s+1;
$odd_number=$return_goods_money_odd_number;
$date=$date;
$time=$time;
$odd_numbers=0;
$piece_numbers=0;
$service_person='';
$service_shop=$service_shop_a[$i];
$weight_person_2='';
$weight_shop_2=$weight_shop;
$sql_i="INSERT INTO `y_performance_count` VALUES (
'$serial_number_s',
'$odd_number',
'$date',
'$time',
'$odd_numbers',
'$piece_numbers',
'$service_person',
'$service_shop',
'$weight_person_2',
'$weight_shop_2',
'$memo'
);";
mysql_query($sql_i);
}




$sql_s="select serial_number from j_vip_integral_value order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];
	
$sql_s="select vip_code,vip_name from j_vip_data where (vip_card_number='$vip_card_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$vip_code_s=$row_s['vip_code'];	
$vip_name_s=$row_s['vip_name'];


$date=$date;	
$time=$time;	
$serial_number=$serial_number_s+1;	
$sell_odd_number=$return_goods_money_odd_number;	
$vip_card_number=$vip_card_number;	

$vip_code=$vip_code_s;	
$vip_name=$vip_name_s;	
$integral=$return_goods_money_integral;	
$value=$value_return;	

$service_person=$service_person_s;
$service_shop=$service_shop_s;	
$memo=$memo;

$sql_i="INSERT INTO `j_vip_integral_value` VALUES (
'$date',	
'$time',	
'$serial_number',	
'$sell_odd_number',	
'$vip_card_number',	
'$vip_code',	
'$vip_name',	
'$integral',	
'$value',	
'$service_person',	
'$service_shop',	
'$memo'
);";
mysql_query($sql_i);









$sql_s="select serial_number from c_money order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$date=$date;
$time=$time;
$serial_number=$serial_number_s+1;
$sell_odd_number=$return_goods_money_odd_number;


$cash_return=0;
$cash_ticket_return=0;
$slot_card_return=0;
$value_card_return=0;
$integral_exchange_return=0;
$else_way_return=0;
for($i=0;$i<$return_money_money_c;$i++)
{
$cash_return=($return_money_way_p[$i]=='cash')?$return_money_money_p[$i]:$cash_return;
$cash_ticket_return=($return_money_way_p[$i]=='cash_ticket')?$return_money_money_p[$i]:$cash_ticket_return;
$slot_card_return=($return_money_way_p[$i]=='slot_card')?$return_money_money_p[$i]:$slot_card_return;
$value_card_return=($return_money_way_p[$i]=='value_card')?$return_money_money_p[$i]:$value_card_return;
$integral_exchange_return=($return_money_way_p[$i]=='integral_exchange')?$return_money_money_p[$i]:$integral_exchange_return;
$else_way_return=($return_money_way_p[$i]=='else_way')?$return_money_money_p[$i]:$else_way_return;
}

$cash=-$cash_return;
$cash_ticket=-$cash_ticket_return;
$slot_card=-$slot_card_return;
$value_card=-$value_card_return;
$integral_exchange=-$integral_exchange_return;
$else_way=-$else_way_return;

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
mysql_query($sql_i);


echo "完成";
?>