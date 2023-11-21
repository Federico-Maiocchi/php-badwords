<?php 

$text_bad = $_POST['text_bad'];

$phrase = 'Daniele avanza gli arbitri frustrati piuttosto Monica e Achille vigilano le critiche imbambolate.';

$censorship = str_replace($text_bad,'***',$phrase);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>seconda pagina</h1>

    <div>
    <h2>Frase</h2>

        <p> <?php echo $phrase ?> </p>

        <h2>lunghezza frase</h2>

        <p> la frase è lunga: <?php echo strlen($phrase) ?> caratteri </p>
    </div>
    
    <div>
        <h2>Frase censurata</h2>
        <!-- <p>Mi chiamo <?php echo $text_bad; ?></p> -->
        <p> <?php echo $censorship?> </p>

        <h2>Lunghezza frase censurata</h2>
        <p> la frase è lunga: <?php echo strlen($censorship) ?> caratteri  </p>
    </div>

   


</body>
</html>