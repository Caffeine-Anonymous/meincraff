function blockSubmit()
{
		document.getElementById("hx").value = document.getElementById("y").value;
		document.getElementById("hy").value = document.getElementById("x").value;
		document.getElementById("hz").value = document.getElementById("z").value;
		document.getElementById("hdataval").value = document.getElementById("datavalue").value;
		document.getElementById("hplayer").value = document.getElementById("player").value;
		document.getElementById("postform").submit();
}
