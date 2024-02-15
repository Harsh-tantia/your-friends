<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize and validate email
    function sanitize_email($email) {
        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        } else {
            return false;
        }
    }

    // Function to filter out bad words
    function filter_bad_words($input) {
        // List of bad words to filter out
        $bad_words = array("badword1", "badword2", "badword3");
        // Replace bad words with asterisks
        return str_ireplace($bad_words, "***", $input);
    }

    // Get the form data and sanitize/validate inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = sanitize_email($_POST['email']);
    $subject = filter_bad_words($_POST['subject']);
    $message = filter_bad_words($_POST['message']);

    // Check if email is valid
    if ($email === false) {
        echo json_encode(array("success" => false, "message" => "Invalid email address."));
        exit;
    }

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
