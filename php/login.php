<?php
// Replace these values with your own hashed passwords
$users = [
    'user1' => password_hash('password1', PASSWORD_DEFAULT),
    'user2' => password_hash('password2', PASSWORD_DEFAULT),
];

$submitted_username = $_POST['username'] ?? '';
$submitted_password = $_POST['password'] ?? '';

if (isset($users[$submitted_username]) && password_verify($submitted_password, $users[$submitted_username])) {
    session_start();
    $_SESSION['username'] = $submitted_username;
    header('Location: dashboard.php');
    exit;
} else {
    header('Location: index.html?error=1');
    exit;
}