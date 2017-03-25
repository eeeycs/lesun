<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/goods.css" type="text/css" />
</head>
<body>
<table class="table-hover" style='white-space: nowrap;'   border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      商品信息管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>流水号</td>
    <td>单号</td>
    <td>日期</td>
    <td>时间</td>
    <td>是否合计</td>
    <td>所属店铺</td>
    <td>件数</td>
	<td>吊牌金额</td>
    <td>实销金额</td>
    <td>折扣</td>
    <td>服务人</td>
    <td>服务店铺</td>
  </tr>
<?php
include("../../../include/table_administrator.php");
table('goods','goods');
?>

</table>

</body>
</html>
