<?php
// Connessione al database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nomedb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Prendi il commento inviato dal form
$commento = $_POST['commento'];

// Inserisci il commento nel database
$sql = "INSERT INTO commenti (testo) VALUES ('$commento')";

if ($conn->query($sql) === TRUE) {
    echo "Commento inserito con successo";
} else {
    echo "Errore nell'inserimento del commento: " . $conn->error;
}

$conn->close();
?>
<?php
// Connessione al database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nomedb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Seleziona tutti i commenti dal database
$sql = "SELECT testo FROM commenti";
$result = $conn->query($sql);

// Visualizza i commenti
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>" . $row["testo"] . "</div>";
    }
} else {
    echo "Nessun commento ancora.";
}

$conn->close();
?>
