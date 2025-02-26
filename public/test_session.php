<?php
session_start();
$_SESSION['test'] = 'Session Çalışıyor!';
echo 'Session ID: ' . session_id();
?>
