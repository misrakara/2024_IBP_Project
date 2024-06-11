<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #f0f8ff;
}

* {
  box-sizing: border-box;
}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #b400aa;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: #b400aa;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.form-container {
  width: 100%;
  max-width: 400px;
  padding: 20px;
  background-color: white;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
</head>
<body>

<div class="form-container">
<h1>Kullanıcı Giriş</h1>
  <form action="website.php" method="post">
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input class="input-field" type="text" placeholder="Email" name="email">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="password" placeholder="Şifre" name="psw">
    </div>

    <button type="submit" class="btn">Giriş Yap</button>
    <br>
  Eğer üye değilseniz <a href="kullaniciuye.php">Üye olunuz</a>
</form>
<a href="sifreyenilekullanici.php">Şifremi unuttum</a>
</div>

</body>
</html>

<?php
session_start();
include("index.php");

if(isset($_POST["email"], $_POST["psw"])) {
    $email = $_POST["email"];
    $psw = $_POST["psw"];

    // Kullanıcı bilgilerini kontrol et
    $sorgu = $baglan->prepare("SELECT * FROM uyepanel WHERE email = ?");
    $sorgu->bind_param('s', $email);
    $sorgu->execute();
    $sonuc = $sorgu->get_result();

    if ($sonuc->num_rows > 0) {
        // Kullanıcı bulundu
        $user = $sonuc->fetch_assoc();

        // Şifreyi SHA-256 ile hashle ve ilk 8 hanesini al
        $hashli_sifre = substr(hash('sha256', $psw), 0, 8);

        // Hashlenmiş şifrenin ilk 8 hanesini kontrol et
        if (hash_equals($hashli_sifre, $user['sifre'])) {
            // Şifre doğru
            $_SESSION["email"] = $email;
            header("Location: website.php");
            exit;
        } else {
            // Şifre yanlış
            echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış');</script>";
            exit; // Stop further execution
        }
    } else {
        // Kullanıcı bulunamadı
        echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış');</script>";
        exit; // Stop further execution
    }
}
?>