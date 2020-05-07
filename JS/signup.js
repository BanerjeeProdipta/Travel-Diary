xmlhttp = new XMLHttpRequest();
var emailError=0;
var phoneError=0;
function showEmail(el) {
	var str=el.value;
	errors=0;
	document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=="Email taken"){
				emailError=1;
			}
			document.getElementById("spinner").style.visibility="hidden";
		}
	};
	var url="";
	if(el.id=="email"){
		url="Controller/fetch.php?email="+str;
	}
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
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
	return Error;
}
function showPhone(el) {
	var str=el.value;
	errors=0;
	document.getElementById("spinner1").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtPH");
			m.innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=="Phone taken"){
				phoneError=1;
			}
			document.getElementById("spinner1").style.visibility="hidden";
		}
	};
	var url="";
	if(el.id=="phone"){
		url="Controller/fetch.php?phone="+str;
	}
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
function validate(){
	var flag=true;
	var fn=document.frm.fname.value;
	var ln=document.frm.lname.value;
	var db=document.frm.dob.value;
	var gn=document.frm.gender.value;
	var ph=document.frm.phone.value;
	var em=document.frm.email.value;
	var pass=document.frm.pass.value;
	var cpass=document.frm.confpass.value;
	var str="";
	if(fn.length==0){
		flag=false;
		str="must type First Name";
	}
	else if(ln.length==0){
		flag=false;
		str="must type Last Name";
	}
	else if(db.length==0){
		flag=false;
		str="must provide Date of Birth";
	}
	else if(gn.length==0){
		flag=false;
		str="must provide gender";
	}
	else if(ph.length==0){
		flag=false;
		str="must provide Phone Number";
	}
	else if(emailk.indexOf("@")<1 || em.length==0){
		flag=false;
		str="invalid email";
	}
	else if(pass.length==0){
		flag=false;
		str="must provide pass";
	}
	else if(cpass.length==0){
		flag=false;
		str="must provide matching pass to confirm";
	}
	else if(pass!=cpass){
		flag=false;
		str="passworods must match";
	}
	else if(emailError==1)
	{
		flag=false;
		str="Email Taken";
	}
	else if(phoneError==1)
	{
		flag=false;
		str="Phone Number Taken";
	}
	document.getElementById("msg").innerHTML=str;
	return flag;
}

function fme(){
	var fn=document.frm.fname.value;
	if(fn.length<5){
		document.getElementById("msg1").innerHTML="invalid First Name";
		document.getElementById("msg1").style.color="red";
	}
	else{
		
		document.getElementById("msg1").innerHTML="valid First name";
		document.getElementById("msg1").style.color="black";
	}
}
function lme(){
	var ln=document.frm.lname.value;
	if(ln.length<5){
		document.getElementById("msg2").innerHTML="invalid Last Name";
		document.getElementById("msg2").style.color="red";
	}
	else{
		
		document.getElementById("msg2").innerHTML="valid Last name";
		document.getElementById("msg2").style.color="black";
	}
}
function db(){
	var dob=document.frm.dob.value;
	if(dob.length==0){
		document.getElementById("msg3").innerHTML="invalid Date Of Birth";
		document.getElementById("msg3").style.color="red";
	}
	
	else{
		
		document.getElementById("msg3").innerHTML="valid Date Of Birth";
		document.getElementById("msg3").style.color="black";
	}
}
function gnd(){
	var gn=document.frm.gender.value;
	if(gn.length==0){
		document.getElementById("msg4").innerHTML="Pls choose Gender";
		document.getElementById("msg4").style.color="red";
	}
	
	else{
		
		document.getElementById("msg4").innerHTML="Checked";
		document.getElementById("msg4").style.color="black";
	}
}
function phn(){
	var ph=document.frm.phone.value;
	if(ph.length==11){
		document.getElementById("msg5").innerHTML="valid Phone Number";
		document.getElementById("msg5").style.color="black";
	}
	else{
		
		document.getElementById("msg5").innerHTML="invalid Phone Number";
		document.getElementById("msg5").style.color="red";
		
	}
}
function eml(){
	var em=document.frm.email.value;
	if(em.length==0 || em.indexOf("@")<2 || em.indexOf("@")>em.indexOf(".")){
		document.getElementById("msg6").innerHTML="Invalid email";
		document.getElementById("msg6").style.color="red";
	}
	else{
		
		document.getElementById("msg6").innerHTML="valid email";
		document.getElementById("msg6").style.color="black";
		
	}
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
function ops(){
	var flag=true;
	var fn=document.frm.fname.value;
	var ln=document.frm.lname.value;
	var cp=document.frm.confpass.value;
	var ps=document.frm.pass.value;
	var ops=document.frm.pass.value;
	if(fn.length==0){
		flag=false;
		str="must type First Name";
	}
	if(ln.length==0){
		flag=false;
		str="must type Last Name";
	}
	if(ops.length!=0){
	Showpass(el);
	if(ps.length==0){
		document.getElementById("msg7").innerHTML="invalid password";
		document.getElementById("msg7").style.color="red";
	}
	if(ps.length>0 && ps.length<=5){
		
		document.getElementById("msg7").innerHTML="weak password";
		document.getElementById("msg7").style.color="black";
	}
	if(ps.length>5){
		
		document.getElementById("msg7").innerHTML="strong password";
		document.getElementById("msg7").style.color="black";
	}
	if(cp==ps){
		document.getElementById("msg8").innerHTML="valid";
		document.getElementById("msg8").style.color="black";
	}
	else{
		
		document.getElementById("msg8").innerHTML="password doesnt match";
		document.getElementById("msg8").style.color="red";
	}
	}
}
