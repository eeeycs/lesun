<?php
session_start();
?>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="css/left.css" type="text/css" />
<script language="javascript" type="text/jscript">
function p_content()
{
	document.getElementById("p_content").style.display=(document.getElementById("p_content").style.display=="none")?"":"none";
}
function p_c_input()
{
	document.getElementById("p_c_input").style.display=(document.getElementById("p_c_input").style.display=="none")?"":"none";
}
function p_c_select()
{
	document.getElementById("p_c_select").style.display=(document.getElementById("p_c_select").style.display=="none")?"":"none";
}
function p_c_sum()
{
	document.getElementById("p_c_sum").style.display=(document.getElementById("p_c_sum").style.display=="none")?"":"none";
}
function p_c_administrator()
{
	document.getElementById("p_c_administrator").style.display=(document.getElementById("p_c_administrator").style.display=="none")?"":"none";
}
function i_content()
{
	document.getElementById("i_content").style.display=(document.getElementById("i_content").style.display=="none")?"":"none";
}
function i_c_input()
{
	document.getElementById("i_c_input").style.display=(document.getElementById("i_c_input").style.display=="none")?"":"none";
}
function i_c_select()
{
	document.getElementById("i_c_select").style.display=(document.getElementById("i_c_select").style.display=="none")?"":"none";
}
function i_c_sum()
{
	document.getElementById("i_c_sum").style.display=(document.getElementById("i_c_sum").style.display=="none")?"":"none";
}
function i_c_administrator()
{
	document.getElementById("i_c_administrator").style.display=(document.getElementById("i_c_administrator").style.display=="none")?"":"none";
}
function m_content()
{
	document.getElementById("m_content").style.display=(document.getElementById("m_content").style.display=="none")?"":"none";
}
function m_c_input()
{
	document.getElementById("m_c_input").style.display=(document.getElementById("m_c_input").style.display=="none")?"":"none";
}
function m_c_select()
{
	document.getElementById("m_c_select").style.display=(document.getElementById("m_c_select").style.display=="none")?"":"none";
}
function m_c_sum()
{
	document.getElementById("m_c_sum").style.display=(document.getElementById("m_c_sum").style.display=="none")?"":"none";
}
function m_c_administrator()
{
	document.getElementById("m_c_administrator").style.display=(document.getElementById("m_c_administrator").style.display=="none")?"":"none";
}
function a_content()
{
	document.getElementById("a_content").style.display=(document.getElementById("a_content").style.display=="none")?"":"none";
}
function a_c_input()
{
	document.getElementById("a_c_input").style.display=(document.getElementById("a_c_input").style.display=="none")?"":"none";
}
function a_c_select()
{
	document.getElementById("a_c_select").style.display=(document.getElementById("a_c_select").style.display=="none")?"":"none";
}
function a_c_sum()
{
	document.getElementById("a_c_sum").style.display=(document.getElementById("a_c_sum").style.display=="none")?"":"none";
}
function a_c_administrator()
{
	document.getElementById("a_c_administrator").style.display=(document.getElementById("a_c_administrator").style.display=="none")?"":"none";
}

function e_content()
{
	document.getElementById("e_content").style.display=(document.getElementById("e_content").style.display=="none")?"":"none";
}
function e_c_input()
{
	document.getElementById("e_c_input").style.display=(document.getElementById("e_c_input").style.display=="none")?"":"none";
}
function e_c_select()
{
	document.getElementById("e_c_select").style.display=(document.getElementById("e_c_select").style.display=="none")?"":"none";
}
function e_c_sum()
{
	document.getElementById("e_c_sum").style.display=(document.getElementById("e_c_sum").style.display=="none")?"":"none";
}
function e_c_administrator()
{
	document.getElementById("e_c_administrator").style.display=(document.getElementById("e_c_administrator").style.display=="none")?"":"none";
}
</script>
</head>
<body>
<p>
  <?php
@mysql_connect("qdm162465231.my3w.com","qdm162465231","qdm123456") or die("error");
mysql_select_db("qdm162465231_db");
date_default_timezone_set('Asia/Shanghai');
mysql_query("SET NAMES 'utf8'");$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$sql="SELECT administrator_permission,money_permission,shop_manager_permission,staff_permission FROM `g_permission` where person_name='$service_person_s'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$administrator_permission_s=$row['administrator_permission'];
$money_permission_s=$row['money_permission'];
$shop_manager_permission_s=$row['shop_manager_permission'];
$staff_permission_s=$row['staff_permission'];

