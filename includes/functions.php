<?php
session_start();

function isAdminLoggedIn() {
    return isset($_SESSION['admin_id']);
}

function requireAdmin() {
    if (!isAdminLoggedIn()) {
        header("Location: login.php");
        exit;
    }
}

function e($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

function currentLang() {
    if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'pa'])) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    return $_SESSION['lang'] ?? 'en';
}

function t($en, $pa) {
    return currentLang() === 'pa' ? $pa : $en;
}

function generateCertificateNumber() {
    return 'KCTC-' . date('Y') . '-' . rand(1000, 9999);
}

function generateVerificationCode() {
    return bin2hex(random_bytes(8));
}
?>