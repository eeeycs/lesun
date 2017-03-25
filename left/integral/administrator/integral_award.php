<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/integral_award.css" type="text/css" />
</head>
<body>
<table class="table-hover"   style='white-space: nowrap;' border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      vip积分奖励管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>流水号</td>
    <td>日期</td>
    <td>时间</td>
    <td>VIP卡号</td>
    <td>奖励积分</td>
    <td>奖励原因</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator.php");
table('j_integral_award','integral_award');
?>
</body>
</html>
