<?php
  $host = 'localhost';
  $user = 'postgres';
  $pass = '0201';
  $db = 'tornei';
  $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server \n");



  if (!$con){
    echo "Error : Unable to open database \n";
  } else {


    
    $tournament = $_POST["nome-torneo"];
    $country = $_POST["paese"];
    $city = $_POST["città"];
    $date = $_POST["data"];
    $category = $_POST["categoria"];
    $image = $_FILES["immagine"]["name"];
    $description = $_POST["descrizione"];
    $img_path = $_FILES["immagine"]["tmp_name"];
    $file = pg_escape_bytea($_FILES["immagine"]["tmp_name"]);

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["immagine"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["immagine"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["immagine"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["immagine"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["immagine"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


    $query = "INSERT INTO cardstornei (name, country, city, date, category, image, description, img_path) VALUES ('$tournament' , '$country' , '$city', '$date', '$category', '$target_file', '$description', '$file')";  
    $result = pg_query($con ,$query);
    header("Location: /card.php");
    

  }
  pg_close($con);

?>

