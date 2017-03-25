<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_birthdate.css" type="text/css" />
</head>
<body>
<?php
$operate=$_GET['operate'];
$serial_number=$_GET['serial_number'];
include("../../../../include/operate/table_administrator.php");
table('j_vip_birthdate','vip_birthdate',$operate,$serial_number);
?>
</body>
</html>
