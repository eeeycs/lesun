<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/integral_award.css" type="text/css" />
</head>
<body>
<?php
$operate=$_GET['operate'];
$serial_number=$_GET['serial_number'];
include("../../../../include/operate/table_administrator.php");
table('j_integral_award','integral_award',$operate,$serial_number);
?>
</body>
</html>
