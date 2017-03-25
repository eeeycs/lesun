<?php
session_start();
?>
<?php
include("../../../../include/link.php");




{
$sql_s="select serial_number from y_performance_input order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];




$serial_number=$serial_number_s+1;
$sell_date=date("Y-m-d");
$sell_time=date("G:i:s");
$if_vip="null";
$if_integral=$_POST['if_integral'];
$vip_card_number=$_POST['vip_card_number'];
$no_integral_reason=$_POST['no_integral_reason'];



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
//$piece_number=$actual_money_c;
$ratio=($drop_money!=0)?$actual_money/$drop_money:0;


$pay_way_p=$_POST['pay_way'];
$pay_money_p=$_POST['pay_money'];
$pay_way_c=count($pay_way_p);
$pay_money_c=count($pay_money_p);

$cash=0;
$cash_ticket=0;
$slot_card=0;
$value_card=0;
$integral_exchange=0;
$else_way=0;

for($i=0;$i<$pay_money_c;$i++)
{
$cash=($pay_way_p[$i]=='cash')?$pay_money_p[$i]:$cash;
$cash_ticket=($pay_way_p[$i]=='cash_ticket')?$pay_money_p[$i]:$cash_ticket;
$slot_card=($pay_way_p[$i]=='slot_card')?$pay_money_p[$i]:$slot_card;
$value_card=($pay_way_p[$i]=='value_card')?$pay_money_p[$i]:$value_card;
$integral_exchange=($pay_way_p[$i]=='integral_exchange')?$pay_money_p[$i]:$integral_exchange;
$else_way=($pay_way_p[$i]=='else_way')?$pay_money_p[$i]:$else_way;
}




$service_person_p=$_POST['service_person'];
$service_shop_p=$_POST['service_shop'];

$service_person_c=count($service_person_p);
$service_shop_c=count($service_shop_p);

$service_person=implode(',',$service_person_p);
$service_shop=implode(',',$service_shop_p);





$belong_shop_p=$_POST['belong_shop'];
$belong_shop=implode(',',$belong_shop_p);

{
$service_person_weight_p=$_POST['service_person_weight'];
$service_person_weight_c=count($service_person_weight_p);


$service_shop_weight_p=$_POST['service_shop_weight'];
$service_shop_weight_c=count($service_shop_weight_p);


$piece_p=$_POST['piece'];
$piece_c=count($piece_p);

//$piece=implode(',',$piece_p);
//echo $piece_p[1];

$average_service_person_weight=$_POST['average_service_person_weight'];
$average_service_shop_weight=$_POST['average_service_shop_weight'];
}

$piece_sum=0;
for($i=0;$i<$piece_c;$i++)
{
$piece_sum=$piece_sum+$piece_p[$i];
}


$weight_person=$actual_money;
$weight_shop=$actual_money;

$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];

$memo=$_POST['memo'];




$odd_number=$serial_number;
}//读取数据

{
$sql_i = "INSERT INTO `y_performance_input`  VALUES (
'$serial_number',
'$sell_date',
'$sell_time',
'$if_vip',
'$vip_card_number',
'$piece_sum',
'$drop_money',
'$actual_money',
'$ratio',
'$cash',
'$cash_ticket',
'$slot_card',
'$value_card',
'$integral_exchange',
'$else_way',
'$service_person',
'$service_shop',
'$weight_person',
'$weight_shop',
'$check_person',
'$check_shop',
'$belong_shop',
'$piece_sum',
'$memo'
);";
mysql_query($sql_i);
}//业绩



{
$sql_s="select serial_number from goods order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$odd_number=$odd_number;
$date=$sell_date;
$time=$sell_time;
$service_person=$service_person;
$service_shop=$service_shop;

$goods_belong_shop_r=$_POST['belong_shop'];
$goods_piece_r=$_POST['piece'];
$goods_drop_money_r=$_POST['drop_money'];
$goods_actual_money_r=$_POST['actual_money'];
$goods_rate_r=$_POST['rate'];
$goods_belong_shop_c=count($goods_belong_shop_r);

for($i=0;$i<$goods_belong_shop_c;$i++)
{
$serial_number_s=$serial_number_s+1;
$if_sum="no";

$goods_belong_shop=$goods_belong_shop_r[$i];
$goods_piece=$goods_piece_r[$i];
$goods_drop_money=$goods_drop_money_r[$i];
$goods_actual_money=$goods_actual_money_r[$i];
$goods_rate=$goods_rate_r[$i];



$sql_i="INSERT INTO `goods` VALUES (
'$serial_number_s',
'$odd_number',
'$date',
'$time',

'$if_sum',
'$goods_belong_shop',
'$goods_piece',
'$goods_drop_money',
'$goods_actual_money',
'$goods_rate',

'$service_person',
'$service_shop'
);";
mysql_query($sql_i);

}


