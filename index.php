<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="greeting.php" method="GET">
        <label for="message">Scrivi qui il tuo paragrafo</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <label for="word">Inserisci la parola da censurare</label>
        <input type="text" id="word" name="word">

        <button type="submit">Invia</button>
    </form>

</body>

</html>