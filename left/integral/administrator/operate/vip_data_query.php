<?php
session_start();
?>
<html>
<head><link href="../../../css/bootstrap.min.css" rel="stylesheet">
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/vip_data.css" type="text/css" />
<script type="text/javascript" src="../../../../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	$(function(){
		$("[name='date']").val("");
		function move(n){
            $("tr").children("td").eq(n).insertBefore($("tr").children("td").eq(0));
			$("tr").children("td").eq(n+51).insertBefore($("tr").children("td").eq(0+51));
        };
		move(4);
		move(5);
		move(21);
		$("tr").children("td:lt(3)").css("color","red");
	});
</script>
</head>
<body>
<?php
//$operate=$_GET['operate'];
//$serial_number=$_GET['serial_number'];
$operate='select';
$serial_number='';
include("../../../../include/operate/table_administrator_query_vipfirst.php");
table('j_vip_data','vip_data_query',$operate,$serial_number);
?>
</body>
</html>
