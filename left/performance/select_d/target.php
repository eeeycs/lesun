<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/target.css" type="text/css" />
</head>
<body>
<table style='white-space: nowrap;'  border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      目标进店试衣人数查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>流水号</td>
    <td>日期</td>
    <td>时间</td>
    <td>店员进店人数目标</td>
    <td>店员试衣人数目标</td>
    <td>店员业绩目标</td>
    <td>店铺进店人数目标</td>
    <td>店铺试衣人数目标</td>
    <td>店铺业绩目标</td>
  </tr>
<?php
include("../../../include/table_select.php");
table('y_target','target');
?>
</table>

</body>
</html>
