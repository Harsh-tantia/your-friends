<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $to = $_POST["email"];
    $subject = "Subscription Confirmation";
    $message = "Thank you for subscribing to our newsletter!";
    $headers = "From: yourfriend@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Subscription successful. Check your email for confirmation.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
