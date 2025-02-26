<?php
// Manuel olarak Set-Cookie başlığını gönderelim
header('Set-Cookie: test_cookie=TestValue; Path=/; HttpOnly; SameSite=Lax');

// Session çerez ayarlarını düzelt
session_set_cookie_params([
    'lifetime' => 86400,  // 1 Gün
    'path' => '/',
    'domain' => '',
    'secure' => false,  // HTTPS kullanıyorsan true yap
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();
$_SESSION['test'] = 'Session Çalışıyor!';

echo 'Session ID: ' . session_id();
?>
