<?php
// contact.php — QuickPOS Contact Form Handler
// [POS-105] Implement contact form POST handler with validation

session_start();

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// --- Sanitize & Validate Input ---
$name    = isset($_POST['name'])    ? trim(strip_tags($_POST['name']))    : '';
$email   = isset($_POST['email'])   ? trim(strip_tags($_POST['email']))   : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
}

if (empty($email)) {
    $errors[] = 'Email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if (empty($message)) {
    $errors[] = 'Message is required.';
} elseif (strlen($message) < 10) {
    $errors[] = 'Message must be at least 10 characters.';
}

// --- Handle Errors ---
if (!empty($errors)) {
    // Store errors in session and redirect back
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data']   = compact('name', 'email', 'message');
    header('Location: index.php#contact');
    exit;
}

// --- Simulate Success Response ---
// In production, you would: send an email via mail() or PHPMailer,
// save to a database, call a CRM API, etc.

// Log submission (simulate saving)
$log_entry = date('Y-m-d H:i:s') . " | Name: $name | Email: $email | Message: " . substr($message, 0, 50) . "\n";
file_put_contents(__DIR__ . '/submissions.log', $log_entry, FILE_APPEND | LOCK_EX);

// Clear any old session data
unset($_SESSION['form_errors'], $_SESSION['form_data']);

// Redirect to thank-you page
header('Location: thank-you.php');
exit;
?>
