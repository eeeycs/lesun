<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/enter_dress_number.css" type="text/css" />
</head>
<body>
<table class="table-hover" style='white-space: nowrap;'  border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      进店试衣人数管理系统
    </caption>

  <tr>
  	<td>操作</td>
    <td>流水号</td>
    <td>日期</td>
    <td>时间</td>
    <td>进店人数</td>
    <td>试衣人数</td>
    <td>所属店员</td>
    <td>所属店铺</td>
  </tr>
  
<?php
include("../../../include/table_administrator.php");
table('y_enter_dress_number','enter_dress_number');
?>
</body>
</html>
