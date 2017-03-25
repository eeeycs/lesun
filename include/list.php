 <?php
include("link.php");



function list_shop($field,$table,$name)
{
$sql_s="select $field from $table";
$result_s=mysql_query($sql_s);
$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
if($row_s[$field]==$service_shop_s)
{
echo"
   <option value='$row_s[$field]' selected>$row_s[$field]</option> 
";
}
else
{
echo"
   <option value='$row_s[$field]'>$row_s[$field]</option>
";	
}
}
}

function list_person($field,$table,$name)
{
$sql_s="select $field from $table";
$result_s=mysql_query($sql_s);
$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
if($row_s[$field]==$service_person_s)
{
echo"
   <option value='$row_s[$field]' selected>$row_s[$field]</option>
";
}
else
{
echo"
   <option value='$row_s[$field]' >$row_s[$field]</option>
";
}


}
}

function checkbox_shop($field,$table,$name)
{
$sql_s="select $field from $table";
$result_s=mysql_query($sql_s);
$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
if($row_s[$field]==$service_shop_s)
{
echo"
   <input type='checkbox' name=$name value=$row_s[$field] checked>$row_s[$field] 
";
}
else
{
echo"
   <input type='checkbox' name=$name value=$row_s[$field]>$row_s[$field]
";	
}
}
}

function checkbox_person($field,$table,$name)
{
$sql_s="select $field from $table";
$result_s=mysql_query($sql_s);
$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
if($row_s[$field]==$service_person_s)
{
echo"
   <input type='checkbox' name=$name value=$row_s[$field] checked>$row_s[$field] 
";
}
else
{
echo"
   <input type='checkbox' name=$name value=$row_s[$field]>$row_s[$field]
";	
}
}
}


function radio_person($name)
{
$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
echo"
   <input type='radio' name=$name value=$service_person_s checked='CHECKED'>$service_person_s
   ";
}


function radio_shop($field,$table,$name)
{
$sql_s="select $field from $table";
$result_s=mysql_query($sql_s);
$service_person_s=$_SESSION['service_pserson'];
$service_shop_s=$_SESSION['service_shop'];
while($row_s=mysql_fetch_array($result_s,MYSQL_BOTH))
{
if($row_s[$field]==$service_shop_s)
{
echo"
   <input type='radio' name=$name value=$row_s[$field] checked='checked'>$row_s[$field] 
";
}
else
{
echo"
   <input type='radio' name=$name value=$row_s[$field]>$row_s[$field]
";	
}
}
}
?>