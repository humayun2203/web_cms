<?php
session_start();

// Tarayıcının gönderdiği session ID
$browserSessionID = $_COOKIE['ci_session'] ?? 'Tarayıcı çerezi yok';

// PHP tarafından kullanılan session ID
$phpSessionID = session_id();

echo "Tarayıcıdaki Session ID: " . $browserSessionID . "<br>";
echo "PHP'nin Kullanılan Session ID: " . $phpSessionID . "<br>";

if ($browserSessionID === $phpSessionID) {
    echo "<br>✅ Session ID'ler eşleşiyor! Her şey normal.";
} else {
    echo "<br>❌ Session ID'ler farklı! PHP tarayıcıdan gelen session'ı kabul etmiyor.";
}
?>
