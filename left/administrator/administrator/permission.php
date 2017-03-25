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
<table class="table-hover"  style='white-space: nowrap;' border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      权限管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>流水号</td>	
    <td>日期</td>	
    <td>时间</td>	
    <td>店员代码</td>	
    <td>店员姓名</td>	
    <td>所属店铺</td>	
    <td>密码</td>	
    <td>管理员权限</td>	
    <td>财务权限</td>	
    <td>店长权限</td>	
    <td>员工权限</td>	
    <td>登记人</td>	
    <td>登记店铺</td>	
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator.php");
table('g_permission','permission');
?>
</body>
</html>
