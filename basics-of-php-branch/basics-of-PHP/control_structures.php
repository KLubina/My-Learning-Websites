<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Kontrollstrukturen</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>PHP Kontrollstrukturen</h1>
  <p>Die Kontrollstrukturen in PHP steuern den Fluss der Ausführung der Skripte, basierend auf Bedingungen und Schleifen.</p>

  <h2>Bedingte Anweisungen</h2>
  <ul>
    <li><strong>if</strong>: Führt Code aus, wenn eine Bedingung wahr ist.</li>
    <pre>&lt;?php
if ($alter > 18) {
  echo "Volljährig";
} else {
  echo "Minderjährig";
}
?&gt;</pre>
    <li><strong>switch</strong>: Führt unterschiedliche Codeblöcke aus, basierend auf unterschiedlichen Bedingungen.</li>
    <pre>&lt;?php
switch ($bewertung) {
  case "A":
    echo "Ausgezeichnet";
    break;
  case "B":
    echo "Gut";
    break;
  default:
    echo "Durchgefallen";
    break;
}
?&gt;</pre>
  </ul>

  <h2>Schleifen</h2>
  <ul>
    <li><strong>while</strong>: Führt einen Codeblock wiederholt aus, solange die gegebene Bedingung wahr ist.</li>
    <pre>&lt;?php
$z = 0;
while ($z < 10) {
  echo $z . " ";
  $z++;
}
?&gt;</pre>
    <li><strong>for</strong>: Führt einen Codeblock eine spezifizierte Anzahl von Malen aus.</li>
    <pre>&lt;?php
for ($i = 1; $i <= 10; $i++) {
  echo $i . " ";
}
?&gt;</pre>
    <li><strong>foreach</strong>: Speziell für Arrays, durchläuft jedes Element des Arrays.</li>
    <pre>&lt;?php
$farben = array("Rot", "Grün", "Blau");
foreach ($farben as $farbe) {
  echo $farbe . " ";
}
?&gt;</pre>
  </ul>

  <p>Die Nutzung von Kontrollstrukturen in PHP ermöglicht es Entwicklern, komplexe Logik einfach und effizient zu implementieren.</p>
</body>
</html>
