<?php
session_start();
?>
  <?php
include("include/link.php");$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];


$sql="SELECT administrator_permission,money_permission,shop_manager_permission,staff_permission FROM `g_permission` where person_name='$service_person_s'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$administrator_permission_s=$row['administrator_permission'];
$money_permission_s=$row['money_permission'];
$shop_manager_permission_s=$row['shop_manager_permission'];
$staff_permission_s=$row['staff_permission'];

?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js"></script>

  </head>
<body>	
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="right.php" target="right">Lesun</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="left/integral/select/vip_birthdate_list.php" target="right">近期生日</a></li>
        <li><a href="left/integral/select/vip_callback.php" target="right">回访记录</a></li>
      	<li><a href="left/performance/sum/person_performance.php" target="right">销售情况</a></li>

		<li><a></a></li>
        <li><a href="left/performance/input/performance_input.php" target="right">录入业绩</a></li>	
        <li><a href="left/performance/select/performance_input.php" target="right">业绩</a></li>
        <li><a href="left/performance/select/goods.php" target="right">商品信息</a></li>
        <li><a href="left/performance/select/performance_count.php" target="right">业绩统计</a></li>
        <li><a href="left/integral/select/vip_data.php" target="right">vip资料</a></li>  
        <li><a href="left/integral/select/vip_integral_value.php" target="right">积分储值</a></li>        
        <li><a href="left/money/select/money.php" target="right">财务</a></li>
	    
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="bottom/contact_we.php"  target="right">联系我们</a></li>
        <li><a href="bottom/partner.php" target="right">合作伙伴</a></li>
        <li><a href="top/update_password.php" target="right">修改密码</a></li>
        <li><a href="top/notice.php" target="right" <?php if($administrator_permission_s!="yes") echo "style='display:none'"; ?>>公告发布</a></li>
        <li><a href="../index.php" target="_top">退出</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</body>
</html>