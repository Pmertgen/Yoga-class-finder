<?php
require("header.html");
?>

<div class="container">
	<h2>Do you want to find Yoga classes around you? Just register here</h2>
</div><br>

	<div class="container">
		<div class="login">
			<div class="card-header">Register here</div>
			<div class="card-body">
			<p>Please put in your credentials</p>
				<form action="loggedin.php" method="post">
					<input type="email" placeholder="E-mail" name="email">
					<input type="email" placeholder="Verify e-mail" name="verifyEmail">
					<input type="password" placeholder="Password" name="pw">
					<button class="btn btn-outline-success" type="submit" name="register">Register</button>
				</form>
			</div>
		</div>
	</div>
<br><br>
	
