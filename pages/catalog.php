<?php
$title = 'Каталог';
$base = '../';
require __DIR__ . '/../include/navigation.php';
?>

<div class="back">
    <div class="text-slogan">
        <p>Каталог</p>
    </div>

    <main class="main-content">
        <section class="ladies-section">
            <h2 class="section-title">Дамы</h2>

            <div class="style-item">
                <div class="circle-image">
                    <img width="170" height="170" src="<?= $base ?>content/images/asortim1.png" alt="Барокко">
                </div>
                <div class="style-content">
                    <h3>Барокко</h3>
                    <p>Стиль барокко, расцветший в XVII веке, воплощает торжественную роскошь, театральность и стремление к величественной, почти скульптурной гармонии. В одежде он проявляется через объёмные силуэты, тяжёлые благородные ткани, обилие золотых и серебряных нитей, сложные кружевные воротники и пышные драпировки.</p>
                </div>
            </div>

            <div class="style-item">
                <div class="circle-image">
                    <img width="170" height="170" src="<?= $base ?>content/images/asortim2.png" alt="Рококо">
                </div>
                <div class="style-content">
                    <h3>Рококо</h3>
                    <p>Рококо, пришедший на смену барокко в первой половине XVIII века, отличается лёгкостью, игривой элегантностью и утончённой асимметрией. В моде этот стиль проявляется через нежные пастельные оттенки, воздушные шёлковые ткани и обилие декоративных деталей: бантов, кружева, рюшей и цветочных вышивок.</p>
                </div>
            </div>

            <div class="style-item">
                <div class="circle-image">
                    <img width="170" height="170" src="<?= $base ?>content/images/asortim3.png" alt="Романтизм">
                </div>
                <div class="style-content">
                    <h3>Романтизм</h3>
                    <p>Романтизм в моде первой половины XIX века воспевает женственность, мечтательность и эмоциональную глубину, превращая одежду в поэтическое продолжение внутреннего мира. Для этого стиля характерны акцент на тонкой талии, пышные многослойные юбки и деликатные силуэты, созданные из лёгкого муслина, шёлка и воздушного тюля.</p>
                </div>
            </div>
        </section>

        <section class="products-section">
            <h2 class="section-title">Рококо</h2>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img width="170" height="170" src="<?= $base ?>content/images/cartoca.png" alt="Зелёный шёпот Рококо">
                    </div>
                    <div class="product-info">
                        <h4>«Зелёный шёпот Рококо»</h4>
                        <p>Платье, в котором каждая прогулка становится придворным променадом, а вы — героиней собственного исторического романа.</p>
                        <div class="price">27 860 руб</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img width="170" height="170" src="<?= $base ?>content/images/cartoca2.png" alt="Искусство флирта">
                    </div>
                    <div class="product-info">
                        <h4>Искусство флирта эпохи галантности. Глубокий синий шёлк, пышные рукава и аксессуар, который позволяет вам быть то открытой, то загадочной. Создайте свой сценарий любви.</h4>
                        <div class="price">39 860 руб</div>
                    </div>
                </div>

                <div class="product-card">
                    <a href="<?= $base ?>pages/tovar.php">
                        <div class="product-image">
                            <img width="170" height="170" src="<?= $base ?>content/images/cartoca3.png" alt="Искусство флирта">
                        </div>
                        <div class="product-info">
                            <h4>Искусство флирта эпохи галантности. Глубокий синий шёлк, пышные рукава и аксессуар, который позволяет вам быть то открытой, то загадочной. Создайте свой сценарий любви.</h4>
                            <div class="price">52 000 руб</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
</div>

<?php require __DIR__ . '/../include/footer.php'; ?>
</body>
</html>