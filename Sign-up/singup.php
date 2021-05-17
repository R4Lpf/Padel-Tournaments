<?php
  $host = 'localhost';
  $user = 'postgres';
  $pass = '8678';
  $db = 'registrazioni';
  $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server \n");

  if (!$con){
    echo "Error : Unable to open database \n";
  } else {

    
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["passsword"];


    $query = "INSERT INTO utenti (nome, cognome, username, email, password) VALUES ($nome, $cognome, $username, $email, $password)";
    $result = pg_query($con ,$query);
    header("Location: /index.html");

  }
  pg_close($con);

?>