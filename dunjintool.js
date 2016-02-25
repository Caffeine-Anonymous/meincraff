$(document).ready(function(){
	$('form').submit(function(){
		document.getElementById("hx").value = document.getElementById("x").value;
		document.getElementByID("hy").value = document.getElementById("y").value;
		document.getElementByID("hz").value = document.getElementById("z").value;
		document.getElementByID("hdataval").value = document.getElementById("datavalue").value;
		document.getElementByID("hplayer").value = document.getElementById("player").value;
		})
	})
	