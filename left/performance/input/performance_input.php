<?php
session_start();
include("../../../include/list.php");
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.need_money{
	display:none;

}
#vip_info{
	position:absolute;
	top:414;
	left:900;
	z-index:-1;
	display:none;
	}
body{
	margin-top:10;
	margin-right:10;
	zoom:0.96;
	}
.end{
	position:fixed;
	top:10;
	left:900;
	z-index:0;
}
</style>
<link rel="stylesheet" href="css/performance_input.css" type="text/css" />
<script type="text/javascript" src="../../../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../../js/cookie.js"></script>
<script type="text/javascript" src="../../../js/performance_input.js"></script>


</head>
<body onLoad="load_cookie()">



<div class="row">
<div class="col-xs-12 content">
<form action="action/performance_input.php" method="post" enctype="multipart/form-data" name="performance_input">
<div class="container-fluid">



<div class="row">
	<div class="form-group">
    	<label class="col-xs-2 control-label">是否积分</label>
        <div class="col-xs-1">
        	<input  name="if_integral" id="no_reason_yes"  type="radio" value="yes">是&nbsp;&nbsp;
        	<input name="if_integral" id="no_reason_no" type="radio" value="no"  checked="CHECKED">否 
      	</div>
 
    	<label class="col-xs-1 control-label" for="vip_card_number"></label>
	    <div class="col-xs-1">
        <?php if(isset($_GET['vip_card_number'])){
			  $vip_card_number=$_GET['vip_card_number'];
	          echo "<input name='vip_card_number' type='text' id='vip_card_number' value='$vip_card_number' class='form-control'>";}else
     		  echo "<input name='vip_card_number' type='text' id='vip_card_number' class='form-control' placeholder='vip卡号'>"; ?>
       </div> 
       <div class="col-xs-1">
    	   <input type="button" name="select_vip" id="select_vip" value="查询" class="btn btn-info btn-sm ">
       </div> 
       <div class="col-xs-2">
        	<input class="form-control" name="no_integral_reason" type="text"  id="no_integral_reason" placeholder='不积分原因'>
      	</div>

        
	</div>
	
        

</div>


<div class="row">
	<div class="form-group" id="belong_shop_div">
 	    <label class="col-xs-2 control-label">所属店铺</label>
        <label class="col-xs-1 control-label">合计</label>
        <div class="col-xs-1">
 		  <select class="form-control" name="belong_shop[]" id="belong_shop">
          	  <?php list_shop('shop_name','g_shop_data','belong_shop[]'); ?>
          </select>
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="piece_div">
 	    <label class="col-xs-2 control-label">件数</label>
        <div class="col-xs-1">
 		  <input class="form-control" name="piece_sum" type="text"  id="piece_sum" readonly>
      	</div>
        <div class="col-xs-1">
 		  <input class="form-control" name="piece[]" type="text"  id="piece" value="1">
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="drop_money_div">
    	<label class="col-xs-2 control-label"><font color="#FF0000" size="+1"></font>吊牌金额</label>
        <div class="col-xs-1">
 		  <input class="form-control" name="drop_money_sum" type="text"  id="drop_money_sum" readonly>
      	</div>
        <div class="col-xs-1">
        	<input class="form-control" name="drop_money[]" type="text"  id="drop_money" size="5">
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="actual_money_div">
    	<label class="col-xs-2 control-label"><font color="#FF0000" size="+1"></font>实销金额</label>
        <div class="col-xs-1">
 		  <input class="form-control" name="actual_money_sum" type="text"  id="actual_money_sum" readonly>
      	</div>
        <div class="col-xs-1">
            <input class="form-control" name="actual_money[]" type="text"  id="actual_money" size="5" >
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="rate_div">
    	<label class="col-xs-2 control-label">折扣</label>
        <div class="col-xs-1">
 		  <input class="form-control" name="rate_sum" type="text"  id="rate_sum" readonly>
      	</div>
        <div class="col-xs-1">
            <input class="form-control" name="rate[]" type="text"  id="rate" readonly>
      	</div>
    </div>
</div>


<div class="col-xs-2" id="vip_info">
<div class="panel panel-primary">
      <div class="panel-heading">vip信息</div>
      <table class="table">
        <thead>
          <tr>
            <th>姓名</th>
            <th id="return_vip_name"></th>
          </tr>
          <tr>
            <th>卡号</th>
            <th id="return_vip_card_number"></th>
          </tr>
          <tr>
            <th>电话</th>
            <th id="return_phone_number"></th>
          </tr>
        </thead>
      </table>
    </div>
</div>


<div class="row">
	<div class="form-group">
 	    <label class="col-xs-2 control-label"></label>
        <div class="col-xs-1 col-xs-offset-2">
 			<input type="button" name="add" id="add" value="添加金额" class="btn btn-info">
      	</div>
        <div class="col-xs-1 col-xs-offset-1">
 			<input type="button" id="delete" value="删除金额" class="btn btn-info">
      	</div>   
        <div class="col-xs-1 ">
 			<input type="button" id="else_info" value="额外信息" class="btn btn-primary">
      	</div>  
    </div>
</div>

