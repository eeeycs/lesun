<?php
session_start();
?>
<html>
<head><link href="css/bootstrap.min.css" rel="stylesheet">
<title>
乐尚服饰综合管理系统
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/login.css" type="text/css" />
</head>
<?php
if(isset($_SESSION['service_pserson'])==false||isset($_SESSION['service_shop'])==false)
echo "<script>location.href='index.php';</script>";
?>
<frameset rows="50,*" frameborder="0" scrolling="no">
<frame src="nav.php" name="top" scrolling="no">
<frameset cols="160,*" >
<frame src="left.php" name="left" scrolling="yes">
<frame src="right.php" name="right">
</frameset>

</frameset><noframes></noframes>



</html>
