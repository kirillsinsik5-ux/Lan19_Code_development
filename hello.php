<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветствие</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 50px auto; text-align: center; }
        .greeting { font-size: 28px; color: #4CAF50; margin: 30px; }
        .error { font-size: 24px; color: #f44336; }
        button { padding: 10px 20px; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>🌟 Страница приветствия</h1>
    
    <?php if (isset($_SESSION["username"]) && !empty($_SESSION["username"])): ?>
        <div class="greeting">
            🎉 Здравствуйте, <?php echo htmlspecialchars($_SESSION["username"]); ?>!
        </div>
        <p>Рады видеть вас снова на нашем сайте.</p>
    <?php else: ?>
        <div class="error">
            ⚠️ Имя не найдено в сессии
        </div>
        <p>Пожалуйста, <a href="index.php">вернитесь на главную страницу</a> и введите ваше имя.</p>
    <?php endif; ?>
    
    <br>
    <a href="index.php">◀️ Назад к форме ввода</a>
    <br><br>
    <form method="POST" action="destroy_session.php" style="display: inline;">
        <button type="submit" style="background-color: #f44336; color: white; border: none;">🗑️ Сбросить сессию</button>
    </form>
</body>
</html>