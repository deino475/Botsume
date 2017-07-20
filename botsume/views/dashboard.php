<div class = "container" style = "padding-top: 30px;">
	<div class = "well">
		<h2 style = "text-align: center;">Create a Bot</h2>
		<?php if (isset($data['message'])){echo $data['message'];}?>
		<form action = "" method = "POST" id = "botmaker">
			<div class = "container">
				<div class = "col-md-11">
					<input type = "text" name = "botname" class = "form-control" placeholder="Type the Bot's name here...">
				</div>
				<br>
				<div class = "col-md-11">
					<textarea name = "description" class = "form-control" placeholder="Type a description..." form="botmaker">
					</textarea>
				</div>
				<div class = "col-md-11">
					<button class = "btn btn-primary" name = "makebot">Create Bot</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class = "container">
	<div class = "col-md-6">
		<div class = "well">
			<h2 style = "text-align: center;">View Bots</h2>
			<div class = "list-group">
				<?php foreach ($data['bots'] as $bot) {?>
					<a class = "list-group-item" href = "botsume.php?id=<?php echo $bot['botid'];?>">
						<h4>Name: <?php echo $bot['botname'];?></h4>
						<p>Description: <?php echo $bot['description'];?></p>
					</a>
				<?php }?>
			</div>
		</div>
	</div>
	<div class = "col-md-6">
		<div class = "well">
			<h2 style = "text-align: center;">Add Question</h2>
			<form action = "" method = "POST">
				<div class = "row">
					<div class = "col-md-3">
						<p>Bot:</p>
					</div>
					<div class = "col-md-9">
						<select class = "form-control" name = "botid">
							<?php foreach ($data['bots'] as $bot) {?>
								<option value = "<?php echo $bot['botid'];?>"><?php echo $bot['botname'];?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<br>
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
</div>