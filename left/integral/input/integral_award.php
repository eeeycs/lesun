<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/integral_award.css" type="text/css" />
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
<form action="action/integral_award.php" method="post" enctype="multipart/form-data" name="integral_award">
  <table  style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      VIP积分奖励系统
    </caption>
    <tr>
      <td width="107"><font color="#FF0000" size="+1">*</font>vip卡号</td>
      <td width="1223"><input name="vip_card_number" type="text" required="required" id="vip_card_number"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>奖励积分</td>
      <td><input name="award_integral" type="text" required="required" id="award_integral"></td>
    </tr>
    <tr>
      <td>奖励原因</td>
      <td><input type="text" name="award_reason" id="award_reason"></td>
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
      <td><input type="text" name="memo" id="memo" value="vip积分奖励"></td>
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
