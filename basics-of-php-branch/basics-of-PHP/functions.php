<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Funktionen</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>PHP Funktionen</h1>
  <p>Funktionen sind wiederverwendbare Codeblöcke, die spezifische Aufgaben ausführen:</p>
  <ul>
    <li>Funktionen werden mit dem Schlüsselwort function definiert.</li>
    <pre><?php function gruessen() { echo "Hallo, Welt!"; } gruessen(); ?></pre>
    <li>Viele eingebaute Funktionen und die Möglichkeit, benutzerdefinierte Funktionen zu erstellen.</li>
    <pre><?php function addieren($a, $b) { return $a + $b; } echo addieren(5, 3); ?></pre>
  </ul>
  <p>Zurück zum <a href="index.php">Hauptmenü</a>.</p>
</body>
</html>
