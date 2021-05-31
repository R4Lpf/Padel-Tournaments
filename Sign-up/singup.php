
<?php
  
  $host = 'localhost';
  $user = 'postgres';
  $pass = '0201';
  $db = 'registrazioni';
  $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server \n");

  if (!$con){
    echo "Error : Unable to open database \n";
  } else {

    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $q1 = "SELECT * FROM utenti where email = $1 and password = $2";
    $result = pg_query_params($con, $q1, array($email, $password));

    if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC) and true)){

      $query = "INSERT INTO utenti (name, surname, username, email, password) VALUES ('$nome', '$cognome', '$username', '$email', '$password')";
      $result = pg_query($con ,$query);
      
      echo '<script type="text/javascript">{
        alert("Registrazione effettuata con successo");
      }</script>';

      header("Location: /card.php"); 
    }

    else{

      header("Location: /Sign-up/index.html");
      exit;

    }

    pg_free_result($result);
  }
  pg_close($con);
?>
