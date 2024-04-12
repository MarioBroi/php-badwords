<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-badwords</title>

</head>
<body>

    <header>
        <h1>
            Badword censurer
        </h1>
        <p>
            Digita il tuo paragrafo nella sezione sottostante assieme ad una parola in esso contenuta da censurare, premi il bottone ed avverá la magia!
        </p>
    </header>

    <div class="container">
        
            <h2>Esempio di paragrafo:</h2>
            <p class="example">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, laboriosam. 
            </p>
        
            <form action="script.php" method="get" class="text-input">
        
                <label for="paragraph">Inserisci un paragrafo</label>
                <input type="text" name="paragraph" id="paragraph">
        
                <label for="censure">Inserisci una parola da censurare</label>
                <input type="text" name="censure" id="censure">
        
                <button type="submit" class="button-6">Censura!</button>
        
            </form>

    </div>
    <!-- /.container -->
</body>
</html>