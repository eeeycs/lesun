<?php
session_start();
?>
<?php
include("../../../../include/link.php");
$sql_s="select serial_number,vip_card_number from j_vip_data order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];
$vip_card_number=$row_s['vip_card_number'];


$date=date("Y-m-d");
$time=date("G:i:s");
$serial_number=$serial_number_s+1;
$vip_code=$serial_number_s+1;
$vip_name=$_POST['vip_name'];
$vip_card_number=($serial_number_s==0)?1000:$vip_card_number+1;;

$id_type=$_POST['id_type'];
$id_number=$_POST['id_number'];
$sex=$_POST['sex'];
$nation=$_POST['nation'];
$birthdate=$_POST['birthdate'];
$if_lunar=$_POST['if_lunar'];
$age_group=$_POST['age_group'];
$important_anniversary=$_POST['important_anniversary'];
$marital_status=$_POST['marital_status'];
$profession=$_POST['profession'];
$income=$_POST['income'];
$height=$_POST['height'];
$waistline=$_POST['waistline'];
$hobby=$_POST['hobby'];



$img_file=$_FILES['image'];
if(isset($img_file)&&is_uploaded_file($img_file['tmp_name']))
{
$up_err=$img_file['error'];
if($up_err==0)
{
$img_name=$img_file['name'];
$img_type=$img_file['type']; 
$img_size=$img_file['size'];
$img_tmp_name=$img_file['tmp_name'];
move_uploaded_file($img_tmp_name,'image/'.$img_name);
}
else
{
echo "文件上传失败<br>";
switch ($up_err)
{case 1:
echo "超过了php.ini中设置的上传文件大小";
break;
case 2:
echo "超过了MAX_FILE_SIZE选项指定的文件大小";
break;
case 3:
echo "文件只有部分被上传";
break;
case 4:
echo "文件未被上传";
break;
case 5:
echo "上传文件大小为0";
break;}
}
}
else
{

}
$image=$img_name;



$phone_number=$_POST['phone_number'];
$home_number=$_POST['home_number'];
$office_number=$_POST['office_number'];
$email=$_POST['email'];
$qq_number=$_POST['qq_number'];
$wechat_number=$_POST['wechat_number'];
$city=$_POST['city'];
$school=$_POST['school'];
$address=$_POST['address'];
$postcode=$_POST['postcode'];
$like_brand=$_POST['like_brand'];
$like_type=$_POST['like_type'];
$dress_style=$_POST['dress_style'];
$dress_color=$_POST['dress_color'];
$up_size=$_POST['up_size'];
$down_size=$_POST['down_size'];
$receive_price_down=$_POST['receive_price_down'];
$receive_price_up=$_POST['receive_price_up'];
$buy_odd_number=$_POST['buy_odd_number'];

$sql_s="select sell_date,drop_money,actual_money,ratio,service_person,service_shop from y_performance_input where (serial_number='$buy_odd_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$date_s=$row_s['sell_date'];
$drop_money_s=$row_s['drop_money'];
$actual_money_s=$row_s['actual_money'];
$ratio_s=$row_s['ratio'];

$service_person_s=$row_s['service_person'];
$service_shop_s=$row_s['service_shop'];
$service_person_a=explode(',',$service_person_s);
$service_shop_a=explode(',',$service_shop_s);
$service_person_c=count($service_person_a);
$service_shop_c=count($service_shop_a);


$buy_date=$date_s;
$buy_drop_money=$drop_money_s;
$buy_actual_money=$actual_money_s;
$ratio=$ratio_s;
$value_money=$_POST['value_money'];
$introduce_person=$_POST['introduce_person'];

$service_person=$service_person_s;
$service_shop=$service_shop_s;

$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];

$memo=$_POST['memo'];


$sql = "INSERT INTO `j_vip_data`  VALUES (
'$date',
'$time',
'$serial_number',
'$vip_code',
'$vip_name',
'$vip_card_number',	
'$id_type',
'$id_number',
'$sex',
'$nation',
'$birthdate',
'$if_lunar',
'$age_group	',
'$important_anniversary',
'$marital_status',
'$profession',
'$income',
'$height',
'$waistline',
'$hobby',
'$image	',
'$phone_number',
'$home_number',
'$office_number',
'$email	',
'$qq_number',
'$wechat_number',
'$city	',
'$school',
'$address',
'$postcode',
'$like_brand',
'$like_type',
'$dress_style',
'$dress_color',
'$up_size',
'$down_size',
'$receive_price_down',
'$receive_price_up',
'$buy_odd_number',
'$buy_date',
'$buy_drop_money',
'$buy_actual_money',
'$ratio',
'$value_money',
'$introduce_person',
'$service_person',
'$service_shop',
'$check_person',
'$check_shop',
'$memo'
);";

mysql_query($sql);


$sql_s="select serial_number from j_vip_integral_value order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];


$date=$date;	
$time=$time;	
$serial_number=$serial_number_s+1;	
$sell_odd_number=$buy_odd_number;	
$vip_card_number=$vip_card_number;	
$vip_code=$vip_code;	
$vip_name=$vip_name;	
$integral=$actual_money_s/10;
$value=$value_money;	
$service_person=$service_person_s;
$service_shop=$service_shop_s;
$memo=$memo;

$sql_i="INSERT INTO `j_vip_integral_value`  VALUES (
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

mysql_close();
echo "完成";
?>