<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Datenbankinteraktion</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>PHP Datenbankinteraktion</h1>
  <p>Datenbanken sind essentiell für dynamische Websites:</p>
  <ul>
    <li>Häufig verwendet mit MySQL zur Durchführung von Datenbankoperationen.</li>
    <pre><?php $conn = new mysqli("localhost", "benutzername", "passwort", "datenbank");
if ($conn->connect_error) { die("Verbindung fehlgeschlagen: " . $conn->connect_error); }
$result = $conn->query("SELECT * FROM tabelle");
while($row = $result->fetch_assoc()) { echo $row["spalte1"]; } ?></pre>
    <li>PDO und mysqli sind populäre Methoden zur Datenbankinteraktion.</li>
    <pre><?php $pdo = new PDO("mysql:host=localhost;dbname=datenbank", "benutzername", "passwort");
foreach($pdo->query("SELECT * FROM tabelle") as $row) { print $row["spalte1"] . "<br/>"; } ?></pre>
  </ul>
  <p>Zurück zum <a href="index.php">Hauptmenü</a>.</p>
</body>
</html>
