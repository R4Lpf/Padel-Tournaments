<?php
     $dbconn = pg_connect("host=localhost port=5432 dbname=registrazioni user=postgres password=8678") or die("Could not connect: " . pg_last_error());

     $data = [];
     $user = [];
     $email = $_POST["email"];
     $password = $_POST["password"];
     
     $q1="select * from utenti where email= $1 and password=$2";
     $result=pg_query_params($dbconn, $q1, array($email, $password));
     if (!($line=pg_fetch_array($result, null, PGSQL_ASSOC))){
          //user doesn't exist          
          $data['success'] = false;          
     }

     else {
          //login successful
          $data['success'] = true;
          $user['username'] = $line['username'];
          $user['email'] = $line['email'];
          $user['password'] = $line['password'];

          echo '<script type="text/javascript">{
               alert("Esiste già un utente con questa email");
             }</script>';
             header("Location: /card.php");
             exit;

          
     }

     $data['user'] = $user;
     echo json_encode($data);
     pg_free_result($result);
     pg_close($dbconn);
?>