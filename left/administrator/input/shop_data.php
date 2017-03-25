<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/shop_data.css" type="text/css" />
<script type="text/javascript">
function if_vip() {
	if(document.getElementById("if_vip").checked==true)
	document.getElementById("vip_card_number").readOnly="";
	else
	document.getElementById("vip_card_number").readOnly="readonly";
}
</script>
</head>
<body>
<form action="action/shop_data.php" method="post" enctype="multipart/form-data" name="shop_data">
  <table  style='white-space: nowrap;' border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      店铺资料录入系统
    </caption>
    <tr>
      <td width="101"><font color="#FF0000" size="+1">*</font>店铺名称</td>
      <td width="1226"><input name="shop_name" type="text" required="required" id="shop_name"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>店铺地址</td>
      <td><input name="shop_address" type="text" required="required" id="shop_address"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>开业日期</td>
      <td><input name="start_date" type="date" required="required" id="start_date"></td>
    </tr>
    <tr>
      <td>店铺状态</td>
      <td><input name="shop_status" type="radio" id="shop_status" value="yes" checked="CHECKED">
        正在营业
        <input name="shop_status" type="radio" id="shop_status2" value="no">
        停止营业</td>
    </tr>
    <tr>
      <td>登记人</td>
      <td><?php
	  include("../../../include/list.php");
radio_person('check_person');
?></td>
    </tr>
    <tr>
      <td>登记店铺</td>
      <td><?php
radio_shop('shop_name','g_shop_data','check_shop');
?></td>
    </tr>
    <tr>
      <td>备注</td>
      <td><input type="text" name="memo" id="memo" value="店铺资料"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>

</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
