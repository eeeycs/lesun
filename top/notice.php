<?php
session_start();
?>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/notice.css" type="text/css" />
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
<form action="action/notice.php" method="post" enctype="multipart/form-data" name="notice">
  <table style='white-space: nowrap;'   border="0" cellspacing="0">
    <caption class="caption_bigtitle">
     公告发布
    </caption>
    <tr>
      <td width="149"><strong>标题</strong></td>
      <td width="1181"><input type="text" name="caption" id="caption"></td>
    </tr>
    <tr>
      <td><strong>内容</strong></td>
      <td><textarea name="content" id="content" cols="100" rows="10"></textarea></td>
    </tr>
    <tr>
      <td>发布人</td>
      <td><?php
	  include("../include/list.php");
radio_person('check_person');
?></td>
    </tr>
    <tr>
      <td>发布店铺</td>
      <td><?php
radio_shop('shop_name','g_shop_data','check_shop');
?></td>
    </tr>
    <tr>
      <td><div align="left">备注</div></td>
      <td><label for="memo"></label>
        <input type="text" name="memo" id="memo"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="发布"></td>
    </tr>
  </table>

</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
