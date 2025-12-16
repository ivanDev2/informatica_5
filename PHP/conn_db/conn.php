<?php
$conn = new mysqli("localhost", "root", "", "gestione_scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// INSERT studente
if (isset($_POST['nome'], $_POST['cognome'], $_POST['data_nascita'], $_POST['email'])) {

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $data_nascita = $_POST['data_nascita'];
    $email = $_POST['email'];

    $sql_insert = "
        INSERT INTO studenti (nome, cognome, data_nascita, email)
        VALUES ('$nome', '$cognome', '$data_nascita', '$email')
    ";

    if ($conn->query($sql_insert)) {
        echo "Studente aggiunto con successo.<br>";
    } else {
        echo "Errore INSERT: " . $conn->error;
    }
}

// MEDIA >= 6
echo "<h2>Studenti con media ≥ 6</h2>";

$sql = "
SELECT s.nome, s.cognome, AVG(v.voto) AS media
FROM studenti s
JOIN voti v ON v.matricola = s.matricola
GROUP BY s.matricola, s.nome, s.cognome
HAVING AVG(v.voto) >= 6
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

