<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

   <style>
    #maCarte{
      height:400px;
    }
  </style>

</head>
    <body>
      <div id="maCarte"></div>

       <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
        <script>
          var carte = L.map('maCarte').setView([43.604652, 1.444209], 11);

          L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
              attribution: 'données ® <a href="//osm.org/copyright">OpenStreetMap</a>/0DbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
              minZoom : 1,
              maxZoom : 20
          }).addTo(carte);

          let xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = () => {
                if(xmlhttp.readyState == 4){
                    if(xmlhttp.status == 200){
                        let donnees = JSON.parse(xmlhttp.responseText)
                        Object.entries(donnees.stade).forEach(stade => {
                            let marker = L.marker([stade[1].Longitude, stade[1].Latitude]).addTo(carte)
                            marker.bindPopup(stade[1].NomStade)
                        })
                    }else{
                        console.log(xmlhttp.statusText);
                    }
                }
            }
            xmlhttp.open("GET", "http://localhost:8888/projet/liste_simple.php");
            xmlhttp.send(null);
        </script>
    </body>
</html>