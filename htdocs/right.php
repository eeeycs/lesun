<?php
session_start();
?>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/right.css" type="text/css" />
</head>
<body>

<?php
@mysql_connect("qdm162465231.my3w.com","qdm162465231","qdm123456") or die("error");
mysql_select_db("qdm162465231_db");
date_default_timezone_set('Asia/Shanghai');
mysql_query("SET NAMES 'utf8'");$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];

$sql_p="SELECT * FROM g_user_data where (person_name='$service_person_s')";
$result_p=mysql_query($sql_p);
$row_p=mysql_fetch_array($result_p,MYSQL_BOTH);
$person_name=$service_person_s;
$star_date=$row_p['star_date'];
$phone_number=$row_p['phone_number'];


$sql_s="SELECT * FROM g_shop_data where (shop_name='$service_shop_s')";
$result_s=mysql_query($sql_s);
$row_s=mysql_fetch_array($result_s,MYSQL_BOTH);
$shop_name=$service_shop_s;
$shop_address=$row_s['shop_address'];
$start_date=$row_s['start_date'];

$sql="SELECT * FROM e_notice order by serial_number desc limit 1";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$date=$row['date'];
$time=$row['time'];
$caption=$row['caption'];
$content=$row['content'];
$check_person=$row['check_person'];


?>
<form action="action/update_password.php" method="post" enctype="multipart/form-data" name="update_password">
<div align="left" class="div_left">
  <table  style='white-space: nowrap;'  border="0" cellspacing="0">
    <caption class="caption_bigtitle">&nbsp;
    </caption>
    <tr>
      <td align="center"><span class="caption_bigtitle"><strong><em>个人基本信息 </em></strong></span></td>
      </tr>
    <tr>
      <td width="444"><table  border="0" cellspacing="0"  style='white-space: nowrap;'>
        <caption class="caption_bigtitle">&nbsp;
          </caption>
        <tr>
          <td width="108">店员姓名</td>
          <td width="205"><?php echo $person_name; ?></td>
          </tr>
        <tr>
          <td>入职日期</td>
          <td><?php echo $star_date; ?></td>
          </tr>
        <tr>
          <td>移动电话</td>
          <td><?php echo $phone_number; ?></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><span class="caption_bigtitle"><strong><em>店铺基本信息 </em></strong></span></td>
      </tr>
    <tr>
      <td width="444"><table  border="0" cellspacing="0"  style='white-space: nowrap;'>
        <caption class="caption_bigtitle">&nbsp;
          </caption>
        <tr>
          <td width="125">店铺名称</td>
          <td width="298"><?php echo $shop_name; ?></td>
        </tr>
        <tr>
          <td>店铺地址</td>
          <td><?php echo $shop_address; ?></td>
        </tr>
        <tr>
          <td>开业日期</td>
          <td><?php echo $start_date; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  </div>
  <div align="left" class="div_right">
    <table width="665"  border="0" cellspacing="0"  style='white-space: nowrap;'>
      <caption class="caption_bigtitle">&nbsp;
      </caption>
      <tr>
        <td align="center"><strong><em>公告</em></strong></td>
      </tr>
      <tr>
        <td width="663"><table border="0" cellspacing="0">
          <caption class="caption_bigtitle">&nbsp;
            </caption>
            <tr>
    <td>日期</td>
            <td><?php echo $date; ?></td>
          </tr>
          <tr>
            <td>时间</td>
            <td><?php echo $time; ?></td>
          </tr>
          <tr>
            <td>发布人</td>
            <td><?php echo $check_person; ?></td>
          </tr>
          <tr>
            <td width="89"><strong>标题</strong></td>
            <td width="570"><strong><?php echo $caption; ?></strong></td>
          </tr>
          <tr>
            <td><strong>内容</strong></td>
            <td width="570"><?php echo $content; ?></td>
          </tr>
        </table></td>
      </tr>
    </table>
  </div>
</form>



</body>
</html>
