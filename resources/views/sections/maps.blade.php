<div style="padding-top: 25px;" id="locationmap">
  <div class="container" style="padding-top: 25px;">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Location</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
<div id="map"></div>
</div>

    <script>
      function initMap() {
        var locations = [
        ['Home', 14.425438, 121.005555, 1,'M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z', '', 'yellow'],

        ['SM Southmall', 14.432766, 121.010657, 1],

        ['Alabang Town Center', 14.423815, 121.030441, 1],

        ['Our Lady of the Pillar Church', 14.418653, 121.009083, 1],

        ['Centro Escolar University', 14.425792, 121.012892, 1],

        ['Las Pinas City Medical Center', 14.429631, 121.003378, 1],

        ['Blessed Trinity School', 14.419917, 121.011313, 1],

        ['SLEX Alabang Toll Gate', 14.422198, 121.045645, 1],

        ['Skyway Alabang Entry', 14.422733, 121.037172, 1],

        ['P2P Bus Station (going to Greenbelt or Market Market)', 14.424161, 121.031742, 1],

        ['NAIA', 14.512274, 121.016508, 1],

        ['Robinsons Las Pinas', 14.442534, 120.997343, 1],

        ['Skyway Alabang Entry', 14.422733, 121.037172, 1],

        ['Ministop', 14.426576, 121.009571, 1],

        ['7 11', 14.426289, 121.012565, 1],

        ['BPI', 14.426502, 121.010107, 1],

        ['Montessori School', 14.415187, 121.010591, 1],

        ['Ribshack and Other Commercial Services', 14.426525, 121.011259, 1],

        ['Skyway Alabang Entry', 14.422733, 121.037172, 1],

        ['Tas Trans Bus Station', 14.431911, 121.014482, 1]
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: new google.maps.LatLng(14.425438, 121.005555),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {  
          if(locations[i][0] == 'Home'){
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            icon: {
              path: locations[i][4],
              scale: locations[i][3],
              fillColor: locations[i][5], 
              fillOpacity: 0.9,
              strokeColor: locations[i][6],
              strokeWeight: 7
            },
            map: map
          });
          }

          else{
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
          });
          }

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq_ocXnml-Jwuon9WF0OcJpZCHqiF1l1Q&callback=initMap">
  </script>