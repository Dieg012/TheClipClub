window.onload = init;
function init(){
	let submit = document.getElementById("send");
	submit.addEventListener("click", validateXY);
}
function validateXY(){
	console.log("function");
	let val = document.getElementById("coordinates").value;
	val = val.replace(/\s/g,'');

	let long = val.split(",")[0];
	let lat = val.split(",")[1];
	if(!(val.split(",").length == 2 && !isNaN(lat) && lat <= 90 && lat >= -90 && !isNaN(long) && long <= 180 && long >= -180)){
        alert("Incorrect coordinates format please make sure it is something like --> 40.706718951502026, -74.00882565421307");
	}else{
        console.log('entre');
        document.getElementsByName('projectForm')[0].submit();
	}
}
