// Fade in login card

$(document).ready(function(){
	$("#loginButton").click(function(){
		$("#loginCard").fadeToggle();
	});
});

// Show/hide Google map

$(document).ready(function(){
	$("#explore").click(function(){
		$("#googleMap").fadeToggle();		
	});
});

// Show/hide coach panel
$(document).ready(function(){
	$("#coachPanel").click(function(){
		$("#coachForm").fadeToggle();
	});
});

// Show/hide support
$(document).ready(function(){
  $("#supportPanel").click(function(){
    $("#supportForm").fadeToggle();
  });
});

// Show/hide support
$(document).ready(function(){
  $("#supportPanelMain").click(function(){
    $("#supportFormMain").fadeToggle();
  });
});

//googleMap api key:  AIzaSyCaKDpbkzP7HqM7sFuQVSJv80EZp_7KgbY 
//Logged in map
var coords, infoWindow, map;

function initMap()
{

	coords= {lat: 51, lng: 8};

	var map = new google.maps.Map(document.getElementById('googleMap'),
		{
			zoom: 8,
			center: coords
		});

  var marker0 = new google.maps.Marker({
      position: {lat: 51.00, lng:7.00},
      map: map,
        });

  var marker1 = new google.maps.Marker({
      position: {lat: 51.30, lng:7.10},
      map: map,
        });

  var marker2 = new google.maps.Marker({
      position: {lat: 50.90, lng:6.90},
      map: map,
        });

	infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };


            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {

          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) 
{
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
};

