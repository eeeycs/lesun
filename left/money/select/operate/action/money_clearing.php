<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/money_clearing.css" type="text/css" />
</head>
<body>
<?php
$operate=$_POST['operate'];
$serial_number_src=$_POST['serial_number_src'];
include("../../../../../include/operate/action/table_administrator_queryt.php");
table('c_money_clearing','money_clearing',$operate,$serial_number_src);
?>
</body>
</html>
