<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address to receive the message
    $to = 'hv71673@gmail.com'; // Replace with your email address

    // Email subject
    $email_subject = 'New Message from Contact Form';

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_message, $headers)) {
        echo json_encode(array("success" => true, "message" => "Thank you! Your message has been sent."));
    } else {
        echo json_encode(array("success" => false, "message" => "Sorry, there was an error sending your message. Please try again later."));
    }
} else {
    // Not a POST request, show error
    echo json_encode(array("success" => false, "message" => "Sorry, only POST requests are allowed."));
}
?>
