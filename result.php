<?php 

$text_bad = $_POST['text_bad'];

$phrase = 'Daniele avanza gli arbitri frustrati piuttosto Monica e Achille vigilano le critiche imbambolate.';



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
    <h2>Frase</h2>

    <p> <?php echo $phrase ?> </p>

    <h2>lunghezza frase</h2>

    <p> la frase è lunga: <?php echo strlen($phrase) ?> caratteri </p>


    <p>Mi chiamo <?php echo $text_bad; ?></p>


</body>
</html>