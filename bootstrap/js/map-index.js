 function initialize() {
        var myLatlng = new google.maps.LatLng(25, -50);
        var mapOptions = {
            zoom:4,
            center: myLatlng,
            scrollwheel: false,
            draggable: false
        }
        
        var map = new google.maps.Map(document.getElementById('map-canvas-index'), mapOptions);
        
        var marker = new google.maps.Marker({
              position: myLatlng,
              map: map
          });
        }
       
    google.maps.event.addDomListener(window, 'load', initialize);
    
    
   
    