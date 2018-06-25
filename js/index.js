var extended = false;
var center = document.getElementById("control");
function popUp(){
	
	if(extended == false){
		document.getElementById("op1").classList.remove("menuC");
		document.getElementById("op2").classList.remove("menuC");
		document.getElementById("op3").classList.remove("menuC");
		document.getElementById("op4").classList.remove("menuC");		
		document.getElementById("op1").classList.add("menuO");
		document.getElementById("op2").classList.add("menuO");
		document.getElementById("op3").classList.add("menuO");
		document.getElementById("op4").classList.add("menuO");
		
		document.getElementById("control").style.transform= "translate(-50%, -50%) scale(1)";


		
		extended = true;
	}
	else{
		document.getElementById("op1").classList.remove("menuO");
		document.getElementById("op2").classList.remove("menuO");
		document.getElementById("op3").classList.remove("menuO");
		document.getElementById("op4").classList.remove("menuO");	document.getElementById("op1").classList.add("menuC");
		document.getElementById("op2").classList.add("menuC");
		document.getElementById("op3").classList.add("menuC");
		document.getElementById("op4").classList.add("menuC");
		
		document.getElementById("control").style.transform= "translate(-50%, -50%) scale(0.8)";

		
		extended = false;
	}
	
}
