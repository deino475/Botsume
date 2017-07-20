<div class = "container" style = "padding-top: 40px;">
	<div class = "jumbotron">
		<h1 style = "text-align: center;">Name of the Bot: <?php echo $data['bot'][0]['botname'];?></h1>
		<p>Description: <?php echo $data['bot'][0]['description'];?></p>
		<a class = "btn btn-primary" href = "bot.php?m=<?php echo $data['bot'][0]['botid'];?>">Visit the Bot.</a>
		<?php if($data['message'] != NULL){ echo $data['message'];}?>
	</div>
	<div class = "well" style = "background-color: white;">
		<h2 style = "text-align: center;">Bot Questions</h2>
		<div class = "table table-bordered table-responsive container-fluid">
			<table class = "table table-condensed">
				<tr>
					<td><h2>Question</h2></td>
					<td><h2>Answer</h2></td>
					<td><h2>Delete</h2></td>
				</tr>
				<?php if ($data['questions'] != 0){ foreach ($data['questions'] as $question) {?>
					<tr>
						<td><?php echo $question['question'];?></td>
						<td><?php echo $question['answer'];?></td>
						<td>
							<form action = "" method = "POST">
								<input type = "hidden" name = "qid" value = "<?php echo $question['questionid'];?>">	
								<button class = "btn btn-default btn-sm" name = "delete">
									<span class = "glyphicon glyphicon-trash" aria-hidden = "true"></span>
								</button>
							</form>
						</td>
					</tr>
				<?php }} else {?>
					<tr>
						<td>You added no questions.</td>
						<td>You added no questions.</td>
						<td>You added no questions.</td>
						<td>You added no questions.</td>
					</tr>
				<?php }?>
			</table>
		</div>
		<div class = "well">
			<form action = "" method = "POST">
				<div class = "row">
					<h2 style = "text-align: center;">Add A Question to Your Bot</h2>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Question:</p>
					</div>
					<div class = "col-md-9">
						<input type = "text" name = "question" class = "form-control">
					</div>
				</div>
				<br>
				<div class = "row">
					<div class = "col-md-3">
						<p>Answer:</p>
					</div>
					<div class = "col-md-9">
						<input type = "text" name = "answer" class = "form-control">
					</div>
				</div>
				<br>
				<div class = "row">
					<button class = "btn btn-primary" name = "add">Add Question</button>
				</div>
			</form>
		</div>
	</div>
	<div class = "well">
		<h2>Embed this Bot onto your site.</h2>
		<div class = "panel panel-default">
			<div class = "panel-body">
				<p>
				<pre><code>
&lt;link rel = "stylesheet" href = "http://www.botsume.com/css/bootstrap.min.css"&gt;
&lt;div class = "container" style = "width: 200px; height: 200px; position: fixed; bottom: 0; right: 0;"&gt;
&lt;div class = "container msgarea" id = "msgarea" style = "padding-top: 60px;"&gt;
&lt;/div&gt;
&lt;div class = "navbar navbar-default navbar-fixed-bottom" style = "padding-top: 10px; padding-bottom: 10px;"&gt;
&lt;div class = "container-fluid"&gt;
&lt;input type = "text" name = "msginput" class = "msginput form-control" id = "msginput" placeholder="Enter your message here ... (Press enter to send message)" onkeydown="if (event.keyCode == 13) sendmsg()"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;script&gt;
function sendmsg(){
var message = msginput.value;
if (message != ""){
var xmlhttp = new XMLHttpRequest();
msgarea.innerHTML += '&lt;div class = "media"&gt; &lt;div class = "media-left"&gt; &lt;img class = "media-object" style = "width: 32px; height: 32px;" src = "http://www.botimg/icon.png"&gt; &lt;/div&gt; &lt;div class = "media-body"&gt; &lt;p&gt; '+message+'&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;hr&gt;';
msginput.value = "";
xmlhttp.open("GET","send.php?id=<?php echo $_GET['id'];?>&message="+message,false);
xmlhttp.send();
var response = xmlhttp.responseText.split("#");
for (i = 0; i < response.length; i++){
msgarea.innerHTML += '&lt;div class = "media"&gt; &lt;div class = "media-body"&gt; &lt;p&gt;'+response[i]+'&lt;/p&gt; &lt;/div&gt; &lt;div class = "media-right"&gt; &lt;img class = "media-object" style = "width: 32px; height: 32px;" src = "http://www.botsume.com/img/icon.png"&gt; &lt;/div&gt; &lt;/div&gt; &lt;hr&gt;';
}
window.scrollTo(0,document.body.scrollHeight);
}
}
&lt;/script&gt; 
&lt;/div&gt;
				</code></pre>
				</p>
			</div>	
		</div>
	</div>
	<div class = "panel panel-default">
		<div class = "panel-body">
			<?php if($data['fbinfo'] == 0){?>
				<div class = "row">
					<h2 style = "text-align: center;">Add Facebook Messenger Functionality</h2>
				</div>
				<form action = "" method = "POST">
					<div class = "row">
						<div class = "col-md-2">
							<h3>API Token:</h3>
						</div>
						<div class = "col-md-8">
							<input type = "hidden" name = "chatbotid" value = "<?php echo $_GET['id'];?>">
							<input type = "text" class = "form-control" name = "apitoken">
						</div>
						<div class = "col-md-2">
							<button class = "btn btn-primary" name = "fbsubmit">Submit</button>
						</div>
					</div>
				</form>
			<?php } else {?>
				<div class = "row">
					<h2 style = "text-align: center;">Add Facebook Messenger Functionality</h2>
				</div>
				<div class = "row">
					<h3 style = "text-align: center;">API Token: </h3>
					<p style = "text-align: center;"><?php echo $data['fbinfo'][0]['apitoken'];?></p>
					<h3 style = "text-align: center;">Webhook: </h3>
					<p style = "text-align: center;">https://www.botsume.com/fbcallback.php?botid=<?php echo $data['fbinfo'][0]['botid'];?></p>
					<hr>
					<h2 style = "text-align: center;">Change Facebook API Token</h2>
					<form action = "" method = "POST">
						<input type = "hidden" name = "chatbotid" value = "<?php echo $_GET['id'];?>">
						<input type = "text" class  = "form-control" name = "tokenchatbot">
						<button class = "btn btn-primary" name = "fb-update">Update API Token</button>
					</form>
				</div>
			<?php }?>
		</div>
	</div>
</div>