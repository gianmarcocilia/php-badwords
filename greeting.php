<?php
$message = $_GET['message'];
$word = $_GET['word'];

$new_message = str_replace($word, '***', $message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ecco il nuovo messaggio! La parola censurata è: <?php echo $word ?></h2>
    <p><?php echo $new_message ?></p>
</body>
</html>