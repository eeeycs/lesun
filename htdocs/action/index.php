<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
@mysql_connect("qdm162465231.my3w.com","qdm162465231","qdm123456") or die("error");
mysql_select_db("qdm162465231_db");
date_default_timezone_set('Asia/Shanghai');
mysql_query("SET NAMES 'utf8'");$person_name=$_POST['person_name'];	
$password=$_POST['password'];


$sql_s="SELECT `g_permission`.`person_code`,`g_permission`.`person_name`,`g_permission`.`belong_shop`, `g_permission`.`password` FROM g_permission WHERE (`g_permission`.`person_name` ='$person_name')";
$result=mysql_query($sql_s);
$row_s=mysql_fetch_array($result,MYSQL_BOTH);
$person_name_s=$row_s['person_name'];
$password_s=$row_s['password'];
$person_code_s=$row_s['person_code'];	
$belong_shop_s=$row_s['belong_shop'];


$sql_s="select serial_number from e_login_information order by serial_number desc limit 1";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$serial_number_s=$row_s['serial_number'];



$serial_number=$serial_number_s+1;
$date=date("Y-m-d");
$time=date("G:i:s");
$person_code=$person_code_s;	
$person_name=$person_name;	
$belong_shop=$belong_shop_s;

$sql_i="INSERT INTO `e_login_information` (`serial_number`,`date`, `time`, `person_code`, `person_name`, `belong_shop`) VALUES (
'$serial_number',
'$date',	
'$time',
'$person_code',	
'$person_name',
'$belong_shop'
);";

if($person_name==$person_name_s&&$password==$password_s&&$person_name!=''&&$password!='')
{

mysql_query($sql_i);

$_SESSION['service_pserson']=$person_name;
$_SESSION['service_shop']=$belong_shop;


$sql_u="update g_user_data set last_login_date='$date' where (person_name='$person_name')";
mysql_query($sql_u);

echo "<script>location.href='../login.php';</script>";

}
else
{
echo "用户名或密码错误！";
}
mysql_close();
?>
