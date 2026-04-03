<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 1: break и continue</title>
    <style>
        body { font-family: monospace; font-size: 18px; }
    </style>
</head>
<body>
    <h1>Задание 1: числа от 1 до 20 с пропусками и остановкой</h1>
    <p>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            if ($i > 15) {
                break; // завершаем цикл, если число > 15
            }
            if ($i % 3 == 0) {
                continue; // пропускаем числа, делящиеся на 3
            }
            echo $i . " ";
        }
        ?>
    </p>
    <p><strong>Пояснение:</strong> числа, кратные 3, пропущены; цикл остановлен на 15.</p>
    <hr>
    <a href="index.html">Назад к списку заданий</a>
</body>
</html>