<div class="row need_money">
	<div class="form-group" id="need_money_div">
 	    <label class="col-xs-2 control-label">应付金额</label>
        <div class="col-xs-2">
 		  <input class="form-control" name="need_money" type="text"  id="need_money" placeholder="应付金额" readonly>
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="pay_way_div">
 	    <label class="col-xs-2 control-label">支付方式</label>
        <div class="col-xs-1">
 		  <select class="form-control" name="pay_way[]" id="pay_way">
            <option value="cash">现金</option>
            <option value="cash_ticket">现金券</option>
            <option value="slot_card">刷卡</option>
            <option value="value_card">储值卡</option>
            <option value="integral_exchange">积分兑换</option>
            <option value="else_way">其它方式</option>
          </select>
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="pay_money_div">
 	    <label class="col-xs-2 control-label"><font color="#FF0000" size="+1"></font>支付金额</label>
        <div class="col-xs-1">
 		  <input class="form-control" name="pay_money[]" type="text"  id="pay_money" size="6" >
      	</div>
        <label class="control-label text-danger" id="pay_money_check"></label>
    </div>
</div>
<div class="row">
	<div class="form-group">
 	    <label class="col-xs-2 control-label"></label>
        <div class="col-xs-1 col-xs-offset-2">
 		  <input type="button" name="add2" id="add2" value="添加支付方式" class="btn btn-info">
      	</div>
        <div class="col-xs-1 col-xs-offset-1">
 			<input type="button" id="delete2" value="删除支付方式" class="btn btn-info">
      	</div>   
    </div>
</div>


<div class="row">
	<div class="form-group" id="service_person_div">
 	    <label class="col-xs-2 control-label">服务人</label>
        <div class="col-xs-1">
 		  <select class="form-control" name="service_person[]" id="service_person">
          	  <?php list_person('person_name','g_user_data','service_person[]'); ?>
          </select>
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="service_person_weight_div">
 	    <label class="col-xs-2 control-label">服务人权重</label>
        
        <div class="col-xs-1">
 		  <input class="form-control" name="service_person_weight[]" type="text" id="service_person_weight" size="6">
      	</div>
		<label class="control-label text-danger" id="spw_check"></label>
    </div>
    
</div>
<div class="row">
	<div class="form-group">
 	    <label class="col-xs-2 control-label">平均服务人权重</label>
        <div class="col-xs-1">
 		  <input name="average_service_person_weight" type="radio" id="average_service_person_weight1" value="yes"  checked="CHECKED">是&nbsp;&nbsp;
          <input name="average_service_person_weight" type="radio" id="average_service_person_weight2" value="no">否
      	</div>
 	    <label class="col-xs-1 control-label"></label>
        <div class="col-xs-1">
 		  <input type="button" name="add3" id="add3" value="添加服务人" onClick="add_person()" class="btn btn-info">
      	</div>
        <div class="col-xs-1 col-xs-offset-1">
 			<input type="button" id="delete3" value="删除服务人" class="btn btn-info">
      	</div>   
    </div>
</div>
<br>

<div class="row">
	<div class="form-group" id="service_shop_div">
 	    <label class="col-xs-2 control-label">服务店铺</label>
        <div class="col-xs-1">
 		  <select class="form-control" name="service_shop[]" id="service_shop">
          	  <?php list_shop('shop_name','g_shop_data','service_shop[]'); ?>
          </select>
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group" id="service_shop_weight_div">
 	    <label class="col-xs-2 control-label">服务店铺权重</label>
        <div class="col-xs-1">
 		  <input class="form-control" name="service_shop_weight[]" type="text" id="service_shop_weight" size="6">
      	</div>
        <label class="control-label text-danger" id="ssw_check"></label>
    </div>
</div>
<div class="row">
	<div class="form-group">
 	    <label class="col-xs-2 control-label">平均服务店铺权重</label>
        <div class="col-xs-1">
 		  <input name="average_service_shop_weight" type="radio" id="average_service_shop_weight1" value="yes"  checked="CHECKED">是&nbsp;&nbsp;
          <input name="average_service_shop_weight" type="radio" id="average_service_shop_weight2" value="no">否
      	</div>
 	    <label class="col-xs-1 control-label"></label>
        <div class="col-xs-1">
 		  <input type="button" name="add4" id="add4" value="添加服务店铺" onClick="add_person()" class="btn btn-info">
      	</div>
        <div class="col-xs-1 col-xs-offset-1">
 			<input type="button" id="delete4" value="删除服务店铺" class="btn btn-info">
      	</div>   
		<div class="col-xs-1 col-xs-offset-4" id="submit_div">
 		  <input type="submit" name="submit" id="submit" value="提　交" class="btn btn-success btn-lg" disabled>
      	</div>
    </div>
</div>

<div class="end">
<div class="panel panel-primary">
      <div class="panel-heading">额外信息</div>
      <table class="table">
        <thead>
          <tr>
            <th>登记人</th>
            <th><?php radio_person('check_person');?>
            </th>
          </tr>
          <tr>
            <th>登记店铺</th>
            <th><?php radio_shop('shop_name','g_shop_data','check_shop');?></th>
          </tr>
          <tr>
            <th>备注</th>
            <th><textarea class="form-control" name="memo" id="memo">业绩</textarea></th>
          </tr>
        </thead>
      </table>
    </div>
<!--<div class="row">
	<div class="form-group">
 	    <label class="col-xs-4 control-label">登记人</label>
        <div class="col-xs-10">
 		  <?php radio_person('check_person');?>
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group">
 	    <label class="col-xs-4 control-label">登记店铺</label>
        <div class="col-xs-10">
 		  <?php radio_shop('shop_name','g_shop_data','check_shop');?>
      	</div>
    </div>
</div>
<div class="row">
	<div class="form-group">
 	    <label class="col-xs-4 control-label">备注</label>
        <div class="col-xs-4">
        	<textarea class="form-control" name="memo" id="memo">业绩</textarea>
 		  <input class="form-control" type="text" name="memo" id="memo" value="业绩">
      	</div>
    </div>
</div>-->
</div>


</div>
</form>
</div>


</div>
</body>
</html>
