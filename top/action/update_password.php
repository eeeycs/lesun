<?php
session_start();
?>
<?php
include("../../include/link.php");$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];

$now_password=$_POST['now_password'];
$new_password=$_POST['new_password'];
$new_password_repet=$_POST['new_password_repet'];

$sql_s="SELECT password FROM g_permission WHERE (person_name ='$service_person_s')";
$result=mysql_query($sql_s);
$row_s=mysql_fetch_array($result,MYSQL_BOTH);
$password_s=$row_s['password'];


if(($password_s==$now_password)&&($new_password==$new_password_repet))
{
$sql="update g_permission set password='$new_password' WHERE (person_name ='$service_person_s')";
$result=mysql_query($sql);
echo "更改密码成功";
}
else
echo "当前密码错误，或者两个新密码不符合";
?>