<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Session Test</title>
</head>
<body>
    <h1>Session Test</h1>
    <p>Seçili Dil: <?= session()->get('site_lang') ?? 'tr' ?></p>
</body>
</html>
