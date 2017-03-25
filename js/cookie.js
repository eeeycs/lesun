function setcookie(name,value,expireHours)
{
var cookieString=name+"="+escape(value); 
if(expireHours>0)
{ 
var date=new Date(); 
date.setTime(date.getTime+expireHours*3600*1000); 
cookieString=cookieString+"; expires="+date.toGMTString(); 
} 
document.cookie=cookieString; 
}

function getcookie(name)
{
var strcookie=document.cookie; 
var arrcookie=strcookie.split("; "); 
for(var i=0;i<arrcookie.length;i++){ 
var arr=arrcookie[i].split("="); 
if(arr[0]==name)return arr[1]; 
} 
return ""; 
} 

function delcookie(name)
{
var cookieString=name+"="+""; 
var date=new Date(); 
date.setTime(date.getTime()-1); 
cookieString=cookieString+"; expires="+date.toGMTString(); 
document.cookie=cookieString;
}

