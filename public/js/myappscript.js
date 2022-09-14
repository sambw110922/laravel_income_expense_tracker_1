

//	init function
function init(){
	
	//	CLick event for check button
	document.getElementById("chkIsOneOff").addEventListener("click", function(){
	
	if(this.checked == true){
		
		document.getElementById("regularity").classList = "";
		document.getElementById("regularity").classList.add("regularityOff");
		
	} else {
	
		document.getElementById("regularity").classList = "";
		document.getElementById("regularity").classList.add("regularityOn");
	
	}
	
});
	
}

init();
