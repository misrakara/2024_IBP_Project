<!DOCTYPE html>
<html>
<head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("../proje/img/indir.jpeg");
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        margin: 0;
    }

    h1 {
        color: #2F4F4F;
        text-align: center;
        font-weight: bold;
    }

    .line {
        border-bottom: 2px solid #2F4F4F;
        margin-bottom: 1px;
        padding-bottom: 1px;
        width: 100%;
        text-align: center;
    }

    .container {
        background-color: white;
        padding: 10px;
        border: 1px solid #2F4F4F;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin-top: 50px; 
        text-align: center;
    }

    .container a {
        font-weight: bold;
        color: #2F4F4F;
        text-decoration: none;
    }

    .container a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="container">
    <div class="line">
        <h1>Kullanıcı/Aşçı</h1>
        <form action="kullaniciasci.php" method="post"></form>
    </div>
    <div class="line">
        <a href="kullanicigiris.php"><p>Kullanıcı</p></a>
    </div>
    <a href="ascipanelgiris.php"><p>Aşçı</p></a>
</div>

</body>
</html>
