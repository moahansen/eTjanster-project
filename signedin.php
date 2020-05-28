<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="css/signedin.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   
</head>

<body>
    <h1>badväder</h1>
    
    <div id="mapid" style="width: 600px; height: 400px; position: relative; outline: none;" 
        class="leaflet-container leaflet-fade-anim leaflet grab leaflet-touch-drag" tabindex="0">
    </div>

<script>
    var mymap = L.map('mapid').setView([59.858, 17.647], 10);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibW9haGFuc2VuIiwiYSI6ImNrYWYxMHhlNTAwYzUyeW82bzN2aGxjMzIifQ.c8yTwa5sopvpDb3vkfhntg'
    }).addTo(mymap);



    var Lerhagsbadet = L.marker([59.783759822965358, 17.638975438012828]).addTo(mymap);
    Lerhagsbadet.bindPopup("<a href=''></a><br>");
    //BILD
    //läs mer

    var Borgardalsbadet = L.marker([59.862016492729325, 17.944113090560531]).addTo(mymap);
    var popup = L.popup()
    
    var Hosjöbadet = L.marker([59.920182436125387, 18.312421647916896]).addTo(mymap);
    Hosjöbadet.bindPopup("<b>Hosjöbadet</b>");

    var Södersjöbadet = L.marker([59.84889063256643, 18.118887933172129]).addTo(mymap);
    Södersjöbadet.bindPopup("<b>Södersjöbadet</b>");

    var Näsuddsbadet = L.marker([59.881095531098872, 17.866628707176499]).addTo(mymap);
    Näsuddsbadet.bindPopup("<b>Näsuddsbadet</b>");

    var Fjällnorabadet = L.marker([59.832085592668903, 17.911641888022277]).addTo(mymap);
    Fjällnorabadet.bindPopup("<b>Fjällnorabadet</b>");

    var Fjällnora_naturistbad = L.marker([59.830393126801773, 17.913534147161155]).addTo(mymap);
    Fjällnora_naturistbad.bindPopup("<b>Fjällnora naturistbad</b>");
    
    var Fjällnora_hundbad = L.marker([59.834365782465625, 17.905484062231356]).addTo(mymap);
    Fjällnora_hundbad.bindPopup("<b>Fjällnora hundbad</b>");
    
    var Hammarskogsbadet = L.marker([59.763730804620067, 17.575970135882869]).addTo(mymap);
    Hammarskogsbadet.bindPopup("<b>Hammarskogsbadet</b>");
    
    var Lyssnaängsbadet = L.marker([59.783222476361587, 17.634453767156881]).addTo(mymap);
    Lyssnaängsbadet.bindPopup("<b>Lyssnaängsbadet</b>");
    
    var Wikbadet = L.marker([59.734771906094146, 17.462600158848446]).addTo(mymap);
    Wikbadet.bindPopup("<b>Wikbadet</b>");
    
    var Pilsbo = L.marker([59.691049446015739, 17.634713201680878]).addTo(mymap);
    Pilsbo.bindPopup("<b>Pilsbo</b>");
    
    var Sandviksbadet = L.marker([60.027520696724693, 17.572551375602117]).addTo(mymap);
    Sandviksbadet.bindPopup("<b>Sandviksbadet</b>");
    
    var Lafsenbadet = L.marker([60.024396354252197, 17.815887247937329]).addTo(mymap);
    Lafsenbadet.bindPopup("<b>Lafsenbadet</b>");
    
    var Testenbadet = L.marker([59.940125834211806, 18.072892077636105]).addTo(mymap);
    Testenbadet.bindPopup("<b>Testenbadet</b>");
    
    var Måviksbadet = L.marker([60.016085204574686, 18.33467564516307]).addTo(mymap);
    Måviksbadet.bindPopup("<b>Måviksbadet</b>");
    
    var Storvadsbadet = L.marker([59.904754101077465, 17.625068454444921]).addTo(mymap);
    Storvadsbadet.bindPopup("<b>Storvadsbadet</b>");
    
    var Sunnerstabadet = L.marker([59.787471344050758, 17.652229236458322]).addTo(mymap);
    Sunnerstabadet.bindPopup("<b>Sunnerstabadet</b><br>");  
    
    var Skyttorp = L.marker([60.077012237705006, 17.750141542834779]).addTo(mymap);
    Skyttorp.bindPopup("<b>Skyttorp</br>");
    
    var Storvreta = L.marker([59.960892410728221, 17.689088061700225]).addTo(mymap);
    Storvreta.bindPopup("<b>Storvreta</b>");
    
    var Vårdsätrabadet = L.marker([59.792243744849593, 17.613735080659318]).addTo(mymap);
    Vårdsätrabadet.bindPopup("<b>Vårdsätrabadet</b>");
    
    var Prästängens_hundbad = L.marker([60.029694064997628, 17.564535893449683]).addTo(mymap);
    Prästängens_hundbad.bindPopup("<b>Prästängens hundbad</b>");
    
    var Storvads_hundbad = L.marker([59.904931986938337, 17.623703543865702]).addTo(mymap);
    Storvads_hundbad.bindPopup("<b>Storvads hundbad</b>");

    //https://kartor.uppsala.se/ags02/rest/services/iExternaKartan/ParkNaturFriluft/MapServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json
</script>

</body>