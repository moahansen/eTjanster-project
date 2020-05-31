<html>
    <head>
      
    </head>
</html>

<?php


$badplats = $_POST['badplats'];
echo($badplats);
echo('<br>');

?>

<p>Attribut:</p>


<script>
    var badplats = <?php echo json_encode($badplats) ?>
    alert(badplats);

    src="https://kartor.uppsala.se/ags02/rest/services/iExternaKartan/ParkNaturFriluft/MapServer/0/query?where=NAMN='badplats'&outFields=*&outSR=4326&f=json";
  
    <noscript><a href="https://opendata.arcgis.com/datasets/aadc5420e8884d32b2efe0d10fbfdfe5_99.geojson"></a></noscript>
</script>

<script src="https://www.yr.no/place/Sweden/Uppsala/Uppsala_Municipality/external_box_hour_by_hour.js"></script>
<noscript><a href="https://www.yr.no/place/Sweden/Uppsala/Uppsala_Municipality/">yr.no: Forecast for Uppsala Municipality</a></noscript>

<p>Kommentarer:</p>


