<!DOCTYPE html>
<html lang=it>
<head>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Padel Tournaments</title>
    <script src="https://kit.fontawesome.com/ad39549f21.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>
<body>
    <script src="/JS-Scripts/change-page-on-left-tab-click.js"></script>
    


    <div class = "header">
            <h1><img class = "header-image" src= "img/HEADER BIANCO.png" height="70" width="100"></h1>
    </div>

    

    <div class = "topnav">
        <a href="/card.php">Padel Tournaments</a>
        <a href="javascript:logged()" style="float: right;" id="logged" >Log In</a>
        <a href= "gioco_padel.html" style="float: right;">Il Gioco</a> 
        <a href="card.php" style="float: right;">Homepage</a>  
    </div>


    <style>
        <?php include "style.css" ?>
    </style>

    <!-- TAB IN CUI CAMBIA TABLINKS A SECONDA DI QUALE VIENE CLICCATO -->

    <div class = "tab" >
        <button class = "tablinks" onclick="openTab(event, 'Tournaments')" id="defaultOpen">
            <a> <i class="fas fa-trophy"></i> Tornei </a>
        </button>
        <button class = "tablinks" onclick="openTab(event, 'Ranking')">
            <a> <i class="fas fa-medal"></i> Classifiche</a>
        </button>
        <!-- <button class = "tablinks" onclick="openTab(event, 'My profile')">
            <a> <i class="fas fa-user"></i> Il mio profilo </a>
        </button> -->

        <button class = "tablinks" onclick="openTab(event, 'News')">
            <a> <i class="fas fa-newspaper"></i> Curiosità </a>
        </button>
    </div>

    <!-- CONTENUTO PER OGNI TAB -->
    
    <div class = "content">

    
     
        <div id="Tournaments" class="tabcontent">
        
        
            <div class = "create-tournament" style= "display:none;" id=bottoneTorneo> <!-- BOTTONE PER CREARE IL TORNEO -->
                <!-- PUOI CREARE UN TORNEO SOLO SE SEI REGISTRATO -->
                <button class = "tablinks -p" id="panel1">
                    <a onclick=""> Crea Torneo <i class="fas fa-plus"></i> </a>
                </button>
                <div class="CT-content" id="panel1C">
                    
                    <form action="create-tournament.php" method="post" enctype="multipart/form-data">
                        <div class="top-row">
                            <div class="field-wrap">
                            
                              <input class= caricaFoto type="file" accept="image/png, image/gif, image/jpeg" required autocomplete="off" name="immagine" id="immagine" onchange="loadFile(event)"/>
                              <p><img id="output" width="200" /></p>  
                              <script>
                                var loadFile = function(event) {
                                  var image = document.getElementById('output');
                                  image.src = URL.createObjectURL(event.target.files[0]);
                                };
                              </script>
                            </div>
                            
                          
                            <div class="field-wrap">
                              <label>
                                Nome Torneo <span class="req"> *</span>
                              </label>
                              <input type="text" required autocomplete="off" name="nome-torneo"/>
                            </div>
                              
                            <div class="field-wrap">
                              <label>
                                Paese <span class="req"> *</span>
                              </label>
                              <input type="text"required autocomplete="off" name="paese"/>
                            </div>
                          </div>
                
                          <div class="field-wrap">
                            <label>
                              Città<span class="req"> *</span>
                            </label>
                            <input type="text"required autocomplete="off" name="città"/>
                          </div>
                
                          <div class="field-wrap">
                            <label>
                              <span class="req"></span>
                            </label>
                            <input type="date" required autocomplete="off" name="data"/>
                          </div>
                         
                          
                          <div class="field-wrap" style="padding-left:40px; padding-top: 20px;">
                            <label>
                              Categoria<span class="req"> *</span>
                            </label>
                            <div class="list -two" style="grid-gap: 10px;">
                            <input type="radio" name="categoria" value="Femminile">Femminile
                            <input type="radio" name="categoria" value="Maschile">Maschile
                            <input type="radio" name="categoria" value="Misto">Misto
                            </div>
                          </div>
                          
                          <div class="field-wrap">
                            <label>
                              Descrizione <span class="req"></span>
                            </label>
                            <input type="text" name="descrizione"/>
                          </div>

                          <div class="field-wrap">
                            <input class="btn btn-block btn-default" type="submit" name="submit" id="submit" value="CONFERMA " style="margin-left:15px; margin-bottom:15px; margin-right:15px;"></input>           
                          </div>     
                    </form>
                </div>
            </div>

            <script>
                $('#panel1C').slideToggle(100);
                $('#panel1C').eq(1).slideToggle(600);
                //for collapsing second part of an accordion

                $('.tablinks').click(function() {//open
                var takeID = $(this).attr('id');//takes id from clicked ele
                $('#'+takeID+'C').slideToggle(600);//show's clicked ele's id macthed div
                });

                $('span').click(function() {//close
                var takeID = $(this).attr('id').replace('Close','');//strip close from id
                $('#'+takeID+'C').slideToggle(600);//hide clicked close button's panel
                });

                $(function() {
                  var update = function() {
                      $('#serializearray').text(        
                          JSON.stringify($('form').serializeArray())
                      );
                    };
                    update();
                    $('form').change(update);
                });           
            </script>
            <script>
                 $(document).ready(funcion(){
                  $('#submit').click(function(){
                    var image_name = $('#immagine').val();
                   
                  })
                });
            </script>



