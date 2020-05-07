function validate(){
	var flag=true;
	var em=document.frm.email.value;
	var str="";
	if(em.indexOf("@")<2 || em.indexOf("@")>em.indexOf(".")){
		flag=false;
		//str="invalid email";
		alert("invalid Email");
	}
	
	//document.getElementById("msg").innerHTML=str;
	return flag;
}
function eml(){
	var em=document.frm.email.value;
	if(em.length==0 || em.indexOf("@")<2 || em.indexOf("@")>em.indexOf(".")){
		document.getElementById("msg1").innerHTML="Invalid email";
		document.getElementById("msg1").style.color="red";
	}
	else
	{
		document.getElementById("msg1").style.color="black";
	}
}
