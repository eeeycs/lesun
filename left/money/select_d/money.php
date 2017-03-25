<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/money.css" type="text/css" />
</head>
<body>
<table style='white-space: nowrap;'  border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      财务查询查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>日期</td>
    <td>时间</td>
    <td>流水号</td>
    <td>销售单号</td>
    <td>现金</td>
    <td>现金券</td>
    <td>刷卡</td>
    <td>储值卡</td>
    <td>积分兑换</td>
    <td>其它方式</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>备注</td>

  </tr>
<?php
include("../../../include/table_select.php");
table('c_money','money');
?>
</body>
</html>
