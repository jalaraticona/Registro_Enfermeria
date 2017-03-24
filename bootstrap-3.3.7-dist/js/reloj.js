function reloj(){
	var fecha = new Date();
	//var dia = fecha.getUTCDay();
	//var mes = fecha.getMonth();
	//var ani = fecha.getFullYear();
	var hor = fecha.getHours();
	var min = fecha.getMinutes();
	var seg = fecha.getSeconds();
	var actualizar = setTimeout('reloj()',500);
	document.getElementById('clock').innerHTML = "hora: " + hor + ":" + min + ":" + seg;
}