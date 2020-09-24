function Chk(frm){
	var err=0;
	if(frm.checked==false) err++;
	if(err>0){
		alert("プライバシーポリシーに同意いただいた上お問合せください");
		return false;
	}else{
		return true;
	}
}
