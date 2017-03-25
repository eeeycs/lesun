<?php

include("link.php");function person_performance($service_person_s,$start_date,$end_date)
{

$sql="SELECT weight_person FROM y_performance_count where ((service_person='$service_person_s')and(date>='$start_date')and(date<='$end_date'))";
$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['weight_person'];
}
$performance=$sum;


$sql="SELECT performance_person FROM y_target where ((date>='$start_date')and(date<='$end_date'))";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$performance_person=$row['performance_person'];
$control_rate=($performance_person!=0)?$performance/$performance_person:0;


$sql="SELECT weight_person FROM y_performance_count
where ((service_person='$service_person_s')and(date>='$start_date')and(date<='$end_date')
and (odd_number in (select serial_number from y_performance_input where (if_vip='yes')))
)";

$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['weight_person'];
}
$vip_performance=$sum;


$vip_percent=($performance!=0)?$vip_performance/$performance:0;
$not_vip_performance=$performance-$vip_performance;
$not_vip_percent=1-$vip_percent;


$sql="SELECT odd_numbers FROM y_performance_count where ((service_person='$service_person_s')and(date>='$start_date')and(date<='$end_date'))";
$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['odd_numbers'];
}
$odd_numbers=$sum;


$sql="SELECT piece_numbers FROM y_performance_count where ((service_person='$service_person_s')and(date>='$start_date')and(date<='$end_date'))";
$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['piece_numbers'];
}
$piece_number=$sum;



$performance_per_odd=($odd_numbers!=0)?$performance/$odd_numbers:0;
$performance_per_piece=($piece_number!=0)?$performance/$piece_number:0;
$piece_per_odd=($odd_numbers!=0)?$piece_number/$odd_numbers:0;


$sql="SELECT enter_number FROM y_enter_dress_number where ((belong_person='$service_person_s')and(date>='$start_date')and(date<='$end_date'))";
$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['enter_number'];
}
$enter_number=$sum;


$sql="SELECT dress_number FROM y_enter_dress_number where ((belong_person='$service_person_s')and(date>='$start_date')and(date<='$end_date'))";
$result=mysql_query($sql);
$sum=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
$sum=$sum+$row['dress_number'];
}
$dress_number=$sum;


$dress_rate=($enter_number!=0)?$dress_number/$enter_number:0;
$success_rate=($enter_number!=0)?$odd_numbers/$enter_number:0;


$result_a[0]=$performance;
$result_a[1]=$control_rate;
$result_a[2]=$vip_performance;
$result_a[3]=$vip_percent;
$result_a[4]=$not_vip_performance;
$result_a[5]=$not_vip_percent;
$result_a[6]=$odd_numbers;
$result_a[7]=$piece_number;
$result_a[8]=$performance_per_odd;
$result_a[9]=$performance_per_piece;
$result_a[10]=$piece_per_odd;
$result_a[11]=$dress_rate;
$result_a[12]=$success_rate;

return($result_a);

}

function date_deal($date_src,$type,$number)
{
if($type=="month")
{
$date_a=explode('-',$date_src);

$a=(int)$date_a[1]+$number;
$b=(int)$date_a[0];
if($a>12) 
{
$a=$a-12;
$b++;
}
if($a<1) 
{
$a=$a+12;
$b--;
}
$date_a[1]=(string)$a;
$date_a[0]=(string)$b;

$date_aim=implode('-',$date_a);
return ($date_aim);
}
if($type=="year")
{
$date_a=explode('-',$date_src);
(string)$date_a[0]=(int)$date_a[0]+$number;
$date_aim=implode('-',$date_a);
return ($date_aim);
}
if($type=="day")
{
$date_a=explode('-',$date_src);
(string)$date_a[2]=(int)$date_a[2]+$number;
$date_aim=implode('-',$date_a);
return ($date_aim);
}
}

?>
