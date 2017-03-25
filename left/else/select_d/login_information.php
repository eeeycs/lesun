<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/login_information.css" type="text/css" />
</head>
<body>
<table  style='white-space: nowrap;' border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      登录信息查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>流水号</td>	
    <td>日期</td>	
    <td>时间</td>	
    <td>店员代码</td>	
    <td>店员姓名</td>	
    <td>所属店铺</td>
  </tr>
<?php
include("../../../include/table_select.php");
table('e_login_information','login_information');
?>
</body>
</html>
