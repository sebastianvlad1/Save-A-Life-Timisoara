document.addEventListener("DOMContentLoaded",function(){
	setInterval(setData,1000);
});

function setData(){
	var d = new Date();
		document.getElementById("ora").innerHTML = d.toLocaleTimeString();
}