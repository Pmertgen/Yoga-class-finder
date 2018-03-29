<?php 
//Logged in page
require("header.html");
?>

<section id="loggedin">
	<div class="container">
		<h2 id="loggedinTitle">Namasté, this is your search console</h2>
		<button class="btn btn-success mb-4" id="explore">Show/hide map</button>

		<div id="googleMap" ></div>
		<script async defer
  		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaKDpbkzP7HqM7sFuQVSJv80EZp_7KgbY&callback=initMap"></script>
	</div>
</section>

<section id="coach">
	<div class="container">
		<h2 id="coachTitle">Are you a coach? Get found on the map!</h2>
		<button class="btn btn-success mb-4" id="coachPanel">Show/hide panel</button>
		<form style="display:none;" action="#" method="post" id="coachForm">
				<input type="text" placeholder="Name" name="name">
				<input type="number" placeholder="Experience(years)" name="experience">
				<input type="radio" name="gender" value="male"> Male
  				<input type="radio" name="gender" value="female" checked> Female<br><br>

  				<p class="text-light">Tell us when you give classes</p>
				<input type="checkbox" name="monday"> Monday<br>
				<input type="checkbox" name="tuesday"> Tuesday<br>
				<input type="checkbox" name="wednesday"> Wednesday<br>
				<input type="checkbox" name="thursday"> Thursday<br>
				<input type="checkbox" name="friday"> Friday<br>
				<input type="checkbox" name="saturday"> Saturday<br>
				<input type="checkbox" name="sunday"> Sunday<br>
  				<input type="time" name="time">
				<button class="btn btn-outline-success" name="submit" type="submit">Submit</button>
		</form>
	</div>
</section>

<section id="support">
	<div class="container">
		<h2 id="supportTitle">Need support?</h2>
		<p>Reach us at 0214-1234567</p>
	</div>
</section>

</body>
</html>