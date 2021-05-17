<?php
  $host = 'localhost';
  $user = 'postgres';
  $pass = '8678';
  $db = 'tornei';
  $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server \n");

  if (!$con){
    echo "Error : Unable to open database \n";
  } else {

    
    $tournament = $_POST["nome-torneo"];
    $country = $_POST["paese"];
    $city = $_POST["città"];
    $date = $_POST["data"];
    $category = $_POST["categoria"];
    $image = $_POST["immagine"];
    $description = $_POST["descrizione"];

    $query = "INSERT INTO cardstornei (name, country, city, date, category, image, description) VALUES ('$tournament' , '$country' , '$city', '$date', '$category', '$image', '$description' )";
    $result = pg_query($con ,$query);
    header("Location: /index.html");
    

  }
  pg_close($con);

?>

