 <?php
@mysql_connect("localhost","root","123456") or die("error");
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db("system2");
date_default_timezone_set('Asia/Shanghai');
?>

