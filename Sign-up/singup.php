
<!DOCTYPE html>
<html lang="en" >
<head>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Padel Tournaments</title>
    <script src="https://kit.fontawesome.com/ad39549f21.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>
<body>
<script src="/JS-Scripts/change-page-on-left-tab-click.js"></script>

    <div class = "header">
      <h1><img class = "header-image" src= "/img/HEADER BIANCO.png" height="70" width="100"></h1>
    </div>

    <div class = "topnav">
        <a href="/card.php">Padel Tournaments</a>
        <a href="/Sign-up/index.html" style="float: right;">Sign up</a>
        <a href= "/gioco_padel.html" style="float: right;">Il gioco</a> 
        <a href="/card.php" style="float: right;">Homepage</a>  
    </div>
    
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrati</a></li>
        <li class="tab"><a href="#login">Accedi</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Completa i campi</h1>
          
          <form action="/Sign-up/singup.php" method="post">
          
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Nome<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" name="nome"/>
              </div>
          
              <div class="field-wrap">
                <label>
                  Cognome<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off" name="cognome"/>
              </div>
            </div>

            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="username"/>
            </div>

            <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off" name="email"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Imposta una Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off" name="password"/>
            </div>
            
            <input type="submit" name="submit" id="submit" value="Conferma" class="button button-block"></input>
            
          </form>

          <div id=serializearray>1234</div>  

          <script>
            $(function() {
              var update = function() {
                  $('#serializearray').text(        
                      JSON.stringify($('form').serializeArray())
                  );
                };
                update();
                $('form').change(update);
            })

                          
        </script>
        </div>
        
        <div id="login">   
          <h1>Bentornato!</h1>
          
          <form action="/login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Password Dimenticata?</a></p>
          
          <button class="button button-block">Accedi</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./script.js"></script>

</body>
</html>


<?php
  
  $host = 'localhost';
  $user = 'postgres';
  $pass = '0201';
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

    if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC))){

      $data['success'] = false;
      $query = "INSERT INTO utenti (name, surname, username, email, password) VALUES ('$nome', '$cognome', '$username', '$email', '$password')";
      $result = pg_query($con ,$query);
      

      //echo '<script language="javascript">';
      //echo 'alert("registrazione completata")';
      //echo '</script>';
      //exit;


      echo '<script type="text/javascript">  window.onload = function(){
        alert("NRegistrazione effettuata con successo");
      }</script>';
    }

    else{

      $data['success'] = true;
      $user['username'] = $line['username'];
      $user['email'] = $line['email'];
      $user['password'] = $line['password'];
      

      echo '<script type="text/javascript">  window.onload = function(){
        alert("Esiste già un utente con questa email");
      }</script>';
      exit;


      // echo '<script language="javascript">';
      // echo 'alert("Un account con questa email esiste già")';
      // header("Location: /card.php");
      // echo '</script>';
      // exit;

    }

    //$data['user'] = $user;
    //echo json_encode($data);
    pg_free_result($result);
  }
  pg_close($con);
?>
