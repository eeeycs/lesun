<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/performance_count.css" type="text/css" />
</head>
<body>
<table class="table-hover"  style='white-space: nowrap;'   border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      业绩统计管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>流水号</td>
    <td>单号</td>
    <td>日期</td>
    <td>时间</td>
    <td>单数</td>
    <td>件数</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>服务人权重</td>
    <td>服务店铺权重</td>
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator_query.php");
table('y_performance_count','performance_count');
?>

</table>

</body>
</html>
