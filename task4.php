<?php
$logFile = "visits.txt";
$ip = $_SERVER["REMOTE_ADDR"];
$dateTime = date("Y-m-d H:i:s");
$logEntry = "$dateTime - $ip" . PHP_EOL;

// Записываем в файл (дописываем в конец)
file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// Читаем содержимое файла
$logs = file_exists($logFile) ? file_get_contents($logFile) : "Нет записей.";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 4: Журнал посещений</title>
    <style>
        body { font-family: monospace; }
        .log {
            background-color: #2d2d2d;
            color: #0f0;
            padding: 10px;
            border-radius: 5px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <h1>Задание 4: Мини-журнал посещений</h1>
    <p>✅ Ваш визит записан: <strong><?php echo $logEntry; ?></strong></p>
    
    <h2>📋 История посещений:</h2>
    <div class="log">
        <?php echo nl2br(htmlspecialchars($logs)); ?>
    </div>
    
    <hr>
    <a href="index.html">Назад к списку заданий</a>
</body>
</html>