<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_birthdate.css" type="text/css" />
</head>
<body>
<table style='white-space: nowrap;'  border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      vip生日礼物查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>流水号</td>  
    <td>日期</td>
    <td>时间</td>
    <td>VIP卡号</td>
    <td>顾客代码</td>	
    <td>顾客姓名</td>
    <td>出生日期</td>	
    <td>是否农历</td>	
    <td>生日差距</td>	
    <td>礼物名称</td>
    <td>礼物数量</td>	
    <td>服务人</td>	
    <td>服务店铺</td>
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_select_vip_birthdate.php");
table('j_vip_birthdate','vip_birthdate');
?>
</body>
</html>
