<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/person_data.css" type="text/css" />
</head>
<body>
<table border="1"  style='white-space: nowrap;' cellspacing="0">
    <caption class="caption_bigtitle">
      店员资料查询系统
    </caption>
    <tr>
    <td>操作</td>
    <td>日期</td>	
    <td>时间</td>	
    <td>流水号</td>	
    <td>店员代码</td>	
    <td>店员姓名</td>	
    <td>所属店铺</td>	
    <td>职务</td>	
    <td>权限</td>	
    <td>状态</td>	
    <td>入职日期</td>	
    <td>离职日期</td>	
    <td>离职原因</td>	
    <td>最后登录日期</td>		
    <td>证件类型</td>	
    <td>证件号码</td>	
    <td>性别</td>	
    <td>出生日期</td>	
    <td>婚姻状态</td>	
    <td>民族</td>	
    <td>政治面貌</td>	
    <td>籍贯</td>	
    <td>户籍地</td>	
    <td>邮政编码</td>	
    <td>开户银行</td>	
    <td>银行账号</td>		
    <td>学校</td>
    <td>专业</td>	
    <td>学历</td>	
    <td>毕业日期</td>	
    <td>专长</td>		
    <td>移动电话</td>	
    <td>家庭电话</td>	
    <td>办公电话</td>	
    <td>电子邮箱</td>	
    <td>QQ号码</td>	
    <td>微信号码</td>	
    <td>紧急情况联系人1</td>
    <td>紧急情况联系电话1</td>	
    <td>紧急情况联系人2</td>	
    <td>紧急情况联系电话2</td>	
    <td>登记人</td>	
    <td>登记店铺</td>	
    <td>备注</td>
  </tr>
<?php
include("../../../include/table_select.php");
table('g_user_data','person_data');
?>

</body>
</html>
