<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hakkımızda | Food & Dessert</title>
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
            background-image: url('arka_plan_resmi.jpg'); /* Arka plan resmi burada belirtilmeli */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Arka plan resminin sabit kalmasını sağlar */
        }

        header {
            background-color: rgba(255, 255, 255, 0.7); /* Menü arka plan rengi ve opaklığı */
            padding: 10px 0;
            width: 100%;
            z-index: 999;
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
            margin: 150px auto 20px; /* Menüyü container'ın altında bırakmak için margin ekledik */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Sayfa içeriğinin arka plan rengi ve opaklığı */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sayfa içeriğinin hafif gölgelendirilmesi */
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333; /* Footer arka plan rengi */
            color: #fff; /* Footer metin rengi */
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>

<header>
    <div id="logo">
        <h1>Food & Dessert</h1>
    </div>
    <nav>
        <ul id="menu">
            <li><a href="website.php">Anasayfa</a></li>
            <li><a href="tarifler.php">Tarifler</a></li>
            <li><a href="duyurupanel.php">Duyurular</a></li>
            <li><a href="hakkimizda.php">Hakkımızda</a></li>
            <li><a href="kullaniciasci.php">Giriş Yap</a></li>
        </ul>
    </nav>
</header>

<section id="about-us">
    <div class="container">
        <h2>Hakkımızda</h2>
        <p>Food & Dessert, 2024 yılında kurulan ve yemek yapmayı tutku haline getirenler için eşsiz tarifler ve içerikler sunan bir blogdur. 
            Amacımız, mutfak becerilerinizi geliştirmenize yardımcı olmak ve her gün yeni, lezzetli ve sağlıklı yemek tarifleriyle ilham vermektir.</p>
        
        <h3>Misyonumuz</h3>
        <p>Yemek yapmayı seven herkes için kaliteli, yaratıcı ve erişilebilir tarifler sunarak yemek yapma deneyimini keyifli ve eğitici hale getirmek.</p>
        
        <h3>Vizyonumuz</h3>
        <p>Yemek tarifleri konusunda lider bir blog olmak ve global çapta yemek yapma tutkusunu yaymak.</p>
        
        <h3>Ekibimiz</h3>
        <p>Food & Dessert ekibi, her biri alanında uzman şefler, beslenme uzmanları ve yemek tutkunlarından oluşmaktadır. 
            Ekibimiz, her gün yeni ve yaratıcı tarifler geliştirerek blogumuza katkıda bulunmaktadır.</p>
    </div>
</section>

<footer>
    <div class="footer-container">
        <p>&copy; 2024 Food & Dessert. Tüm hakları saklıdır.</p>
    </div>
</footer>

</body>
</html>
