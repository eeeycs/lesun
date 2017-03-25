<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$(function(){


	
	});
</script>

<title>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/return_goods.css" type="text/css" />
<script type="text/javascript">
function if_return_whole_odd() {
	if(document.getElementById("if_return_whole_odd").checked==true)
	{
	document.getElementById("add").disabled="disabled";
	document.getElementById("drop_money").readOnly="readonly";
	document.getElementById("actual_money").readOnly="readonly";
	}
	else
	{
	document.getElementById("add").disabled="";
	document.getElementById("drop_money").readOnly="";
	document.getElementById("actual_money").readOnly="";
	}
	}
function add_money(){
var input_drop= document.createElement("input");
input_drop.type="text";
input_drop.name="drop_money[]";
input_drop.size="5";

var input_actual= document.createElement("input");
input_actual.type="text";
input_actual.name="actual_money[]";
input_actual.size="5";

document.getElementById("drop").appendChild(input_drop);
document.getElementById("actual").appendChild(input_actual);


}
</script>


</head>
<body>
<form action="action/return_goods.php" method="post" name="return_goods">
  <table  style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      退货单录入系统
    </caption>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>退货单号</td>
      <td  ><input name="return_goods_odd_number" type="text" required="required" id="return_goods_odd_number"></td>
    </tr>
    <tr>
      <td>是否整单退</td>
      <td onClick="if_return_whole_odd()"><input name="if_return_whole_odd" type="radio" id="if_return_whole_odd" value="yes" checked="CHECKED">
        是
        <input type="radio" name="if_return_whole_odd" id="if_return_whole_odd2" value="no">
        否</td>
    </tr>
    <tr>
      <td><div align="left">吊牌金额</div></td>
      <td id="drop"><input type="text" name="drop_money[]" id="drop_money" size="5" readonly></td>
    </tr>
    <tr>
      <td><div align="left">实销金额</div></td>
      <td id="actual"><input type="text" name="actual_money[]" id="actual_money" size="5" readonly></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="button" name="add" id="add" value="添加" onClick="add_money()" disabled></td>
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
      <td>
      <input type="text" name="memo" id="memo" value="退货"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>

</form>

</body>
<div align="right">
<iframe src="../select/performance_input.php" width="100%" height="105%">
</iframe>
</div>
</html>