?>
</p>
<p>&nbsp;</p>
<div id="performance" class="div_title_one" onClick="p_content()"> <a href="#">业绩模块</a></div>
	<div id="p_content" style="display:none">
    <div  class="div_title_two"><a href="#" onClick="p_c_input()">&nbsp;数据录入</a></div>
		<div id="p_c_input" style="display:none"> 
        <a href="left/performance/input/performance_input.php" target="right">&nbsp;&nbsp;业绩</a><br>
		<a href="left/performance/input/enter_dress_number.php" target="right">&nbsp;&nbsp;进店试衣</a><br>
		<div   <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
        <a href="left/performance/input/target.php" target="right" >&nbsp;&nbsp;目标</a><br>
		</div>
        <a href="left/performance/input/exchange_goods.php" target="right">&nbsp;&nbsp;换货</a><br>
 		<a href="left/performance/input/return_goods.php" target="right">&nbsp;&nbsp;退货</a><br>
 		<a href="left/performance/input/return_money.php" target="right">&nbsp;&nbsp;退款</a><br>
 		<a href="left/performance/input/return_goods_money.php" target="right">&nbsp;&nbsp;退货退款</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="p_c_select()">&nbsp;数据查询</a></div>
    	<div id="p_c_select" style="display:none">
        <a href="left/performance/select/performance_input.php" target="right">&nbsp;&nbsp;业绩</a><br>
		<a href="left/performance/select/enter_dress_number.php" target="right">&nbsp;&nbsp;进店试衣</a><br>
 		<a href="left/performance/select/target.php" target="right">&nbsp;&nbsp;目标</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="p_c_sum()">&nbsp;数据汇总</div>
        <div id="p_c_sum" style="display:none"> 
		<a href="left/performance/sum/person_performance.php" target="right">&nbsp;&nbsp;个人业绩</a><br>
		<a href="left/performance/sum/shop_performance.php" target="right">&nbsp;&nbsp;店铺业绩</a>
		</div>  
	<div  class="div_title_two" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
    <a href="#" onClick="p_c_administrator()" >&nbsp;数据管理</a></div>
		<div id="p_c_administrator" style="display:none"> 
        <a href="left/performance/administrator/performance_input.php" target="right">&nbsp;&nbsp;业绩</a><br>
		<a href="left/performance/administrator/enter_dress_number.php" target="right">&nbsp;&nbsp;进店试衣</a><br>
		<a href="left/performance/administrator/target.php" target="right">&nbsp;&nbsp;目标</a><br>
		<a href="left/performance/administrator/exchange_goods.php" target="right">&nbsp;&nbsp;换货</a><br>
 		<a href="left/performance/administrator/return_goods.php" target="right">&nbsp;&nbsp;退货</a><br>
 		<a href="left/performance/administrator/return_money.php" target="right">&nbsp;&nbsp;退款</a><br>
 		<a href="left/performance/administrator/return_goods_money.php" target="right">&nbsp;&nbsp;退货退款</a><br>
        <a href="left/performance/administrator/performance_count.php" target="right">&nbsp;&nbsp;业绩统计</a>
    </div>
	</div>
</div>
<div id="integral" class="div_title_one" onClick="i_content()"> <a href="#">积分模块</a></div>
	<div id="i_content" style="display:none">
    <div  class="div_title_two"><a href="#" onClick="i_c_input()">&nbsp;数据录入</a></div>
		<div id="i_c_input" style="display:none"> 
        <a href="left/integral/input/vip_data.php" target="right">&nbsp;&nbsp;vip资料</a><br>
		<a href="left/integral/input/integral_award.php" target="right">&nbsp;&nbsp;积分奖励</a><br>
		<a href="left/integral/input/vip_callback.php" target="right">&nbsp;&nbsp;vip回访</a><br>
        <a href="left/integral/input/vip_integral_value.php" target="right">&nbsp;&nbsp;积分、储值</a><br>
        <a href="left/integral/input/vip_birthdate.php" target="right">&nbsp;&nbsp;生日礼物</a><br>

        </div>
    <div  class="div_title_two"><a href="#" onClick="i_c_select()">&nbsp;数据查询</a></div>
    	<div id="i_c_select" style="display:none">
        <a href="left/integral/select/vip_data.php" target="right">&nbsp;&nbsp;vip资料</a><br>
 		<a href="left/integral/select/vip_callback.php" target="right">&nbsp;&nbsp;vip回访</a><br>
		<a href="left/integral/select/vip_integral_value.php" target="right">&nbsp;&nbsp;积分、储值</a><br>
   		<a href="left/integral/select/vip_birthdate.php" target="right">&nbsp;&nbsp;生日礼物</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="i_c_sum()">&nbsp;数据汇总</a></div>
        <div id="i_c_sum" style="display:none"> 
        <a href="left/integral/sum/vip_person_count.php" target="right">&nbsp;&nbsp;顾客统计</a><br>
		<a href="left/integral/sum/vip_number_count.php" target="right">&nbsp;&nbsp;数量统计</a><br>
		<a href="left/integral/sum/shop_development.php" target="right">&nbsp;&nbsp;拓展情况</a>
		</div>  
  <div  class="div_title_two" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
  <a href="#" onClick="i_c_administrator()">&nbsp;数据管理</a></div>
		<div id="i_c_administrator" style="display:none"> 
        <a href="left/integral/administrator/vip_data.php" target="right">&nbsp;&nbsp;vip资料</a><br>
		<a href="left/integral/administrator/integral_award.php" target="right">&nbsp;&nbsp;积分奖励</a><br>
		<a href="left/integral/administrator/vip_callback.php" target="right">&nbsp;&nbsp;vip回访</a><br>
        <a href="left/integral/administrator/vip_integral_value.php" target="right">&nbsp;&nbsp;积分、储值</a><br>
        <a href="left/integral/administrator/vip_birthdate.php" target="right">&nbsp;&nbsp;生日礼物</a><br>


        </div>
	</div>
