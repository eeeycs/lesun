<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/target.css" type="text/css" />
<script type="text/javascript" src="../../../js/jquery-2.1.1.js"></script>
<script type="text/javascript">


</script>
</head>
<body>
<form action="action/target.php" method="post" name="target">
  <table  style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      目标进店试衣人数录入系统
    </caption>
    <tr>
      <td width="102" rowspan="3">店员</td>
      <td width="114"><font color="#FF0000" size="+1">*</font>进店人数目标</td>
      <td width="176"><label for="enter_number_target_number"></label>
        <label for="enter_number_target_person"></label>
      <input name="enter_number_target_person" type="text" required="required" id="enter_number_target_person"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>试衣人数目标</td>
      <td><label for="dress_number_target_person"></label>
        <input name="dress_number_target_person" type="text" required="required" id="dress_number_target_person"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>业绩目标</td>
      <td><input name="performance_person" type="text" required="required" id="performance_person"></td>
    </tr>
    <tr>
      <td rowspan="3">店铺</td>
      <td><font color="#FF0000" size="+1">*</font>进店人数目标</td>
      <td><label for="enter_number_target_shop"></label>
        <input name="enter_number_target_shop" type="text" required="required" id="enter_number_target_shop"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>试衣人数目标</td>
      <td><label for="dress_number_target_shop"></label>
        <input name="dress_number_target_shop" type="text" required="required" id="dress_number_target_shop"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>业绩目标</td>
      <td><input name="performance_shop" type="text" required="required" id="performance_shop"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>
</form>
</body>
</html>
