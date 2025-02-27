<?php
session_start();

// Tarayıcıdan gelen session ID ile PHP session ID'yi karşılaştıralım
$browserSessionID = $_COOKIE['ci_session'] ?? 'Tarayıcı çerezi yok';
$phpSessionID = session_id();

echo "Tarayıcıdaki Session ID: " . $browserSessionID . "<br>";
echo "PHP'nin Kullanılan Session ID: " . $phpSessionID . "<br>";

// Session içine veri kaydedelim
if (!isset($_SESSION['test_data'])) {
    $_SESSION['test_data'] = "Bu session içinde saklanan bir test verisidir!";
}

// Session içeriğini gösterelim
echo "<br><strong>PHP Session İçeriği:</strong><br>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
