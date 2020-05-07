function validate(){
	var flag=true;
	flag=Filevalidation();
	var des=document.frm.description.value;
	if(des.length==0){
		alert("pls write description");
		flag=false;
	}
	return flag;
}
function desc() {
	var des=document.frm.description.value;
	if(des.length>20)
	{
		alert("Please keep your description short.");
	}
}
function Filevalidation() { 
        const fi = document.getElementById('file');
        var flag1=true;		
        // Check if any file is selected. 
        var FileSize = fi.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 2) {
            alert('File size exceeds 2 MB');
			flag1=false;
        }  
        else if(FileSize==0){
			alert("File is not Selected")
			flag1=false;
		}		
		return flag1;
    } 
	
