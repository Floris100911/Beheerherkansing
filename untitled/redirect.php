<?php
// Controleer of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Voer de redirect uit
    header('Location: anderepagina.php');
    exit();
} else {
    // Als iemand direct naar redirect.php gaat zonder het formulier te gebruiken, stuur dan terug naar index.php
    header('Location: index.php');
    exit();
}
?>
