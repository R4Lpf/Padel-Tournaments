
<?php
  
  $host = 'localhost';
  $user = 'postgres';
  $pass = '';
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


    // la query controlla se l'utente è già registrato o meno al sito
    $q1 = "SELECT * FROM utenti where email = $1 and password = $2"; 
    $result = pg_query_params($con, $q1, array($email, $password));

    if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC) and true)){ //se non è ancora registrato inserisce i dati nel database

      $query = "INSERT INTO utenti (name, surname, username, email, password) VALUES ('$nome', '$cognome', '$username', '$email', '$password')";
      $result = pg_query($con ,$query);
      
      header("Location: /card.php"); 
    }

    else{ //se l'utente è gia registrato lo riporta sulla pagina della registrazione

      header("Location: /Sign-up/index.html");
      echo "<script>alert('Questo utente è gia registrato');</script>";
      exit;

    }

    pg_free_result($result);
  }
  pg_close($con);
?>
