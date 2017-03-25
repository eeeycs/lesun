<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_integral_value.css" type="text/css" />
</head>
<body>
<table class="table-hover"  style='white-space: nowrap;'  border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      vip积分、储值管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>日期</td>
    <td>时间</td>	
    <td>流水号</td>	
    <td>销售单号</td>	
    <td>VIP卡号</td>	
    <td>顾客代码</td>	
    <td>顾客姓名</td>	
    <td>积分</td>
    <td>储值</td>
    <td>服务人</td>
    <td>服务店铺</td>	
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator.php");
table('j_vip_integral_value','vip_integral_value');
?>

</body>
</html>
