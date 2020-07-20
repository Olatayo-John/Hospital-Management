function loginval() {
	var idnum=document.loginform.idnum.value;
	var pwd=document.loginform.pwd.value;

	if (idnum == null || idnum == "" || pwd == null || pwd == "") {
		widnum.innerHTML="ID is required";
		wpwd.innerHTML="Password is required";
		return false;
	}else{
		return true;
	}
}
	

idnum.addEventListener("input", () => {
	if (idnum == null || idnum == "") {
		widnum.innerHTML="ID is empty";
	}else{
		widnum.style.display="none";
	}
})

pwd.addEventListener("input", () => {
	if (pwd == null || pwd == "") {
		wpwd.innerHTML="Password is required";
	}else{
		wpwd.style.display="none";
	}
})