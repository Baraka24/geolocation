<?php
require_once 'connection.php';
if(isset($_POST['submit']))
{
    $nom=$_POST['nom'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $query=mysqli_query($conn,
    "INSERT INTO `tb_data` VALUES ('','$nom','$latitude','$longitude')");
    echo
    "
    <script>
    alert('Donnée bien ajoutée');
    document.location.href='geo.php';
    <script>
    ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion des données</title>
</head>
<body onload="getLocation();">
    <form class="myForm" action="" method="post",autocomplete="off">
      <label for="">Nom</label>
      <input type="text" name="nom" required> <br>
      
      <input type="text" name="latitude" > 
      <input type="text" name="longitude" > <br>
      <button type="submit" name="submit">Envoyer</button>
    </form>

    <script type="text/javascript">
     function getLocation(){
         if(navigator.geolocation)
         {
            navigator.geolocation.getCurrentPosition(showPosition);
         }
     }
     function showPosition(position) {
         document.querySelector('.myForm input[name="latitude"]').value=position.coords.latitude+1.79108-0.040800000000000;
         document.querySelector('.myForm input[name="longitude"]').value=position.coords.longitude+0.0757;
         
     }
     function showError(error){
      switch(error.code){
        case error.PERMISSION_DENIED:
          alert("You must allow geolocation");
          location.reload();
          break;
      }
     }
    </script>
   
</body>
</html>