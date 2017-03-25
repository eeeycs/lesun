<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/person_data.css" type="text/css" />
<script type="text/javascript">
function if_vip() {
	if(document.getElementById("if_vip").checked==true)
	document.getElementById("vip_card_number").readOnly="";
	else
	document.getElementById("vip_card_number").readOnly="readonly";
}
</script>
</head>
<body>
<form action="action/person_data.php" method="post" enctype="multipart/form-data" name="person_data">
  <table  style='white-space: nowrap;' border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      店员资料录入系统
    </caption>
    <tr>
      <td width="155"><font color="#FF0000" size="+1">*</font>店员姓名</td>
      <td width="1156"><input name="person_name" type="text" required="required" id="person_name"></td>
    </tr>
    <tr>
      <td>所属店铺</td>
      <td><select name="belong_shop" id="belong_shop">

<?php
include("../../../include/link.php");$sql="SELECT shop_name FROM `g_shop_data` order by serial_number DESC";
$result=mysql_query($sql);


while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
echo"
        <option value=$row[shop_name]>$row[shop_name]</option>
  ";
}
?>

      </select></td>
    </tr>
    <tr>
      <td>职务</td>
      <td><select name="duty" id="duty">
       <option value="administrator">管理员</option>
       <option value="money">财务</option>
       <option value="shop_manager">店长</option>
       <option value="staff" selected>员工</option>
      </select></td>
    </tr>
    <tr>
      <td>权限</td>
      <td><select name="permission" id="permission">
        <option value="administrator_permission">管理员权限</option>
        <option value="money_permission">财务权限</option>
        <option value="shop_manager_permission">店长权限</option>
        <option value="staff_permission" selected>员工权限</option>
      </select></td>
    </tr>
    <tr>
      <td>状态</td>
      <td><select name="status" id="status">
        <option value="try" selected>试用</option>
        <option value="on_job">在职</option>
        <option value="holiday">休假</option>
        <option value="leave_job">离职</option>
      </select></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>入职日期</td>
      <td><input name="star_date" type="date" required="required" id="star_date"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>证件类型</td>
      <td><input name="certificate_type" type="text" required="required" id="certificate_type"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>证件号码</td>
      <td><input name="certificate_number" type="text" required="required" id="certificate_number"></td>
    </tr>
    <tr>
      <td>性别</td>
      <td><input type="radio" name="sex" id="sex" value="male">
      男
        <input name="sex" type="radio" id="sex2" value="female" checked="CHECKED">
        女</td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>出生日期</td>
      <td><input name="birthdate" type="date" required="required" id="birthdate"></td>
    </tr>
    <tr>
      <td>婚姻状态</td>
      <td><input type="radio" name="marital_status" id="marital_status" value="yes">
        已婚
      <input name="marital_status" type="radio" id="marital_status2" value="no" checked="CHECKED">
      未婚</td>
    </tr>
    <tr>
      <td>民族</td>
      <td><input type="text" name="nation" id="nation"></td>
    </tr>
    <tr>
      <td>政治面貌</td>
      <td><select name="political_face" id="political_face">
        <option value="普通群众">普通群众</option>
        <option value="团员">团员</option>
        <option value="预备党员">预备党员</option>        
        <option value="党员">党员</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>籍贯</td>
      <td><input type="text" name="birthplace" id="birthplace"></td>
    </tr>
    <tr>
      <td>户籍地</td>
      <td><input type="text" name="domicile_place" id="domicile_place"></td>
    </tr>
    <tr>
      <td>邮政编码</td>
      <td><input type="text" name="postcode" id="postcode"></td>
    </tr>
    <tr>
      <td>开户银行</td>
      <td><input type="text" name="account_bank" id="account_bank"></td>
    </tr>
    <tr>
      <td>银行帐号</td>
      <td><input type="text" name="bank_number" id="bank_number"></td>
    </tr>
    <tr>
      <td>学校</td>
      <td><input type="text" name="school" id="school"></td>
    </tr>
    <tr>
      <td>专业</td>
      <td><input type="text" name="profession" id="profession"></td>
    </tr>
    <tr>
      <td>学历</td>
      <td><input type="text" name="education" id="education"></td>
    </tr>
    <tr>
      <td>毕业日期</td>
      <td><input type="date" name="graduate_date" id="graduate_date"></td>
    </tr>
    <tr>
      <td>专长</td>
      <td><input type="text" name="special" id="special"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>移动电话</td>
      <td><input name="phone_number" type="text" required="required" id="phone_number"></td>
    </tr>
    <tr>
      <td>家庭电话</td>
      <td><input type="text" name="home_number" id="home_number"></td>
    </tr>
    <tr>
      <td>办公电话</td>
      <td><input type="text" name="office_number" id="office_number"></td>
    </tr>
    <tr>
      <td>电子邮箱</td>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>QQ号码</td>
      <td><input type="text" name="qq_number" id="qq_number"></td>
    </tr>
    <tr>
      <td>微信号码</td>
      <td><input type="text" name="wechat_number" id="wechat_number"></td>
    </tr>
    <tr>
      <td><p>紧急情况联系人1</p></td>
      <td><input type="text" name="emergency_contact_1" id="emergency_contact_1"></td>
    </tr>
    <tr>
      <td>紧急情况联系电话1</td>
      <td><input type="text" name="emergency_phone_number_1" id="emergency_phone_number_1"></td>
    </tr>
    <tr>
      <td>紧急情况联系人2</td>
      <td><input type="text" name="emergency_contact_2" id="emergency_contact_2"></td>
    </tr>
    <tr>
      <td>紧急情况联系电话2</td>
      <td><input type="text" name="emergency_phone_number_2" id="emergency_phone_number_2"></td>
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
      <td><input type="text" name="memo" id="memo" value="店员资料"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
    </tr>
  </table>

</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
