<?php
session_start();
?>
<?php
include("../../../../include/link.php");$sql_s="select serial_number from g_user_data order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$date=date("Y-m-d");
$time=date("G:i:s");
$serial_number=$serial_number_s+1;
$person_code=$serial_number_s+1;	
$person_name=$_POST['person_name'];
$belong_shop=$_POST['belong_shop'];
$duty=$_POST['duty'];	
$permission=$_POST['permission'];
$status=$_POST['status'];
$star_date=$_POST['star_date'];
$end_date='0000-00-00';
$end_reason='';	
$last_login_date='0000-00-00';		
$certificate_type=$_POST['certificate_type'];
$certificate_number=$_POST['certificate_number'];
$sex=$_POST['sex'];
$birthdate=$_POST['birthdate'];
$marital_status=$_POST['marital_status'];	
$nation=$_POST['nation'];	
$political_face=$_POST['political_face'];	
$birthplace=$_POST['birthplace'];	
$domicile_place=$_POST['domicile_place'];	
$postcode=$_POST['postcode'];	
$account_bank=$_POST['account_bank'];	
$bank_number=$_POST['bank_number'];		
$school=$_POST['school'];	
$profession=$_POST['profession'];
$education=$_POST['education'];	
$graduate_date=$_POST['graduate_date'];	
$special=$_POST['special'];		
$phone_number=$_POST['phone_number'];	
$home_number=$_POST['home_number'];	
$office_number=$_POST['office_number'];	
$email=$_POST['email'];	
$qq_number=$_POST['qq_number'];	
$wechat_number=$_POST['wechat_number'];	
$emergency_contact_1=$_POST['emergency_contact_1'];	
$emergency_phone_number_1=$_POST['emergency_phone_number_1'];	
$emergency_contact_2=$_POST['emergency_contact_2'];	
$emergency_phone_number_2=$_POST['emergency_phone_number_2'];	
$check_person=$_POST['check_person'];
$check_shop=$_POST['check_shop'];	
$memo=$_POST['memo'];



$sql = "INSERT INTO `g_user_data` (`date`, `time`, `serial_number`, `person_code`, `person_name`, `belong_shop`, `duty`, `permission`, `status`, `star_date`, `end_date`, `end_reason`, `last_login_date`, `certificate_type`, `certificate_number`, `sex`, `birthdate`, `marital_status`, `nation`, `political_face`, `birthplace`, `domicile_place`, `postcode`, `account_bank`, `bank_number`, `school`, `profession`, `education`, `graduate_date`, `special`, `phone_number`, `home_number`, `office_number`, `email`, `qq_number`, `wechat_number`, `emergency_contact_1`, `emergency_phone_number_1`, `emergency_contact_2`, `emergency_phone_number_2`, `check_person`, `check_shop`, `memo`) VALUES (

'$date',
'$time',
'$serial_number',
'$person_code',	
'$person_name',
'$belong_shop',	
'$duty',	
'$permission',
'$status',
'$star_date',
'$end_date',
'$end_reason',	
'$last_login_date',		
'$certificate_type',
'$certificate_number',
'$sex',
'$birthdate',
'$marital_status',	
'$nation',	
'$political_face',	
'$birthplace',	
'$domicile_place',	
'$postcode',	
'$account_bank',	
'$bank_number',		
'$school',	
'$profession',	
'$education',	
'$graduate_date',	
'$special',		
'$phone_number',	
'$home_number',	
'$office_number',	
'$email',	
'$qq_number',	
'$wechat_number',	
'$emergency_contact_1',	
'$emergency_phone_number_1',	
'$emergency_contact_2',	
'$emergency_phone_number_2',	
'$check_person',	
'$check_shop',	
'$memo'
);";
mysql_query($sql);


$sql_s="select serial_number from g_permission order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];

$serial_number=$serial_number_s+1;
$date=$date;
$time=$time;
$person_code=$person_code;	
$person_name=$person_name;
$belong_shop=$belong_shop;
$password='123456';	
$administrator_permission=($permission=='administrator_permission')?'yes':'no';
$money_permission=($permission=='money_permission')?'yes':'no';
$shop_manager_permission=($permission=='shop_manager_permission')?'yes':'no';
$staff_permission=($permission=='staff_permission')?'yes':'no';
$check_person=$check_person;	
$check_shop=$check_shop;	
$memo=$memo;


$sql2="INSERT INTO `g_permission` (`serial_number`,`date`, `time`, `person_code`, `person_name`, `belong_shop`, `password`, `administrator_permission`, `money_permission`, `shop_manager_permission`, `staff_permission`, `check_person`, `check_shop`, `memo`) VALUES (
'$serial_number',	
'$date',	
'$time',	
'$person_code',	
'$person_name',	
'$belong_shop',	
'$password',	
'$administrator_permission',	
'$money_permission',	
'$shop_manager_permission',	
'$staff_permission',	
'$check_person',	
'$check_shop',	
'$memo'
);";


mysql_query($sql2);
mysql_close();
echo "完成";
?>