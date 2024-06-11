<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header>
    <div id="logo">
        <h1>Food & Dessert</h1>
    </div>
    <nav>
        <ul id="menu">
            <li><a href="{{ url('/') }}">Anasayfa</a></li>
            <li><a href="{{ url('/tarifler') }}">Tarifler</a></li>
            <li><a href="{{ url('/hakkimizda') }}">Hakkında</a></li>
            <li><a href="{{ url('/kullaniciasci') }}">Giriş Yap</a></li>
        </ul>
    </nav>
</header>

<div id="anasayfa">
    <div id="black"></div>
</div>

</body>
</html>