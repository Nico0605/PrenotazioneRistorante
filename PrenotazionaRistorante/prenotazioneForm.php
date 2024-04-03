<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "username", "password", "nome_database");

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $persone = $_POST['persone'];

    $sql = "INSERT INTO prenotazioni (nome, data, ora, persone) VALUES ('$nome', '$data', '$ora', '$persone')";
    if ($conn->query($sql) === TRUE) {
        echo "Prenotazione salvata con successo.";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
