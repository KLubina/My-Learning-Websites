<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Formularverarbeitung</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>PHP Formularverarbeitung</h1>
  <p>Formulare sind wichtig für die Interaktion mit Benutzern:</p>
  <ul>
    <li>Formulardaten können mit den superglobalen Arrays $_GET und $_POST aufgegriffen werden.</li>
    <pre><form method="post"><input type="text" name="name" /><input type="submit" /></form>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo "Hallo, " . $_POST["name"]; } ?></pre>
  </ul>
  <p>Zurück zum <a href="index.php">Hauptmenü</a>.</p>
</body>
</html>
