<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/exchange_goods.css" type="text/css" />
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
function add_money()
{
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

function add_exchange_goods_money()
{
var input_exchange_goods_drop= document.createElement("input");
input_exchange_goods_drop.type="text";
input_exchange_goods_drop.name="exchange_goods_drop_money[]";
input_exchange_goods_drop.size="5";

var input_exchange_goods_actual= document.createElement("input");
input_exchange_goods_actual.type="text";
input_exchange_goods_actual.name="exchange_goods_actual_money[]";
input_exchange_goods_actual.size="5";

document.getElementById("exchange_goods_drop").appendChild(input_exchange_goods_drop);
document.getElementById("exchange_goods_actual").appendChild(input_exchange_goods_actual);
}
function if_vip() {
	if(document.getElementById("if_vip").checked==true)
	document.getElementById("vip_card_number").readOnly="";
	else
	document.getElementById("vip_card_number").readOnly="readonly";
}
function add_pay_return()
{
var pay_way= document.createElement("select");
pay_way.name="return_money_way[]";
pay_way.innerHTML="<option value='cash'>现金</option><option value='cash_ticket'>现金券</option><option value='slot_card'>刷卡</option><option value='value_card'>储值卡</option><option value='integral_exchange'>积分兑换</option><option value='else_way'>其它方式</option>";

var pay_money= document.createElement("input");
pay_money.type="text";
pay_money.name="return_money_money[]";
pay_money.size="5";


document.getElementById("return_money_way").appendChild(pay_way);
document.getElementById("return_money_money").appendChild(pay_money);
}

function add_pay_pay()
{
var pay_way= document.createElement("select");
pay_way.name="pay_money_way[]";
pay_way.innerHTML="<option value='cash'>现金</option><option value='cash_ticket'>现金券</option><option value='slot_card'>刷卡</option><option value='value_card'>储值卡</option><option value='integral_exchange'>积分兑换</option><option value='else_way'>其它方式</option>";

var pay_money= document.createElement("input");
pay_money.type="text";
pay_money.name="pay_money_money[]";
pay_money.size="5";


document.getElementById("pay_money_way").appendChild(pay_way);
document.getElementById("pay_money_money").appendChild(pay_money);
}
</script>
</head>
<body>
<form action="action/exchange_goods.php" method="post" name="exchange_goods">
  <table style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      换货单录入系统
    </caption>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>换货单号</td>
      <td><input name="exchange_goods_odd_number" type="text" required="required" id="exchange_goods_odd_number"></td>
    </tr>
    <tr>
      <td><div align="left">退款方式</div></td>
      <td id="return_money_way"><select name="return_money_way[]" id="pay_way">
        <option value="cash">现金</option>
        <option value="cash_ticket">现金券</option>
        <option value="slot_card">刷卡</option>
        <option value="value_card">储值卡</option>
        <option value="integral_exchange">积分兑换</option>
        <option value="else_way">其它方式</option>
      </select></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>退款金额</td>
      <td id="return_money_money"><input name="return_money_money[]" type="text" required="required" id="pay_money" size="6"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="button" name="add2" id="add2" value="添加" onClick="add_pay_return()"></td>
    </tr>
    <tr>
      <td><div align="left">付款方式</div></td>
      <td id="pay_money_way"><select name="pay_money_way[]" id="pay_way">
        <option value="cash">现金</option>
        <option value="cash_ticket">现金券</option>
        <option value="slot_card">刷卡</option>
        <option value="value_card">储值卡</option>
        <option value="integral_exchange">积分兑换</option>
        <option value="else_way">其它方式</option>
      </select></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>付款金额</td>
      <td id="pay_money_money"><input name="pay_money_money[]" type="text" required="required" id="pay_money" size="6"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="button" name="add22" id="add22" value="添加" onClick="add_pay_pay()"></td>
    </tr>

    <tr>
      <td>是否整单换</td>
      <td onClick="if_return_whole_odd()">
      <input name="if_return_whole_odd" type="radio" id="if_return_whole_odd" value="yes" checked="CHECKED">
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
      <td><div align="left"><font color="#FF0000" size="+1">*</font>换货吊牌金额</div></td>
      <td id="exchange_goods_drop"><input name="exchange_goods_drop_money[]" type="text" required="required" id="exchange_goods_drop_money" size="5"></td>
    </tr>
    <tr>
      <td><div align="left"><font color="#FF0000" size="+1">*</font>换货实销金额</div></td>
      <td id="exchange_goods_actual"><input name="exchange_goods_actual_money[]" type="text" required="required" id="exchange_goods_actual_money" size="5"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="button" name="add_exchange_goods" id="add_exchange_goods" value="添加" onClick="add_exchange_goods_money()"></td>
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
      <td><input type="text" name="memo" id="memo" value="换货"></td>
    </tr>
    <tr>
      <td width="88">&nbsp;</td>
      <td width="547"><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>

</form>
</body>
<div align="right">
<iframe src="../select/performance_input.php" width="100%" height="105%">
</iframe>
</div>
</html>
