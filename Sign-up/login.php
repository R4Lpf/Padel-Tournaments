<?php
     $dbconn = pg_connect("host=localhost port=5432 dbname=registrazioni user=postgres password=0201") or die("Could not connect: " . pg_last_error());

     $username = $_POST["username"];
     $password = $_POST["password"];
     
     $q1="select * from utenti where username= $1 and password=$2";
     $result=pg_query_params($dbconn, $q1, array($username, $password));
     if (($line=pg_fetch_array($result, null, PGSQL_ASSOC))){
          
             header("Location: /card.php");          
     }
     pg_free_result($result);
     pg_close($dbconn);

     // setcookie(email, email);
     // echo 'Hello ' . htmlspecialchars($_COOKIE["email"]) . '!';
?>



