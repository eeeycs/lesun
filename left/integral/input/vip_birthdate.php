<?php
session_start();
?>
<script src='../../../../js/calendar.js' type='text/javascript'>
</script>
<script src='../../../../js/cookie.js' type='text/javascript'>
</script>
<script src='../../../js/jquery-2.1.1.js' type='text/javascript'>
</script>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_birthdate.css" type="text/css" />

<script type="text/javascript">
function select_a()
{
var vip_card_number=document.getElementById('vip_card_number').value;
var href='vip_birthdate.php?vip_card_number='+vip_card_number;
location.href=href;

}
</script>
</head>
<body>

<form action="action/vip_birthdate.php" method="post" enctype="multipart/form-data" name="vip_birthdate">
  <table style='white-space: nowrap;'   border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      VIP生日礼物录入系统
    </caption>
    <tr>
      <td width="87"><font color="#FF0000" size="+1">*</font>vip卡号</td>
      <td width="565">
      
      
	  <?php
      include("../../../include/link.php");if(isset($_GET['vip_card_number']))
{
$vip_card_number=$_GET['vip_card_number'];
echo "<input type='text' name='vip_card_number' id='vip_card_number' value=$vip_card_number>";
}
else
echo "<input type='text' name='vip_card_number' id='vip_card_number'>";
	  ?>
      <input  type="button" onClick="select_a()" value="查询"><label>&nbsp;</label>
      (单击一次查询出生日期，再次单击查询生日差距)	
      </td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>顾客姓名</td>
      <td><input name="vip_name" type="text" required="required" id="vip_name"></td>
    </tr>

    <tr>
      <td>出生日期</td>
      <td>
      <?php

$date=date("Y-m-d");
if(isset($_GET['vip_card_number']))
{

$sql_s="select birthdate,if_lunar from j_vip_data where (vip_card_number='$vip_card_number')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$birthdate_s=$row_s['birthdate'];
$birthdate=$birthdate_s;
$if_lunar=$row_s['if_lunar'];
echo "<input name='birthdate' type='text' id='birthdate' readonly='readonly' value=$birthdate>";
}
else
echo "<input name='birthdate' type='text' id='birthdate' readonly='readonly'>";

?>
      
      </td>
    </tr>


    <tr>
      <td>是否农历</td>
      <td>
      <?php
if(isset($_GET['vip_card_number']))
{
echo "<input name='if_lunar' type='text' id='if_lunar' value=$if_lunar>";
}
?>
      
      </td>
    </tr>


    <tr>
      <td>生日差距</td>
      <td>
      <?php

if(isset($_GET['vip_card_number']))
{


$birthdate_year=substr($birthdate,0,4);
$birthdate_month=substr($birthdate,5,2);
$birthdate_day=substr($birthdate,8,2);



if($if_lunar=='yes')
{

echo"
<script type='text/javascript'>

$(function(){

var solar = calendar.lunar2solar($birthdate_year,$birthdate_month,$birthdate_day);
var year=solar.sYear;
var month=solar.sMonth;
var day=solar.sDay;

setcookie('year',year);
setcookie('month',month);
setcookie('day',day);
 

 });
 
</script>
";

$birthdate_year=$_COOKIE["year"];
$birthdate_month=$_COOKIE["month"];
$birthdate_day=$_COOKIE["day"];


}


$date_month=substr($date,5,2);
$date_day=substr($date,8,2);

$month_diff=$birthdate_month-$date_month;
$day_diff=$birthdate_day-$date_day;



if($month_diff==0)
{
	if($day_diff>0)
	{
	$birthdate_gap="还有".$day_diff."天";
	}
	if($day_diff==0)
	{
	$birthdate_gap="今天";
	}
	if($day_diff<0)
	{
	$birthdate_gap="还有12月";
	}	
}
if($month_diff>0)
{
	$birthdate_gap="还有".$month_diff."月";
}
if($month_diff<0)
{
	$month_diff=12+$month_diff;
	$birthdate_gap="还有".$month_diff."月";
}
echo "<input name='birthdate_gap' type='text' id='birthdate_gap' readonly='readonly' value=$birthdate_gap>";
}
else
echo "<input name='birthdate_gap' type='text' id='birthdate_gap' readonly='readonly'>";

?>
      
      </td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>礼物名称</td>
      <td><input name="gift_name" type="text" required="required" id="gift_name"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>礼物数量</td>
      <td><input name="gift_number" type="text" required="required" id="gift_number"></td>
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
      <td><input name="memo" type="text" id="memo" value="vip生日" readonly></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  

</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
