<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/cash_administrator.css" type="text/css" />
</head>
<body>
<?php
include("../../../../../include/link.php");$serial_number_src=$_POST['serial_number_src'];
$sql_d = "delete from c_money where(serial_number='$serial_number_src')";
mysql_query($sql_d);


$date=$_POST['date'];
$time=$_POST['time'];
$serial_number=$_POST['serial_number'];
$sell_odd_number=$_POST['sell_odd_number'];
$cash=$_POST['cash'];
$cash_ticket=$_POST['cash_ticket'];
$slot_card=$_POST['slot_card'];
$value_card=$_POST['value_card'];
$integral_exchange=$_POST['integral_exchange'];
$else_way=$_POST['else_way'];
$service_person=$_POST['service_person'];
$service_shop=$_POST['service_shop'];
$memo=$_POST['memo'];

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





mysql_close();
?>
</body>
</html>
