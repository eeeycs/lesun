$(function(){
setcookie("id_m","0");
var flag=0;
var vip=-1;
var else_info=0;
var id2=0;
var id3=0;
var id4=0;
$("#else_info").click(function(){
	if(else_info==1)
	{
		$(".end").removeAttr("hidden");
		else_info=0;
	}else{
	$(".end").attr("hidden","true");
	else_info=1;
	}
});
$("#select_vip").click(function(){
	window.location="../../integral/administrator/operate/vip_data_query.php";
	});
	
$("#add").click(function(){
	var id_m=getcookie("id_m");
	id_m=Number(id_m)+1;
	id_m=String(id_m);
	setcookie("id_m",id_m);

	var a=$("select#belong_shop").html();
	$("div#belong_shop_div").append("<div class='col-xs-1'><select name='belong_shop[]' class='form-control'>"+a+"</select></div>");
	
	$("div#piece_div").append("<div class='col-xs-1'><input type='text' name='piece[]' class='form-control' value='1' id=piece"+id_m+"> </div>");
	$("div#drop_money_div").append("<div class='col-xs-1'><input type='text' name='drop_money[]' class='form-control' id=drop_money"+id_m+"> </div>");
	$("div#actual_money_div").append("<div class='col-xs-1'><input type='text' name='actual_money[]' class='form-control' id=actual_money"+id_m+"> </div>");
	$("div#rate_div").append("<div class='col-xs-1'><input type='text' name='rate[]' class='form-control' readonly id=rate"+id_m+"> </div>");
	
})
$("#add2").click(function(){
	id2++;
	var a=$("select#pay_way").html();
	$("div#pay_way_div").append("<div class='col-xs-1'><select name='pay_way[]' class='form-control'>"+a+"</select></div>");
	$("div#pay_money_div").append("<div class='col-xs-1'><input type='text' name='pay_money[]' class='form-control'> </div>");
	
})
$("#add3").click(function(){
	id3++;
	var a=$("select#service_person").html();
	$("div#service_person_div").append("<div class='col-xs-1'><select name='service_person[]' class='form-control'>"+a+"</select></div>");
	$("div#service_person_weight_div").append("<div class='col-xs-1'><input type='text' name='service_person_weight[]' class='form-control'> </div>");
})
$("#add4").click(function(){
	id4++;
	var a=$("select#service_shop").html();
	$("div#service_shop_div").append("<div class='col-xs-1'><select name='service_shop[]' class='form-control'>"+a+"</select></div>");
	$("div#service_shop_weight_div").append("<div class='col-xs-1'><input type='text' name='service_shop_weight[]' class='form-control'> </div>");
	

	
})

$("#delete").click(function(){
	var id_m=getcookie("id_m");
	id_m=Number(id_m);
	if(id_m>0){
	id_m=id_m-1;
	id_m=String(id_m);
	setcookie("id_m",id_m);
	$("div#belong_shop_div").children("div:last").remove();
	$("div#piece_div").children("div:last").remove();
	$("div#drop_money_div").children("div:last").remove();
	$("div#actual_money_div").children("div:last").remove();
	$("div#rate_div").children("div:last").remove();
	}

})
$("#delete2").click(function(){
	if(id2>0)
	{
	id2--;
	$("div#pay_way_div").children("div:last").remove();
	$("div#pay_money_div").children("div:last").remove();
	}
})
$("#delete3").click(function(){
	if(id3>0){
	id3--;
	$("div#service_person_div").children("div:last").remove();
	$("div#service_person_weight_div").children("div:last").remove();
	}
})
$("#delete4").click(function(){
	if(id4>0){
	id4--;
	$("div#service_shop_div").children("div:last").remove();
	$("div#service_shop_weight_div").children("div:last").remove();
	}
})


$("#no_reason_no").click(function(){
	$("#no_integral_reason").removeAttr("readonly");
	vip=-1;
})
$("#no_reason_yes").click(function(){
$("#no_integral_reason").attr("readonly","readonly");
	vip=1;
})

function check(){
  var spw_count=0;
  $("input[name='service_person_weight[]']").each(function(index){spw_count=spw_count+Number($(this).val());});
  var cp=$("input[name='average_service_person_weight']:checked").val();
  if(spw_count!=1&&cp=="no"){$("#spw_check").html("服务人权重之和不为1");flag=flag|1;}
  else{$("#spw_check").html("");flag=flag&(~1);}	
  
  var ssw_count=0;
  $("input[name='service_shop_weight[]']").each(function(index){ssw_count=ssw_count+Number($(this).val());});
  var cs=$("input[name='average_service_shop_weight']:checked").val();
  if(ssw_count!=1&&cs=="no"){$("#ssw_check").html("服务店铺权重之和不为1");flag=flag|2;}
  else{$("#ssw_check").html("");flag=flag&(~2);}
  
  var actual_money_count=$("#need_money").val();
  var pay_money_count=0;
  $("input[name='pay_money[]']").each(function(index){pay_money_count=pay_money_count+Number($(this).val());});
  if(Number(pay_money_count)!=Number(actual_money_count)){$("#pay_money_check").html("支付金额与实销金额不符");flag=flag|4;}
  else{$("#pay_money_check").html("");flag=flag&(~4);}
  

  
}
function count_goods(){
  $("[name='rate[]']").each(function(index, element) {
  var drop=$("[name='drop_money[]'").eq(index).val();
  var actual=$("[name='actual_money[]'").eq(index).val();
  $(this).val(actual/drop);
  });


  var piece_count=0;
  $("[name='piece[]']").each(function(index, element) {
	  piece_count=piece_count+Number($(this).val());
  });
  $("#piece_sum").val(piece_count);
  var drop_money_count=0;
  $("[name='drop_money[]']").each(function(index, element) {
	  drop_money_count=drop_money_count+Number($(this).val());
  });
  $("#drop_money_sum").val(drop_money_count);
  
  var actual_money_count=0;
  $("[name='actual_money[]']").each(function(index, element) {
	  actual_money_count=actual_money_count+Number($(this).val());
  });
  $("#actual_money_sum").val(actual_money_count);
  $("#rate_sum").val(actual_money_count/drop_money_count);
  $("#need_money").val(actual_money_count);
	}
function vip_data(){
var vip_card_number=$("#vip_card_number").val();
$.post("action/ajax.php",
	   {"vip_card_number":vip_card_number},
	   function(data){
		   if(data.vip_card_number==""){
		   		$("#vip_info").css("display","none");
		   }else{
		   $("#vip_info").css("display","block");
    	   $("#return_vip_name").html(data.vip_name);
		   $("#return_vip_card_number").html(data.vip_card_number);
		   $("#return_phone_number").html(data.phone_number);
		   }
		   
		 if(vip==-1){flag=flag&(~8);}
		 else if(data.vip_card_number==""){flag=flag|8;}
		 else{flag=flag&(~8);}
         
		 check_flag();
		
	   },
 	   "json");
	   
	  
  
}
function check_flag(){
  if(flag==0){$("#submit").removeAttr("disabled");}
  else{$("#submit").attr("disabled","disabled");}
 
}

$(document).keyup(function(event){
	vip_data();
	count_goods();
	check();
});
$(document).click(function(event){
	vip_data();
	count_goods();
	check();
	
})
$(document).ready(function(e) {
    vip_data();
	count_goods();
	check();
	
	

});


});
