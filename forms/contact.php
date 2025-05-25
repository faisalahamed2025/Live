
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "faisalking3rd@gmail.com";  // <-- Change to your real email
    $subject = "New Contact Form Message";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you! Your message has been sent successfully.</h2>";
    } else {
        echo "<h2>Sorry, something went wrong. Please try again later.</h2>";
    }
}
?>