</div>


<div id="money" class="div_title_one" onClick="m_content()" <?php if($money_permission_s!="yes") echo "style='display:none'"; ?>> <a href="#">财务模块</a></div>
	<div id="m_content" style="display:none">
    <div  class="div_title_two"><a href="#" onClick="m_c_input()">&nbsp;数据录入</a></div>
		<div id="m_c_input" style="display:none"> 
        <a href="left/money/input/money_clearing.php" target="right">&nbsp;&nbsp;财务结算</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="m_c_select()">&nbsp;数据查询</a></div>
    	<div id="m_c_select" style="display:none">
        <a href="left/money/select/money_clearing.php" target="right">&nbsp;&nbsp;财务结算</a><br>
		<a href="left/money/select/money.php" target="right">&nbsp;&nbsp;财务</a><br>
		<a href="left/money/select/cash_administrator.php" target="right">&nbsp;&nbsp;现金管理</a>
        </div>
    <div  class="div_title_two" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
    <a href="#" onClick="m_c_administrator()">&nbsp;数据管理</a></div>
		<div id="m_c_administrator" style="display:none"> 
        <a href="left/money/administrator/money_clearing.php" target="right">&nbsp;&nbsp;财务结算</a><br>
        <a href="left/money/administrator/money.php" target="right">&nbsp;&nbsp;财务</a>
        </div>
</div>


<div id="administrator" class="div_title_one" onClick="a_content()" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
 <a href="#">管理模块</a></div>
	<div id="a_content" style="display:none">
    <div  class="div_title_two"><a href="#" onClick="a_c_input()">&nbsp;数据录入</a></div>
		<div id="a_c_input" style="display:none"> 
		<a href="left/administrator/input/person_data.php" target="right">&nbsp;&nbsp;店员资料</a><br>
        <a href="left/administrator/input/shop_data.php" target="right">&nbsp;&nbsp;店铺资料</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="a_c_select()">&nbsp;数据查询</a></div>
    	<div id="a_c_select" style="display:none">
		<a href="left/administrator/select/person_data.php" target="right">&nbsp;&nbsp;店员资料</a><br>
        <a href="left/administrator/select/shop_data.php" target="right">&nbsp;&nbsp;店铺资料</a><br>
		<a href="left/administrator/select/permission.php" target="right">&nbsp;&nbsp;权限</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="a_c_administrator()">&nbsp;数据管理</a></div>
    	<div id="a_c_administrator" style="display:none">
		<a href="left/administrator/administrator/person_data.php" target="right">&nbsp;&nbsp;店员资料</a><br>
        <a href="left/administrator/administrator/shop_data.php" target="right">&nbsp;&nbsp;店铺资料</a><br>
		<a href="left/administrator/administrator/permission.php" target="right">&nbsp;&nbsp;权限</a>
        </div>
	</div>
</div>
<div id="else" class="div_title_one" onClick="e_content()" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
 <a href="#">其它模块</a></div>
	<div id="e_content" style="display:none">
    <div  class="div_title_two"><a href="#" onClick="e_c_select()">&nbsp;数据查询</a></div>
    	<div id="e_c_select" style="display:none">
		<a href="left/else/select/login_information.php" target="right">&nbsp;&nbsp;登录信息</a><br>
        <a href="left/else/select/notice.php" target="right">&nbsp;&nbsp;公告</a>
        </div> 
    <div  class="div_title_two"><a href="#" onClick="e_c_administrator()">&nbsp;数据管理</a></div>
    	<div id="e_c_administrator" style="display:none">
		<a href="left/else/administrator/login_information.php" target="right">&nbsp;&nbsp;登录信息</a><br>
        <a href="left/else/administrator/notice.php" target="right">&nbsp;&nbsp;公告</a>
        </div>
	</div>
</div>


</body>
</html>
