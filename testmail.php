<?php
$to = "your-email@example.com"; // Replace with your email
$subject = "Test Email";
$message = "This is a test email from PHP mail().";
$headers = "From: no-reply@yourdomain.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully.";
} else {
    echo "Mail function is disabled or not working.";
}
?>