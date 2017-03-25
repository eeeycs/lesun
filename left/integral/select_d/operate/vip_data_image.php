<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_data_image.css" type="text/css" />
</head>
<body>
<?php
include("../../../../include/link.php");$serial_number=$_GET['serial_number'];
$sql="select image from j_vip_data where serial_number='$serial_number'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$image=$row['image'];
echo "<img src='../../input/action/image/$image'>";


?>
</body>
</html>
