<?php 

//$message = "Test";
//var_dump($_GET);

$paragraph = $_GET["paragraph"];
$censure = $_GET["censure"];
$cens_paragraph = str_replace($censure, "***", $paragraph);
$paragraph_length = strlen($paragraph);
$cens_paragraph_length = strlen($cens_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <h2>
        Il tuo paragrafo:
    </h2>
    <p>
        <?= $paragraph?>
    </p>
    <p>
        il paragrafo é lungo <?= $paragraph_length ?> (compresi gli spazi)!
    </p>

    <hr>

    <h2>
        Il tuo paragrafo censurato:
    </h2>
    <p>
        <?= $cens_paragraph?>
    </p>
    <p>
        il paragrafo é lungo <?= $cens_paragraph_length ?> (compresi gli spazi)!
    </p>

</body>
</html>