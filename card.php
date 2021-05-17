

<!DOCTYPE html>
<html lang=it>
<head>
    <link href="style.css" rel="stylesheet" type="text/css" />
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
        <a href="index.html">Padel Tournaments</a>
        <a href="/Sign-up/index.html" style="float: right;">Sign Up</a>
        <a href= "gioco_padel.html" style="float: right;">Il Gioco</a> 
        <a href="index.html" style="float: right;">Homepage</a>  
    </div>

    <div class = "tab">
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
                              <input type="text" required autocomplete="off" name="immagine" />
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

    </div>
</body>

<div class = "list -four">


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
            <img src='/img/millenium estoril.jpg' alt='Millennium Estoril Open' height = '250px' width='100%'>
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
