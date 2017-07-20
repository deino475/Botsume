<div class = "container" style = "padding-top: 60px;">
	<h1 style = "text-align: center;">List of Bots on Botsumé</h1>
	<hr>
	<?php foreach ($data['data'] as $bot): ?>
		<div class = "row">
			<div class = "col-md-7">
				<?php if (strlen($bot['imgsrc']) > 0){?>
					<img class = "img-responsive" style = "width: 500px; height: 300px;" src = "<?php echo $bot['imgsrc'];?>">
				<?php } else {?>
					<img class = "img-responsive" style = "width: 500px; height: 300px;" src = "img/bot.png">
				<?php }?>	
			</div>
			<div class = "col-md-5">
				<h3><?php echo $bot['botname'];?></h3>
				<p><?php echo $bot['description'];?></p>
				<a class = "btn btn-primary" href = "bot.php?m=<?php echo $bot['botid'];?>">Use this Bot.</a>
			</div>
		</div>
		<hr>
	<?php endforeach ?>
</div>