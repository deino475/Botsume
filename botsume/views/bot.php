<div class = "container msgarea" id = "msgarea" style = "padding-top: 60px;">
	
</div>
<div class = "navbar navbar-default navbar-fixed-bottom" style = "padding-top: 10px; padding-bottom: 10px;">
	<div class = "container-fluid">
		<input type = "text" name = "msginput" class = "msginput form-control" id = "msginput" placeholder="Enter your message here ... (Press enter to send message)" onkeydown="if (event.keyCode == 13) sendmsg()">
	</div>
</div>
<script>
function sendmsg()
{
	var message = msginput.value;
	if (message != "")
	{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function ()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				msgarea.innerHTML += '<div class = "media"><div class = "media-left"><img class = "media-object" style = "width: 64px; height: 64px;" src = "img/icon.png"></div><div class = "media-body"><p>'+message+'</p></div></div><hr>';
				msginput.value = "";
				var response = xmlhttp.responseText.split("#");
				for (i = 0; i < response.length; i++)
				{
					msgarea.innerHTML += '<div class = "media"><div class = "media-body"><p>'+response[i]+'</p></div><div class = "media-right"><img class = "media-object" style = "width: 64px; height: 64px;" src = "img/icon.png"></div></div><hr>';
				}
			}
		}
		xmlhttp.open("GET","send.php?id=<?php echo $_GET['m'];?>&message="+message,true);
		xmlhttp.send();
	}
}
</script>