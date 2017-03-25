<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_data.css" type="text/css" />
</head>
<body>
<table class="table-hover"  border="1"  style='white-space: nowrap;'  cellspacing="0">
    <caption class="caption_bigtitle">
      vip资料管理系统
    </caption>
  <tr>
    <td>操作</td>
    <td>日期</td>
    <td>时间	</td>
    <td>流水号</td>	
    <td>顾客代码</td>
    <td>顾客姓名</td>
    <td>vip卡号</td>
    <td>证件类型</td>
    <td>证件号码</td>
    <td>性别</td>
    <td>民族</td>
    <td>出生日期</td>	
    <td>是否农历</td>	
    <td>年龄段</td>
    <td>重要纪念日</td>
    <td>婚姻状态</td>
    <td>职业</td>
    <td>收入</td>
    <td>身高</td>
    <td>腰围</td>
    <td>个人爱好</td>
    <td>照片</td>
    <td>移动电话</td>
    <td>家庭电话</td>
    <td>办公电话</td>	
    <td>电子邮箱</td>
    <td>QQ号码</td>
    <td>微信号码</td>
    <td>城市</td>
    <td>学校</td>
    <td>详细地址</td>
    <td>邮政编码</td>	
    <td>喜欢品牌</td>
    <td>喜欢款式</td>	
    <td>着装风格</td>
    <td>着装颜色</td>	
    <td>上装尺码</td>
    <td>下装尺码</td>
    <td>接受价位下限</td>	
    <td>接受价位上限</td>
    <td>购买单号</td>
    <td>购买日期</td>
    <td>购买吊牌金额</td>
    <td>购买实销金额</td>
    <td>折率</td>
    <td>储值金额</td>
    <td>介绍人</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>登记人</td>
    <td>登记店铺</td>	
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_administrator_query.php");
table('j_vip_data','vip_data_query');
?>

</body>
</html>
