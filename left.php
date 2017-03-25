<?php
session_start();
?>
  <?php
include("include/link.php");
$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$sql="SELECT administrator_permission,money_permission,shop_manager_permission,staff_permission FROM `g_permission` where person_name='$service_person_s'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$administrator_permission_s=$row['administrator_permission'];
$money_permission_s=$row['money_permission'];
$shop_manager_permission_s=$row['shop_manager_permission'];
$staff_permission_s=$row['staff_permission'];

?>
<html>
<head><link href="css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="css/left.css" type="text/css" />
<script src="js/left.js" type="text/jscript"></script>
<style type="text/css">
body{
	margin-left:10;
	zoom:0.9;
	}
</style>
</head>
<body>

<br>

<div style="width:140px;">
<div>
<div >
<div id="performance"  onClick="p_content()"> <a href="#" class="btn btn-block btn-primary btn-lg">业绩模块</a></div>
	<div id="p_content" style="display:none">
    <div ><a href="#" onClick="p_c_input()" class="btn btn-block btn-success">数据录入</a></div>
		<div id="p_c_input" style="display:none"> 
        <a href="left/performance/input/performance_input.php" target="right" class="btn btn-block btn-info btn-xs">业绩</a>
		<a href="left/performance/input/enter_dress_number.php" target="right" class="btn btn-block btn-info btn-xs">进店试衣</a>
        <a class="btn btn-xs"></a>
		<div   <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
        <a href="left/performance/input/target.php" target="right"  class="btn btn-block btn-info btn-xs">目标</a>
		</div>
        <a class="btn btn-xs"></a>
        <a href="left/performance/input/exchange_goods.php" target="right" class="btn btn-block btn-info btn-xs">换货</a>
 		<a href="left/performance/input/return_goods.php" target="right" class="btn btn-block btn-info btn-xs">退货</a>
 		<a href="left/performance/input/return_money.php" target="right" class="btn btn-block btn-info btn-xs">退款</a>
 		<a href="left/performance/input/return_goods_money.php" target="right" class="btn btn-block btn-info btn-xs">退货退款</a>
        </div>
    <div  ><a href="#" onClick="p_c_select()" class="btn btn-block btn-success">数据查询</a></div>
    	<div id="p_c_select" style="display:none">
        <a href="left/performance/select/performance_input.php" target="right" class="btn btn-block btn-info btn-xs">业绩</a>
		<a href="left/performance/select/enter_dress_number.php" target="right" class="btn btn-block btn-info btn-xs">进店试衣</a>
		<a href="left/performance/select/target.php" target="right" class="btn btn-block btn-info btn-xs">目标</a>
		<a href="left/performance/select/exchange_goods.php" target="right" class="btn btn-block btn-info btn-xs">换货</a>
 		<a href="left/performance/select/return_goods.php" target="right" class="btn btn-block btn-info btn-xs">退货</a>
 		<a href="left/performance/select/return_money.php" target="right" class="btn btn-block btn-info btn-xs">退款</a>
 		<a href="left/performance/select/return_goods_money.php" target="right" class="btn btn-block btn-info btn-xs">退货退款</a>
        <a href="left/performance/select/performance_count.php" target="right" class="btn btn-block btn-info btn-xs">业绩统计</a>
        <a href="left/performance/select/goods.php" target="right" class="btn btn-block btn-info btn-xs">商品信息</a>
        </div>
    <div ><a href="#" onClick="p_c_sum()" class="btn btn-block btn-success">数据汇总</a></div>
        <div id="p_c_sum" style="display:none"> 
		<a class="btn btn-block btn-info btn-xs" href="left/performance/sum/person_performance.php" target="right">个人业绩</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/performance/sum/shop_performance.php" target="right">店铺业绩</a>
		</div>  
	<div  <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
    <a href="#" onClick="p_c_administrator()" class="btn btn-block btn-success">数据管理</a></div>
		<div id="p_c_administrator" style="display:none"> 
        <a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/performance_input.php" target="right">业绩</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/enter_dress_number.php" target="right">进店试衣</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/target.php" target="right">目标</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/exchange_goods.php" target="right">换货</a>
 		<a  class="btn btn-block btn-info btn-xs" href="left/performance/administrator/return_goods.php" target="right">退货</a>
 		<a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/return_money.php" target="right">退款</a>
 		<a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/return_goods_money.php" target="right">退货退款</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/performance_count.php" target="right">业绩统计</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/performance/administrator/goods.php" target="right">商品信息</a>
    </div>
	</div>
