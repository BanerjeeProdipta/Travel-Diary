var Error=0;
xmlhttp = new XMLHttpRequest();
function Showpass(el) {
	var str=el.value;
	Error=0;
	document.getElementById("spinner2").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtp");
			m.innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=="Password Matches"){
				Error=1;
			}
			document.getElementById("spinner2").style.visibility="hidden";
		}
	};
	var url="";
	if(el.id=="opass"){
		url="Controller/fetch.php?opass="+str;
	}
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
	
}

function ops(){
	var flag=true;
	var cp=document.frm.confpass.value;
	var ps=document.frm.pass.value;
	var ops=document.frm.opass.value;
	if(ops.length!=0 && Error==1){
	if(ps.length==0){
		document.getElementById("msg7").innerHTML="invalid password";
		document.getElementById("msg7").style.color="red";
		flag=false;
	}
	if(cp==ps){
		document.getElementById("msg8").innerHTML="valid";
		document.getElementById("msg8").style.color="black";
	}
	if(cp!=ps){
		
		document.getElementById("msg8").innerHTML="password doesnt match";
		document.getElementById("msg8").style.color="red";
		flag=false;
	}
	}
	else{
		alert("password doesn't Match");
		flag=false;
	}
	return flag;
}
function psw(){
	var ps=document.frm.pass.value;
	if(ps.length==0){
		document.getElementById("msg7").innerHTML="invalid password";
		document.getElementById("msg7").style.color="red";
	}
	else if(ps.length>0 && ps.length<=5){
		
		document.getElementById("msg7").innerHTML="weak password";
		document.getElementById("msg7").style.color="black";
	}
	else if(ps.length>5){
		
		document.getElementById("msg7").innerHTML="strong password";
		document.getElementById("msg7").style.color="black";
	}
}
function cps(){
	var cp=document.frm.confpass.value;
	var ps=document.frm.pass.value;
	if(cp==ps){
		document.getElementById("msg8").innerHTML="valid";
		document.getElementById("msg8").style.color="black";
	}
	else{
		
		document.getElementById("msg8").innerHTML="password doesnt match";
		document.getElementById("msg8").style.color="red";
	}
}
