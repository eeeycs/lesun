<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/performance_input.css" type="text/css" />
</head>
<body>
<table class="table-hover"   style='white-space: nowrap;'  border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      业绩管理系统
    </caption>
  <tr>
	<td>操作</td>
    <td>流水号</td>
    <td>销售日期</td>
    <td>销售时间</td>
    <td>是否vip</td>
    <td>vip卡号</td>
    <td>件数</td>
    <td>吊牌金额</td>
    <td>实销金额</td>
    <td>折率</td>
    <td>现金</td>
    <td>现金券</td>
    <td>刷卡</td>
    <td>储值卡</td>
    <td>积分兑换</td>
    <td>其它方式</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>服务人权重</td>
    <td>服务店铺权重</td>
    <td>登记人</td>
    <td>登记店铺</td>
    <td>所属店铺</td>
    <td>件数</td>
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator_query.php");
table('y_performance_input','performance_input');
?>

</table>

</body>
</html>
