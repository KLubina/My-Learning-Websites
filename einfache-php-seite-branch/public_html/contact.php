<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Kontakt</h1>
    <form method="post" action="sendmail.php">
        <input type="text" name="name" placeholder="Dein Name">
        <input type="email" name="email" placeholder="Deine E-Mail">
        <textarea name="message" placeholder="Deine Nachricht"></textarea>
        <button type="submit">Senden</button>
    </form>
    <a href="index.php">Zurück zur Startseite</a>
</body>
</html>
