<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }
    
    // Sanitize user inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $brief = filter_var($_POST['brief'], FILTER_SANITIZE_STRING);
    $body  = "<strong>Dear Support Team</strong>";
    $body  .= "<p>You got a query from MaroofHaider.com</p>";
    $body  .= "<p><BR>Name: ".$name."</p>";
    $body  .= "<p><BR>Email: ".$email."</p>";
    $body  .= "<p><BR>Company: ".$company."</p>";
    $body  .= "<p><BR>Phone: ".$phone."</p>";
    $body  .= "<p><BR>Message: ".$brief."</p>";
    $body  .= "<p><BR><BR>Thanks<BR>MaroofHaider.com</p>";
    
    try {
        $mail = new PHPMailer(true);
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com'; // Hostinger's SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@maroofhaider.com'; // Your Hostinger email
        $mail->Password   = 'M@roof0213'; // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use 'ssl' if port 465
        $mail->Port       = 587; // Use 465 for SSL
        $mail->isHTML(true);
        // Email Settings
        $mail->setFrom('info@maroofhaider.com', 'Support Team');
        $mail->addAddress('info@maroofhaider.com', 'Support Team');
        $mail->Subject = 'Inquiry from Maroof Haider - Project Brief Overview';
        $mail->Body    = $body;
        
        $mail->send();
        echo "<script>alert('Thank you. You will soon receive an email from us.'); window.location.href='/index.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}

    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Check if required fields are filled
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])) {
            echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
            exit;
        }

        // Sanitize user inputs
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $brief = filter_var($_POST['brief'], FILTER_SANITIZE_STRING);

        // Prepare email
        $to = "info@maroofhaider.com"; // Replace with your email address
        $subject = "Inquiry from Maroof Haider - Project Brief Overview";
        $message = "Name: $name\n\nEmail: $email\n\nPhone: $phone\n\nBrief: $brief";
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        echo "<script>
        alert('Debug Info:\\n\\nTo: $to\\nSubject: $subject\\nMessage: " . addslashes($message) . "\\nHeaders: " . addslashes($headers) . "');
    </script>";
        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Thank you. You will soon receive an email from us.'); window.location.href='/index.php';</script>";
        } else {
            echo "<script>alert('Failed to send email. Please try again later.');</script>";
        }
    } */
?>
