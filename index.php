<?php
session_start(); // Запускаем сессию

// Если имя уже есть в сессии, можно показать приветствие
$savedName = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 6 - Ввод имени</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 50px auto; }
        input, button { padding: 10px; margin: 5px; font-size: 16px; }
        .info { background: #e7f3ff; padding: 10px; margin: 15px 0; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>📝 Введите ваше имя</h1>
    
    <?php if ($savedName): ?>
        <div class="info">
            👋 В сессии уже сохранено имя: <strong><?php echo htmlspecialchars($savedName); ?></strong>
        </div>
    <?php endif; ?>
    
    <form method="POST" action="save_name.php">
        <input type="text" name="username" placeholder="Ваше имя" required value="<?php echo htmlspecialchars($savedName); ?>">
        <button type="submit">Сохранить имя</button>
    </form>
    
    <br>
    <a href="hello.php">➡️ Перейти на страницу приветствия</a>
</body>
</html>