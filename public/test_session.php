<?php
// Session çerez ayarlarını düzelt
session_set_cookie_params([
    'lifetime' => 86400,  // 1 Gün
    'path' => '/',
    'domain' => '',  // Eğer subdomain kullanıyorsan buraya ana domaini yaz
    'secure' => false,  // HTTPS kullanıyorsan true yap
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();
$_SESSION['test'] = 'Session Çalışıyor!';

echo 'Session ID: ' . session_id();
?>
