 function initialize() {
        var myLatlng = new google.maps.LatLng(46.777504, 23.599880);
        var mapOptions = {
            zoom:6,
            center: myLatlng,
            scrollwheel: false
        }
        
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
        var marker = new google.maps.Marker({
              position: myLatlng,
              map: map
          });
        }
       
    google.maps.event.addDomListener(window, 'load', initialize);
    
    
   
    