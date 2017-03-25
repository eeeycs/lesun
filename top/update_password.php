<?php
session_start();
?>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/update_password.css" type="text/css" />
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
<form action="action/update_password.php" method="post" enctype="multipart/form-data" name="update_password">
  <table style='white-space: nowrap;'   border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      更改密码
    </caption>
    <tr>
      <td width="92"><font color="#FF0000" size="+1">*</font>当前密码</td>
      <td width="560"><input type="text" name="now_password" id="now_password"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>新密码</td>
      <td><input type="text" name="new_password" id="new_password"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>确认新密码</td>
      <td><input type="text" name="new_password_repet" id="new_password_repet"></td>
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
