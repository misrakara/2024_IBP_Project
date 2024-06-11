<?php
session_start();

// Kullanıcının giriş yapıp yapmadığını kontrol et
if (!isset($_SESSION['user_id']) || ($_SESSION['user_role'] != 0 && $_SESSION['user_role'] != 1)) {
    // Giriş yapılmamışsa veya rol 0 ya da 1 değilse, giriş sayfasına yönlendir
    header("Location: tarifler.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tarifler | Food & Dessert</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Nunito Sans', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #fff;
            padding: 10px 0;
            width: 100%;
            z-index: 999;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed; /* Menüyü sabit konumda tutar */
            top: 0; /* Sayfanın en üstüne yerleştirir */
            left: 0;
        }

        #logo {
            float: left;
            margin-left: 20px;
        }

        nav {
            float: right;
            margin-right: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 100px auto 20px; /* Container ile menü arasına mesafe ekler */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .recipe {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }

        .recipe h3 {
            color: #ff6600;
        }

        .recipe p {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

</head>
<body>
    <header>
        <div id="logo">
            <h1>Food & Dessert</h1>
        </div>
        <nav>
            <ul id="menu">
                <li><a href="website.php">Anasayfa</a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li><a href="kullaniciasci.php">Giriş Yap</a></li>
            </ul>
        </nav>
    </header>

<section class="container">
    <h2>Tarifler</h2>
    <div class="recipe">
        <h3>Çikolatalı Brownie</h3>
        <p>Çikolatalı brownie tarifi için gerekli malzemeler: un, kakao, tereyağı, şeker, yumurta, vanilya. Yapılışı oldukça kolay!</p>
        <a href="cikolatalibrownietarifi.php" class="btn">Tarifi Gör</a>
    </div>

    <div class="recipe">
        <h3>Kremalı Mantarlı Makarna</h3>
        <p>Kremalı Mantarlı Makarna tarifi için gerekli malzemeler: makarna,krema,mantar,soğan,sarımsak,permasan peyniri,kekik</p>
        <a href="kremalimantarlimakarna.php" class="btn">Tarifi Gör</a>
    </div>

    <div class="recipe">
        <h3>Su Böreği</h3>
        <p>Su BÖreği tarifi için gerekli malzemeler: un, yumurta,su,tuz,zeytinyağı,lor peyniri</p>
        <a href="suboregi.php" class="btn">Tarifi Gör</a>
    </div>
</section>

<footer>
    <p>&copy; 2024 Food & Dessert. Tüm hakları saklıdır.</p>
</footer>

</body>
</html>