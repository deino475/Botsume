<div class = "container" style = "padding-top: 50px;">
	<div class = "well" style = "background-color: white;">
		<form action = "" method = "POST">
			<div class = "row">
				<h2 style = "text-align: center;">Sign Up to Create Your Own Bot on Botsumé</h2>
				<?php if(isset($data['message'])){echo $data['message'];}?>
				<div class = "col-md-3">
					<h3>Username</h3>
				</div>
				<div class = "col-md-9">
					<input type = "text" class = "form-control" name = "username">
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-3">
					<h3>Email</h3>
				</div>
				<div class = "col-md-9">
					<input type = "email" class = "form-control" name = "email">
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-3">
					<h3>Password</h3>
				</div>
				<div class = "col-md-9">
					<input type = "password" class = "form-control" name = "password">
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-1 col-md-offset-10">
					<button class = "btn btn-primary" name = "submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>