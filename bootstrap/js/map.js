 function initialize() {
        var myLatlng = new google.maps.LatLng(46.777305, 23.599880);
        var mapOptions = {
            zoom: 8,
            center: myLatlng
        }
        
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
        var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!'
          });
        }
    google.maps.event.addDomListener(window, 'load', initialize);