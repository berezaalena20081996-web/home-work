<?php
$title = 'Авторизация';
$base = '../';
require __DIR__ . '/../include/navigation.php';
?>

<div class="back">
    <div class="reg">
        <div class="registration-form">
            <h1>Вход</h1>
            <form method="post" action="<?= $base ?>main.php" autocomplete="off">
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
                <button class="transparent-btn" type="submit">Дотронься до истории</button>
            </form>
        </div>
    </div>
</div>

<?php require __DIR__ . '/../include/footer.php'; ?>
</body>
</html>