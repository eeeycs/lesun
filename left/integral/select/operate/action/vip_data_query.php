<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_data.css" type="text/css" />
</head>
<body>
<?php
$operate=$_POST['operate'];
$serial_number_src=$_POST['serial_number_src'];
include("../../../../../include/operate/action/table_administrator_queryt.php");
table('j_vip_data','vip_data_query',$operate,$serial_number_src);
?>
</body>
</html>
