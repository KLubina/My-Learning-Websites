<!DOCTYPE html>
<html>
<head>
  <meta charset ="UTF-8">
  <title>Basics Of PHP</title>
</head>
<body>
      <h1>PHP Grundlagen</h1>
    <p>PHP ist eine Skriptsprache die speziell entwickelt wurde für die dynamische Webentwicklung.</p>
    <h2>Syntax</h2>
    <ul>
        <li>PHP-Code wird innerhalb von &lt;?php und ?&gt; Tags geschrieben.</li>
        <pre>&lt;?php echo "Hallo Welt!"; ?&gt;</pre>
        <li>Jede Anweisung endet mit einem Semikolon (;).</li>
        <pre>&lt;?php $zahl = 5; echo $zahl; ?&gt;</pre>
    </ul>
    <h2>Variablen</h2>
    <ul>
        <li>Variablen beginnen mit einem Dollarzeichen ($) gefolgt vom Variablennamen.</li>
        <pre>&lt;?php $name = "Max"; echo $name; ?&gt;</pre>
        <li>PHP ist lose typisiert, der Typ einer Variablen muss nicht deklariert werden.</li>
        <pre>&lt;?php $alter = 30; echo $alter; ?&gt;</pre>
    </ul>
    <h2>Datenstrukturen</h2>
    <ul>
        <li>Unterstützt primitive Datentypen wie Integer, Float, String und Boolean.</li>
        <pre>&lt;?php $ist_wahr = true; if ($ist_wahr) { echo "Wahr!"; } ?&gt;</pre>
        <li>Komplexe Datentypen umfassen Arrays und Objekte.</li>
        <pre>&lt;?php $farben = array("Rot", "Grün", "Blau"); echo $farben[0]; ?&gt;</pre>
    </ul>
    <h2>Kontrollstrukturen</h2>
    <ul>
        <li>Bedingte Anweisungen wie if, else und switch.</li>
        <pre>&lt;?php if ($alter > 18) { echo "Volljährig"; } else { echo "Minderjährig"; } ?&gt;</pre>
        <li>Schleifen wie for, while und foreach.</li>
        <pre>&lt;?php for ($i = 0; $i < 3; $i++) { echo $farben[$i] . " "; } ?&gt;</pre>
    </ul>
    <h2>Funktionen</h2>
    <ul>
        <li>Funktionen werden mit dem Schlüsselwort function definiert.</li>
        <pre>&lt;?php function gruessen() { echo "Hallo, Welt!"; } gruessen(); ?&gt;</pre>
        <li>Viele eingebaute Funktionen und die Möglichkeit, benutzerdefinierte Funktionen zu erstellen.</li>
        <pre>&lt;?php function addieren($a, $b) { return $a + $b; } echo addieren(5, 3); ?&gt;</pre>
    </ul>
    <h2>Formularverarbeitung</h2>
    <ul>
        <li>Formulardaten können mit den superglobalen Arrays $_GET und $_POST aufgegriffen werden.</li>
        <pre>&lt;form method="post"&gt;&lt;input type="text" name="name" /&gt;&lt;input type="submit" /&gt;&lt;/form&gt;
&lt;?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo "Hallo, " . $_POST["name"]; } ?&gt;</pre>
    </ul>
    <h2>Datenbankinteraktion</h2>
    <ul>
        <li>Häufig verwendet mit MySQL zur Durchführung von Datenbankoperationen.</li>
        <pre>&lt;?php $conn = new mysqli("localhost", "benutzername", "passwort", "datenbank");
if ($conn->connect_error) { die("Verbindung fehlgeschlagen: " . $conn->connect_error); }
$result = $conn->query("SELECT * FROM tabelle");
while($row = $result->fetch_assoc()) { echo $row["spalte1"]; } ?&gt;</pre>
        <li>PDO und mysqli sind populäre Methoden zur Datenbankinteraktion.</li>
        <pre>&lt;?php $pdo = new PDO("mysql:host=localhost;dbname=datenbank", "benutzername", "passwort");
foreach($pdo->query("SELECT * FROM tabelle") as $row) { print $row["spalte1"] . "&lt;br/&gt;"; } ?&gt;</pre>
    </ul>
    <p>PHP-Code kann direkt in HTML integriert werden, was die Entwicklung dynamischer Webseiten erleichtert.</p>
</body>
</html>
