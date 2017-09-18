<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="toilet.css">
	<link rel="icon" href="images/logo.ico">	
    <script async defer src="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyD9fxFh1sqOfxvNB56Pqc3SWnXqBCAwQ_8"></script>
	<title>Toilet Wayfinder | Admin</title>
    
</head>  

<body>
	<section>
	<!--Logo-->
		<br>
		<a href="toiletwayfinderadmin.php"><img src="images/logo2.png" alt="banner" height= "100"/></a>
		<br>
		<hr>
		
	<!--Current Location Button-->
		<br>
		<button onclick="currentLocation()" style="height:30px">Current Location</button>
		<p id="error"> </p>
				
	<!--Map-->
		<div id="map">
	</section>
	
	<script>
	function googleMap() {
    var locations = [
      ['Public Toilet - Toilet 112 - Alexandra Gardens (Riverslide Skate Park <br> "baby_facil":"no","female":"yes", "male":"yes" <br> <a href="https://goo.gl/maps/85JHGDW3qWt">Get Directions</a>', -37.8203552728411,144.973312908874, 1],
      ['Public Toilet - Toilet 111 - Birrarung Marr Speakers Corner', -37.8210047797754,144.97593322374, 2],
      ['Public Toilet - Yarras Edge (160-186 Lorimer Street, No 19 Berth)', -37.8212482762399,144.934526510629, 3],
      ['Public Toilet - Toilet 124 - Nicholson Street (1A Nicholson Street)', -37.8094520289425,144.973076955637, 4],
      ['Public Toilet - Toilet 146 - Swanston Street (Opposite 475-511 Swanston Street)', -37.8068057673802,144.962648500306, 5],
      ['Public Toilet - Toilet 102 - Fawkner Park, North Pavilion (Female)', -37.8400177932632,144.981227014622, 6],
      ['Public Toilet - Toilet 34 - Franklin Street (Opposite 80 Franklin Street)', -37.8082354510726,144.960189829311, 7],
      ['Public Toilet - Toilet 12 - Exhibition Street (Opposite 242 Exhibition Street)', -37.8095460463623,144.969407118711, 8],
      ['Public Toilet - Princes Park - Crawford Oval (Male)', -37.7887067441958,144.961882529557, 9],
      ['Public Toilet - Royal Park Golf Course Club House', -37.7818713178669,144.956142528948, 10],
      ['Public Toilet - Toilet 154 - Flagstaff Gardens (cnr William & Dudley)', -37.8089204753475,144.955043309203, 11],
      ['Public Toilet - Toilet 181 - Point Park (Point Park Crescent)', -37.8233108344353,144.941827606655, 12],
      ['Public Toilet - Toilet 44 - Fawkner Park, Opposite 150W Toorak Road', -37.8382528412498,144.984389219942, 13],
      ['Public Toilet - Toilet 138 - Carlton Gardens North (Opposite 199 Rathdowne Street)', -37.8026455549851,144.969821287215, 14],
      ['Public Toilet - Toilet 120 - Royal Park, Wetland (off Oak Street)', -37.7830324841769,144.941856352994, 15],
      ['Public Toilet - Victoria Harbour, Shed 3 (North Wharf Road)', -37.8197959757403,144.937665405306, 16],
      ['Public Toilet - Toilet 137 - Faraday Street (Opposite 208-212 Faraday Street)', -37.798709597016,144.967593880097, 17],
      ['Public Toilet - Toilet 105 -Sturt Street Reserve (280 Sturt Street)', -37.8301325375481,144.965012228352, 18],
      ['Public Toilet - Toilet 1 - Lonsdale Street (Opposite 581 Lonsdale Street)', -37.8143455223924,144.955117946438, 19],
      ['Public Toilet - Newmarket Reserve (26 Smithfield Road)', -37.788488821143,144.923563721974, 20],
      ['Public Toilet - Toilet 46 - Bourke Street (opposite 225 Bourke Street)', -37.813245433602,144.966896589681, 21],
      ['Public Toilet - Toilet 7 - Latrobe Street (Adjacent 120 La Trobe Street)', -37.8089420684734,144.965648845523, 22],
      ['Public Toilet - Toilet 6 - Elizabeth Street (Toilet Adjacent 200 Elizabeth Street)', -37.813439207944,144.962922726451, 23],
      ['Public Toilet - Toilet 100 - Royal Park - Native Garden (off Gatehouse Street)', -37.792511464487,144.956851720841, 24],
      ['Public Toilet - Toilet 11 - Lonsdale Street (Opposite 88 Lonsdale Street)', -37.8100356799286,144.969902463305, 25],
      ['Public Toilet - Toilet 109 - Kings Domain Myer Music Bowl Rear of', -37.8228915985886,144.975280957334, 26],
      ['Public Toilet - Toilet 14 - Flinders Street (27 Flinders Street)', -37.8159898259999,144.972798365769, 27],
      ['Public Toilet - Toilet 142 - Queensberry Street (Adjacent 179 Queensberry Street)', -37.8046418040906,144.962850161832, 28],
      ['Public Toilet - Toilet 43 - Queen Street (opposite 113 Queen Street)', -37.8158381650176,144.961062073003, 29],
      ['Public Toilet - Toilet 182 - Docklands Park South - 25 Harbour Esplanade', -37.821758603308,144.947383418678, 30],
      ['Public Toilet - Toilet 128 - Princes Park South Playground (Princes Park Drive)', -37.7855983874526,144.963035360326, 31],
      ['Public Toilet - Town Hall Melbourne (200 Collins Street)', -37.8152157661969,144.966943285103, 32],
      ['Public Toilet - Toilet 172 - Southbank Promenade (opposite Esso House', -37.8203421285863,144.964219727995, 33],
      ['Public Toilet - Toilet 119 - Fitzroy Gardens Toilets (150 Clarendon Street)', -37.812032055028,144.983079680553, 34],
      ['Public Toilet - Toilet 127 - Princes Park Royal Parade (near Park Street)', -37.7789369874241,144.960466615621, 35],
      ['Public Toilet - Toilet 179 - Lincoln Square (138-142 Bouverie Street)', -37.8027118245545,144.962268126958, 36],
      ['Public Toilet - Toilet 172 - Southbank Promenade (opposite Esso House)', -37.8203421285863,144.964219727995, 37],
      ['Public Toilet - Toilet 119 - Fitzroy Gardens Toilets (150 Clarendon Street)', -37.812032055028,44.983079680553, 38],
      ['Public Toilet - Toilet 127 - Princes Park Royal Parade (near Park Street)', -37.7789369874241,144.960466615621, 39],
      ['Public Toilet - Toilet 179 - Lincoln Square (138-142 Bouverie Street)', -37.8027118245545,144.962268126958, 40],
      ['Public Toilet - Saint Mangos Lane, The Palladio (New Quay)', -37.8143583110807,144.94168216712, 41],
      ['Public Toilet - Princes Park - Crawford Oval (Female)', -37.7889036431781,144.961888904119, 42],
      ['Public Toilet - Toilet 110 - Queen Victoria Gardens (Linlithgow Avenue)', -37.8229482886777,144.970985681798, 43],
      ['Public Toilet - Toilet 173 - JJ Holland Park, Skate Park (113 Kensington Road)', -37.7980640238869,144.921105843921, 44],
      ['Public Toilet - Toilet 169 - Batman Park (2A Spencer Street)', -37.82172068167,144.95557809314, 45],
      ['Public Toilet - Toilet 122 - Treasury Gardens (Store and Toilet)', -37.8134184350089,144.977467007448, 46],
      ['Public Toilet - Queen Victoria Market (153 Victoria Street)', -37.8061214990778,144.956538442683, 47],
      ['Public Toilet - Toilet 36 - Lonsdale Street (Opposite 424 Lonsdale Street)', -37.8129330992456,144.960012146952, 48],
      ['Public Toilet - Toilet 140 - Queensberry Street (Opposite 286 Queensberry Street)', -37.8039946349673,144.959090667569, 49],
      ['Public Toilet - Toilet 117 - Powlett Reserve (Opposite 128 Albert Street)', -37.8109423280963,144.986858739378, 50],
      ['Public Toilet - Toilet 6 - Elizabeth Street (Toilet Adjacent 200 Elizabeth Street)', -37.8138377921763,144.96309721024, 51],
      ['Public Toilet - Toilet 3 - Flinders Street (399 Flinders Street)', -37.8194061141385,144.961276831218, 52],
      ['Public Toilet - Toilet 13 - Exhibition Street (Opposite 77 Exhibition Street)', -37.81384641665,144.971374094721, 53],
      ['Public Toilet - Toilet 4 - Market Street (Opposite 74 Market Street)', -37.8174698920964,144.960254335288, 54],
      ['Public Toilet - Toilet 104 - Kings Domain South (off Birdwood Avenue)', -37.8308574866495,144.975169412941, 55],
      ['Public Toilet - Queen Victoria Market - (Meat Hall / \"H\" Shed)', -37.8068212920185,144.958747004641, 56],
      ['Public Toilet - Toilet 131 - Royal Park (Flemington Rd - Near North Park Tennis Club)', -37.7901744104124,144.943669050969, 57],
      ['Public Toilet - Queen Victoria Market (465 Queen Street)', -37.807863995793,144.957947751275, 58],
      ['Public Toilet - Toilet 48 - Birrarung Marr (Opposite Artplay)', -37.8185988722939,144.971059568268, 59],
      ['Public Toilet - Toilet 42 - Fawkner Park, Opposite 55 Commercial Road', -37.8452065630094,144.982614431301, 60],
      ['Public Toilet - Royal Park Brens Pavilion', -37.786221248397,144.955000875873, 61],
      ['Public Toilet - Toilet 102 - Fawkner Park, North Pavilion (Male)', -37.8401476929651,144.981383087537, 62],
      ['Public Toilet - Toilet 177 - Bellair Street (Opposite 180 Bellair Street)', -37.7937322912824,144.930351861633, 63],
      ['Public Toilet - Toilet 178 -  Argyle Place North (Opposite 4 Argyle Place North)', -37.8020762942075,144.966424039887, 64],
      ['Public Toilet - Toilet 125 - Gordon Reserve (74-108 Spring Street)', -37.8122407755871,144.973925558866, 65],
      ['Public Toilet - Victoria Harbour, Shed 2 (North Wharf Road)', -37.8189244556993,144.93423851179, 66],
      ['Public Toilet - Toilet 170 - Queensberry Street (Opposite 530 Queensberry Street)', -37.8030778664123,144.94986517957, 67],
      ['Public Toilet - Toilet 118 - Fitzroy Gardens (2 Lansdowne Street)', -37.8152828122124,144.97759328333, 68],
      ['Public Toilet - Toilet 162 - JJ Holland Park (Opposite, 48 Altona Street)', -37.7981254615061,144.926424667562, 69],
      ['Public Toilet - Toilet 103 - Kings Domain South (Opposite 169 Domain Road)', -37.8339382663373,144.981784046351, 70],
      ['Public Toilet - Toilet 107 - Alexandra Park', -37.8276430461653,144.981811660759, 71],
      ['Public Toilet - Toilet 41 - Flinders Street (No 245 Flinders Street Station)', -37.8179031970562,144.966264255264, 72],
      ['Public Toilet - Toilet 106 - Kings Domain Government House Drive', -37.8269157492345,144.974647783879, 73],
      ['Public Toilet - Toilet 145 - Carlton Gardens South (Opposite 39 Rathdowne Street)', -37.8062589330187,144.9692027022, 74],
      ['Public Toilet - Queen Victoria Market (Food Court - 65-81 Victoria Street)', -37.8063796189705,144.959057791589, 75],
      ['Public Toilet - Toilet 136 - Ievers Reserve - Flemington Road', -37.7967989980576,144.951966651265, 76],
      ['Public Toilet - Toilet 52 - Princes Park (Adjacent Southern Sports Pavilion)', -37.7879048271477,144.959494790772, 77],
      ['Public Toilet - Toilet 133- Canning Street Reserve (49 Princes Street)', -37.7930116787258,144.973994897618, 78]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: new google.maps.LatLng(-37.808272, 144.96264629999996),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
google.maps.event.addListener(map, 'click', function(event) {
   placeMarker(event.latLng);
});

function placeMarker(location) {
    var pmarker = new google.maps.Marker({
        position: location, 
        map: map
    });
}
}
	</script>	
	
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9fxFh1sqOfxvNB56Pqc3SWnXqBCAwQ_8&callback=googleMap">
    </script>
</body>

</html>	