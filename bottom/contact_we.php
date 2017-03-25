<?php
session_start();
?>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/contact_we.css" type="text/css" />
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
<form action="action/contact_we.php" method="post" enctype="multipart/form-data" name="contact_we">
  <table  style='white-space: nowrap;' border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      信息工作室
    </caption>
    <tr>
      <td width="92"><strong>QQ</strong></td>
      <td width="560"><strong>1182986462</strong></td>
    </tr>
    <tr>
      <td>邮箱</td>
      <td><strong>eeeycs@163.com</strong></td>
    </tr>
  </table>

</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