<script defer src="/JS-Scripts/button.js"></script> <!--primo bottone-->

  <div class="modal" id="modal"> <!--primo bottone--> <!--modificando l'id si possono creare ogni volta popup differenti-->
    <div class="modal-header">
      <div class="title"> Millennium Estoril Open </div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    Il Millennium Estoril Open , precedentemente noto anche come Portugal Open e Estoril Open, è un torneo di tennis che si svolge annualmente a Cascais. Il torneo maschile fa parte dell'ATP Tour 250, quello femminile è stato classificato come International.  
    </div>
  </div>
  <div id="overlay">

  </div>


  <div class="modal" id="modal1"> <!--secondo bottone-->
    <div class="modal-header">
      <div class="title"> Mutua Madrid Open </div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    Il Mutua Madrid Open, conosciuto come Masters di Madrid, è un torneo di tennis sia maschile che femminile appartenente alle categorie 1000 e Premier che si svolge a Madrid. 
    </div>
  </div>
  <div id="overlay">

  </div>

  <div class="modal" id="modal2"> <!--terzo bottone-->
    <div class="modal-header">
      <div class="title"> Internaz. BNL d'Italia </div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    Gli Internazionali d'Italia sono il più importante torneo tennistico italiano in campo maschile e femminile. Fanno parte del circuito ATP World Tour Masters 1000, che raggruppa i 9 tornei più prestigiosi dopo i 4 del Grande Slam e le ATP Finals, e del circuito WTA 1000, che raggruppa i 9 tornei più prestigiosi dopo i 4 del Grande Slam e le WTA Finals.
    Insieme al già citato Roland Garros, che segue, e al torneo di Monte Carlo, che precede, gli Internazionali d'Italia costituiscono il cosiddetto Slam Rosso, ovvero il trittico di tornei su terra rossa in sequenza, considerati come i più importanti al mondo su questa superficie, per tradizione. Esisteva un altro torneo Master Series su terra rossa, l'Hamburg Masters, che dal 2009 è stato sostituito dal Master Series di Madrid che è stato collocato due settimane prima dell'inizio del Roland Garros. 
    </div>
  </div>
  <div id="overlay">

  </div>
                
            <!-- TORNEI UFFICIALI -->

            <div class = "list -four"> <!--card tornei reali-->
                <div class = "card"> <!--card1-->
                    <div class = "cardheader">
                        <div class = "fill">
                          <img src="/img/millenium estoril.jpg" alt="Millennium Estoril Open" height = "250px" width="100%">
                        </div>
                    </div>
                    <div class = "cardbody">
                        <div class = "cardtitle">
                            <h2>Millennium Estoril Open</h2>
                        </div>
                        <ul class = "carddetails">
                            <li class = "sap"><i class="fas fa-map-marker-alt"></i> Estoril, Portogallo </li> 
                            <li class = "sep"><i class="fas fa-calendar-alt"></i> 26/04/2021</li>
                            <li><i class="fas fa-male"></i><i class="fas fa-female"></i> Categoria: Femminile e Maschile</li>
                        </ul>
                        <div class = "action">
                          <a class="btn btn-block btn-default" data-modal-target="#modal">Visualizza Info</a>
                        </div>
                    </div>
                </div>


                <div class = "card"> <!--card2-->
                    <div class = "cardheader">
                        <div class = "fill">
                          <img src="/img/mutua opening madrid.jpg" alt="Mutua Madrid Open" height = "250px" width="100%">
                        </div>
                    </div>
                    <div class = "cardbody">
                        <div class = "cardtitle">
                            <h2>Mutua Madrid Open</h2>
                        </div>
                        <ul class = "carddetails">
                            <li class = "sap"><i class="fas fa-map-marker-alt"></i> Madrid, Spagna</li> 
                            <li class = "sep"><i class="fas fa-calendar-alt"></i> 02/05/2021</li>
                            <li><i class="fas fa-male"></i><i class="fas fa-female"></i> Categoria: Femminile e Maschile</li>
                        </ul>
                
                        <div class = "action">
                          <a class="btn btn-block btn-default" data-modal-target="#modal1">Visualizza Info</a>
                        </div>
                    </div>
                </div>



                <div class = "card"> <!--card3-->
                    <div class = "cardheader">
                        <div class="fill">
                          <img src="/img/internazionali bnl roma.jpg" alt="Internazionali BNL d'Italia" height = "250px" width="100%">
                        </div>
                    </div>
                    <div class = "cardbody">
                        <div class = "cardtitle">
                            <h2>Internaz. BNL d'Italia</h2>
                        </div>
                        <ul class = "carddetails">
                            <li class = "sap"><i class="fas fa-map-marker-alt"></i> Roma, Italia</li> 
                            <li class = "sep"><i class="fas fa-calendar-alt"></i> 09/05/2021</li>
                            <li><i class="fas fa-male"></i><i class="fas fa-female"></i> Categoria: Femminile e Maschile</li>
                        </ul>
                        <div class = "action">
                          <a class="btn btn-block btn-default" data-modal-target="#modal2">Visualizza Info</a>
                        </div>
                    </div>
                </div>

                

                

                           
            </div>

            <div style = "margin-top:40px; margin-left:40px;" id="scritta_tl">
            <h1>
            TORNEI LOCALI
            </h1>
            </div>

            <!-- TORNEI LOCALI -->
            <div class = "list -php"> <!--card create dagli utenti tramite il bottone in cima alla pagina -->

                <?php

                    $host = 'localhost';
                    $user = 'postgres';
                    $pass = '8678';
                    $db = "tornei";
                    $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server \n");
                    if (!$con) {
                    echo "Failed connecting to postgres database $database\n";
                    exit;
                    }

                    $result = pg_query($con, "SELECT name, country, city, date, category, image, description, img_path FROM cardstornei");
                    if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                    }
                    
                    $tmp = 3;
                    while ($row = pg_fetch_row($result)) {

                    echo
                      "<div class='modal' id='modal$tmp'>
                        <div class='modal-header'>
                          <div class='title'> $row[0] </div>
                          <button data-close-button class='close-button'>&times;</button>
                          </div>
                          <div class='modal-body'>
                          $row[6]
                          </div>
                          </div>
                          <div id='overlay'>

                        </div>";
                    echo 
                    "<div class = 'card' style= 'display:block;' id = 'card$tmp'>
                        <div class = 'cardheader'>
                            <div class = 'fill'>
                            <img src= '$row[5]' height = '250px' width='100%'>
                            </div>
                        </div>
                        <div class = 'cardbody'>
                            <div class = 'cardtitle'>
                                <h2>$row[0]</h2>
                            </div>
                            <ul class = 'carddetails'>
                                <li class = 'sap'><i class='fas fa-map-marker-alt'></i> $row[2], $row[1] </li> 
                                <li class = 'sep'><i class='fas fa-calendar-alt'></i> $row[3]</li>
                                <li><i class='fas fa-male'></i><i class='fas fa-female'></i> Categoria: $row[4]</li>
                            </ul>
                            <div class = 'list -buttons'>
                              <div class = 'action'>
                                  <a class='btn btn-block btn-default' data-modal-target='#modal$tmp'>Visualizza Info</a>
                              </div>
                              
                            </div>
                        </div>
                    </div>";
                     $tmp = $tmp +1;
                    }
                   

                    pg_close($con);

                ?>

            </div>
        </div>
        <script>

        </script>
        

        <div id="Ranking" class="tabcontent"> <!--sezione a sinistra per le classifiche-->
            <div class="list -four">
                
                <div></div>
                
                <div class="wrapper">
                  <table>
                    <thead>
                      <tr>
                        <th><i class="fas fa-award"></i></th>
                        <th>Giocatore</th>
                        <th></th>
                        <th>Anni</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="posizione"> 1</td>
                        <td class="posto"> <img src="/img/giocatori/MARCELO_CAPITANI.jpg"></td>
                        <td class="giocatore">Marcelo Capitani</td>
                        <td class="anni">46</td>
                        
                      </tr>
                      <tr>
                        <td class="posizione">2</td>
                        <td class="posto"><img src="/img/giocatori/simone-cremona.jpg"></td>
                        <td class="giocatore">Simone Cremona</td>
                        <td class="anni">32</td>
                        
                      </tr>
                      <tr>
                        <td class="posizione">3</td>
                        <td class="posto"><img src="/img/giocatori/bruno-michele.png"></td>
                        <td class="giocatore">Bruno Michele</td>
                        <td class="anni">38</td>
                      </tr>
                      <tr>
                        <td class="posizione">4</td>
                        <td class="posto"><img src="/img/giocatori/lorenzo-Di-Giovanni.jpg"></td>
                        <td class="giocatore">Di Giovanni Lorenzo</td>
                        <td class="anni">38</td>
                      </tr>
                      <tr>
                        <td class="posizione">5</td>
                        <td class="posto"><img src="/img/giocatori/tinti-alessandro.webp"></td>
                        <td class="giocatore">Tinti Alessandro</td>
                        <td class="anni">29</td>
                      </tr>
                      <tr>
                        <td class="posizione">6</td>
                        <td class="posto"><img src="/img/giocatori/Fanti-emanuele.jpeg"></td>
                        <td class="giocatore">Fanti Emanuele</td>
                        <td class="anni">37</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="wrapper">
                  <table>
                      <thead>
                        <tr>
                          <th><i class="fas fa-award"></i></th>
                          <th>Giocatore</th>
                          <th></th>
                          <th>Anni</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="posizione">1</td>
                        <td class="posto"><img src="/img/giocatori/chiara-pappacena.JPG"></td>
                        <td class="giocatore">Pappacena Chiara</td>
                        <td class="anni">26</td>
                      </tr>
                      <tr>
                        <td class="posizione">2</td>
                        <td class="posto"><img src="/img/giocatori/giulia-sussarello.webp"></td>
                        <td class="giocatore">Sussarello Giulia</td>
                        <td class="anni">28</td>
                      </tr>
                      <tr>
                        <td class="posizione">3</td>
                        <td class="posto"><img src="/img/giocatori/stellato-emily.jpg"></td>
                        <td class="giocatore">Stellato Emily</td>
                        <td class="anni">38</td>
                      </tr>
                      <tr>
                        <td class="posizione">4</td>
                        <td class="posto"><img src="/img/giocatori/orsi-carolina.jpg"></td>
                        <td class="giocatore">Orsi Carolina</td>
                        <td class="anni">29</td>
                      </tr>
                      <tr>
                        <td class="posizione">5</td>
                        <td class="posto"><img src="/img/giocatori/tommasi-valentina.webp"></td>
                        <td class="giocatore">Tommasi Valentina</td>
                        <td class="anni">24</td>
                      </tr>
                      <tr>
                        <td class="posizione">6</td>
                        <td class="posto"><img src="/img/giocatori/zanchetti-erika.PNG"></td>
                        <td class="giocatore">Zanchetti Erika</td>
                        <td class="anni">26</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div></div>
              </div>
        </div>

        <!-- 
          <div id="My profile" class="tabcontent"> sezione a sinistra per il profilo
            <h2 align="center">Il tuo Profilo</h2>
            <p align="center">Devi aver effettuato il login per poter visualizzare le tue info.</p>
        </div> 
                    -->
        <div id="News" class="tabcontent"> <!--sezione a sinistra per le "notizie"-->
            <div class = "list -three">

                <div class = "newscard">
                    <div class = "cardheader">
                        <div class="fill">
                            <img src="https://palalocapadel.club/wp-content/uploads/2018/11/Storia-del-Padel-come-nasce-questo-sport-400x250.jpg" alt="old padel">
                        </div>
                    </div>
                    <div class = "cardbody">
                        <div class = "newstitle">
                            <h2>STORIA DEL PADEL, COME NASCE QUESTO SPORT?</h2>
                        </div>
                        <div class = "paragraph">
                            <p>
                                Il Padel o Paddle tennis è un gioco molto simile al tradizionale tennis con regole simili giocabile in due squadre composte da due elementi con un campo chiuso ai lati o delimitato ai lati. E’ uno sport nato dapprima in maniera casuale e del tutto amatoriale ma...
                            </p>
                        </div>
                        <div class = "leggi-tutto">
                            <a href="/card-sites/storiadelpadel.html" class="btn btn-block btn-default" >Leggi tutto</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>

                <div class = "newscard">
                    <div class = "cardheader">
                        <div class="fill">
                            <img src="https://palalocapadel.club/wp-content/uploads/2018/11/differenze-tra-padel-tennis-e-squash-400x250.jpg" alt="differences" >
                        </div>
                    </div>
                    <div class = "cardbody">
                        <div class = "newstitle">
                            <h2>DIFFERENZE SOSTANZIALI TRA PADEL, TENNIS E SQUASH</h2>
                        </div>
                        <div class = "paragraph">
                            <p>
                            Il padel (o paddle) lo si può considerare come un ibrido tra il tennis e lo squash, perché al suo interno porta le caratteristiche di entrambi. Nato negli Stati Uniti verso la fine dell’800, a partire dagli anni ’70 ha iniziato a prendere piede in tutto il mondo e solo negli ultimi tempi, anche in Italia.
                          </p>
                        </div>
                        <div class = "leggi-tutto">
                            <a href="/card-sites/differenze.html" class="btn btn-block btn-default" >Leggi tutto</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
            

        <script src="/JS-Scripts/change-page-on-left-tab-click.js"></script>
    </div>
    <!-- <p align="center">Questo sito è stato progettato per la gestione e la visualizzazione di informazioni sui tornei di padel</p> PRIMO PARAGRAFO DI PROVA DEL SITO --> 
   


</body>


</html>