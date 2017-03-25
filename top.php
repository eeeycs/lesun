<?php
session_start();
?>
<html>
<head><link href="css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/top.css" type="text/css" />
</head>
<body>
  <?php
include("include/link.php");$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$sql="SELECT administrator_permission,money_permission,shop_manager_permission,staff_permission FROM `g_permission` where person_name='$service_person_s'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$administrator_permission_s=$row['administrator_permission'];
$money_permission_s=$row['money_permission'];
$shop_manager_permission_s=$row['shop_manager_permission'];
$staff_permission_s=$row['staff_permission'];

?>
<div class="div_bigtitle">
Lesun CIMS
</div>
<div>
<a href="right.php" target="right">主页</a>|
<a href="top/update_password.php" target="right">修改密码</a>|
<a href="top/notice.php" target="right" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>公告发布</a>|
<a href="../index.php" target="_top">退出</a>
</div>

</body>
</html>
