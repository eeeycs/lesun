<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/permission.css" type="text/css" />
</head>
<body>
<?php
$operate=$_GET['operate'];
$serial_number=$_GET['serial_number'];
include("../../../../include/operate/table_administrator.php");
table('g_permission','permission',$operate,$serial_number);
?>
</body>
</html>
