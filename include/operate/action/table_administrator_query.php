<?php
function table($table,$file_name,$operate,$serial_number_src)
{
	
@mysql_connect("localhost","root","123456") or die("error");
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db("system2");
date_default_timezone_set('Asia/Shanghai');



if($operate=="select")
{
$sql="SELECT * FROM $table where 1";
$sql2="SELECT * FROM $table";
$result2=mysql_query($sql2);
$number_fields=mysql_num_fields($result2);
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result2,$i);
if($_POST[$field_name]!="")
$sql=$sql." and($field_name like '%$_POST[$field_name]%')";
}
$sql=$sql." order by serial_number DESC";
$result=mysql_query($sql);

$number=18;
$page=(isset($_GET['page']))?$_GET['page']:1; 
$sum_number=mysql_num_rows($result);
$number_fields=mysql_num_fields($result);
$page_number=ceil(($number!=0)?$sum_number/$number:0); 
$start_number=($page-1)*$number;
//$sql=$sql." limit $start_number,$number";
$result=mysql_query($sql);
$sum_numbers=mysql_num_rows($result);


echo "
<table class='table-hover' border='1' cellspacing='0' style='white-space: nowrap;'>
    <caption class='caption_bigtitle'>
      查询结果
    </caption>
	 <tr>
    <td>操作</td>
    <td>日期</td>
    <td>时间	</td>
    <td>流水号</td>	
    <td>顾客代码</td>
    <td>顾客姓名</td>
    <td>vip卡号</td>
    <td>证件类型</td>
    <td>证件号码</td>
    <td>性别</td>
    <td>民族</td>
    <td>出生日期</td>	
    <td>是否农历</td>	
    <td>年龄段</td>
    <td>重要纪念日</td>
    <td>婚姻状态</td>
    <td>职业</td>
    <td>收入</td>
    <td>身高</td>
    <td>腰围</td>
    <td>个人爱好</td>
    <td>照片</td>
    <td>移动电话</td>
    <td>家庭电话</td>
    <td>办公电话</td>	
    <td>电子邮箱</td>
    <td>QQ号码</td>
    <td>微信号码</td>
    <td>城市</td>
    <td>学校</td>
    <td>详细地址</td>
    <td>邮政编码</td>	
    <td>喜欢品牌</td>
    <td>喜欢款式</td>	
    <td>着装风格</td>
    <td>着装颜色</td>	
    <td>上装尺码</td>
    <td>下装尺码</td>
    <td>接受价位下限</td>	
    <td>接受价位上限</td>
    <td>购买单号</td>
    <td>购买日期</td>
    <td>购买吊牌金额</td>
    <td>购买实销金额</td>
    <td>折率</td>
    <td>储值金额</td>
    <td>介绍人</td>
    <td>服务人</td>
    <td>服务店铺</td>
    <td>登记人</td>
    <td>登记店铺</td>	
    <td>备注</td>
  </tr>
  <tr>
  ";
  
//for($i=0;$i<$number_fields;$i++)
//{
//$field_name=mysql_field_name($result2,$i);
//echo "<td>$field_name</td>";
//}
//echo"</tr>";

for ($i=0;$i<$number_fields;$i++) $sum_src[$i]=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
echo"<tr>";
echo"
<td>
	<a class='btn btn-primary btn-xs' href='../../../../performance/input/performance_input.php?operate=delete&vip_card_number=$row[vip_card_number]'>选择</a>
	<a href='operate/../../$file_name.php?operate=update&serial_number=$row[serial_number]'></a>
	<a class='btn btn-success btn-xs' href='operate/../../$file_name.php?operate=select&serial_number=$row[serial_number]'>查询</a>
</td>";

for ($i=0;$i<$number_fields;$i++)
{
echo"<td>$row[$i]</td>";
$sum_src[$i]=$sum_src[$i]+(float)$row[$i];
}
echo "</tr>";
}

echo "<tr>";
echo"<td><strong>合计</strong></td>";
for ($i=0;$i<$number_fields;$i++) echo"<td>$sum_src[$i]</td>";
echo "</tr>";

echo "<tr>";
echo"<td><strong>均值</strong></td>";
for ($i=0;$i<$number_fields;$i++) 
{
$sum_src[$i]=round(($sum_numbers!=0)?$sum_src[$i]/$sum_numbers:0,3);
echo"<td>$sum_src[$i]</td>";
}
echo "</tr>";


echo "</table>";



}
}
?>