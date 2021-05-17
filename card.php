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


    $result = pg_query($conn, "SELECT name, country, city FROM cardstornei");
    if (!$result) {
    echo "An error occurred.\n";
    exit;
    }

    while ($row = pg_fetch_row($result)) {
    echo "<br>\n";
    echo "name: $row[0] country: $row[1] city: $row[2]";


    pg_close($con);

?>