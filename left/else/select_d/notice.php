<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/notice.css" type="text/css" />
</head>
<body>
<table  style='white-space: nowrap;' border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      公告查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>流水号</td>	
    <td>日期</td>	
    <td>时间</td>	
    <td>标题</td>	
    <td>内容</td>
    <td>发布人</td>
    <td>发布店铺</td>
    <td>备注</td>	
  </tr>
<?php
include("../../../include/table_select.php");
table('e_notice','notice');
?>
</body>
</html>
