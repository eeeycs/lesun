<?php
function table($table,$file_name,$operate,$serial_number)
{
@mysql_connect("localhost","root","123456") or die("error");
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db("system2");
date_default_timezone_set('Asia/Shanghai');


if($operate=='select')
{
$sql="SELECT * FROM $table where serial_number='$serial_number'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$number_fields=mysql_num_fields($result);

echo "
<form action='action/$file_name.php' method='post' name='$file_name'>

<table style='white-space: nowrap;' border='1' cellspacing='0'>
    <caption class='caption_bigtitle'>
      查询
    </caption>
	 <tr>
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
  <tr>";
//for($i=0;$i<$number_fields;$i++)
//{
//$field_name=mysql_field_name($result,$i);
//echo "<td>$field_name</td>";
//}
//echo"</tr><tr>";
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result,$i);
if($field_name=="date")
echo"<td><input type='text' size='3' name='$field_name'  value='$row[$i]'></td>";
else
echo"<td><input type='text' size='3' name='$field_name'  value=''></td>";
}

echo "
    
  </tr>
  <td><input class='btn btn-success' type='submit' name='submit' id='submit' value='查询'></td>
  	<input name='serial_number_src' type='hidden' value='$serial_number'>
	<input name='operate' type='hidden' value='$operate'>
 </table>
</form>
";	
}

}
?>

