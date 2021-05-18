

<!DOCTYPE html>
<html lang=it>
<head>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Padel Tournaments</title>
    <script src="https://kit.fontawesome.com/ad39549f21.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>
<body>
    <script src="/JS-Scripts/change-page-on-left-tab-click.js"></script>


    <div class = "header">
            <h1><img class = "header-image" src= "img/31756.png" height="70" width="100"></h1>
    </div>

    

    <div class = "topnav">
        <a href="/card.php">Padel Tournaments</a>
        <a href="/Sign-up/index.html" style="float: right;">Sign Up</a>
        <a href= "gioco_padel.html" style="float: right;">Il Gioco</a> 
        <a href="card.php" style="float: right;">Homepage</a>  
    </div>


    <style>
        <?php include "style.css" ?>
    </style>

    <div class = "tab" >
        <button class = "tablinks" onclick="openTab(event, 'Tournaments')" id="defaultOpen">
            <a> <i class="fas fa-trophy"></i> Tornei </a>
        </button>
        <button class = "tablinks" onclick="openTab(event, 'Ranking')">
            <a> <i class="fas fa-medal"></i> Classifiche</a>
        </button>
        <button class = "tablinks" onclick="openTab(event, 'My profile')">
            <a> <i class="fas fa-user"></i> Il mio profilo </a>
        </button>

        <button class = "tablinks" onclick="openTab(event, 'News')">
            <a> <i class="fas fa-newspaper"></i> News </a>
        </button>
    </div>
    
    <div class = "content">

        <div id="Tournaments" class="tabcontent">

            <div class = "create-tournament">
                <!-- PUOI CREARE UN TORNEO SOLO SE SEI REGISTRATO -->
                <button class = "tablinks -p" id="panel1">
                    <a onclick=""> Crea Torneo <i class="fas fa-plus"></i> </a>
                </button>
                <div class="CT-content" id="panel1C">

                    <form action="create-tournament.php" method="post">
                        <div class="top-row">
                            <div class="field-wrap">
                              <label>
                                Immagine <span class="req">*</span>
                              </label>
                              <input type="url" required autocomplete="off" name="immagine" />
                            </div>
                            
                            <div class="field-wrap">
                              <label>
                                Nome Torneo <span class="req">*</span>
                              </label>
                              <input type="text" required autocomplete="off" name="nome-torneo"/>
                            </div>
                        
                            <div class="field-wrap">
                              <label>
                                Paese <span class="req">*</span>
                              </label>
                              <input type="text"required autocomplete="off" name="paese"/>
                            </div>
                          </div>
                
                          <div class="field-wrap">
                            <label>
                              Città<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name="città"/>
                          </div>
                
                          <div class="field-wrap">
                            <label>
                              Data<span class="req">*</span>
                            </label>
                            <input type="date" required autocomplete="off" name="data"/>
                          </div>
                          
                          <div class="field-wrap">
                            <label>
                              Categoria<span class="req">*</span>
                            </label>
                            <input type="radio" name="categoria" value="female">Femminile
                            <input type="radio" name="categoria" value="male">Maschile
                            <input type="radio" name="categoria" value="other">Femminile e Maschile
                          </div>
                          
                          <div class="field-wrap">
                            <label>
                              Descrizione <span class="req"></span>
                            </label>
                            <input type="text" name="descrizione"/>
                          </div>

                          <input type="submit" name="submit" id="submit" value="Submit" class="button button-block"></input>                
                    </form>
                    Nome TORNEO
                    Città e Paese
                    Data
                    Categoria

                    <div id=serializearray>1234</div>  

                    <span id="panel1Close" class= "close-button">
                        <i class="far fa-window-close"></i>
                    </span>
                </div>
            </div>

            <script>
                $('#panel1C').slideUp(100);
                $('#panel1C').eq(1).slideDown(600);
                //for collapsing second part of an accordion

                $('.tablinks').click(function() {//open
                var takeID = $(this).attr('id');//takes id from clicked ele
                $('#'+takeID+'C').slideDown(600);//show's clicked ele's id macthed div
                });

                $('span').click(function() {//close
                var takeID = $(this).attr('id').replace('Close','');//strip close from id
                $('#'+takeID+'C').slideUp(600);//hide clicked close button's panel
                });

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

            <div>
              <h1>
                Official Tournaments
              </h1>
            </div>

            <div class = "list -four">
                <div class = "card">
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
                            <a class="btn btn-block btn-default" onclick="viewPage()">Visualizza</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>

                <div class = "card">
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
                            <a class="btn btn-block btn-default" onclick="viewPage()">Visualizza</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>


                <div class = "card">
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
                            <a class="btn btn-block btn-default" onclick="viewPage()">Visualizza</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>

                <div class = "card">
                    <div class = "cardheader">
                        <div class="fill">
                          <img src="/img/gonet geneva.jpg" alt="Gonet Geneva Open" height = "250px" width="100%">
                        </div>
                    </div>
                    <div class = "cardbody">
                        <div class = "cardtitle">
                            <h2>Gonet Geneva Open</h2>
                        </div>
                        <ul class = "carddetails">
                            <li class = "sap"><i class="fas fa-map-marker-alt"></i> Ginevra, Svizzera</li> 
                            <li class = "sep"><i class="fas fa-calendar-alt"></i> 16/05/2021</li>
                            <li><i class="fas fa-male"></i><i class="fas fa-female"></i> Categoria: Femminile e Maschile</li>
                        </ul>
                        <div class = "action">
                            <a class="btn btn-block btn-default" onclick="viewPage()">Visualizza</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>

                

                           
            </div>

            <div>
              <h1>
                Local Tournaments
              </h1>
            </div>

    


            <div class = "list -php">

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


                    $result = pg_query($con, "SELECT name, country, city, date, category, image, description FROM cardstornei");
                    if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                    }

                    while ($row = pg_fetch_row($result)) {
                    echo 
                    "<div class = 'card'>
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
                            <div class = 'action'>
                                <a class='btn btn-block btn-default' onclick='viewPage()'>Visualizza</a> <!-- IL COMANDO 'viewPage()' SI TROVA IN card-sites/ -->
                            </div>
                        </div>
                    </div>";
                    }

                    pg_close($con);

                ?>

            </div>
        </div>

        <div id="Ranking" class="tabcontent">
                <div class="list -two">
                    
                    
                    <div class="wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>Giocatore</th>
                            <th>Posizione</th>
                            <th>Anni</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="posto"> <img src="https://www.worldpadeltour.com/media-content/2016/06/marcelo-capitani-MARCELO_CAPITANI-220x260.jpg"></td>
                            <td class="giocatore">Marcello Capitani</td>
                            <td class="punti">1</td>
                            <td class="anni">46</td>
                            
                        </tr>
                        <tr>
                            <td class="posto"><img src="https://padelpaddle.com/wp-content/uploads/2018/02/padelpaddle-cremona-copertina.jpg"></td>
                            <td class="giocatore">Simone Cremona</td>
                            <td class="punti">2</td>
                            <td class="anni">32</td>
                            
                        </tr>
                        <tr>
                            <td class="rank">3</td>
                            <td class="team">Portugal</td>
                            <td class="points">1245</td>
                            <td class="up-down">0</td>
                        </tr>
                        <tr>
                            <td class="rank">4</td>
                            <td class="team">Brazil</td>
                            <td class="points">1210</td>
                            <td class="up-down">+2</td>
                        </tr>
                        <tr>
                            <td class="rank">5</td>
                            <td class="team">Colombia</td>
                            <td class="points">1186</td>
                            <td class="up-down">-1</td>
                        </tr>
                        <tr>
                            <td class="rank">6</td>
                            <td class="team">Uruguay</td>
                            <td class="points">1181</td>
                            <td class="up-down">-1</td>
                        </tr>
                        <tr>
                            <td class="rank">7</td>
                            <td class="team">Argentina</td>
                            <td class="points">1178</td>
                            <td class="up-down">-1</td>
                        </tr>
                        <tr>
                            <td class="rank">8</td>
                            <td class="team">Switzerland</td>
                            <td class="points">1161</td>
                            <td class="up-down">0</td>
                        </tr>
                        <tr>
                            <td class="rank">9</td>
                            <td class="team">Italy</td>
                            <td class="points">1115</td>
                            <td class="up-down">0</td>
                        </tr>
                        <tr>
                            <td class="rank">10</td>
                            <td class="team">Greece</td>
                            <td class="points">1082</td>
                            <td class="up-down">0</td>
                        </tr>
                        
                        </tbody>
                    </table>
                    </div>

                    <div class="wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Posto</th>
                            <th>Giocatore</th>
                            <th>Punti</th>
                            <th>Anni</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="posto">1</td>
                            <td class="giocatore">Marcello Capitani</td>
                            <td class="punti">1460</td>
                            <td class="anni">46</td>
                            
                        </tr>
                        <tr>
                            <td class="posto">2</td>
                            <td class="giocatore">Simone Cremona</td>
                            <td class="punti">1340</td>
                            <td class="anni">32</td>
                            
                        </tr>
                        <tr>
                            <td class="rank">3</td>
                            <td class="team">Portugal</td>
                            <td class="points">1245</td>
                            <td class="up-down">0</td>
                        </tr>
                        <tr>
                            <td class="rank">4</td>
                            <td class="team">Brazil</td>
                            <td class="points">1210</td>
                            <td class="up-down">+2</td>
                        </tr>
                        <tr>
                            <td class="rank">5</td>
                            <td class="team">Colombia</td>
                            <td class="points">1186</td>
                            <td class="up-down">-1</td>
                        </tr>
                        <tr>
                            <td class="rank">6</td>
                            <td class="team">Uruguay</td>
                            <td class="points">1181</td>
                            <td class="up-down">-1</td>
                        </tr>
                        <tr>
                            <td class="rank">7</td>
                            <td class="team">Argentina</td>
                            <td class="points">1178</td>
                            <td class="up-down">-1</td>
                        </tr>
                        <tr>
                            <td class="rank">8</td>
                            <td class="team">Switzerland</td>
                            <td class="points">1161</td>
                            <td class="up-down">0</td>
                        </tr>
                        <tr>
                            <td class="rank">9</td>
                            <td class="team">Italy</td>
                            <td class="points">1115</td>
                            <td class="up-down">0</td>
                        </tr>
                        <tr>
                            <td class="rank">10</td>
                            <td class="team">Greece</td>
                            <td class="points">1082</td>
                            <td class="up-down">0</td>
                        </tr>
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            
        </div>

        <div id="My profile" class="tabcontent">
            <h2 align="center">Il tuo Profilo</h2>
            <p align="center">Devi aver effettuato il login per poter visualizzare le tue info.</p>
        </div>

        <div id="News" class="tabcontent">
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
                            <a href="/card-sites/storiadelpadel.html" class="btn btn-block btn-default" onclick="viewPage()">Leggi tutto</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
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
                            <h2>DIFFERENZE TRA PADEL, TENNIS E SQUASH</h2>
                        </div>
                        <div class = "paragraph">
                            <p>
                                Lo sport è un argomento che mette quasi sempre tuttti d’accordo. A patto che non si parli di calcio e di tifo. Lì, purtroppo, se le danno ancora di santa ragione. Per questo, in molti in Italia, si stanno piano piano avvinando ad universi alternativi. A sport,...  
                            </p>
                        </div>
                        <div class = "leggi-tutto">
                            <a href="/card-sites/differenze.html" class="btn btn-block btn-default" onclick="viewPage()">Leggi tutto</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>

                <div class = "newscard">
                    <div class = "cardheader">
                        <div class="fill">
                            <img src="https://palalocapadel.club/wp-content/uploads/2018/08/come-si-gioca-a-padel-400x250.jpg" alt="how to play">
                        </div>
                    </div>
                    <div class = "cardbody">
                        <div class = "newstitle">
                            <h2>Come si gioca a padel</h2>
                        </div>
                        <div class = "paragraph">
                            <p>
                                Si parla già di vera e propria padel o paddle mania, il gioco molto simile al tennis che proviene dal Messico che sta facendo sempre più proseliti anche in Italia seppur con un certo ritardo rispetto ad altri paesi: i motivi sono presto spiegati, il successo di questo...                            
                            </p>
                        </div>
                        <div class = "leggi-tutto">
                            <a class="btn btn-block btn-default" onclick="viewPage()">Leggi tutto</a> <!-- IL COMANDO "viewPage()" SI TROVA IN card-sites/ -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
            

        <script src="/JS-Scripts/change-page-on-left-tab-click.js"></script>
        <script src="/card-sites/viewCard.js"></script>
    </div>
    <!-- <p align="center">Questo sito è stato progettato per la gestione e la visualizzazione di informazioni sui tornei di padel</p> -->
</body>
</html>