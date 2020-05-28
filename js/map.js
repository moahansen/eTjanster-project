
   var mymap = L.map('mapid').setView([59.858, 17.647], 10);

   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox/streets-v11',
   tileSize: 512,
   zoomOffset: -1,
   accessToken: 'pk.eyJ1IjoibW9haGFuc2VuIiwiYSI6ImNrYWYxMHhlNTAwYzUyeW82bzN2aGxjMzIifQ.c8yTwa5sopvpDb3vkfhntg'
}).addTo(mymap);


