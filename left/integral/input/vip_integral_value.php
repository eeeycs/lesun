<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_integral_value.css" type="text/css" />
<script type="text/javascript">
function if_vip() {
	//if(document.getElementById("if_vip").checked==true)
	//document.getElementById("vip_card_number").readOnly="";
	//else
	//document.getElementById("vip_card_number").readOnly="readonly";
}
</script>
</head>
<body>
<form action="action/vip_integral_value.php" method="post" enctype="multipart/form-data" name="vip_integral_value">
  <table  style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      VIP积分、储值录入系统
    </caption>
    <tr>
      <td width="107"><font color="#FF0000" size="+1">*</font>vip卡号</td>
      <td width="1218"><input name="vip_card_number" type="text" required="required" id="vip_card_number"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>顾客姓名</td>
      <td><input name="vip_name" type="text" required="required" id="vip_name"></td>
    </tr>
    <tr>
      <td>积分</td>
      <td><input type="text" name="integral" id="integral"></td>
    </tr>
    <tr>
      <td>储值</td>
      <td><input type="text" name="value" id="value"></td>
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
      <td><input type="text" name="memo" id="memo" value="vip积分、储值"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>

</form>
</body>
</html>
