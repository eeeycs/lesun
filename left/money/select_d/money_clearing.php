<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/money_clearing.css" type="text/css" />
</head>
<body>
<table style='white-space: nowrap;'  border="1"  cellspacing="0">
    <caption class="caption_bigtitle">
      财务结算查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>流水号</td>
    <td>日期</td>
    <td>时间</td>
    <td>服务店铺</td>	
    <td>现金余额</td>	
    <td>结算金额</td>	
    <td>收款人代码</td>	
    <td>收款人</td>	
    <td>缴款人代码</td>
    <td>缴款人</td>
    <td>备注</td>

  </tr>
<?php
include("../../../include/table_select.php");
table('c_money_clearing','money_clearing');
?>

</body>
</html>
