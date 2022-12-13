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
        $p='ciao come stai?';
    ?>
    <?= $p ?>
    <?= 'lunghezza p:' ?>
    <?= strlen($p) ?>
    <form action="#!">
        <label for="parolaCensusarata">Parola da Censurare</label>
        <input type="text" name="parolaCensusarata" id="">
        <button>Invia</button>
    </form>
</body>
</html>