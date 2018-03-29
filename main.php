<?php 
//Landing page

require("header.html");
?>

	<section id="welcome">
	<div class="container">
		<h1><u>Yoga class finder</u></h1>
		<h4>Here you can find Yoga classes in your area and check out coaches and timetables</h4>
		<button class="btn btn-outline-success mb-3" id="loginButton">Login panel</button>
		<div class="card mb-3" style="display:none;" id="loginCard">
			<div class="card-header">Please put in your credentials</div>
			<div class="card-body">
				<form action="loggedin.php" method="post">
					<input type="email" placeholder="E-mail" id="email">
					<input type="password" placeholder="Password" id="pw">
					<button class="btn btn-outline-success mt-2" name="submit" type="submit">Login</button>
				</form>
			</div>
		</div>
		<div id="googleMap" ></div>
		<script async defer
  		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaKDpbkzP7HqM7sFuQVSJv80EZp_7KgbY&callback=initMap"></script>
	</div>

	</section>

	<section id="section2">
		<div class="container p-4">
			<h2>Why Yoga?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis orci et sagittis posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur nec velit tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras eget porttitor magna. Suspendisse placerat ligula elit. Sed varius quam quis magna maximus, id tristique justo ultricies. Nunc id purus cursus, venenatis neque nec, gravida lacus. </p>
			<img src="http://www.karana-yoga.de/resources/iStock_000015230021.jpg" class="img-fluid" id="yogaImage">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis orci et sagittis posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur nec velit tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras eget porttitor magna. Suspendisse placerat ligula elit. Sed varius quam quis magna maximus, id tristique justo ultricies. Nunc id purus cursus, venenatis neque nec, gravida lacus.</p>
		</div>
	</section>

	<section id="supportMain">
	<div class="container">
		<h2 id="supportTitleMain">Need support?</h2>
		<button class="btn btn-success mb-4" id="supportPanelMain">Show/hide panel</button>
		<p style="display:none;" action="#" method="post" id="supportFormMain">Reach us at 0214-1234567</p>
	</div>
</section>




</body>
</html>