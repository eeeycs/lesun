<?php
session_start();
?>
<html>
<head>
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/enter_dress_number.css" type="text/css" />
<script type="text/javascript">
function c() {

var a=document.getElementById("down").value;
alert (a);
}
</script>
</head>
<body>

<table border='1'  style='white-space: nowrap;'>
<tr>
<th>id</th>
<th>name</th>
<th>age</th>
<th>grade</td>
</tr>

<?php
@mysql_connect("qdm162465231.my3w.com","qdm162465231","qdm123456") or die("error");
mysql_select_db("qdm162465231_db");
date_default_timezone_set('Asia/Shanghai');
mysql_query("SET NAMES 'utf8'");$sql="SELECT * FROM `y_enter_dress_number` order by serial_number DESC";

$result=mysql_query($sql);
$number=5;
$page=$_GET['page']; 
if(!isset($page))$page=1;
$sum_number=mysql_num_rows($result);
$page_number=ceil(($number!=0)?$sum_number/$number:0); 
$start_number=($page-1)*$number;
$result=mysql_query("select * from y_enter_dress_number order by serial_number DESC limit $start_number,$number");


while($row=mysql_fetch_array($result,MYSQL_BOTH))
{  
echo "
<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
</tr>"; 
} 

echo "</table>"; 
 
if($page!=1 && $pages=$page-1) echo "<a href='index.php?page=$pages'>上一页</a>";
for($i=1;$i<=$page_number;$i++)echo "<a href='index.php?page=$i'>$i</a>";
if($page<$page_number && $pages=$page+1)echo "<a href='index.php?page=$pages'>下一页</a>";
echo "<br>"; echo "第";echo "$page";echo "页";


?>




</body>
</html>
