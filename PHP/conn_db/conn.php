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



$conn->close();
?>

