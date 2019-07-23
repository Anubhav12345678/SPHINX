var xml= new XMLHttpRequest();
function process()
{
	if(xml.readyState==0)
	{
		var food = encodeURIComponent(document.getElementById("a").value);
		xml.open("GET","server.php?food="+food,true);
		xml.onreadystatechange = handleserverrequest;
		xml.send();
	}
	else
	{
		setTimeout('process()',1000);
	}
}
function  handleserverrequest()
{
	if(xml.readyState==4 && xml.status==200)
	{
	var res = xml.responseXML;
	var de = res.documentElement;
	var message = de.firstChild.data;
	document.getElementById("userinput").innerHTML = message;
	setTimeout('process()',1000);
    }
    else 
    {
    	alert('Something went werong');
    }
}
