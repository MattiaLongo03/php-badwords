<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parole Bannate</title>
</head>
<body>
    <?php
        $p = 'ciao come stai?';
        $bad_word = $_GET['bad_word'];
        $replaced_text = str_ireplace($bad_word, '***', $p);
    ?>

    <?= "Testo: ${p}" ?> 
    Lunghezza del testo: <?= strlen($p) ?> 

    <form action="" method="GET">
        <label for="bad_word">Scrivi una parola da censurare:</label>
        <input type="text" name="bad_word" id="bad_word">
        <button>Censura</button>
    </form>

    <?= "Testo censurato: ${replaced_text}" ?>
    Lunghezza del testo censurato: <?= strlen($replaced_text) ?>
</body>
</html>