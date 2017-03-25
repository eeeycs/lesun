<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_integral_value.css" type="text/css" />
</head>
<body>
<?php
include("../../../../include/link.php");$serial_number_src=$_POST['serial_number_src'];
$sql_d = "delete from j_vip_integral_value where(serial_number='$serial_number_src')";
mysql_query($sql_d);


$date=$_POST['date'];
$time=$_POST['time'];
$serial_number=$_POST['serial_number'];
$sell_odd_number=$_POST['sell_odd_number'];
$vip_card_number=$_POST['vip_card_number'];
$vip_code=$_POST['vip_code'];
$vip_name=$_POST['vip_name'];
$integral=$_POST['integral'];
$value=$_POST['value'];
$service_person=$_POST['service_person'];
$service_shop=$_POST['service_shop'];
$memo=$_POST['memo'];




$sql_i = "INSERT INTO `j_vip_integral_value` (`date`, `time`, `serial_number`, `sell_odd_number`, `vip_card_number`, `vip_code`, `vip_name`, `integral`, `value`, `service_person`, `service_shop`, `memo`) VALUES (
'$date',
'$time',
'$serial_number',
'$sell_odd_number',
'$vip_card_number',
'$vip_code',
'$vip_name',
'$integral',
'$value	',
'$service_person',
'$service_shop',
'$memo'
);";


mysql_query($sql_i);





mysql_close();
?>
</body>
</html>
