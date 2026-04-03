<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 2: Таблица умножения 6×6</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 2px solid #333;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        td:first-child, th:first-child {
            background-color: #ddd;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Задание 2: Таблица умножения 6×6</h1>
    <table>
        <tr>
            <th>&times;</th>
            <?php
            // Заголовки столбцов (1-6)
            for ($col = 1; $col <= 6; $col++) {
                echo "<th>$col</th>";
            }
            ?>
        </tr>
        <?php
        // Вложенные циклы для строк и столбцов
        for ($row = 1; $row <= 6; $row++) {
            echo "<tr>";
            echo "<th>$row</th>"; // Заголовок строки
            for ($col = 1; $col <= 6; $col++) {
                $product = $row * $col;
                echo "<td>$product</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <hr>
    <a href="index.html">Назад к списку заданий</a>
</body>
</html>