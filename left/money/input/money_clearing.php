<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/money_clearing.css" type="text/css" />
<script type="text/javascript">
function select_a()
{
var service_shop=document.getElementByName('service_shop').value;
var href='money_clearing.php?service_shop='+service_shop;
location.href=href;
}
</script>
</head>
<body>
<form action="action/money_clearing.php" method="post" enctype="multipart/form-data" name="money_clearing">
  <table style='white-space: nowrap;'   border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      财物结算录入系统
    </caption>
    <tr>
      <td width="92">现金余额</td>
      <td width="560">
      <?php
include("../../../include/link.php");$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
$cash_sum=0;
$sql_s="select cash from c_money where (service_shop='$service_shop_s')";
$result_s=mysql_query($sql_s);
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
$cash_sum=$cash_sum+$row_s['cash'];	
}
$money_balance=$cash_sum;
echo "
<input name='money_balance' type='text' id='money_balance' readonly='readonly' value=$money_balance>
";

?>
      </td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>结算金额</td>
      <td><input name="clearing_money" type="text" required="required" id="clearing_money"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>收款人代码</td>
      <td><input name="collect_person_code" type="text" required="required" id="collect_person_code"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>收款人</td>
      <td><input name="collect_person" type="text" required="required" id="collect_person"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>缴款人代码</td>
      <td><input name="pay_person_code" type="text" required="required" id="pay_person_code"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>缴款人</td>
      <td><input name="pay_person" type="text" required="required" id="pay_person"></td>
    </tr>
    <tr>
      <td>备注</td>
      <td><input type="text" name="memo" id="memo" value="财物结算"></td>
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
