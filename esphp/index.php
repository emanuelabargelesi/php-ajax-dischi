<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">

    <title>Dischi</title>

    <?php 
      include 'database.php';
      function stampa($album){
        $img = $album['img'];
        $titolo = $album['titolo'];
        $autore = $album['autore'];
        $data = $album['data'];
        echo "<div class=album> 
        <img src='{$img}'>
        <p class='titolo'> {$titolo}</p>
        <p class='autore'> {$autore}</p>
        <p class='data'> {$data}</p>  
        </div>" ;
      }
    ?>

  </head>
  <body>
    <div class="container">
    <?php
        foreach($albums as $album){
          stampa($album);
        }
      ?>
    </div>
  </body>
</html>
