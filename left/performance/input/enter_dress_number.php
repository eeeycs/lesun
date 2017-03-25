<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/enter_dress_number.css" type="text/css" />
</head>
<body>
<form action="action/enter_dress_number.php" method="post" name="enter_dress_number">
  <table  style='white-space: nowrap;'  border="0" cellspacing="">
    <caption class="caption_bigtitle">
      进店试衣人数录入系统
    </caption>
    <tr>
      <td width="98">进店人数</td>
      <td width="1232"><label for="enter_number"></label>
      <input type="text" name="enter_number" id="enter_number"></td>
    </tr>
    <tr>
      <td>试衣人数</td>
      <td><input type="text" name="dress_number" id="dress_number"></td>
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
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>
</form>
</body>
</html>
