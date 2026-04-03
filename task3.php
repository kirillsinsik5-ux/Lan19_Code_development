<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 3: Данные из $_SERVER</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .info {
            background-color: #f0f0f0;
            border-left: 5px solid #2196F3;
            padding: 10px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <h1>Задание 3: Информация о пользователе и сервере</h1>
    
    <div class="info">
        <strong>🌐 IP-адрес пользователя:</strong> 
        <?php echo $_SERVER["REMOTE_ADDR"]; ?>
    </div>
    
    <div class="info">
        <strong>📡 Метод запроса:</strong> 
        <?php echo $_SERVER["REQUEST_METHOD"]; ?>
    </div>
    
    <div class="info">
        <strong>🖥️ Браузер (User Agent):</strong> 
        <?php echo $_SERVER["HTTP_USER_AGENT"]; ?>
    </div>
    
    <div class="info">
        <strong>📂 Имя скрипта:</strong> 
        <?php echo $_SERVER["SCRIPT_NAME"]; ?>
    </div>
    
    <hr>
    <a href="index.html">Назад к списку заданий</a>
</body>
</html>