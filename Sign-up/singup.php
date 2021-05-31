
<?php
  
  $host = 'localhost';
  $user = 'postgres';
  $pass = '8678';
  $db = 'registrazioni';
  $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server \n");

  if (!$con){
    echo "Error : Unable to open database \n";
  } else {

    $data = [];
    $user = [];
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $q1 = "SELECT * FROM utenti where email = $1 and password = $2";
    $result = pg_query_params($con, $q1, array($email, $password));

    if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC) and true)){

      $data['success'] = false;
      $query = "INSERT INTO utenti (name, surname, username, email, password) VALUES ('$nome', '$cognome', '$username', '$email', '$password')";
      $result = pg_query($con ,$query);
      

      //echo '<script language="javascript">';
      //echo 'alert("registrazione completata")';
      //echo '</script>';
      //exit;


      echo '<script type="text/javascript">{
        alert("NRegistrazione effettuata con successo");
      }</script>';
    }

    else{

      $data['success'] = true;
      $user['username'] = $line['username'];
      $user['email'] = $line['email'];
      $user['password'] = $line['password'];
      

      echo '<script type="text/javascript">{
        alert("Esiste già un utente con questa email");
      }</script>';
      header("Location: /Sign-up/index.html");
      exit;


      // echo '<script language="javascript">';
      // echo 'alert("Un account con questa email esiste già")';
      header("Location: /Sign-up/index.html");
      // echo '</script>';
      // exit;

    }

    //$data['user'] = $user;
    //echo json_encode($data);
    pg_free_result($result);
  }
  pg_close($con);
?>
