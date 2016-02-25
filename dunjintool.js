$(document).ready(function(){
	$('form').submit(function(){
		var formVal = getUrlVars()["formVal"];
		document.getElementById("hx").value = formVal[0];
		document.getElementById("hy").value = formVal[1];
		document.getElementById("hz").value = formVal[2];
		document.getElementById("hdataval").value = formVal[3];
		document.getElementById("hplayer").value = formVal[4];
		document.getElementById("postform").submit();
		})
	})

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
	
