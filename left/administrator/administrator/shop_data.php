<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/shop_data.css" type="text/css" />
</head>
<body>
<table class="table-hover"  style='white-space: nowrap;' border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      店铺资料管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>日期</td>	
    <td>时间</td>	
    <td>流水号</td>	
    <td>店铺代码</td>	
    <td>店铺名称</td>	
    <td>店铺地址</td>	
    <td>开业日期</td>	
    <td>店铺状态</td>	
    <td>登记人</td>	
    <td>登记店铺</td>	
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator.php");
table('g_shop_data','shop_data');
?>
</body>
</html>
