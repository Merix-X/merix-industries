<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání dat z formuláře
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Nastavení příjemce a předmětu
    $to = "tvuj@email.cz"; // <- nahraď svou adresou
    $subject = "Nová zpráva z formuláře";
    $headers = "From: $email";

    // Sestavení zprávy
    $body = "Jméno: $name\nE-mail: $email\nZpráva:\n$message";

    // Odeslání e-mailu
    if (mail($to, $subject, $body, $headers)) {
        echo "Děkujeme! Vaše zpráva byla odeslána.";
    } else {
        echo "Došlo k chybě při odesílání zprávy.";
    }
} else {
    // Pokud někdo přistoupí přímo na submit.php
    echo "Formulář nebyl odeslán správně.";
}
?>
