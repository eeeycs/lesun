<?php
include("../../../../include/link.php");

$vip_card_number= $_POST["vip_card_number"];
$sql="SELECT * FROM j_vip_data where vip_card_number='$vip_card_number'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result,MYSQL_BOTH);
$number_fields=mysql_num_fields($result);


$json=array();
for($i=0;$i<$number_fields;$i++)
{
$field_name=mysql_field_name($result,$i);
$json[$field_name]="$row[$i]";
}
echo json_encode($json);

?>