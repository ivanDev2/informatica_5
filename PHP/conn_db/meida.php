<?php
$conn = new mysqli("localhost", "root", "", "gestione_scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$media = $_POST['media'];
// MEDIA >= 6
echo "<h2>Studenti con media ≥ 6</h2>";

$sql = "
SELECT s.nome, s.cognome, AVG(v.voto) AS media
FROM studenti s
JOIN voti v ON v.matricola = s.matricola
GROUP BY s.matricola, s.nome, s.cognome
HAVING AVG(v.voto) >= '$media'
";

$result = $conn->query($sql);

if (!$result) {
    die("Errore SELECT: " . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    echo $row['nome'] . " " . $row['cognome'] .
         " - Media: " . round($row['media'], 2) . "<br>";
}


$conn->close();
?>