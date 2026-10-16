<?php
$title = 'Товар';
$base = '../';
require __DIR__ . '/../include/navigation.php';
?>

<main class="main-content">
    <h1 class="page-title">Последняя любовь</h1>

    <section class="product-layout">
        <div class="column-left">
            <div class="image-large">
                <img src="<?= $base ?>content/images/tovar1.png" alt="Товар — главное фото">
            </div>
        </div>

        <div class="column-middle">
            <div class="image-small">
                <img src="<?= $base ?>content/images/tovar2.png" alt="Товар — фото 2">
            </div>
            <div class="image-small">
                <img src="<?= $base ?>content/images/tovar3.png" alt="Товар — фото 3">
            </div>
        </div>

        <div class="column-right">
            <div class="info-card">
                <h2 class="style-title">Рококо</h2>
                <p class="description">
                    Для рококо характерны асимметричные композиции, пастельные тона, обилие лепнины в виде завитков, раковин цветочных орнаментов, а также изогнутые линии.
                </p>
                <div class="price">52 000 руб</div>
                <button class="buy-btn">Купить</button>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/../include/footer.php'; ?>
</body>
</html>