<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // STEP 1: Verify reCAPTCHA token
    $recaptcha_secret = '6LeF5Q8qAAAAAF_JqZFO65FKvrp_6HB87t5MZ5ka'; // Replace with your secret key
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}");
    $captcha_success = json_decode($verify);

    if (!$captcha_success->success || $captcha_success->score < 0.5) {
        echo "<script>alert('reCAPTCHA verification failed. Please try again.'); window.history.back();</script>";
        exit;
    }

    // STEP 2: Continue with validation and sanitization
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
    $body .= "<p>You got a query from MaroofHaider.com</p>";
    $body .= "<p><BR>Name: ".$name."</p>";
    $body .= "<p><BR>Email: ".$email."</p>";
    $body .= "<p><BR>Company: ".$company."</p>";
    $body .= "<p><BR>Phone: ".$phone."</p>";
    $body .= "<p><BR>Message: ".$brief."</p>";
    $body .= "<p><BR><BR>Thanks<BR>MaroofHaider.com</p>";

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@maroofhaider.com';
        $mail->Password   = 'M@roof0213';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('info@maroofhaider.com', 'Support Team');
        $mail->addAddress('info@maroofhaider.com', 'Support Team');
        $mail->isHTML(true);
        $mail->Subject = 'Inquiry from Maroof Haider - Project Brief Overview';
        $mail->Body    = $body;

        $mail->send();
        echo "<script>alert('Thank you. You will soon receive an email from us.'); window.location.href='/index.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}

?>
