<?php 

//$message = "Test";

var_dump($_GET);
$paragraph = $_GET["paragraph"];
$censure = $_GET["censure"];
$cens_paragraph = "La parola da censurare é: $censure nel seguente paragrafo: $paragraph";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
    <form action="" method="get">
        <input type="text" name="paragraph" id="paragraph" placeholder="Inserisci un paragrafo">
        <input type="text" name="censure" id="censure" placeholder="Inserisci una parola da censurare">
        <button type="submit">Start</button>
    </form>

    <h2>Esempio di paragrafo:</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, laboriosam. 
    </p>
    <hr>

    <h2>Ecco il paragrafo generato</h2>
    <div><?= $cens_paragraph ?></div>
    <hr>

</body>
</html>