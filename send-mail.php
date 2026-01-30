<?php
require __DIR__ . '/vendor/autoload.php';
$env = parse_ini_file(__DIR__ . "/.env");

if (!$env) {
    die("Unable to load .env file");
}
$mailUsername = $env['MAIL_USERNAME'] ?? null;
$appPassword  = $env['APP_PASSWORD'] ?? null;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    exit("Forbidden");
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$action  = trim($_POST['action'] ?? '');

if ($action === 'subscribe') {
    if ($email === '') {
        http_response_code(400);
        exit("Email required for subscription");
    }
    $subject = "New Newsletter Subscription";
    $name = "Subscriber";
    $message = "A new user has subscribed to the newsletter: " . $email;
} elseif ($name === '' || $email === '' || $subject === '' || $message === '') {
    http_response_code(400);
    exit("All fields required");
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;

    $mail->Username   = $mailUsername;
    $mail->Password   = $appPassword;

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom($mailUsername, 'The NashCast Website'); 
    $mail->addAddress('nashperspective@gmail.com');               
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "
        <h3>New Contact Message</h3>
        <p><b>Name:</b> " . htmlspecialchars($name) . "</p>
        <p><b>Email:</b> " . htmlspecialchars($email) . "</p>
        <p><b>Message:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->send();
    echo "success";
} catch (Exception $e) {
    http_response_code(500);
    echo "error: " . $mail->ErrorInfo;
}
