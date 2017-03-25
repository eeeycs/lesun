<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/return_goods.css" type="text/css" />
</head>
<body>
<table class="table-hover"   style='white-space: nowrap;'  border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      退货管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>退货流水号</td>
    <td>退货单号</td>
    <td>日期</td>
    <td>时间</td>
    <td>是否换过货</td>
    <td>vip卡号</td>
    <td>退货积分</td>
    <td>账户余额</td>
    <td>是否整单退</td>
    <td>件数</td>
    <td>吊牌金额</td>
    <td>实销金额</td>
    <td>折率</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>服务人权重</td>
    <td>服务店铺权重</td>
    <td>登记人</td>
    <td>登记店铺</td>
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator_query.php");
table('y_return_goods','return_goods');
?>

</table>

</body>
</html>