$serial_number_s=$serial_number_s+1;
$if_sum="yes";

$goods_belong_shop="";
$goods_piece=$_POST['piece_sum'];
$goods_drop_money=$_POST['drop_money_sum'];
$goods_actual_money=$_POST['actual_money_sum'];
$goods_rate=$_POST['rate_sum'];

$sql_i="INSERT INTO `goods` VALUES (
'$serial_number_s',
'$odd_number',
'$date',
'$time',

'$if_sum',
'$goods_belong_shop',
'$goods_piece',
'$goods_drop_money',
'$goods_actual_money',
'$goods_rate',

'$service_person',
'$service_shop'
);";
mysql_query($sql_i);

	
	







}//商品



{
$sql_s="select serial_number from y_performance_count order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

for($i=0;$i<$service_person_c;$i++)
{
$serial_number_s=$serial_number_s+1;
$odd_number=$odd_number;
$date=$sell_date;
$time=$sell_time;

$odd_numbers=($service_person_c!=0)?1/$service_person_c:0;
$piece_numbers=($service_person_c!=0)?$piece_sum/$service_person_c:0;

$service_person=$service_person_p[$i];
$service_shop='';

if($average_service_person_weight=="yes")
$weight_person_2=$actual_money/$service_person_weight_c;
else
$weight_person_2=$service_person_weight_p[$i]*$actual_money;


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
$odd_number=$odd_number;
$date=$sell_date;
$time=$sell_time;

$odd_numbers=($service_shop_c!=0)?1/$service_shop_c:0;

//$piece_numbers=$piece_p[$i];
$piece_numbers=($service_shop_c!=0)?$piece_sum/$service_shop_c:0;

$service_person='';
$service_shop=$service_shop_p[$i];

$weight_person_2='';


if($average_service_shop_weight=="yes")
$weight_shop_2=$actual_money/$service_shop_weight_c;
else
$weight_shop_2=$service_shop_weight_p[$i]*$actual_money;



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

}//业绩统计


{

$sql_s="select serial_number from j_vip_integral_value order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];
	

$sql_s="select vip_card_number,vip_code,vip_name from j_vip_data where (vip_card_number='$vip_card_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$vip_card_number_s=$row_s['vip_card_number'];


$date=$sell_date;	
$time=$sell_time;	
$serial_number=$serial_number_s+1;	
$sell_odd_number=$odd_number;	
$vip_card_number=$vip_card_number;	

$vip_code=$row_s['vip_code'];	
$vip_name=$row_s['vip_name'];	
if($if_integral=='yes')
$integral=$actual_money/50;
else
$integral=0;


$value=-$value_card;	

$service_person=$check_person;
$service_shop=$check_shop;	
$memo=$no_integral_reason;



$sql_i="INSERT INTO `j_vip_integral_value`  VALUES (
'$date',	
'$time',	
'$serial_number',	
'$sell_odd_number',	
'$vip_card_number_s',	
'$vip_code',	
'$vip_name',	
'$integral',	
'$value',	
'$service_person',	
'$service_shop',	
'$memo'
);";

if($integral_exchange>0){
$integral=-$integral_exchange;
$sql_i2="INSERT INTO `j_vip_integral_value`  VALUES (
'$date',	
'$time',	
'$serial_number',	
'$sell_odd_number',	
'$vip_card_number_s',	
'$vip_code',	
'$vip_name',	
'$integral',	
'$value',	
'$service_person',	
'$service_shop',	
'$memo'
);";
mysql_query($sql_i2);
}

mysql_query($sql_i);




}//积分


{

$sql_s="select serial_number from c_money order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$date=$sell_date;
$time=$sell_time;
$serial_number=$serial_number_s+1;
$sell_odd_number=$odd_number;

$cash=$cash;
$cash_ticket=$cash_ticket;
$slot_card=$slot_card;
$value_card=$value_card;
$integral_exchange=$integral_exchange;
$else_way=$else_way;

$service_person=$check_person;
$service_shop=$check_shop;
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
}//财务

//echo "完成";
header("Location:../performance_input.php");
?>