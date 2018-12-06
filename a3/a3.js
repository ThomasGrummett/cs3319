window.onload=function(){
	prepareListeners();
}

function prepareListeners(){
	dropDown=document.getElementById("pickADB");
	dropDown.addEventListener("change",getDB);
}

function getDB(){
}