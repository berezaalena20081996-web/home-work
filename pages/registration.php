<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="../content/css/style.css">
    <meta charset="utf-8">
    <title> Моё портфолио</title>
    <meta name="description"
        content="Сай на тему Винтажный магазин одежды.Он создан для развлекательных целей и не несет вреда потребителю">
    <meta name="author" content="Береза Алёна Олеговна">
</head> 
<body>
   
<div class="back">
   <iframe src="navigation.php" width="100%" style="display: block; border: none; height: 60px;"></iframe>
   <div class="reg">

   <div class="registration-form">
    <h1>Форма регистрации</h1>
    <form method="post" action="./authorization.php" autocomplete="off">
      <div class="form-group">
        <label for="fio">ФИО:</label>
        <input type="text" id="fio" name="fio" placeholder="Кострова Василина Владимировна">
      </div>
      <div class="form-group">
        <label for="email">Почта:</label>
        <input type="email" id="email" name="email" placeholder="Vasilina19996Kost">
      </div>
      <div class="form-group">
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" placeholder="Vasilina1113">
      </div> 
      <button class="transparent-btn" type="submit"><a href="authorization.php">Стать частью истории</a></button>
  </div>
    </form>
   
</div>
</body>
</html>