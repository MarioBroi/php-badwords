<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <h2>Esempio di paragrafo:</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, laboriosam. 
    </p>

    <form action="script.php" method="get">

        <label for="paragraph">Inserisci un paragrafo</label>
        <input type="text" name="paragraph" id="paragraph">

        <label for="censure">Inserisci una parola da censurare</label>
        <input type="text" name="censure" id="censure">

        <button type="submit">Censura!</button>

    </form>
</body>
</html>