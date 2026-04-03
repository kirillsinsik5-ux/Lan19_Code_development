<?php
$counterFile = "counter.txt";
$count = 0;

// Если файл существует, читаем значение
if (file_exists($counterFile)) {
    $count = (int)file_get_contents($counterFile);
}

// Увеличиваем счётчик
$count++;

// Сохраняем обратно
file_put_contents($counterFile, $count);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5: Счётчик посещений</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; margin-top: 50px; }
        .counter {
            font-size: 48px;
            font-weight: bold;
            color: #ff5722;
            background-color: #ffeecc;
            display: inline-block;
            padding: 20px 40px;
            border-radius: 15px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Задание 5: Счётчик посещений страницы</h1>
    <div class="counter">
        Вы посетили страницу <strong><?php echo $count; ?></strong> раз(а).
    </div>
    <p>🔁 Обновите страницу, чтобы увеличить счётчик.</p>
    <hr>
    <a href="index.html">Назад к списку заданий</a>
</body>
</html>