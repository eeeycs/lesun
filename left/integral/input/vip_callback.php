<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_callback.css" type="text/css" />
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
<form action="action/vip_callback.php" method="post" enctype="multipart/form-data" name="vip_callback">
  <table  style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      VIP回访录入系统
    </caption>
    <tr>
      <td width="107"><font color="#FF0000" size="+1">*</font>vip卡号</td>
      <td width="1221"><input name="vip_card_number" type="text" required="required" id="vip_card_number"></td>
    </tr>
    <tr>
      <td>回访人</td>
      <td><input type="text" name="callback_person" id="callback_person"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>回访内容</td>
      <td><input name="callback_content" type="text" required="required" id="callback_content"></td>
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
      <td><input type="text" name="memo" id="memo" value="vip回访"></td>
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
