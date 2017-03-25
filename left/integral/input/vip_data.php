<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_data.css" type="text/css" />
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
<form action="action/vip_data.php" method="post" enctype="multipart/form-data" name="vip_data">
  <table  style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">
      VIP资料录入系统
    </caption>
    <tr>
      <td width="107"><font color="#FF0000" size="+1">*</font>顾客姓名</td>
      <td width="1206"><input name="vip_name" type="text" required="required" id="vip_name"></td>
    </tr>
    <tr>
      <td>证件类型</td>
      <td><input type="text" name="id_type" id="id_type"></td>
    </tr>
    <tr>
      <td>证件号码</td>
      <td><input type="text" name="id_number" id="id_number"></td>
    </tr>
    <tr>
      <td>性别</td>
      <td><input type="radio" name="sex" id="sex" value="male">
        男
        <input name="sex" type="radio" id="sex2" value="female" checked="CHECKED">
        女</td>
    </tr>
    <tr>
      <td>民族</td>
      <td><input type="text" name="nation" id="nation"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>出生日期</td>
      <td><p>
        <input name="birthdate" type="date" required="required" id="birthdate">
      </p></td>
    </tr>
    <tr>
      <td>是否农历</td>
      <td><input type="radio" name="if_lunar" id="if_lunar1" value="yes"  checked="CHECKED">
        是
        <input name="if_lunar" type="radio" id="if_lunar2" value="no">
        否</td>
    </tr>
    <tr>
      <td>年龄段</td>
      <td><select name="age_group" id="age_group">
        <option value="0-18">18以下</option>
        <option value="18-28">18-28</option>
        <option value="29-38">29-38</option>
        <option value="39-48">39-48</option>
        <option value="49-58">49-58</option>
        <option value="59-68">59-68</option>
        <option value="69-100">69以上</option>
      </select></td>
    </tr>
    <tr>
      <td>重要纪念日</td>
      <td><input type="text" name="important_anniversary" id="important_anniversary"></td>
    </tr>
    <tr>
      <td>婚姻状态</td>
      <td><input type="radio" name="marital_status" id="marital_status" value="yes">
        已婚
        <input name="marital_status" type="radio" id="marital_status2" value="no" checked="CHECKED">
        未婚</td>
    </tr>
    <tr>
      <td>职业</td>
      <td><input type="text" name="profession" id="profession"></td>
    </tr>
    <tr>
      <td>收入</td>
      <td><input type="text" name="income" id="income"></td>
    </tr>
    <tr>
      <td>身高</td>
      <td><input type="text" name="height" id="height"></td>
    </tr>
    <tr>
      <td>腰围</td>
      <td><input type="text" name="waistline" id="waistline"></td>
    </tr>
    <tr>
      <td>个人爱好</td>
      <td><input type="text" name="hobby" id="hobby"></td>
    </tr>
    <tr>
      <td>照片</td>
      <td><input type="file" name="image" id="image" accept="image/*"></td>
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
      <td>城市</td>
      <td><input type="text" name="city" id="city"></td>
    </tr>
    <tr>
      <td>学校</td>
      <td><input type="text" name="school" id="school"></td>
    </tr>
    <tr>
      <td>详细地址</td>
      <td><input type="text" name="address" id="address"></td>
    </tr>
    <tr>
      <td>邮政编码</td>
      <td><input type="text" name="postcode" id="postcode"></td>
    </tr>
    <tr>
      <td>喜欢品牌</td>
      <td><input type="text" name="like_brand" id="like_brand"></td>
    </tr>
    <tr>
      <td>喜欢款式</td>
      <td><input type="text" name="like_type" id="like_type"></td>
    </tr>
    <tr>
      <td>着装风格</td>
      <td><input type="text" name="dress_style" id="dress_style"></td>
    </tr>
    <tr>
      <td>着装颜色</td>
      <td><input type="text" name="dress_color" id="dress_color"></td>
    </tr>
    <tr>
      <td>上装尺码</td>
      <td><input type="text" name="up_size" id="up_size"></td>
    </tr>
    <tr>
      <td>下装尺码</td>
      <td><input type="text" name="down_size" id="down_size"></td>
    </tr>
    <tr>
      <td><p>接受价位下限</p></td>
      <td><input type="text" name="receive_price_down" id="receive_price_down"></td>
    </tr>
    <tr>
      <td>接受价位上限</td>
      <td><input type="text" name="receive_price_up" id="receive_price_up"></td>
    </tr>
    <tr>
      <td><font color="#FF0000" size="+1">*</font>购买单号</td>
      <td><input name="buy_odd_number" type="text" required="required" id="buy_odd_number"></td>
    </tr>
    <tr>
      <td>储值金额</td>
      <td><input type="text" name="value_money" id="value_money"></td>
    </tr>
    <tr>
      <td>介绍人</td>
      <td><input type="text" name="introduce_person" id="introduce_person"></td>
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
      <td><input type="text" name="memo" id="memo" value="vip资料"></td>
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
