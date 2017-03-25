<?php
session_start();
?>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/partner.css" type="text/css" />
<script type="text/javascript">
function select_a()
{
var service_shop=document.getElementByName('service_shop').value;
var href='money_clearing.php?service_shop='+service_shop;
location.href=href;
}
</script>
</head>
<body>
<form action="action/partner.php" method="post" enctype="multipart/form-data" name="partner">
  <table  style='white-space: nowrap;' border="1" cellspacing="0">
    <caption class="caption_bigtitle">
      信息工作室
    </caption>
    <tr>
      <td width="171"><h3><strong>主要业务</strong></h3></td>
      <td width="481"><ul>
        <li><strong>网站建设、前端设计、平面美工</strong></li>
        <li><strong>图像处理、编辑、制作、设计</strong></li>
        <li><strong>视频音频剪辑、编辑、制作、设计</strong></li>
        <li><strong>三维空间设</strong><strong>计、渲染、出图</strong></li>
        <li><strong>名片制作</strong></li>
        <li><strong>各种软件资源</strong></li>
      </ul>      </td>
    </tr>
    <tr>
      <td ><h3><strong>主要技术支持</strong></h3></td>
      <td><ul>
        <h3><li>
          <strong>编辑类：</strong
        ></li></h3>
        <li><strong>ftp、wamp、java、ajax、jquery、php、thinkphp、织梦、bootstrap</strong></li>
        <li><strong>C、C++、汇编</strong></li>
        <h3><li><strong>设计类：</strong>        </li></h3>
        <li><strong>ps、ai、id、ae、pr、fl、fw、dreamwear、au、coredraw、会声会影</strong></li>
        <li><strong>3dmax、autocad </strong></li>
      </ul>
       </td>
    </tr>
  </table>

</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
