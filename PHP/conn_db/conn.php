<?php


$conn = new mysqli("localhost", "root", "", "gestione_scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$data_nascita = $_POST['data_nascita'];
$mail = $_POST['mail'];


$query = "INSERT INTO studenti (nome, cognome, data_nascita, mail) VALUES ('$nome', '$cognome', '$data_nascita', '$mail')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "Studente aggiunto con successo.";
} else {
    echo "Errore nell'aggiunta dello studente: " . mysqli_error($conn);
}
$conn->close(); 

?>
