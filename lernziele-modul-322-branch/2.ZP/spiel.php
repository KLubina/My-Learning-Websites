<?php
$fragen = [
    [
        "frage" => "Was ist Usability?",
        "antwort" => "Die Einfachheit der Nutzung eines Produktes."
    ],
    [
        "frage" => "Nenne einen wichtigen Faktor für gutes UX-Design.",
        "antwort" => "Klarheit"
    ],
    [
        "frage" => "Was beschreibt die User Journey?",
        "antwort" => "Die Erfahrungen, die ein Nutzer während der Nutzung eines Produkts macht."
    ]
];

function zeigeFrage($fragen) {
    $index = array_rand($fragen);
    $frage = $fragen[$index];
    echo "<p>" . $frage['frage'] . "</p>";
    return $frage['antwort'];
}

$korrekteAntwort = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $benutzerAntwort = $_POST['antwort'];
    $korrekteAntwort = $_POST['korrekteAntwort'];

    if (strtolower(trim($benutzerAntwort)) == strtolower(trim($korrekteAntwort))) {
        echo "<p>Richtig!</p>";
    } else {
        echo "<p>Falsch. Die richtige Antwort war: '$korrekteAntwort'</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>UX Kartenlernspiel</title>
</head>
<body>
    <h1>UX Quiz</h1>
    <form method="post">
        <?php $korrekteAntwort = zeigeFrage($fragen); ?>
        <input type="text" name="antwort" placeholder="Deine Antwort">
        <input type="hidden" name="korrekteAntwort" value="<?php echo $korrekteAntwort; ?>">
        <button type="submit">Antworten</button>
    </form>
</body>
</html>