</div><br>
<div id="integral"  onClick="i_content()"> <a href="#" class="btn btn-block btn-primary btn-lg">积分模块</a></div>
	<div id="i_content" style="display:none">
    <div  ><a href="#" onClick="i_c_input()" class="btn btn-block btn-success">数据录入</a></div>
		<div id="i_c_input" style="display:none"> 
        <a class="btn btn-block btn-info btn-xs"  href="left/integral/input/vip_data.php" target="right">vip资料</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/integral/input/integral_award.php" target="right">积分奖励</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/integral/input/vip_callback.php" target="right">vip回访</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/integral/input/vip_integral_value.php" target="right">积分、储值</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/integral/input/vip_birthdate.php" target="right">生日礼物</a>

        </div>
    <div  ><a href="#" onClick="i_c_select()" class="btn btn-block btn-success">数据查询</a></div>
    	<div id="i_c_select" style="display:none">
        <a class="btn btn-block btn-info btn-xs"  href="left/integral/select/vip_data.php" target="right">vip资料</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/integral/select/integral_award.php" target="right">积分奖励</a>
 		<a class="btn btn-block btn-info btn-xs"  href="left/integral/select/vip_callback.php" target="right">vip回访</a>
		<a  class="btn btn-block btn-info btn-xs" href="left/integral/select/vip_integral_value.php" target="right">积分、储值</a>
   		<a  class="btn btn-block btn-info btn-xs" href="left/integral/select/vip_birthdate.php" target="right">生日礼物</a>
        </div>
    <div  ><a href="#" onClick="i_c_sum()" class="btn btn-block btn-success">数据汇总</a></div>
        <div id="i_c_sum" style="display:none"> 
        <a class="btn btn-block btn-info btn-xs"  href="left/integral/sum/vip_person_count.php" target="right">顾客统计</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/integral/sum/vip_number_count.php" target="right">数量统计</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/integral/sum/shop_development.php" target="right">拓展情况</a>
		</div>  
  <div   <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
  <a href="#" onClick="i_c_administrator()" class="btn btn-block btn-success">数据管理</a></div>
		<div id="i_c_administrator" style="display:none"> 
        <a  class="btn btn-block btn-info btn-xs" href="left/integral/administrator/vip_data.php" target="right">vip资料</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/integral/administrator/integral_award.php" target="right">积分奖励</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/integral/administrator/vip_callback.php" target="right">vip回访</a>
        <a  class="btn btn-block btn-info btn-xs" href="left/integral/administrator/vip_integral_value.php" target="right">积分、储值</a>
        <a  class="btn btn-block btn-info btn-xs" href="left/integral/administrator/vip_birthdate.php" target="right">生日礼物</a>


        </div>
	</div>
</div><br>

<div id="money"  onClick="m_content()" <?php if($money_permission_s!="yes") echo "style='display:none'"; ?>> 
<a href="#" class="btn btn-block btn-primary btn-lg">财务模块</a></div>
	<div id="m_content" style="display:none">
    <div  ><a href="#" onClick="m_c_input()" class="btn btn-block btn-success">数据录入</a></div>
		<div id="m_c_input" style="display:none"> 
        <a class="btn btn-block btn-info btn-xs"  href="left/money/input/money_clearing.php" target="right">财务结算</a>
        </div>
    <div  ><a href="#" onClick="m_c_select()" class="btn btn-block btn-success">数据查询</a></div>
    	<div id="m_c_select" style="display:none">
        <a class="btn btn-block btn-info btn-xs"  href="left/money/select/money_clearing.php" target="right">财务结算</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/money/select/money.php" target="right">财务</a>
        </div>
    <div   <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
    <a href="#" onClick="m_c_administrator()" class="btn btn-block btn-success">数据管理</a></div>
		<div id="m_c_administrator" style="display:none"> 
        <a class="btn btn-block btn-info btn-xs"  href="left/money/administrator/money_clearing.php" target="right">财务结算</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/money/administrator/money.php" target="right">财务</a>
        </div>
</div>
<br>
<div>
<div id="administrator"  onClick="a_content()" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
 <a href="#" class="btn btn-block btn-primary btn-lg">管理模块</a></div>
	<div id="a_content" style="display:none">
    <div  class="div_title_two"><a href="#" onClick="a_c_input()" class="btn btn-block btn-success">数据录入</a></div>
		<div id="a_c_input" style="display:none"> 
		<a  class="btn btn-block btn-info btn-xs" href="left/administrator/input/person_data.php" target="right">店员资料</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/administrator/input/shop_data.php" target="right">店铺资料</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="a_c_select()" class="btn btn-block btn-success">数据查询</a></div>
    	<div id="a_c_select" style="display:none">
		<a  class="btn btn-block btn-info btn-xs" href="left/administrator/select/person_data.php" target="right">店员资料</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/administrator/select/shop_data.php" target="right">店铺资料</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/administrator/select/permission.php" target="right">权限</a>
        </div>
    <div  class="div_title_two"><a href="#" onClick="a_c_administrator()" class="btn btn-block btn-success">数据管理</a></div>
    	<div id="a_c_administrator" style="display:none">
		<a  class="btn btn-block btn-info btn-xs" href="left/administrator/administrator/person_data.php" target="right">店员资料</a>
        <a  class="btn btn-block btn-info btn-xs" href="left/administrator/administrator/shop_data.php" target="right">店铺资料</a>
		<a class="btn btn-block btn-info btn-xs"  href="left/administrator/administrator/permission.php" target="right">权限</a>
        </div>
	</div>
</div><br>

<div id="else"  onClick="e_content()" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>
 <a href="#" class="btn btn-block btn-primary btn-lg	">其它模块</a></div>
	<div id="e_content" style="display:none">
    <div  class="div_title_two"><a href="#" onClick="e_c_select()" class="btn btn-block btn-success">数据查询</a></div>
    	<div id="e_c_select" style="display:none">
		<a class="btn btn-block btn-info btn-xs"  href="left/else/select/login_information.php" target="right">登录信息</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/else/select/notice.php" target="right">公告</a>
        </div> 
    <div  class="div_title_two"><a href="#" onClick="e_c_administrator()" class="btn btn-block btn-success">数据管理</a></div>
    	<div id="e_c_administrator" style="display:none">
		<a class="btn btn-block btn-info btn-xs"  href="left/else/administrator/login_information.php" target="right">登录信息</a>
        <a class="btn btn-block btn-info btn-xs"  href="left/else/administrator/notice.php" target="right">公告</a>
        </div>
	</div>
</div>
</div>

</body>
</html>
